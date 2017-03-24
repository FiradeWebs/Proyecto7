<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '694062368547-bra1si331eikvbno8r77rb76bg77am29.apps.googleusercontent.com
'; //Google client ID
$clientSecret = '09Hf6xYJflmwZnjDdGfmmpK0'; //Google client secret
$redirectURL = 'http://localhost/login_with_google_using_php/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Proyecto7AJIM');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>