<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Elementum Residencial Atibaia';
        $data['description'] = 'Loteamento fechado com terrenos a partir de 360M²';
        $data['keywords'] = 'elementum Atibaia; loteamento Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['home'] = 'active';
        $conteudo['pagina_view'] = 'home_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadeprivacidade()
    {
        $data['title'] = 'Elementum Residencial Atibaia';
        $data['description'] = 'Loteamento fechado com terrenos a partir de 360M²';
        $data['keywords'] = 'elementum Atibaia; loteamento Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['politicadeprivacidade'] = 'active';
        $conteudo['pagina_view'] = 'politicadeprivacidade_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
    public function politicadecookies()
    {
        $data['title'] = 'Elementum Residencial Atibaia';
        $data['description'] = 'Loteamento fechado com terrenos a partir de 360M²';
        $data['keywords'] = 'elementum Atibaia; loteamento Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['politicadecookies'] = 'active';
        $conteudo['pagina_view'] = 'politicadecookies_view';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/home.php */
