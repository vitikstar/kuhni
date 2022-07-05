<?php
class ControllerExtensionModulePresent extends Controller {
	public function index() {
		$data = [];
		return $this->load->view('extension/module/present', $data);
	}
}