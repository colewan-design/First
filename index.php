<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBO Payroll Management System</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
     <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
     <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<script>
     $(function() {
        $('#nav li a').click(function() {
           $('#nav li').removeClass();
           $($(this).attr('href')).addClass('active');
        });
     });
  </script>
<body >
    <input type="checkbox" name="" id="menu-toggle">
    <div class="sidebar">
        <div class="sidebar-container">
            <div class="brand">
                <h2>
                    <span ></span>
                    CBO Payroll Management System
                </h2>
            </div>
            <div class="sidebar-avartar">
                <div>
                    <img src="img/1.png" alt="">
                </div>
                <div class="avartar-info">

                    <div class="avartar-text">

                        <h4>
                            Raja Sulayman
                        </h4>
                        <small>
                            639-27402-9600
                        </small>
                    </div>
                    <span class="las la-angle-double-down">

                    </span>

                </div>
            </div>
            <form action="" >
            <div class="sidebar-menu">

                <ul  >
                    <li>
                        <a class="current" href="index.php" >
                            <span class="las la-adjust"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="employees.php">
                            <span class="las la-users"></span>
                            <span>Employees</span>
                        </a>
                    </li>
                    <li>
                        <a href="" >
                            <span class="las la-chart-bar"></span>
                            <span>Calculations</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-calendar"></span>
                            <span>Reports</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span class="las la-user"></span>
                            <span>Account</span>
                        </a>
                    </li>
                    
                </ul>
             <!--php code here-->
                <?php
            $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));       
            $result = $mysqli->query("SELECT * FROM dataa") or die(mysqli->error);
             
            ?>
            </div>
            </form>
           <!--side-card was here-->
        </div>
    </div>
    <div class="main-content">
        <header >
            <div class="header-title-wrapper">
                <label for="">
                    <span class="las la-bars">

                    </span>
                </label>
                <div class="header-title">
                    <h1>Employees</h1>
                    <p>Display Employee analytics <span class="las la-chart-line">

                    </span> </p>
                </div>
            </div>
            <div class="header-action">
                <button class="btn bt-main">
                    <span class="las la-plus-square"> Sort </span>
        
                </button>
            </div>
        </header>
        <main>
            <div class="analytics">
                <div class="analytic">
                    <div class="analytic-icon">
                        <span class="las la-users"></span>
                    </div>
                        <div class="analytic-info">
                            <h4>Total Employees</h4>
                            <h1><?php echo mysqli_num_rows($result); ?></h1>
                        </div> 

                       
                </div>

                <div class="analytic">
                    <div class="analytic-icon">
                        <span class="las la-clock"></span>
                    </div>
                        <div class="analytic-info">
                            <h4>Total Work Hours </h4>
                            <h1>10.0k <small class="text-danger"> 5%</small></h1>
                        </div>  
                </div>

                <div class="analytic">
                    <div class="analytic-icon">
                        <span class="las la-ruble-sign"></span>
                    </div>
                        <div class="analytic-info">
                            <h4> Total Renumeration</h4>
                            <h1>10.0k <small class="text-success"> 5%</small></h1>
                        </div>
                        
                    
                </div>
                <div class="analytic">
                    <div class="analytic-icon">
                        <span class="las la-heart"></span>
                    </div>
                    <div class="analytic-info">
                            <h4>Total Likes</h4>
                            <h1>10.0k</h1>
                    </div> 
                </div>
            </div>
            <div class="block-grid">
                <div class="revenue-card">

                </div>
            </div>
        </main>
    </div>
</body>
</html>