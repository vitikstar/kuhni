<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');

		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();






        $categories = $this->model_catalog_category->getCategories(0);
        foreach ($categories as $category) {

            if ($category['category_id'] != 59) { // Кухни
                continue;
            }

            // Level 2
            $children_data = array();
            $children = $this->model_catalog_category->getCategories($category['category_id']);
            foreach ($children as $child) {

                if ($child['category_id'] != 69 // По материалу
                    && $child['category_id'] != 80 // По стилю
                    && $child['category_id'] != 91 // По типу фасадов
                    && $child['category_id'] != 99 // По форме
                    && $child['category_id'] != 108 // По цвету
                    && $child['category_id'] != 96 // // По цвету
                ) { // Кухни
                    continue;
                }

                $filter_data = array(
                    'filter_category_id'  => $child['category_id'],
                    'filter_sub_category' => true
                );
                $children_data_level3 = array();
                $children_level3 = $this->model_catalog_category->getCategories($child['category_id']);
                foreach ($children_level3 as $child_level3) {
                    $filter_data_level3 = array(
                        'filter_category_id'  => $child_level3['category_id'],
                        'filter_sub_category' => true
                    );

                    $children_data_level3[] = array(
                        'name'  => $child_level3['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data_level3) . ')' : ''),
                        'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child_level3['category_id'])
                    );
                }

                $children_data[] = array(
                    'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
                    'children' => $children_data_level3,
                    'column'   => $child['column'] ? $child['column'] : 1,
                    'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
                );
            }

            // Level 1
            $data['categories'][] = array(
                'name'     => $category['name'],
                'children' => $children_data,
                'column'   => $category['column'] ? $category['column'] : 1,
                'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
            );
        }




//        $categories = $this->model_catalog_category->getCategories(0);
//        foreach ($categories as $category) {
//
//            if ($category['category_id'] != 59) { // Кухни
//                continue;
//            }
//
//            // Level 2
//            $children_data = array();
//            $children = $this->model_catalog_category->getCategories($category['category_id']);
//            foreach ($children as $child) {
//
//                if ($child['category_id'] != 69 // По материалу
//                    && $child['category_id'] != 80 // По стилю
//                    && $child['category_id'] != 91 // По типу фасадов
//                    && $child['category_id'] != 99 // По форме
//                    && $child['category_id'] != 108 // По цвету
//                    && $child['category_id'] != 96 // // По цвету
//                ) { // Кухни
//                    continue;
//                }
//
//                $filter_data = array(
//                    'filter_category_id'  => $child['category_id'],
//                    'filter_sub_category' => true
//                );
//                $children_data_level3 = array();
//                $children_level3 = $this->model_catalog_category->getCategories($child['category_id']);
//                foreach ($children_level3 as $child_level3) {
//                    $filter_data_level3 = array(
//                        'filter_category_id'  => $child_level3['category_id'],
//                        'filter_sub_category' => true
//                    );
//
//                    $children_data_level3[] = array(
//                        'name'  => $child_level3['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data_level3) . ')' : ''),
//                        'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child_level3['category_id'])
//                    );
//                }
//
//                $children_data[] = array(
//                    'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
//                    'children' => $children_data_level3,
//                    'column'   => $child['column'] ? $child['column'] : 1,
//                    'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
//                );
//            }
//
//            // Level 1
//            $data['categories'][] = array(
//                'name'     => $category['name'],
//                'children' => $children_data,
//                'column'   => $category['column'] ? $category['column'] : 1,
//                'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
//            );
//        }



//		$categories = $this->model_catalog_category->getCategories(0);
//		foreach ($categories as $category) {
//			if ($category['top']) {
//				// Level 2
//				$children_data = array();
//
//				$children = $this->model_catalog_category->getCategories($category['category_id']);
//
//				foreach ($children as $child) {
//                    if ($child['top']) {
//                        $filter_data = array(
//                            'filter_category_id'  => $child['category_id'],
//                            'filter_sub_category' => true
//                        );
//
//
//                        $children_data_level3 = array();
//
//                        $children_level3 = $this->model_catalog_category->getCategories($child['category_id']);
//
//                        foreach ($children_level3 as $child_level3) {
//                            if ($child_level3['top']) {
//                                $filter_data_level3 = array(
//                                    'filter_category_id'  => $child_level3['category_id'],
//                                    'filter_sub_category' => true
//                                );
//
//                                $children_data_level3[] = array(
//                                    'name'  => $child_level3['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data_level3) . ')' : ''),
//                                    'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child_level3['category_id'])
//                                );
//                            }
//                        }
//
//                        $children_data[] = array(
//                            'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
//                            'children' => $children_data_level3,
//                            'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
//                        );
//                    }
//				}
//
//				// Level 1
//				$data['categories'][] = array(
//					'name'     => $category['name'],
//					'children' => $children_data,
//					'column'   => $category['column'] ? $category['column'] : 1,
//					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
//				);
//			}
//		}
// echo"<pre>";
// print_r($data['categories']);
// echo "</pre>";
// exit;





		return $this->load->view('common/menu', $data);
	}
}
