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
    <link rel="stylesheet" href="css/master-style.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container navHead" id="mainNav">
    <a style="float:left;text-align:left" href="/">Stephen Paul</a>
    <a href="#">LOGIN</a>
    <a href="#">TIMELINE</a>
    <a href="message/create">MESSAGE</a>
    <a href="">RÉSUMÉ</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="toggleVerticalLayout()">&#9776;</a>
</div>


@yield('content')

<!-- Footer -->
<footer class="container-fluid bg-2 text-center">
    I am a social person too. Let's stay connected. <br/>
    <a href="https://www.facebook.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/s_t_e_p_h_e_n_p_a_u_l" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
    <a href="https://github.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-github fa-lg" aria-hidden="true"></i></a>
    <a href="https://www.linkedin.com/in/stephen-paul-adithela-9b8793114/" target="_blank" style="text-decoration:none;color: inherit;display:inline-flex"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i></a>
    <div class="margin"></div>
    &copy 2017 Stephen Paul
</footer>

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

