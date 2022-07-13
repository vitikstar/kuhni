<?php
class ControllerExtensionModuleOurFactory extends Controller {
	public function index() {

		$data['categories'] = $this->getAllCategories();
				
		return $this->load->view('extension/module/our_factory', $data);
	}

	public function getAllCategories()
	{

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_out_factory");

		$categories = array();

		foreach ($query->rows as $row) {
			$categories[$row['id']] = $row;
		}
		return $categories;
	}
} 