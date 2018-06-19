<!DOCTYPE html>
<html lang="en">
@include('includes/head')

<body>

@include('includes/nav')

<!-- Main jumbotron for a primary marketing message or call to action -->

@include('includes/header')

<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @yield('content')
    </div>
    <hr>

    @include('includes/footer')
</div> <!-- /container -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="{!! asset('js/bootstrap.min.js') !!}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>