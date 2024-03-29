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

                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: -10px;">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#" style="color: #F3F2F3;">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="classes.php" style="color: #F3F2F3;">Classes</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #F3F2F3;">SIGNED IN AS John Smith <i class="fas fa-user-circle"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" style="color: #F3F2F3;">Sign Out <span><i class="fas fa-sign-out-alt"></i></span></a>
                                
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="row">
                
            </div>
            <div class="row" style="padding: 0px 0px;">
                <div class="col" style="border: none; border: 1px solid #E4E4E4; border-radius: 10px; padding: 20px 15px;">
                    <div class="row">
                        <div class="col-sm-1 col-12" >
                            <div style="background-color: #2489AF; padding: 5px 5px;">
                                <h4 style="color: #f3f3f3;"><i class="fas fa-arrow-left"></i></h4>
                            </div>
                            
                        </div>
                        <div class="col-sm-11 col-12" >

                            <h4 style="color: #707070;">Class Performance </h4>
                            
                        </div>
                        
                        
                    </div>
                    <div class="card">
                            
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                           <div id="container" style="min-width: 810px; width: 100%; height: 400px; margin: 0 auto"></div>
                                        </div>
                                    </div>
                                </div> <!-- /.row -->
                            </div>       
                    </div>
                    <div class="card" style="margin-top: 20px;">     
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="card-body">
                                           <div id="container2" style="min-width: 810px; width: 100%; height: 400px; margin: 0 auto"></div>
                                        </div>
                                    </div>
                                </div> <!-- /.row -->
                            </div>       
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
<script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
            drawMonthwiseChart();
});
function drawMonthwiseChart()
{
   
$.ajax({url: "homestats.php", success: function(result){
             Highcharts.chart('container', {
                    chart: {
                        type: 'line'
                    },
                    title: {
                        text: ''
                    },
                    xAxis: {
                        categories: [
                            'Quiz 1',
                            'Quiz 2',
                            'Project'
                            
                        ]
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Performance'
                        }
                    },
                    series: result
                });
            }});   
}

$(document).ready(function(){
            drawMonthwiseChart2();
});
function drawMonthwiseChart2()
{
   
$.ajax({url: "homestats2.php", success: function(result2){
             Highcharts.chart('container2', {
                    chart: {
                        type: 'line'
                    },
                    title: {
                        text: ''
                    },
                    xAxis: {
                        categories: [
                            'Ayesha',
                            'John Smith',
                            'John Doe'
                            
                        ]
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Performance'
                        }
                    },
                    series: result2
                });
            }});   
}

</script>