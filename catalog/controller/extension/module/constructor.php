<?php
class ControllerExtensionModuleConstructor extends Controller {
	public function index() {
		return $this->load->view('extension/module/constructor', []);
	} 
} 