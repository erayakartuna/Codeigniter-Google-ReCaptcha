<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Google ReCaptcha Form Validation
 *
 * @package        CodeIgniter
 * @subpackage    Libraries
 * @category    Validation
 * @author       Eray Akartun - http://eray.info - https://github.com/erayakartuna
 */
class MY_Form_validation extends CI_Form_validation
{
    protected $CI;

    public function __construct($rules = array()){

        $this->CI = get_instance();
        $this->CI->load->config('gcaptcha');
        $this->CI->load->helper('gcaptcha');

        if($this->CI->config->item('enable_gcaptcha')){

            $rules[] = array(
                'field' => 'g-recaptcha-response',
                'label' => 'lang:gcaptcha_label',
                'rules' => 'trim|required|valid_gcaptcha'
            );

            $this->CI->load->language('gcaptcha_form_validation');
        }
        
        parent::__construct($rules);
    }


    public function valid_gcaptcha($recaptchaResponse)
    {

        $userIp = $this->CI->input->ip_address();
        $secret = $this->CI->config->item('gcaptcha_server_secret');
        $url = $this->CI->config->item('gcaptcha_link')."?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL,$url);
        $result=curl_exec($ch);
        curl_close($ch);

        $status = json_decode($result, true);

        if ($status['success'])
        {
            return TRUE;
        }
        else
        {
            $this->CI->form_validation->set_message('form_validation_valid_gcaptcha','valid_gcaptcha');
            return FALSE;
        }
    }
}
