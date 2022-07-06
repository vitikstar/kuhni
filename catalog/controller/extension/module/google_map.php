<?php
class ControllerExtensionModuleGoogleMap extends Controller {
	public function index() {
		return $this->load->view('extension/module/google_map', []);
	} 
}