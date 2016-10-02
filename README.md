# Codeigniter-Google-ReCaptcha
Codeigniter-Google-ReCaptcha uses Codeigniter Form Validation.You just need to edit your config and form view.You don't need to write any extra codes.A simple Google ReCaptcha implementation for CodeIgniter - Easy installation - Write Less Code With 2 Steps
## Demo
###[Demo Page](http://eray.info/demo/ci-google-recaptcha)
![alt tag](https://upload.wikimedia.org/wikipedia/en/c/cf/NoCAPTCHA_reCAPTCHA.gif)

## Usage
You can easily implement "Google ReCaptcha" to your forms with 2 Steps.You don't need to write any extra codes on the controller for Google ReCaptcha validation.Just use codeigniter validation library.

### Code Sample
Controller

```php
$this->load->library('form_validation');
$validation_rules = array(); // If you have another form rules you can define
$this->form_validation->set_rules($validation_rules);
if($this->form_validation->run()){
	exit("Form validated");
}
```

### Installation Step-1
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

### Installation Step-2
Put these codes into the your html forms.

```php
<?php echo create_gcaptcha();?>
<span class="error"><?php echo gcaptcha_error();?></span>
```






