<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Email
| -------------------------------------------------------------------------
| This file lets you define parameters for sending emails.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/libraries/email.html
|
*/
$config['mailtype'] = 'html';

$config['protocol'] = 'mail';

$config['smtp_host'] = 'mail.pormayor.pe';//smtp.googlemail.com’; (SMTP server)

$config['smtp_port'] = 465;

$config['smtp_timeout'] = 30;

$config['smtp_user'] = 'no-responder@pormayor.pe';

$config['smtp_pass'] = 'Jd*nzGWyT#al';

$config['charset'] = 'utf-8';
$config['newline'] = "\r\n";

$config['website_name'] = 'Pormayor';

/* End of file email.php */
/* Location: ./application/config/email.php */