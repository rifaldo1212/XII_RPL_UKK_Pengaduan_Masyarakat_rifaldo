<?php
session_start();

if(isset($_SESSION['nama'])){
    header('location:home.php');
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ukk2023</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
 <center><h2><label for="exampleFormControlTextarea1" class="mt-2 text-primary form-label">LOGIN  ADMIN</label></h2></center>
     <div class="container mt-5 text-center">
        <div class="row">
            <div class="col">
            </div>
            <form class="card-body cardbody-color p-lg-4 text-blue " action='login.php' method='post'>
            <div class="col shadow-lg p-3 mb-5 bg-body-tertiary rounded">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">username</label>
                    <input type="text" class="form-control" name="username" id="exampleFormControlInput1" require>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">password</label>
                    <input type="password" class="form-control" name="password" id="exampleFormControlTextarea1" require></textarea>

                <button type="submit" class="btn btn-primary">masuk</button>
            </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>