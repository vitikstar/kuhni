<?php
class ControllerBlockCategory extends Controller {
	public function index()
	{
			return $this->load->view('block/category');
	}
}
