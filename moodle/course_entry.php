

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <title>Course</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css"> 
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>



    </head>


    <!-this is body  ->
    <body >

        <div class="container">
            <div style="background-color:#0f0f0f; margin-top:5px; margin-bottom:5px ">
                <nav class="nav nav-tabs nav-justified ">


                  <ul class="nav nav-pills navFont ">
                        <li role="presentation" class="label label-default"><a href="admin_home.php"class="navFont"><span class="glyphicon glyphicon-home"> Home</span></a></li>
                        <li role="presentation" class="active label label-default"><a href="course_enrolment.php" class="navFont">Enrolment</a></li>
                        <li role="presentation" class="label label-default"><a href="#" class="navFont">Profile</a></li>                        
                        <li role="presentation" class="label label-default"><a href="#"class="navFont">Contacts</a></li>
                       



                    </ul>
            </div>










            <aside>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h1>Add New Course </h1>
                        <br>
                    </div>
                    <div class="panel-body">
                        <form action="course.php">
                            
                            <input type="submit" value="Add New Course">
                        </form>

                        <div>

                

                            <?PHP
                            if ($_SERVER["REQUEST_METHOD"] == "POST" ) {
                                

                                $servername = "localhost";
                                $username = "root";
                                $password = "";
                                $dbname = "moodle";

                                $con = new mysqli($servername, $username, $password, $dbname); // connect in to the database
                                if ($con->connect_error) {
                                    echo 'connecting to database failed';
                                }

                                $sql = "INSERT INTO course values('".$_POST['id']."','" . $_POST['name'] . "'," . $_POST['credit'] . ",'" . $_POST['dept_id'] . "')";
                                
                                if ($con->query($sql) === TRUE) {
                                    echo 'course was added successfully in to the system';
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }

                                $con->close();
                            }
                            ?>

                        </div>




                    </div>
                </div>
            </aside>


        </div>
    </body>

</html>

