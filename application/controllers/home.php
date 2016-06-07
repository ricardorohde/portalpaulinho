<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 01/05/16
 * Time: 18:03
 */

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->model("noticia_model", "noticia");
        $this->load->model("galeria_model", "galeria");
        $this->load->model("painel_model", "painel");
    }

    public function biografia()
    {
        init_front("front/biografia");
    }

    public function contato()
    {
        init_front("front/contato");
    }

    public function noticia()
    {
        $this->load->library("pagination");
        $maximo = 4;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");

        $config['base_url'] = '/portalpaulinho/home/noticia/';
        $config['total_rows'] = $this->noticia->ContarRegistros();
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Próximo';
        $config['prev_link'] = 'Anterior';
        $this->pagination->initialize($config);

        $param['paginacao'] = $this->pagination->create_links();
        $param['query'] = $this->noticia->GetNoticiaPagination($maximo, $inicio)->result();
        init_front("front/noticia", $param);
    }

    public function imprensa()
    {
        init_front("front/imprensa");
    }

    public function galeria()
    {
        $this->load->library("pagination");
        $maximo = 12;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");

        $config['base_url'] = '/portalpaulinho/home/galeria/';
        $config['total_rows'] = $this->galeria->ContarRegistros();
        $config['per_page'] = $maximo;
        $config['first_link'] = 'Primeiro';
        $config['last_link'] = 'Último';
        $config['next_link'] = 'Próximo';
        $config['prev_link'] = 'Anterior';
        $this->pagination->initialize($config);

        $param['paginacao'] = $this->pagination->create_links();
        $param['query'] = $this->galeria->GetGaleriaPagination($maximo, $inicio)->result();
        init_front("front/galeria", $param);
    }
}