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
    <script>
        $(document).ready(function(){
            var height = jQuery(window).height();
            $('#navScroll').affix({offset: {top: height+100} });
        });
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" style="background-color: #8290a5;">
<div class="container-fluid navHead" id="mainNav" style="padding-top: 25px; padding-bottom: 25px;">
    <a style="float:left;text-align:left" href="/">Stephen Paul</a>
    <a href="/login">LOGIN</a>
    <a href="/timeline">DISCUSSION</a>
    <a href="/login">MESSAGE</a>
    <a href="/files/resume.pdf" target="_blank">RÉSUMÉ</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="toggleVerticalLayout()">&#9776;</a>
</div>


@yield('content')

<!-- Footer -->
<div class="container-fluid text-center" style="padding-top:50px;height:auto;color: #cccccc; background-color: #000000; bottom: 0px; ">
    I am a social person too. Let's stay connected. <br/>
    <a href="https://www.facebook.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/stephen_paul_ad" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
    <a href="https://github.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
    <a href="https://www.linkedin.com/in/stephenadithela/" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
    <div class="margin"></div>
    &copy 2017 Stephen Paul
</div>

<script>
    function toggleVerticalLayout() {
        var x = document.getElementById("mainNav");
        if (x.className === "container navHead") {
            x.className += " responsive";
        } else {
            x.className = "container navHead";
        }
    }
</script>
</body>
</html>
