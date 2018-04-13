@extends('layouts.master')

@section('content')
<div class="container-fluid bg-1 text-center parallax" style="height: auto;background: url({{ URL::asset('images/lights.jpg') }}) no-repeat left top;color: #cccccc; background-attachment: fixed;background-repeat: no-repeat;">
  <div class="row">
    <div class="card col-md-4" style="width: 40rem; padding: 10px;padding-top: 50px; padding-bottom: 50px; margin-left: 20px;">
      <img src={{ URL::asset('images/stephen.jpg') }} class="card-img-top img img-circle img-responsive margin" style="display:inline" alt="Stephen's Pic" height="200" width="200">
      <div class="card-body">
        <h1 class="card-title">Stephen Paul Adithela</h1>
        <div><a href="https://www.facebook.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit;"><i class="fa fa-facebook-official fa-lg" aria-hidden="true"></i>&nbsp; Facebook</a></div>
        <div><a href="https://www.instagram.com/stephen_paul_ad" target="_blank" style="text-decoration:none;color: inherit"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i> &nbsp; Instagram</a></div>
        <div><a href="https://github.com/stephenpaul2727" target="_blank" style="text-decoration:none;color: inherit"><i class="fa fa-github fa-lg" aria-hidden="true"></i>&nbsp; Github</a></div>
        <div><a href="https://www.linkedin.com/in/stephenadithela/" target="_blank" style="text-decoration:none;color: inherit"><i class="fa fa-linkedin fa-lg" aria-hidden="true"></i>&nbsp; Linkedin</a></div>
      </div>
    </div>
    <div class="jumbotron col-md-6 text-center" style="margin-left: 20px;background: transparent;">
      <h1 class="display-4">Hello, world!</h1>
      <hr class="my-4">
      <p>I am a master's student in Computer Science who is passionate and enthusiastic about developing quality software. I love working in teams and contributing to open source projects. My main fields of expertise include Software Engineering, Databases and Distributed Services. I am a life-long learner and always keeps an eye out for interesting technology developments.</p>
      <p>I am a pro-level badminton player and I love watching and playing soccer. Get in touch with me through the links on the left if you want to know more about me.</p>
    </div>

  </div>
</div>

<nav id="navScroll" class="navbar navbar-inverse" data-spy="affix">
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
                    <li><a href="#section1">Education</a></li>
                    <li><a href="#section2">Experience</a></li>
                    <li><a href="#section3">Skills</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<div class="container-fluid" style="background-color:#000000;color: #cccccc;">
  <blockquote class="blockquote text-center">
    <h3 class="mb-0 mt-0">Develop a passion for learning. if you do, you will never cease to grow</h3>
    <footer class="blockquote-footer"><cite title="Source Title">Anthony J D'Angelo</cite></footer>
  </blockquote>
</div>

<div id="section1" class="container-fluid bg-1 parallax" style="height:auto;background: url({{ URL::asset('images/shore.jpg') }}) no-repeat left top;color: #ffffff; background-attachment: fixed;background-repeat: no-repeat;">
    <h1 class="margin">Education</h1>
    <div class="section-inner">
        <div class="media">
            <div class="media-left">
                <img src="{{URL::asset('/images/iu.png')}}" alt = "iu logo" class="media-object" style="width:150px;height: 150px">
            </div>
            <div class="media-body">
                <h2 class="media-heading">Indiana University</h2>
                <p>Bloomington, Indiana, United States</b><br/>Masters in Computer Science, Class of 2018<br/>G.P.A: 3.7/4.0</p>
            </div>
        </div>
        <div style="padding: 40px;"></div>
        <div class="media">
            <div class="media-left">
                <img src="{{URL::asset('/images/gitam.jpg')}}" alt = "gitam logo" class="media-object" style="width:150px;height: 150px">
            </div>
            <div class="media-body">
                <h2 class="media-heading">Gitam Institute of Technology and Management</h2>
                <p>Visakhapatnam, Andhra Pradesh, India</b><br/>Bachelors in Computer Science, Class of 2016<br/>G.P.A: 3.9/4.0</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#000000;color: #cccccc;">
  <blockquote class="blockquote text-center">
    <h3 class="mb-0 mt-0">Experience is the teacher of all things</h3>
    <footer class="blockquote-footer"><cite title="Source Title">Julius Ceasar</cite></footer>
  </blockquote>
