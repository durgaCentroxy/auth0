<?php
require 'vendor/autoload.php';

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain' => 'durgacentroxy923.auth0.com',
    'client_id' => 'YUk9uZwb6o1o38qEyZ6ZydZ3hVlC2lqr',
    'client_secret' => '5xjIizcQFsWVQJSF3jO5WX8SRaFdQ9K_jLxKyeiG-oviI7Y7eA4KI5GrRNWg7Ifq',
    'redirect_uri' => 'http://localhost:8080/auth0/dashboard2.php',
    'scope' => 'openid profile email'
]);
$userInfo = $auth0->getUser();
// $userimage = $auth0->getUser(["picture"]);
// echo "<br>";
// $mail = $userInfo['email'];
// print "$mail";
// echo "<br>";
// $updt = $userInfo['updated_at'];
// print "$updt";
// echo "<br>";

// echo "<br>";
// $nickname = $userInfo['nickname'];
// print "$nickname";
// exit();
// printf($userInfo['picture']);
?>

<!doctype html>
<html lang="en">

<head>
    <title>centroxy</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="img/logo-sit-w.png" alt="" style="width: 50px; height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">jhjkj
                    <ul class="navbar-nav ml-auto">
                        
                        <li class="nav-item active">
                            <a href="dashboard.php" class="nav-link">myapp</a>
                        </li>
                        <li class="nav-item active">
                            <a href="dashboard1.php" class="nav-link">centroxy</a>
                        </li>
                        <li class="nav-item active">
                            <?php
                            $image = $userInfo['picture'];
                            ?>
                            <img src="
                                <?php
                                print $image;
                                ?>
                            " alt="" style="border-radius: 50px; width: 40px; height: 40px;">

                        </li>
                        <li class="dropdown">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php
                                print $userInfo["given_name"];
                                ?>
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="logout.php">logout</a>
                            </div>
                        </li>

                    </ul>

                </div>
            </nav>
        </div>
    </div>
    <div class="container-fluid">
        <div class="container">
            <h3 style="border-bottom: 2px solid black; display: inline-block;">Details of interns @ Centroxy:</h3>
            <ul class="list-unstyled">
                <li>Gayatree</li>
                <li>Subha</li>
                <li>Mitalnjali</li>
                <li>Durga</li>
                <li>Rohit</li>
            </ul>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>