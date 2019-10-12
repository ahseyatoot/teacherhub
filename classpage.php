<?php
    include 'create_record.php';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TeacherHub</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style3.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light" style="padding-left: 0px; padding-bottom: 0px;">
                <div class="container-fluid">

                    <!--<button type="button" id="sidebarCollapse" class="btn" style="background-color: #093b9e !important; color: #f1f1f1;">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>-->
                    <h1 style="color: #F3F2F3; font-weight: bold;">TeacherHUB</h1>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                <p style="padding-left: 30px; font-size: 23px; color: #2489AF;"><b style="font-weight: bold;">Welcome</b> John Smith!</p>
            </div>
            <div class="row" style="padding: 0px 0px;">
                <div class="col" style="border: none; border: 1px solid #E4E4E4; border-radius: 10px; padding: 20px 15px;">
                    <div class="row">
                        <div class="col-sm-8 col-12" >
                            <h4 style="color: #707070;">Trigonometry - St. Jude</h4>
                        </div>
                        <div class="col-sm-2 col-12">
                            <div class="form-group" id="changebtn">                  
                                <div class="input-group">
                                    <input type="submit" class="btn" style="background-color: #2489AF; border-radius: 30px; padding: 5px 10px; font-size: 18px; font-weight: bold; color: #F3F2F3; margin-left: -73px; margin-top: -5px;" value="+ Add a Student">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-12">
                            <div class="form-group" id="changebtn2">                  
                                <div class="input-group">
                                    <input type="submit" class="btn" style="background-color: #2489AF; border-radius: 30px; padding: 5px 10px; font-size: 18px; font-weight: bold; color: #F3F2F3; margin-left: -73px; margin-top: -5px;" value="+ Create a Record">
                                </div>
                            </div>
                        </div>
                        
                    </div>

<form action="2-my-profile.php" method="post" enctype="multipart/form-data">
                                        <?php //include ('errors.php');?>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group" id="ps1">
                                                    <label class=" form-control-label">First Name</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" name="newpassword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group" id="ps2">
                                                    <label class=" form-control-label">Middle Name</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" name="confirmpassword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group" id="ps3">
                                                    <label class=" form-control-label">Last Name</label>
                                                    <div class="input-group">
                                                        <input type="password" class="form-control" name="confirmpassword">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group" id="submitbtn">
                                                    <div class="input-group">
                                                        <input type="submit" class="btn" name="changepswd" style="background-color: #2489AF; border-radius: 30px; width: 170px; padding: 5px 10px; font-size: 18px; font-weight: bold; color: #F3F2F3;" value="Add Student">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>


<form action="classpage.php" method="post" enctype="multipart/form-data">
                                        <?php include ('errors.php');?>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group" id="r1">
                                                    <label class=" form-control-label">Type</label>
                                                    <div class="input-group">
                                                        <select name="r_type" class="form-control">
                        <option value="Quiz">Quiz</option>
                        <option value="Recitation">Recitation</option>
                        <option value="Project">Project</option>
                        <option value="Long Quiz">Long Quiz</option>
                        <option value="Diplomatic">Diplomatic</option>
                      </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group" id="r2">
                                                    <label class=" form-control-label">Description</label>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control" name="r_des">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-group" id="r3">
                                                    <label class=" form-control-label">Date</label>
                                                    <div class="input-group">
                                                        <input type="date" id="today" min="2000-01-01" max="" name="r_day" class="form-control" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group" id="submitbtn2">
                                                    <div class="input-group">
                                                        <input type="submit" class="btn" name="createrec" style="background-color: #2489AF; border-radius: 30px; width: 170px; padding: 5px 10px; font-size: 18px; font-weight: bold; color: #F3F2F3;" value="Create Record">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>





<table class="table" style="margin-top: 53px;">
                                            <thead>
                                                <tr>
                                                    <th><h5>Student List</h5></th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Full Name</th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </thead>
   

                                         <tbody>
<?php
                include ('para_dbconnect.php');
                $output = "";
                
                $query2 = mysqli_query($db, "SELECT * FROM student ORDER BY fname ASC");
                while ($row2 = mysqli_fetch_array($query2)){
                    
                    $output.='
                    <a href="para1.php">
                                                <tr>
                                                    <td><a href="2-read-report.php">'.$row2['fname'].' '.$row2['mname'].' '.$row2['lname'].'</a></td> 
                                                    <td><a href="2-read-report.php">EDIT</a></td> 
                                                    <td><a href="see_perf.php">See Performance</a></td> 
                                                    
                                                    
                                                </tr></a>';

                }
                echo $output;
                
?>  
                                            </tbody>
                                        </table>
<table class="table" style="margin-top: 53px;">
                                            <thead>
                                                <tr>
                                                    <th><h5>Record</h5></th>
                                                </tr>
                                            </thead>
                                            <thead>
                                                <tr>
                                                    <th>Type</th>
                                                    <th>Description</th>
                                                    <th>Date</th>
                                                    <th></th>
                                                </tr>
                                            </thead>
   

                                         <tbody>
<?php
                include ('para_dbconnect.php');
                $output = "";
                $quiz="Quiz";
                $query2 = mysqli_query($db, "SELECT * FROM record ORDER BY record_id DESC");
                while ($row2 = mysqli_fetch_array($query2)){
                    
                    $output.='
                    <a href="para1.php">
                                                <tr>
                                                    
                                                    <td><a href="2-read-report.php">'.$row2['record_type'].'</a></td> 
                                                    <td><a href="2-read-report.php">'.$row2['record_description'].'</a></td> 
                                                    <td><a href="2-read-report.php">'.$row2['record_date'].'</a></td> 
                                                    <td><a href="add_scores.php">Add Scores</a></td> 
                                                    
                                                    
                                                </tr></a>';
                }
                echo $output;
?>  
                                            </tbody>
                                        </table>

                    
                </div>
                
            </div>
            

            <div class="line"></div>

           
           
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>

</html>

<script>
$(document).ready(function(){
    $("#ps1").hide();
    $("#ps2").hide();
    $("#ps3").hide();
    $("#submitbtn").hide();
    $("#r1").hide();
    $("#r2").hide();
    $("#r3").hide();
    $("#submitbtn2").hide();
  $("#changebtn").click(function(){
    $("#ps1").show();
    $("#ps2").show();
    $("#ps3").show();
    $("#submitbtn").show();
    $("#divchange").hide();
    $("#changebtn").hide();
  });
  $("#changebtn2").click(function(){
    $("#r1").show();
    $("#r2").show();
    $("#r3").show();
    $("#submitbtn2").show();
    $("#changebtn2").hide();
  });
  
});
</script>