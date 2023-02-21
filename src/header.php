<?php
require_once '../GraphHelper.php';
require_once '../vendor/autoload.php';
session_start();
$_SESSION['state'] = session_id();
$graph = new GraphHelper();
$graph->login();
?>
<!doctype html>
<HTML>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/style/<?= $style ?>">
    <title><?= $title ?></title>
</head>
<body>
<header>
    <nav class="navbar bg-light">
        <div class="container">
            <a class="navbar-brand " href="index.php">
                <img src="/img/logo.svg" alt="" width="50" height="50" class="d-inline-block align-text-center">
                Time to Space
            </a>
            <a class="navbar-brand" href="index.php">
                Home
            </a>
            <a type="button" class="btn btn-success" href="3Dpage.php">VIEW ROOM</a>
            <?php if(empty($_SESSION['msatg'])){?>
                <a href="?action=login" type="button" class="btn btn-success">LOGIN</a>
            <?php }?>
            <div class="dropdown">
                <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Action</a></li>
                </ul>
            </div>

        </div>
    </nav>
</header>
