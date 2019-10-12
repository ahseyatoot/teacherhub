
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
        <div id="content" style="background-color: #2489AF;">
            <div class="row" style="margin-top: 100px;">
                <div class="col-6" style="color: #F3F3F3;">
                    <h2 style="font-size: 80px;">Welcome to</h2>
                    <h1 style="font-size: 94px; font-weight: bold;">TeacherHUB!</h1>
                </div>
                <div class="col-6">
                    <div style="background-color: #F3F3F3; padding: 30px; border-radius: 20px; width: 62%; margin-left: 71px; text-align: center;">
                        <h1 style="font-size: 66px; color: #2489AF;"><i class="fas fa-chalkboard-teacher"></i></h1>
                        <h4 style="font-weight: bold; color: #2489AF; text-align: center;">Sign In to TeacherHUB!</h4>
                        <input type="text" name="" style="padding: 10px; border: 1px solid #2489AF; border-radius: 10px; width: 100%; margin-top: 20px;" placeholder="Username">
                        <input type="text" name="" style="padding: 10px; border: 1px solid #2489AF; border-radius: 10px; width: 100%; margin-top: 10px;" placeholder="Password">
                        <a href="classes.php"><button type="submit" name="login_user" class="btn btn-flat m-b-30 m-t-30" style="background-color: #2489AF !important; color: #F3F3F3; margin-top: 20px; width: 100%; border-radius: 10px; padding: 15px; font-size: 18px;">Sign in</button></a>
                        
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