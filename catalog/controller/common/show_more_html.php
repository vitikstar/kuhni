<?php
class ControllerCommonShowMoreHtml extends Controller {
    public function index() {
        $data = $this->load->language('product/category');

        $data['config_product_limit'] = $this->config->get('config_product_limit');

        $data['lang'] = $this->language->get('code');

        $data['show_more'] = $this->language->get('show_more');

        $this->response->setOutput($this->load->view('common/show_more_html', $data));
    }
}