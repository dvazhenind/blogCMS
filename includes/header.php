<?php

include("includes/config.php");
include("includes/db.php");
//if there are no errors in the browser - we successfully connected to database

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>DimiBlog</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="blog.css" rel="stylesheet">
</head>

<body>

<div class="container">


    <!-------Header navigation-------->
    <div class="nav-scroller py-1 mb-2" style="margin-top: 10px">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">Programming languages</a>
            <a class="p-2 text-muted" href="#">Unity</a>
            <a class="p-2 text-muted" href="#">Physics</a>
            <a class="p-2 text-muted" href="#">Math</a>
            <a class="p-2 text-muted" href="#">Algorithms</a>
            <a class="p-2 text-muted" href="#">Opinions</a>
            <form method="get" action = "results.php">
                <div class="form-group">
                    <input type="text" class="form-control" name = "search" id="exampleInputEmail1"  placeholder="Search">
                </div>
            </form>
        </nav>
    </div>
</div>
</body>