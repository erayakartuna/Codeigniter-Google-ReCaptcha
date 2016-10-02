# Codeigniter-Google-ReCaptcha
A simple Google ReCaptcha implementation for CodeIgniter - Easy installation - Write Less Code With 2 Steps

## Demo
###[Demo Page](http://eray.info/demo/ci-google-recaptcha)
![alt tag](https://upload.wikimedia.org/wikipedia/en/c/cf/NoCAPTCHA_reCAPTCHA.gif)

## Usage
You can easily implement "Google ReCaptcha" to your form with 2 Steps.

### Step-1
Open the "config/gcaptcha" file and write to "gcaptcha_server_secret" and "gcaptcha_client_secret" codes.
```php
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
```

### Step-2
Put these codes into the your html form

```php
<?php echo create_gcaptcha();?>
<span class="error"><?php echo gcaptcha_error();?></span>
```





