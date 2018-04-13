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
    <link rel="stylesheet" href="{{ url('css/master-style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('css/font-awesome.css') }}" type="text/css">
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
    <!-- <a href="{{ url('login')}}">LOGIN</a>
    <a href="{{ url('timeline')}}">DISCUSSION</a>
    <a href="{{ url('login')}}">MESSAGE</a> -->
    <a href="/files/resume.pdf" target="_blank">RÉSUMÉ</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="toggleVerticalLayout()">&#9776;</a>
</div>
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

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
    // ===== Scroll to Top ====
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 200) {
            $('#return-to-top').fadeIn(200);
        } else {
            $('#return-to-top').fadeOut(200);
        }
    });
    $('#return-to-top').click(function() {
        $('body,html').animate({
            scrollTop : 0
        }, 500);
    });
    $("a").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();

        var hash = this.hash;

        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 600, function(){

          window.location.hash = hash;
        });
      }
    });

</script>
</body>
</html>
