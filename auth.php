<?php
require_once __DIR__ . '/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->setRedirectUri("https://localhost/omahbata.com/auth.php");
$client->setScopes(array(
  "https://www.googleapis.com/auth/userinfo.email",
  "https://www.googleapis.com/auth/userinfo.profile",
  "https://www.googleapis.com/auth/plus.me"
));

if (!isset($_GET['code'])) {
  $auth_url = $client->createAuthUrl();
  header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
} else {
  $client->authenticate($_GET['code']);
  // $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();

  try {
    // profile
    $plus = new Google_Service_Plus($client);
    $_SESSION['access_profile'] = $plus->people->get("me");
  } catch (\Exception $e) {
    echo $e->__toString();

    $_SESSION['access_token'] = "";
    // $accessToken = "";
    die;
  }

  header('Location:pagelogin.php');
}
