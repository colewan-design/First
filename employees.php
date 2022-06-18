<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CBO Payroll Management System</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="script.js"></script>
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
                    <span class="lab la-staylinked"></span>
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
            <form action="">
            <div class="sidebar-menu" >
                <ul>
                    <li>
                        <a href="index.php" >
                            <span class="las la-adjust"></span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a class="current" href="employees.php" >
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
                        <a href="" >
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
              
            </div>
            </form>
           <!--side-card was here-->
        </div>
    </div>
    <div class="main-content">
    <header>
            <div class="header-title-wrapper">
                <label for="">
                    <span class="las la-bars">

                    </span>
                </label>
                <div class="header-title">
                    <h1>Employees</h1>
                    <p>Display Employee Records <span class="las la-chart-line">

                    </span> </p>
                </div>
            </div>
            <div class="header-action">
                
                    
                  <a class="las la-plus-square" href="add-record.php">add record</a>
               
            </div>
        </header>
        <main>
            <?php require_once 'process.php' ?>

            <?php

            if (isset($_SESSION['message'])):
            ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">

                <?php
                echo $_SESSION['message'];
                unset($_SESSION['message']);
                ?>
        
            </div>
            <?php endif ?>
            <div class="container">
            <?php
            $mysqli = new mysqli('localhost', 'root', '', 'crud') or die(mysqli_error($mysqli));       
            $result = $mysqli->query("SELECT * FROM dataa") or die(mysqli->error);
             
            ?>
            <div class="row justify-content-center">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>SG</th>
                            <th>Step</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                <?php
                    while($row = $result->fetch_assoc()):
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['position']; ?></td>
                    <td><?php echo $row['sg']; ?></td>
                    <td><?php echo $row['step']; ?></td>
                    <td>
                       
                
                       
                        <select id="xyz" onChange="window.location.href=this.value">
                        <option value="" disabled selected hidden>Actions</option>
                        <option  class="btn btn-link btn-sm" value="edit-record.php?edit=<?php echo $row['id']; ?>">Edit</option>
                        <option  class="btn btn-link btn-sm" value="process.php?delete=<?php echo $row['id']; ?>">Delete</option>

                           
                        </select>
                       
                    </td>
                </tr>
                <?php endwhile;  ?>
               

                </table>
            </div>
            <?php 
            function pre_r($array){
            

                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }
            ?>
            
           
            </div>
        </main>
    </div>
 
   <style>
    select#xyz {
   border:0px;
   outline:0px;
}
   </style>
   <!-- refresh the page once the back button has been clicked -->
  <script>
 window.onunload = function(){};

if (window.history.state != null && window.history.state.hasOwnProperty('historic')) {
    if (window.history.state.historic == true) {
        document.body.style.display = 'none';
        window.history.replaceState({historic: false}, '');
        window.location.reload();
    } else {
        window.history.replaceState({historic  : true}, '');
    }
} else {
    window.history.replaceState({historic  : true}, '');
}
</script>
</body>
</html>