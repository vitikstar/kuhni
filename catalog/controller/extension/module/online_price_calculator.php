<?php
class ControllerExtensionModuleOnlinePriceCalculator extends Controller {
	public function index() {
		$data = [];
		return $this->load->view('extension/module/online_price_calculator', $data);
	}
}