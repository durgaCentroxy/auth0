<?php
// index.php
// ...

require 'vendor/autoload.php';

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain' => 'durgacentroxy923.auth0.com',
    'client_id' => 'YUk9uZwb6o1o38qEyZ6ZydZ3hVlC2lqr',
    'client_secret' => '5xjIizcQFsWVQJSF3jO5WX8SRaFdQ9K_jLxKyeiG-oviI7Y7eA4KI5GrRNWg7Ifq',
    'redirect_uri' => 'http://localhost:8080/auth0',
    'scope' => 'openid profile email'
]);
// index.php
// ...

// $userInfo = $auth0->getUser();

// $userInfo = $auth0->getUser();
// printf('Hello %s!', htmlspecialchars($userInfo['name']));
?>




<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row d-flex justify-content-center" style="margin-top: 250px">
            <div class="container text-center">
                <h3>Single Sign On Apllication</h3>
            </div>
            <div class="container text-center">
                <a href="login.php" class="btn btn-success" type="button">My App</a>
                <a href="login1.php" class="btn btn-secondary" type="button">Centroxy</a>
                <a href="login2.php" class="btn btn-warning" type="button">Silicon</a>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>