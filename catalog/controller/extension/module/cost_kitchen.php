<?php
class ControllerExtensionModuleCostKitchen extends Controller {
	public function index() {
		$this->load->language('extension/module/cost_kitchen');
 
		$data['logged'] = $this->customer->isLogged();
		$data['register'] = $this->url->link('cost_kitchen/register', '', true);
		$data['login'] = $this->url->link('cost_kitchen/login', '', true);
		$data['logout'] = $this->url->link('cost_kitchen/logout', '', true);
		$data['forgotten'] = $this->url->link('cost_kitchen/forgotten', '', true);
		$data['cost_kitchen'] = $this->url->link('cost_kitchen/cost_kitchen', '', true);
		$data['edit'] = $this->url->link('cost_kitchen/edit', '', true);
		$data['password'] = $this->url->link('cost_kitchen/password', '', true);
		$data['address'] = $this->url->link('cost_kitchen/address', '', true);
		$data['wishlist'] = $this->url->link('cost_kitchen/wishlist');
		$data['order'] = $this->url->link('cost_kitchen/order', '', true);
		$data['download'] = $this->url->link('cost_kitchen/download', '', true);
		$data['reward'] = $this->url->link('cost_kitchen/reward', '', true);
		$data['return'] = $this->url->link('cost_kitchen/return', '', true);
		$data['transaction'] = $this->url->link('cost_kitchen/transaction', '', true);
		$data['newsletter'] = $this->url->link('cost_kitchen/newsletter', '', true);
		$data['recurring'] = $this->url->link('cost_kitchen/recurring', '', true);

		return $this->load->view('extension/module/cost_kitchen', $data);
	}
}