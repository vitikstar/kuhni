<?php
class ControllerCommonMap extends Controller {
	public function index() {
		return $this->load->view('common/map');
	}
}