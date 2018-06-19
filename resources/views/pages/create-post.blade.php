@extends('layout/main')

@section('content')
    @include('includes/errors')
    <form method="POST" action="/publish" class="form-horizontal">
        {{csrf_field()}}
        <div class="form-group">
            <label for="category" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="category" id="category">
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="title" id="title">
            </div>
        </div>
        <div class="form-group">
            <label for="body" class="col-sm-2 control-label">Content</label>
            <div class="col-sm-10">
                <textarea name="body" id="body" class="form-control" rows=""></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button class="btn btn-success" type="submit">Submit</button>
            </div>
        </div>
    </form>
    @endsection