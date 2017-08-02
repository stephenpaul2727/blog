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
    <link rel="stylesheet" href="{{ URL::asset('css/master-style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
        body
        {
            font: 20px 'Quicksand', sans-serif;
            line-height: 1.5;
            color: #000000;
            background-color: #F8F8F8;
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
            padding-top:100px; padding-bottom: 100px;
            color: #fff;
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
            color: #2a88bd !important;
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
        #section4 {padding-top:50px;height:500px;color: #5e5e5e; background-image: url('/images/skills.jpg'); background-size: cover;}

        .section-inner {
            width: 70%;
            height: 100%;
            font-size: 18px;
            text-overflow: ellipsis;
        }

    </style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<div class="container navHead" id="mainNav">
    <a style="float:left;text-align:left" href="#">Stephen Paul</a>
    <a href="#">LOGIN</a>
    <a href="#">TIMELINE</a>
    <a href="message/create">MESSAGE</a>
    <a href="">RÉSUMÉ</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="toggleVerticalLayout()">&#9776;</a>
</div>


<div class="container-fluid bg-1 text-center">
    <h3 class="margin">Who Am I?</h3>
    <img src="{{URL::asset('/images/stephen.jpg')}}" class="img img-circle img-responsive margin" style="display:inline" alt="Stephen's Pic" height="200" width="200">
    <h3>I am a graduate student, developer, explorer and a caffeine addict.</h3>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="720">
    <div class="container-fluid" style="padding-top:5px; padding-bottom: 5px;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a href="#section1">About</a></li>
                    <li><a href="#section2">Education</a></li>
                    <li><a href="#section3">Experience</a></li>
                    <li><a href="#section4">Skills</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div id="section1" class="container-fluid">
    <h2 class="margin">About Me</h2>
    <div class="section-inner">
        I'm currently undergoing masters degree in the department of Computer Science at Indiana University, Bloomington. I work at Indiana University Communications and Indiana Geological Survey during day time as a part-time web developer and convert caffeine to code on my personal projects during night time. I would say I am a self-made programmer and an explorer of new technologies.
        <div class="margin"></div>
        Always a team person and always enjoyed working with a group of people, collaborating and building towards the end product. If I'm not coding, I will either be playing badminton or watching netflix. Actually, It's pretty easy to find me!

    </div>
</div>
<div id="section2" class="container-fluid">
    <h2 class="margin">Education</h2>
    <div class="section-inner">
        <div class="media">
            <div class="media-left">
                <img src="{{URL::asset('/images/iu.png')}}" alt = "iu logo" class="media-object" style="width:100px;height: 100px">
            </div>
            <div class="media-body">
                <h3 class="media-heading">Indiana University</h3>
                <p>Bloomington, Indiana, United States</b><br/>Masters in Computer Science, Class of 2018<br/>G.P.A: 3.53</p>
            </div>
        </div>
        <div class="margin"></div>
        <div class="media">
            <div class="media-left">
                <img src="{{URL::asset('/images/gitam.jpg')}}" alt = "gitam logo" class="media-object" style="width:100px;height: 100px">
            </div>
            <div class="media-body">
                <h3 class="media-heading">Gitam Institute of Technology and Management</h3>
                <p>Visakhapatnam, Andhra Pradesh, India</b><br/>Bachelors in Computer Science, Class of 2018<br/>G.P.A: 8.8</p>
            </div>
        </div>
    </div>
</div>
<div id="section3" class="container-fluid">
    <h2 class="margin">Experience</h2>
    <div class="section-inner">
        <div class="media">
            <div class="media-left">
                <a href="https://communications.iu.edu/" target="_blank"><img src="{{URL::asset('/images/iucomm.jpg')}}" alt="IU Communications Logo" class="media-object" style="width:100px;height: 100px"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">IU Communications</h3>
                <p>Assistant New Media Developer & Web Developer</b><br/>June 2017 to present.</p>

            </div>
        </div>
        <div class="margin"></div>
        <div class="media">
            <div class="media-left">
                <a href="https://igs.indiana.edu/" target="_blank"><img src="{{URL::asset('/images/igs.png')}}" alt="IGS Logo" class="media-object" style="width:100px;height: 100px"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">Indiana Geological Survey</h3>
                <p>Part Time Web Developer</b><br/>May 2017 to present.
            </div>
        </div>
        <div class="margin"></div>
        <div class="media">
            <div class="media-left">
                <a href="https://uits.indiana.edu/" target="_blank"><img src="{{URL::asset('/images/uits.png')}}" alt= "uits logo" class="media-object" style="width:100px;height: 100px"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">University Information Technology Services</h3>
                <p>Mobile App Developer(credit)</b><br/>Jan 2017 to May 2017.</p>
            </div>
        </div>
        <div class="margin"></div>
        <div class="media">
            <div class="media-left">
                <a href="https://www.hcl.com/" target="_blank"><img src="{{URL::asset('/images/hcl.png')}}" alt = "hcl logo" class="media-object" style="width:100px;height: 100px"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">HCL Technologies</h3>
                <p>Summer Internship</b><br/>April 2015 to June 2015.</p>
            </div>
        </div>
    </div>
</div>
<div id="section4" class="container-fluid">
    <h1 class="margin">Skills</h1>
    <div class="row">
        <div class="col-sm-3">
            <p>Programming Languages</p>
            <ul>
                <li>Java</li>
                <li>C</li>
                <li>C++</li>
                <li>Javascript</li>
                <li>PHP</li>
                <li>Python</li>
                <li>SQL</li>
                <li>Ruby</li>
            </ul>
        </div>
        <div class="col-sm-3">
            <p>Tools</p>
            <ul>
                <li>GitHub</li>
                <li>JIRA</li>
                <li>Slack</li>
                <li>CodeClimate</li>
                <li>Travis CI</li>
                <li>Eclipse</li>
                <li>Spring Tool Suite</li>
                <li>Adobe Suite</li>
            </ul>
        </div>
        <div class="col-sm-3">
            <p>Databases & Servers</p>
            <ul>
                <li>Postgres</li>
                <li>MySQL</li>
                <li>Oracle 10g</li>
                <li>Redis</li>
                <li>Apache Tomcat</li>
                <li>AWS</li>
                <li>Solr</li>
                <li>Lucene</li>
            </ul>
        </div>
        <div class="col-sm-3">
            <p>Frameworks</p>
            <ul>
                <li>Spring MVC</li>
                <li>React JS</li>
                <li>Node JS</li>
                <li>JQuery</li>
                <li>Angular JS</li>
                <li>Laravel</li>
                <li>Enzyme</li>
                <li>Mockito</li>
            </ul>
        </div>
    </div>
</div>



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

