<?php
// *	@source		See SOURCE.txt for source and other copyright.
// *	@license	GNU General Public License version 3; see LICENSE.txt

class ModelExtensionModuleOurFactory extends Model {
	public function addCategory($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "category_out_factory SET name='". $data['name'] ."',cost='" . $data['cost'] . "', date_modified = NOW(), date_added = NOW()");

		$category_id = $this->db->getLastId();

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "category_out_factory SET image = '" . $this->db->escape($data['image']) . "' WHERE id = '" . (int)$category_id . "'");
		}		
		return $category_id;
	}

	public function editCategory($category_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "category_out_factory SET  date_modified = NOW() WHERE id = '" . (int)$category_id . "'");

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "category_out_factory SET image = '" . $this->db->escape($data['image']) . "' WHERE id = '" . (int)$category_id . "'");
		}
	}
	
	public function delete($category_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "category_out_factory WHERE id = '" . (int)$category_id . "'");
	}

	public function getCategory($category_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_out_factory  WHERE id = '" . (int)$category_id . "'");
		
		return $query->row;
	}
	
	public function getAllCategories() {

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "category_out_factory");
		
			$categories = array();
		
			foreach ($query->rows as $row) {
				$categories[$row['id']] = $row;
			}
		return $categories;
	}
}