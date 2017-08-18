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
    <link rel="stylesheet" href="//stephensblog.herokuapp.com/css/master-style.css">
    <link rel="stylesheet" href="//stephensblog.herokuapp.com/css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body
        {
            font: 20px 'Quicksand', sans-serif;
            line-height: 1.5;
            color: #000000;
            background-color: #7FCECB;
            position: relative;
        }
        p
        {
            font-size: 16px;
        }

        .margin
        {
            margin-bottom: 45px;
        }
        .bg-1
        {
            height: 100%;
            background-color: #7FCECB;
            color: #5e5e5e;
        }
        .bg-2
        {
            background-color: #2f2f2f; /* Black Gray */
            color: #fff;
        }
        .bg-3
        {
            background-color: #7FCECB;
            padding-top:100px; padding-bottom: 100px;
            color: #5e5e5e;
        }
        .navHead
        {
            padding-top: 25px;
            padding-bottom: 25px;
            font-size: 15px;
            font-family: 'Raleway', SansSerif;
            letter-spacing: 5px;
            background-color: #F8F8F8;
            overflow: hidden;
        }

        .navHead a {
            float: right;
            display: block;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            color: #5e5e5e;
        }

        .navHead a:hover {
            color: #2a88bd;
            cursor:pointer;
        }

        .navHead .icon
        {
            display: none;
        }

        @media screen and (max-width: 600px)
        {
            .container.navHead
            {
                padding-top: 25px;
                padding-bottom: 25px;
                font-size: 15px;
                color: #5e5e5e;
                font-family: 'Raleway', SansSerif;
                letter-spacing: 5px;
                background-color: #F8F8F8;
            }
            .container.navHead a:not(:first-child)
            {
                display: none;
            }
            .container.navHead a.icon
            {
                float: right;
                display: block;
                cursor: pointer;
            }

            .container.navHead.responsive
            {
                position: relative;
            }
            .container.navHead.responsive a.icon
            {
                position: absolute;
                top:0;
                right:0;
                padding-top:40px;
                padding-bottom: 40px;
            }
            .container.navHead.responsive a
            {
                float: none;
                display: block;
                font-size: 15px;
                color: #5e5e5e;
                font-family: 'Raleway', SansSerif;
                letter-spacing: 5px;
                background-color: #F8F8F8;
                text-align: left;
            }


            .affix {
                top:0;
                z-index: 9999 !important;
            }
            .navbar {
                margin-bottom: -50px;
            }

            .affix ~ .container {
                position: relative;
                top: 0px;
            }
        }

        .container-fluid {
            padding-top: 120px;
            padding-bottom: 120px;
        }

        body {
            position: relative;
        }
        .affix {
            top:0;
            width: 100%;
            z-index: 9999 !important;
        }
        .navbar {
            margin-bottom: 0px;
            font-size: 15px;
            font-family: 'Raleway', SansSerif;
            letter-spacing: 5px;
        }

        .affix ~ .container-fluid {
            position: relative;
            top: 50px;
        }
        @media (min-width: 768px) {
            .navbar .navbar-nav {
                display: inline-block;
                float: none;
                vertical-align: top;
            }

            .navbar .navbar-collapse {
                text-align: center;
            }
        }


        #section1 {padding-top:50px;height:auto;color: #F8F8F8; background-image: url('/images/aboutme.jpg'); background-size: cover;}
        #section2 {padding-top:50px;height:auto;color: #5e5e5e; background-image: url('/images/education.jpg'); background-size: cover;}
        #section3 {padding-top:50px;height:auto;color: #5e5e5e; background-image: url('/images/experience.jpg'); background-size: cover;}


        .section-inner {
            width: 70%;
            height: 100%;
            font-size: 18px;
            text-overflow: ellipsis;
        }



    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #7FCECB;">
<div class="container-fluid navHead" id="mainNav" style="padding-top: 25px; padding-bottom: 25px;">
    <a style="float:left;text-align:left" href="/home">@if( Auth::check() )
            {{ Auth::user()->name }}
        @endif</a>
    <a href="/logout">LOGOUT</a>
    <a href="/history/index">HISTORY</a>
    <a href="/message/create">MESSAGE</a>
    <a href="/timeline">DISCUSSION</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="toggleVerticalLayout()">&#9776;</a>
</div>


@yield('content')

<!-- Footer -->
<div class="container-fluid text-center" style="padding-top:50px;height:auto;color: #fff; background-color: #2f2f2f; margin-bottom: 0px;">
    I am a social person too. Let's stay connected. <br/>
    <a href="https://www.facebook.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/s_t_e_p_h_e_n_p_a_u_l" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
    <a href="https://github.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
    <a href="https://www.linkedin.com/in/stephen-paul-adithela-9b8793114/" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
    <div class="margin"></div>
    &copy 2017 Stephen Paul
</div>

<script>
    function toggleVerticalLayout() {
        var x = document.getElementById("mainNav");php
        if (x.className === "container navHead") {
            x.className += " responsive";
        } else {
            x.className = "container navHead";
        }
    }
</script>
</body>
</html>