</div>
<div id="section2" class="container-fluid bg-1 parallax" style="height:auto;background: url({{ URL::asset('images/tree.jpg') }}) no-repeat left top;color: #ffffff; background-attachment: fixed;background-repeat: no-repeat;">
    <h2 class="margin">Experience</h2>
    <div class="section-inner">
        <div class="media">
            <div class="media-left">
                <a href="https://igs.indiana.edu/" target="_blank"><img src="{{URL::asset('/images/uits.png')}}" alt="IGS Logo" class="media-object" style="width:150px;height: 150px"></a>
            </div>
            <div class="media-body">
                <h2 class="media-heading">UITS at IU</h2>
                <p>Information Technology Intern</b><br/>Dec 2017 to present.
            </div>
        </div>
        <div style="padding: 15px;"></div>
        <div class="media">
            <div class="media-left">
                <a href="https://communications.iu.edu/" target="_blank"><img src="{{URL::asset('/images/iucomm.jpg')}}" alt="IU Communications Logo" class="media-object" style="width:150px;height: 150px"></a>
            </div>
            <div class="media-body">
                <h2 class="media-heading">Indiana University</h2>
                <p><strong>Web Developer Internship</strong><br/>June 2017 to present.</p>

            </div>
        </div>
        <div style="padding: 15px;"></div>
        <div class="media">
            <div class="media-left">
                <a href="https://uits.indiana.edu/" target="_blank"><img src="{{URL::asset('/images/uits.png')}}" alt= "uits logo" class="media-object" style="width:150px;height: 150px"></a>
            </div>
            <div class="media-body">
                <h2 class="media-heading">UITS at IU</h2>
                <p>Information Technology Intern</b><br/>Dec 2016 to May 2017.</p>
            </div>
        </div>
        <div style="padding: 15px;"></div>
        <div class="media">
            <div class="media-left">
                <a href="https://www.hcl.com/" target="_blank"><img src="{{URL::asset('/images/hcl.png')}}" alt = "hcl logo" class="media-object" style="width:150px;height: 150px"></a>
            </div>
            <div class="media-body">
                <h2 class="media-heading">HCL Technologies</h2>
                <p>Summer Internship</b><br/>April 2015 to June 2015.</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background-color:#000000;color: #cccccc;">
  <blockquote class="blockquote text-center">
    <h3 class="mb-0 mt-0">'Tis skill, not strength, that governs a ship</h3>
    <footer class="blockquote-footer"><cite title="Source Title">Thomas Fuller</cite></footer>
  </blockquote>
</div>
<div id="section3" class="container-fluid bg-1 parallax" style="height:auto;background: url({{ URL::asset('images/smoke.jpg') }}) no-repeat left top;color: #ffffff; background-attachment: fixed;background-repeat: no-repeat;">
    <h2 class="margin">Skills</h2>
    <div class="row">
        <div class="col-sm-2">
            <p>Programming Languages</p>
            <ul>
                <li>Java</li>
                <li>PHP</li>
                <li>Python</li>
                <li>Javascript</li>
            </ul>
        </div>
        <div class="col-sm-2">
            <p>Cloud/API</p>
            <ul>
                <li>REST</li>
                <li>GIT</li>
                <li>Docker</li>
                <li>AWS</li>
                <li>RabbitMQ</li>
                <li>Kubernetes</li>
            </ul>
        </div>
        <div class="col-sm-2">
            <p>Databases/Management</p>
            <ul>
                <li>MySQL</li>
                <li>Postgres</li>
                <li>SQLite</li>
                <li>Mongo DB</li>
            </ul>
        </div>
        <div class="col-sm-2">
            <p>Backend Frameworks</p>
            <ul>
                <li>Spring MVC</li>
                <li>Djano</li>
                <li>Laravel</li>
                <li>Node JS</li>
            </ul>
        </div>
        <div class="col-sm-2">
            <p>Frontend</p>
            <ul>
                <li>React JS</li>
                <li>JQuery</li>
                <li>Vue JS</li>
                <li>AngularJS</li>
            </ul>
        </div>
    </div>
</div>
@endsection
