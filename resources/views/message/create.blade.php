<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Stephen's Blog</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body {
            font: 15px 'Raleway', SansSerif;
            line-height: 1.8;
            color: #5e5e5e;
            background-color: #7FCECB;
        }
        p {font-size: 16px;}
        .margin {margin-bottom: 45px;}
        .navbar {
            padding-top: 25px;
            padding-bottom: 25px;
            border: 0;
            border-radius: 0;
            margin-bottom: 0;
            font-family: 'Raleway', SansSerif;
            font-size: 17px;
            letter-spacing: 5px;
        }
        .navbar-nav  li a:hover {
            color: #2a88bd !important;
        }
    </style>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Stephen Paul</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">RÉSUMÉ</a></li>
                <li><a href="message/create">MESSAGE</a></li>
                <li><a href="#">TIMELINE</a></li>
                <li><a href="#">LOGIN</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container bg-1">
    <h3 class="margin">Create new message</h3>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {!! BootForm::open()->action(route('message.store'))->post() !!}
    {!! BootForm::text('E-Mail', 'email') !!}
    {!! BootForm::textarea('Message','description') !!}
    {!! BootForm::submit('Submit')->style('display:block;margin:0px auto;') !!}
    {!! BootForm::close() !!}
</div>
</body>
</html>

