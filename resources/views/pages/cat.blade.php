@extends('layout/main')

@section('content')
    @foreach($cats as $cat)
        <div class="col-md-4">
            <h2>{{str_limit($cat->title, 25)}}</h2>
            <p>{{str_limit($cat->body, 100)}}</p>
            <p><a class="btn btn-default" href="post/{{$cat->id}}" role="button" >More <span class="glyphicon glyphicon-chevron-right"></span></a></p>
        </div>
    @endforeach
@endsection