<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Google ReCaptcha Helper
 *
 * @package        CodeIgniter
 * @subpackage    Helpers
 * @category    Helpers
 * @author        Eray Akartuna - http://eray.info
 */

// ------------------------------------------------------------------------

if (!function_exists('create_gcaptcha')) {
    /**
     * Create ReCAPTCHA
     *
     */
    function create_gcaptcha()
    {
        $ci = get_instance();

        try {
            if (!$ci->config->item('enable_gcaptcha')) {
                throw new Exception('Google ReCaptcha must be enabled on the config.');
            }
        } catch (Exception $e) {
            var_dump($e->getMessage());
        }

        $return = "<script src='https://www.google.com/recaptcha/api.js'></script>";
        $return .= '<div class="g-recaptcha" data-sitekey="' . $ci->config->item('gcaptcha_client_secret') . '"></div>';
        return $return;
    }
}

if (!function_exists('gcaptcha_error')) {
    /**
     * Create ReCAPTCHA
     *
     */
    function gcaptcha_error()
    {
        return form_error('g-recaptcha-response');
    }
}


