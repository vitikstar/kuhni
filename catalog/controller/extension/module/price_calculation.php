<?php
class ControllerExtensionModulePriceCalculation extends Controller {
	public function index() {
		return $this->load->view('extension/module/price_calculation', []);
	} 
} 