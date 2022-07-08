<?php
class ControllerExtensionModuleCostCalculator extends Controller {
	public function index() {
		return $this->load->view('extension/module/cost_calculator', $data);
	}
}