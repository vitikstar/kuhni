<?php
class ControllerBlockCatalog extends Controller {
	public function index()
	{
			return $this->load->view('block/full_catalog');
	}
}
