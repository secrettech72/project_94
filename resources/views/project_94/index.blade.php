<html lang="en">
  @include('project_94.extra.head')
  <body>
    <aside class="side-nav" id="show-side-navigation1">
      <i class="fa fa-bars close-aside hidden-sm hidden-md hidden-lg" data-close="show-side-navigation1"></i>
      <div class="heading">
        <img src="https://nobelexplorers.com/wp-content/uploads/2018/08/people.png" alt="">
        <div class="info">
          <h3><a href="#">Teacher Name</a></h3>
          <p>Teacher Email</p>
        </div>
      </div>
      <ul class="categories">
        <li><i class="fa fa-user-circle fa-fw" aria-hidden="true"></i><a href="index.html">Profile</a>
          <ul class="side-nav-dropdown">
            <li><a href="changedp.html"><i class="fa fa-images" aria-hidden="true"></i>Change DP</a></li>
            <li><a href="editbio.html">Edit Your bio.</a></li>
            <li><a href="editlocation.html">Edit Your Location</a></li>
            <li><a href="social.html">Change your social Prefrences</a></li>
            <li><a href="#">Change your avaible status</a></li>
          </ul>
        </li>
        <li><i class="fa fa-bell fa-fw"></i><a href="#">Manage Notification</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">See all Notification</a></li>
            <li><a href="#">Student Request</a></li>
            <li><a href="#">Pending Request</a></li>
          
          </ul>
        </li>
        <li><i class="fa fa-tasks fa-fw"></i><a href="#">Manage Student</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">See all Student Details</a></li>
            <li><a href="#">Remove Student</a></li>
            
          </ul>
        </li>
        <li><i class="fa fa-cog fa-fw"></i><a href="#">Settings</a>
          <ul class="side-nav-dropdown">
            <li><a href="#">Change Password</a></li>
            <li><a href="#">Logout</a></li>
           
          </ul>
        </li>
        
      </ul>
    </aside>
    <section id="contents">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <i class="fa fa-align-right"></i>
            </button>
            
          </div>
          <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="#"><i class="fa fa-bell-o"></i><span>5</span></a></li>
              <li><a href="#"><i  class="fa fa-sign-out"></i></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="welcome">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="content">
                <h2>Welcome to Dashboard</h2>
                <p>Greeting!!</p>
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
                <i class="fa fa-graduation-cap fa-fw bg-primary"></i>
                <div class="info">
                  <h3>12</h3> <span>Student</span>
                  <p>Total Students</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-edit fa-fw danger"></i>
                <div class="info"  onclick="window.location='changedp.html';" style="cursor: pointer;">
                  <h3>1</h3> <span>pending</span>
                  <p>Update your profile</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box">
                <i class="fa fa-bell fa-fw success"></i>
                <div class="info">
                  <h3>5</h3> <span>Notification</span>
                  <p>Unread Notifications</p>
                </div>
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
                <h3>Current Student</h3>
                <div class="admin">
                  <div class="img">
                    <img class="img-responsive" src="https://unixtitan.net/images/vector-avatar-student-5.png" alt="admin">
                  </div>
                  <div class="info">
                    <h3>Student Name</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="admin">
                  <div class="img">
                    <img class="img-responsive" src="https://unixtitan.net/images/vector-avatar-student-5.png" alt="admin">
                  </div>
                  <div class="info">
                    <h3>Student Name</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="admin">
                  <div class="img">
                    <img class="img-responsive" src="https://unixtitan.net/images/vector-avatar-student-5.png" alt="admin">
                  </div>
                  <div class="info">
                    <h3>Student Name</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="box">
                <h3>Removed Students</h3>
                <div class="admin">
                  <div class="img">
                    <img class="img-responsive" src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar01-512.png" alt="admin">
                  </div>
                  <div class="info">
                    <h3>Student Name</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="admin">
                  <div class="img">
                    <img class="img-responsive" src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar01-512.png" alt="admin">
                  </div>
                  <div class="info">
                    <h3>Student Name</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
                <div class="admin">
                  <div class="img">
                    <img class="img-responsive" src="https://cdn3.iconfinder.com/data/icons/avatar-set/512/Avatar01-512.png" alt="admin">
                  </div>
                  <div class="info">
                    <h3>Student Name</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </section>
      
      </section>
      <script src='http://code.jquery.com/jquery-latest.js'></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js"></script>
      <script>
      /*global $, console*/
