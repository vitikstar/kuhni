<?php
class ControllerExtensionModuleCatalog extends Controller {
	public function index() {
		return $this->load->view('extension/module/catalog', $data);
	}
}