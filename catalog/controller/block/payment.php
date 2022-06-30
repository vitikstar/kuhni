<?php
class ControllerBlockPayment extends Controller {
	public function index()
	{
			return $this->load->view('block/payment');
	}
}
