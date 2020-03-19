<?php
// login.php

require 'vendor/autoload.php';

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain' => 'durgacentroxy923.auth0.com',
    'client_id' => 'YUk9uZwb6o1o38qEyZ6ZydZ3hVlC2lqr',
    'client_secret' => '5xjIizcQFsWVQJSF3jO5WX8SRaFdQ9K_jLxKyeiG-oviI7Y7eA4KI5GrRNWg7Ifq',
    'redirect_uri' => 'http://localhost:8080/auth0/dashboard1.php',
    'scope' => 'openid profile email'
]);


$auth0->login();
