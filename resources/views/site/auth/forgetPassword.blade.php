<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Forget Password</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/forgetPass/css/bootstrap.css')}}" rel="stylesheet"><!-- Custom styles for this template -->
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/forgetPass/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>

<body>

<div class="container">
    <div class="row">

        <div class="col-md-12">
            <h2>Oops... You Can't Reset Your Password!</h2><br><br>

            <p>Please Contact With Adminstrator To Reset Your Password <a href="{{route('site.contactUs')}}">contact us</a></p><br><br>
            <a href="{{route('site.login')}}">
            <button class="btn btn-danger">Go Back</button>
            </a>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('assets/forgetPass/js/jquery.js')}}"></script>
<script src="{{asset('assets/forgetPass/js/bootstrap.js')}}"></script>
</body>
</html>
