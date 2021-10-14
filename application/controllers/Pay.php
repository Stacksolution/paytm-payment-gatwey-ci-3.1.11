<?php defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/PaytmKit/lib/encdec_paytm.php'; 

define('PAYTM_ENVIRONMENT', 'WEB'); // change value PROD for production
define('PAYTM_MERCHANT_KEY', 'r0aJ9FC1EFQLqVyi');
define('PAYTM_MERCHANT_MID', 'Parkin72203574715297');
define('PAYTM_MERCHANT_WEBSITE', 'WEBSTAGING');
define('PAYTM_TXN_URL', 'https://securegw-stage.paytm.in/theia/processTransaction'); // for test
/*define('PAYTM_TXN_URL', 'https://securegw-stage.paytm.in/theia/processTransaction'); //For live 
*/

class Pay extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
	public function index(){
		$this->data['paytm'] = array(
          "ORDER_ID"      =>"786ADI",
          "CUST_ID"       =>"1",
          "MOBILE_NO"     =>$this->input->post('mobile'),
          "EMAIL"         =>$this->input->post('email'),
          "MID"           =>PAYTM_MERCHANT_MID,
          "CHANNEL_ID"    =>PAYTM_ENVIRONMENT,
          "WEBSITE"       =>PAYTM_MERCHANT_WEBSITE,
          "INDUSTRY_TYPE_ID"=>"retail",
          "CALLBACK_URL"  =>base_url('pay/success'),
          "Amount"        =>$this->input->post('amount'),
          "marchent_key"  =>PAYTM_MERCHANT_KEY,
          "redirect_url"  =>PAYTM_TXN_URL
          );
        $this->load->view('paytm-payment-page',$this->data);
	}

	public function success(){
		print_r($this->input->post());
	}
}
