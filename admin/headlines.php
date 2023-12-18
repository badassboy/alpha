<?php

  include("../functions.php");
    $info = new News();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/sidestyle.css">

    <!-- Font Awesome cs -->
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">

    

    <style type="text/css">

        .church_group {

            background-color:rgb(255, 255, 255);
            height: 400px;
            padding-top: 3%;
            display: none;
        }

      

        .add_member {

            background-color:rgb(255, 255, 255);
            height: 350px;
            padding-top: 3%;
            display: none;
        }

        .show {
          display: block;
        }


    </style>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>AlphaNews</h3>
            </div>

            <ul class="list-unstyled components">
               
                <li>
                    <a href="#" id="create_group" data-target="church_group" class="item">Create News</a>
                </li>
               
               
                <li>
                    <a href="#" id="group" data-target="add_member" class="item">All News</a>
                </li>



               
            </ul>

           
        </nav>
        <!-- end of sidebar -->

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

<button type="button" id="sidebarCollapse" class="btn btn-info">
    <i class="fas fa-align-left"></i>
    <span>Toggle Sidebar</span>
</button>

<button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-align-justify"></i>
</button>

                    
                </div>
            </nav>

            <h2>News</h2>
        <?php include("content_form.php"); ?>
            <!-- end of church group divs -->

           

           <?php include("allnews.php"); ?>

           

        </div>
        <!-- end of  content -->
           
    </div>
    <!-- end of wrapper -->


              <!-- jQuery CDN  -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   
    <!-- Bootstrap JS -->
   <script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>

    <script type="text/javascript">

        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        // this whole code is about displaying div based on the link clicked
        // returns an array of child elements of a given class name
        // const links = document.getElementsByClassName('item');
        const links = [...document.getElementsByClassName("item")];

        // looping through the array and calling a function to execute
        links.forEach(link => link.onclick = toggleVisible);

        function toggleVisible(){

          document.getElementsByClassName('show')[0].classList.remove('show');
          // "this" refer to the element which was clicked
           const id = this.dataset.target;
           
           document.getElementById(id).classList.add('show');
        }


     

       

        
                   





      
               



    </script>
</body>

</html>