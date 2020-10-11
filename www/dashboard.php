<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Dashboard</title>
  <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./styledash.css">
<script src="https://kit.fontawesome.com/0270c50f45.js" crossorigin="anonymous"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<aside class="side-nav" id="show-side-navigation1">
  <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
  <div class="heading">
    <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fcdn.lessons.com%2Fprofile-pro%2F58e53193ce518b1b3639aba5_profile.jpg&f=1&nofb=1" alt="">
    <div class="info">
      <h3><a href="#">Mostafa Omar</a></h3>
      <p>Lorem ipsum dolor sit amet consectetur.</p>
    </div>
  </div>
  <div class="search">
    <input type="text" placeholder="Type here"><i class="fa fa-search"></i>
  </div>
  <ul class="categories">
    <li><i class="fa fa-home fa-fw" aria-hidden="true"></i><a href="#"> About us</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-support fa-fw"></i><a href="#"> Subscribe us</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-envelope fa-fw"></i><a href="#"> Contact us</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-users fa-fw"></i><a href="#"> Our team</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-bolt fa-fw"></i><a href="#"> Testimonials</a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <p>Example:</p>
    <li><i class="fa fa-envelope-open-o fa-fw"></i><a href="#"> Messages <span class="num dang">56</span></a></li>
    <li><i class="fa fa-wrench fa-fw"></i><a href="#"> Settings <span class="num prim">6</span></a>
      <ul class="side-nav-dropdown">
        <li><a href="#">Lorem ipsum</a></li>
        <li><a href="#">ipsum dolor</a></li>
        <li><a href="#">dolor ipsum</a></li>
        <li><a href="#">amet consectetur</a></li>
        <li><a href="#">ipsum dolor sit</a></li>
      </ul>
    </li>
    <li><i class="fa fa-laptop fa-fw"></i><a href="#"> About UI &amp; UX <span class="num succ">43</span></a></li>
    <li><i class="fa fa-comments-o fa-fw"></i><a href="#"> Something else</a></li>
  </ul>
</aside>
<section id="contents">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <i class="fa fa-align-right"></i>
        </button>
        <a class="navbar-brand" href="#">NorthEast <span class="main-color">Sports Training</span></a>
      </div>
      <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My profile <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#"><i class="fa fa-user-o fw"></i> My account</a></li>
              <li><a href="#"><i class="fa fa-envelope-o fw"></i> My inbox</a></li>
              <li><a href="#"><i class="fa fa-question-circle-o fw"></i> Help</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#"><i class="fa fa-sign-out"></i> Log out</a></li>
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-comments"></i><span>23</span></a></li>
          <li><a href="#"><i class="fa fa-bell-o"></i><span>98</span></a></li>
          <li><a href="#"><i data-show="show-side-navigation1" class="fa fa-bars show-side-btn"></i></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="welcome">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="content">
            <h2>Welcome to NEST</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="statistics">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-dumbbell"></i>
            <div class="info">
              <h3> At Home Workouts </h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-calendar"></i>
            <div class="info">
              <h3>Book Treatment</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
            <i class="fas fa-apple-alt"></i>
            <div class="info">
              <h3>Nutrition</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="charts">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Team Tonnage</h3>
            <canvas id="myChart"></canvas>
          </div>
        </div>
        <div class="col-md-6">
          <div class="chart-container">
            <h3>Team Rank</h3>
            <canvas id="myChart2"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="admins">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <h3>Performance Staff:</h3>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148906966/small/1501685402/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907137/small/1501685404/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907019/small/1501685403/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <h3>Athlete of the Week</h3>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907114/small/1501685404/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907086/small/1501685404/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
            <div class="admin">
              <div class="img">
                <img class="img-responsive" src="https://uniim1.shutterfly.com/ng/services/mediarender/THISLIFE/021036514417/media/23148907008/medium/1501685726/enhance" alt="admin">
              </div>
              <div class="info">
                <h3>Joge Lucky</h3>
                <p>Lorem ipsum dolor sit amet.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </section>
    <section class='statis text-center'>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="box bg-primary">
              <i class="fa fa-eye"></i>
              <h3>5,154</h3>
              <p class="lead">Page views</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box danger">
              <i class="fa fa-user-o"></i>
              <h3>245</h3>
              <p class="lead">User registered</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box warning">
              <i class="fa fa-shopping-cart"></i>
              <h3>5,154</h3>
              <p class="lead">Product sales</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="box success">
              <i class="fa fa-handshake-o"></i>
              <h3>5,154</h3>
              <p class="lead">Transactions</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="chrt3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
            <div class="chart-container">
              

            </div>
          </div>
          <div class="col-md-4">
            <div class="box">
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/chart.js@2.8.0'></script><script  src="./script.js"></script>

</body>
</html>