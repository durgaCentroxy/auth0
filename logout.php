<?php
require 'vendor/autoload.php';

use Auth0\SDK\Auth0;

$auth0 = new Auth0([
    'domain' => 'durgacentroxy923.auth0.com',
    'client_id' => 'YUk9uZwb6o1o38qEyZ6ZydZ3hVlC2lqr',
    'client_secret' => '5xjIizcQFsWVQJSF3jO5WX8SRaFdQ9K_jLxKyeiG-oviI7Y7eA4KI5GrRNWg7Ifq',
    'redirect_uri' => 'http://localhost:8080/auth0',
    'scope' => 'openid profile email',
]);



$auth0->logout();
$return_to = 'http://localhost:8080/auth0';
$logout_url = sprintf('http://%s/v2/logout?client_id=%s&returnTo=%s', 'durgacentroxy923.auth0.com', 'YUk9uZwb6o1o38qEyZ6ZydZ3hVlC2lqr', $return_to);
header('Location: ' . $logout_url);
die();
