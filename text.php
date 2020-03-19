<?php
    require 'vendor/autoload.php';

    use Auth0\SDK\Auth0;

    $auth0 = new Auth0([
        'domain' => 'durgacentroxy923.auth0.com',
        'client_id' => 'YUk9uZwb6o1o38qEyZ6ZydZ3hVlC2lqr',
        'client_secret' => '5xjIizcQFsWVQJSF3jO5WX8SRaFdQ9K_jLxKyeiG-oviI7Y7eA4KI5GrRNWg7Ifq',
        'redirect_uri' => 'http://localhost:8080/auth0',
        'scope' => 'openid profile email'
    ]);
    $userInfo = $auth0->getUser();
// $userimage = $auth0->getUser(["picture"]);
// var_dump($userInfo);



    $image = $userInfo['picture'];
    print "<img src=\"$image\" width=\"100px\" height=\"100px\"\/>";
    echo "<br>";
    $mail = $userInfo['email'];
    print "$mail";
    echo "<br>";
    $updt = $userInfo['updated_at'];
    print "$updt";
    echo "<br>";
    $f_name = $userInfo['given_name'];
    $l_name = $userInfo['family_name'];
    print "$f_name" . " $l_name";
    echo "<br>";
    $nickname = $userInfo['nickname'];
    print "$nickname";
    // exit();
    // printf($userInfo['picture']);
?>