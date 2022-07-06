<?php
class ControllerExtensionModuleOrderingMeasurements extends Controller {
	public function index() {
		return $this->load->view('extension/module/ordering_measurements', []);
	} 
}