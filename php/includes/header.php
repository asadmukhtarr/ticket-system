<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php  session_start(); ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container">
            <a class="navbar-brand" href="#"> <i class="fa fa-cogs"></i> Asad Mukhtarr</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <?php if(!empty($_SESSION['name'])){  ?>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php"> <i class="fa fa-home"></i> Home</a>
                    </li>
                <?php } ?>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-circle"></i> Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <?php if(empty($_SESSION['name'])){ ?>
                    <li><a class="dropdown-item" href="index.php">Login</a></li>
                    <li><a class="dropdown-item" href="register.php">Register</a></li>
                    <?php } else {
                    ?>
                     <li><a class="dropdown-item" href="actions/logout.php">Logout</a></li>
                    <?php
                    } ?>
                </ul>
                </li>
            </ul>
            </div>
        </div>
    </nav>