$(function () {

'use strict';

(function () {

  var aside = $('.side-nav'),

      showAsideBtn = $('.show-side-btn'),

      contents = $('#contents');

  showAsideBtn.on("click", function () {

    $("#" + $(this).data('show')).toggleClass('show-side-nav');

    contents.toggleClass('margin');

  });

  if ($(window).width() <= 767) {

    aside.addClass('show-side-nav');

  }
  $(window).on('resize', function () {

    if ($(window).width() > 767) {

      aside.removeClass('show-side-nav');

    }

  });

  // dropdown menu in the side nav
  var slideNavDropdown = $('.side-nav-dropdown');

  $('.side-nav .categories li').on('click', function () {

    $(this).toggleClass('opend').siblings().removeClass('opend');

    if ($(this).hasClass('opend')) {

      $(this).find('.side-nav-dropdown').slideToggle('fast');

      $(this).siblings().find('.side-nav-dropdown').slideUp('fast');

    } else {

      $(this).find('.side-nav-dropdown').slideUp('fast');

    }

  });

  $('.side-nav .close-aside').on('click', function () {

    $('#' + $(this).data('close')).addClass('show-side-nav');

    contents.removeClass('margin');

  });

}());

// Start chart

var chart = document.getElementById('myChart');
Chart.defaults.global.animation.duration = 2000; // Animation duration
Chart.defaults.global.title.display = false; // Remove title
Chart.defaults.global.title.text = "Chart"; // Title
Chart.defaults.global.title.position = 'bottom'; // Title position
Chart.defaults.global.defaultFontColor = '#999'; // Font color
Chart.defaults.global.defaultFontSize = 10; // Font size for every label

// Chart.defaults.global.tooltips.backgroundColor = '#FFF'; // Tooltips background color
Chart.defaults.global.tooltips.borderColor = 'white'; // Tooltips border color
Chart.defaults.global.legend.labels.padding = 0;
Chart.defaults.scale.ticks.beginAtZero = true;
Chart.defaults.scale.gridLines.zeroLineColor = 'rgba(255, 255, 255, 0.1)';
Chart.defaults.scale.gridLines.color = 'rgba(255, 255, 255, 0.02)';

Chart.defaults.global.legend.display = false;

var myChart = new Chart(chart, {
  type: 'bar',
  data: {
    labels: ["January", "February", "March", "April", "May", 'Jul'],
    datasets: [{
      label: "Lost",
      fill: false,
      lineTension: 0,
      data: [45, 25, 40, 20, 45, 20],
      pointBorderColor: "#4bc0c0",
      borderColor: '#4bc0c0',
      borderWidth: 2,
      showLine: true,
    }, {
      label: "Succes",
      fill: false,
      lineTension: 0,
      startAngle: 2,
      data: [20, 40, 20, 45, 25, 60],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#ff6384",
      borderColor: '#ff6384',
      borderWidth: 2,
      showLine: true,
    }]
  },
});
//  Chart ( 2 )


var Chart2 = document.getElementById('myChart2').getContext('2d');
var chart = new Chart(Chart2, {
  type: 'line',
  data: {
    labels: ["January", "February", "March", "April", 'test', 'test', 'test', 'test'],
    datasets: [{
      label: "My First dataset",
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 79, 116)',
      borderWidth: 2,
      pointBorderColor: false,
      data: [5, 10, 5, 8, 20, 30, 20, 10],
      fill: false,
      lineTension: .4,
    }, {
      label: "Month",
      fill: false,
      lineTension: .4,
      startAngle: 2,
      data: [20, 14, 20, 25, 10, 15, 25, 10],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#4bc0c0",
      borderColor: '#4bc0c0',
      borderWidth: 2,
      showLine: true,
    }, {
      label: "Month",
      fill: false,
      lineTension: .4,
      startAngle: 2,
      data: [40, 20, 5, 10, 30, 15, 15, 10],
      // , '#ff6384', '#4bc0c0', '#ffcd56', '#457ba1'
      backgroundColor: "transparent",
      pointBorderColor: "#ffcd56",
      borderColor: '#ffcd56',
      borderWidth: 2,
      showLine: true,
    }]
  },

  // Configuration options
  options: {
    title: {
      display: false
    }
  }
});


console.log(Chart.defaults.global);

var chart = document.getElementById('chart3');
var myChart = new Chart(chart, {
  type: 'line',
  data: {
    labels: ["One", "Two", "Three", "Four", "Five", 'Six', "Seven", "Eight"],
    datasets: [{
      label: "Lost",
      fill: false,
      lineTension: .5,
      pointBorderColor: "transparent",
      pointColor: "white",
      borderColor: '#d9534f',
      borderWidth: 0,
      showLine: true,
      data: [0, 40, 10, 30, 10, 20, 15, 20],
      pointBackgroundColor: 'transparent',
    },{
      label: "Lost",
      fill: false,
      lineTension: .5,
      pointColor: "white",
      borderColor: '#5cb85c',
      borderWidth: 0,
      showLine: true,
      data: [40, 0, 20, 10, 25, 15, 30, 0],
      pointBackgroundColor: 'transparent',
    },
               {
                 label: "Lost",
                 fill: false,
                 lineTension: .5,
                 pointColor: "white",
                 borderColor: '#f0ad4e',
                 borderWidth: 0,
                 showLine: true,
                 data: [10, 40, 20, 5, 35, 15, 35, 0],
                 pointBackgroundColor: 'transparent',
               },
               {
                 label: "Lost",
                 fill: false,
                 lineTension: .5,
                 pointColor: "white",
                 borderColor: '#337ab7',
                 borderWidth: 0,
                 showLine: true,
                 data: [0, 30, 10, 25, 10, 40, 20, 0],
                 pointBackgroundColor: 'transparent',
               }]
  },
});

});
      </script>
      </body>
    </html>
