
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TeacherHUB</title>

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
                        <div class="col-sm-3 col-12" >
                            <h4 style="color: #707070;">You have 5 classes</h4>
                        </div>
                        <div class="col-sm-9 col-12">
                            <div class="createbtn" style="background-color: #2489AF; border-radius: 30px; width: 170px; padding: 5px 10px; font-size: 18px; font-weight: bold; color: #F3F2F3; margin-left: -130px; margin-top: -5px;">Create a Class +</div>
                        </div>
                        
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <?php
                            include ('para_dbconnect.php');
                            $query = "SELECT * FROM class ORDER BY class_id DESC";
        $result = mysqli_query($db, $query);
        $output = "";
            while($row = mysqli_fetch_array($result)) {
                $output.='
                    <div class="col-sm-4">
                            <a href="classpage.php">
                            <div class="card" style="border: none;">
                                <div class="card-body">
                                    <h5 class="card-title">'.$row['class_subjname'].'</h5>
                                    <h5 class="card-text text-muted">'.$row['class_section'].'</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">20 Students</h6>
                                    <div class="createbtn" style="background-color: #2489AF; border-radius: 30px; width: 68px; padding: 1px 10px; padding-top: 10px; font-size: 18px; font-weight: bold; color: #F3F2F3; margin-top: 0px; text-align: center;"><h6>EDIT</h6></div>
                                </div>
                            </div>
                            </a>
                    </div>
                ';
                
            }
            echo $output;
                        ?>
                        
                        
                        
                    </div>
                </div>
                
            </div>
            

            <div class="line"></div>

           
           
        </div>
    </div>

    
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


