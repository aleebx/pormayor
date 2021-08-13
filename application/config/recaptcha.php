<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin

//aguerra95ugas@gmail.com
$config['recaptcha_site_key'] = '6LdkG3cUAAAAAPyEM8tfocZ1itTIJuUf8G0xxC1M';
$config['recaptcha_secret_key'] = '6LdkG3cUAAAAAM9QVgrxyQrNxqxb1437SZK2pLcm';

//pormayorcontacto@gmail.com
// $config['recaptcha_site_key'] = '6Lc-j3gUAAAAAKQOSkt7RZ8I6Vg0NNhOuNyiup5M';
// $config['recaptcha_secret_key'] = '6Lc-j3gUAAAAAPBSeQIVZ9upPrYOyoT4LHBpLROH';
// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'es';
/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */