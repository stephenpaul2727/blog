@extends('layouts.master')

@section('content')
<div class="container-fluid bg-1 text-center" style="height: 100vh;">
    <h3 class="margin">Who Am I?</h3>
    <img src={{ URL::asset('images/stephen.jpg') }} class="img img-circle img-responsive margin" style="display:inline" alt="Stephen's Pic" height="200" width="200">
    <h3>I am a graduate student, developer, explorer and a tech enthusiast.</h3>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="820">
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
                <p>Bloomington, Indiana, United States</b><br/>Masters in Computer Science, Class of 2018<br/>G.P.A: 3.52</p>
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
                <a href="https://igs.indiana.edu/" target="_blank"><img src="{{URL::asset('/images/iu.png')}}" alt="IGS Logo" class="media-object" style="width:100px;height: 100px"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">homeSHARE Indiana University</h3>
                <p>Research and Development Assistant</b><br/>Aug 2017 to present.
            </div>
        </div>
        <div class="margin"></div>
        <div class="media">
            <div class="media-left">
                <a href="https://communications.iu.edu/" target="_blank"><img src="{{URL::asset('/images/iucomm.jpg')}}" alt="IU Communications Logo" class="media-object" style="width:100px;height: 100px"></a>
            </div>
            <div class="media-body">
                <h3 class="media-heading">Indiana University</h3>
                <p><strong>Web Developer</strong><br/>June 2017 to present.</p>

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
<div id="section4" class="container-fluid" style="background-color: #ffc0cb; color: #5e5e5e; height:auto; padding-top: 50px;">
    <h2 class="margin">Skills</h2>
    <div class="row">
        <div class="col-sm-3">
            <p>Programming Languages</p>
            <ul>
                <li>Java</li>
                <li>PHP</li>
                <li>Javascript</li>
                <li>SQL</li>
                <li>C++</li>
                <li>Python</li>
            </ul>
        </div>
        <div class="col-sm-3">
            <p>Cloud/API</p>
            <ul>
                <li>REST</li>
                <li>GIT</li>
                <li>Docker</li>
                <li>Travis CI</li>
                <li>AWS</li>
                <li>Jenkins</li>
                <li>RabbitMQ</li>
                <li>Kubernetes</li>
            </ul>
        </div>
        <div class="col-sm-3">
            <p>Databases/Management</p>
            <ul>
                <li>MySQL</li>
                <li>Postgres</li>
                <li>SQL Server</li>
                <li>Oracle 10.x</li>
                <li>Mongo DB</li>
                <li>Redis</li>
                <li>Solr</li>
            </ul>
        </div>
        <div class="col-sm-3">
            <p>Testing/Frameworks</p>
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
@endsection
