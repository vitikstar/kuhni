<?php
class ControllerProjectsIndex extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$canonical = $this->url->link('common/home');
			if ($this->config->get('config_seo_pro') && !$this->config->get('config_seopro_addslash')) {
				$canonical = rtrim($canonical, '/');
			}
			$this->document->addLink($canonical, 'canonical');
		}

		$data['block_3d'] = $this->load->controller('block/3d');
		$data['menu'] = $this->load->controller('common/menu');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['block_payment'] = $this->load->controller('block/payment'); //блок оплата
		$data['block_category'] = $this->load->controller('block/category'); //блок категорій
		$data['block_capacity'] = $this->load->controller('block/capacity'); //3d блок
		$data['cost'] = $this->load->controller('block/cost');
		$data['map'] = $this->load->controller('common/map'); //yandex  карта



		$this->response->setOutput($this->load->view('page/projects/index', $data));
	}
}