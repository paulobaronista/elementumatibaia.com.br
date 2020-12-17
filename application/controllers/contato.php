<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller
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
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('phone');
            $cidade = $this->input->post('cidade');
            $estado = $this->input->post('estado');
            $checkboxEmail = $this->input->post('checkboxEmail');
            $checkboxWhatsApp = $this->input->post('checkboxWhatsApp');
            $checkboxTelefone = $this->input->post('checkboxTelefone');
            $checkboxPolitica = $this->input->post('checkboxPolitica');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('Contato enviado pelo site www.elementumatibaia.com.br');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@elementumatibaia.com.br", "Elementum Residencial Atibaia");
            $this->email->to('contato@elementumatibaia.com.br');
            $this->email->cc('mv_cp_94f_300_1828_3079_14166_68525_3535_3535_faleconosco_hotsiteempreendimento@email.anapro.com.br, renata@spicycomm.com.br, leadselememtum@gmail.com, paulobaronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		      {$nome}<br/>
            E-mail:		      {$email}<br/>
            Telefone:	      {$telefone}<br/>
            Cidade:	          {$cidade}<br/>
            Estado:	          {$estado}<br/>
            Preferência forma de contato: ($checkboxEmail) E-mail ($checkboxWhatsApp) WhatsApp ($checkboxTelefone) Telefone<br/>
            Li e concordo com a política de privacidade: {$checkboxPolitica}<br/>
            Mensagem:	      {$mensagem}<br/>
            </body></html>");

            if ($this->email->send()) {
                redirect('contato/obrigado');
            } else {
                redirect('contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado()
    {
        $data['title'] = 'Elementum Residencial Atibaia';
        $data['description'] = 'Loteamento fechado com terrenos a partir de 360M²';
        $data['keywords'] = 'elementum Atibaia; loteamento Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail()
    {
        $data['title'] = 'Elementum Residencial Atibaia';
        $data['description'] = 'Loteamento fechado com terrenos a partir de 360M²';
        $data['keywords'] = 'elementum Atibaia; loteamento Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/contato.php */
