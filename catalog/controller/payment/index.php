<?php
class ControllerPaymentIndex extends Controller {
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

		$data['menu'] = $this->load->controller('common/menu');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');
		$data['block_payment'] = $this->load->controller('block/payment');
		$data['block_capacity'] = $this->load->controller('block/capacity'); //3d блок
		$data['block_cost'] = $this->load->controller('block/cost');




		$this->response->setOutput($this->load->view('page/payment/index', $data));
	}
}