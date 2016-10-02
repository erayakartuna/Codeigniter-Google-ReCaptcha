<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Google ReCaptcha Enable
|--------------------------------------------------------------------------
*/
$config['enable_gcaptcha'] = true;

/*
|--------------------------------------------------------------------------
| Google Captcha Server Secret Code
|--------------------------------------------------------------------------
*/
$config['gcaptcha_server_secret'] = '';

/*
|--------------------------------------------------------------------------
| Google Captcha Client Secret Code
|--------------------------------------------------------------------------
*/
$config['gcaptcha_client_secret'] = '';

/*
|--------------------------------------------------------------------------
| Google ReCaptcha Link
|--------------------------------------------------------------------------
|
| I don't recommend to change google recaptcha link!
|
*/
$config['gcaptcha_link'] = 'https://www.google.com/recaptcha/api/siteverify';