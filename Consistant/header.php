<html>
    <style>
        span.flip img:hover {               /* Flips the image */
        -webkit-transform: scaleX(-1);
        transform: scaleX(-1);
        }
    </style>

    <head>
            <meta charset="UTF-8">

            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
            <link rel='stylesheet' Type='text/css' href="CSS\Stylesheet.css">
            <script src='JavaSript_files\script.js'></script>
            <link REL="shortcut icon" type="image/png" href="./afbeeldingen/maikellogotransparant_MDn_icon.ico">
            <title>
            Portfolio
        </title>
    </head>
    
    <body>
        <!--menu balk-->
            <div class="row justify-content-center" id="navbar">
            <div class="col-2" id="homePageMenu"><a href="./index.php#home">Home</a></div>
            <div class="col-2"><a href="./AboutPage.php">About</a></div>
            <!--<div class="col-2"><a href="./LabPage.php">Lab</a></div>-->
            <div class="col-2"><a href="./ProjectPage.php">Projects</a></div>
            <div class="col-2"><a href="./ContactPage.php">Contact</a></div>
        </div>
<?php
        function Projects(){
            echo"
            
   
            
            
            <div class='row justify-content-center' id='navbar'>
            <!--menu balk-->
            <div class='row justify-content-center' id='navbar'>
            <div class='col-2' id='homePageMenu'><a href='./index.php#home'>Home</a></div>
            <div class='col-2'><a href='./AboutPage.php'>About</a></div>
            <!--<div class='col-2'><a href='./LabPage.php'>Lab</a></div>-->
            <div class='col-2'><a href='./ProjectPage.php'>Projects</a></div>
            <div class='col-2'><a href='./ContactPage.php'>Contact</a></div>
            
                <div class='pos-f-t'>
                    <div class='collapse' id='navbarToggleExternalContent'>
                      <div class='bg-dark p-4'>
                        <h5 class='text-white h4'>Collapsed content</h5>
                        <span class='text-muted dropcontent'>
                                <div><a href='#Project 1'>inovaties</a></div>
                                <div><a href='#Project 2'>inovatie 1</a></div>
                                <div><a href='#Project 3'>inovatie 2</a></div>
                                <div><a href='#Project 4'>inovatie 3</a></div>
                                <div><a href='#Project 5'>tussentijdse oefeningen</a></div>
                                <div><a href='#Project 8'>reflectie</a></div>
                                <div><a href='#Project 9'>bronnen</a></div>
                            </span>
                      </div>
                    </div>
                    <nav class='navbar navbar-dark bg-dark'>
                      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarToggleExternalContent' aria-controls='navbarToggleExternalContent' aria-expanded='false' aria-label='Toggle navigation'>
                        <span class='navbar-toggler-icon'></span>
                      </button>
                    </nav>
                  </div>";}
                  ?>