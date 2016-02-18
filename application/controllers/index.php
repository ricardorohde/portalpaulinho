<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 15:52
 */
class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->model("noticia_model", "noticia");
    }

    public function index()
    {
        $parametros["noticiaPrincipal"] = $this->noticia->GetNoticia("principal");
        $parametros["noticiaSecundaria"] = $this->noticia->GetNoticiaSingle("secundaria");
        $parametros["noticiaTerciaria"] = $this->noticia->GetNoticiaSingle("terciaria");
        $parametros["noticiaQuaternaria"] = $this->noticia->GetNoticiaSingle("quaternaria");
        $parametros["noticiaQuinaria"] = $this->noticia->GetNoticiaSingle("quinaria");
        $parametros["noticiaSenaria"] = $this->noticia->GetNoticia("senaria");
        init_front("index", $parametros);
    }

    public function noticia()
    {
        $this->load->library("pagination");
        $maximo = 4;
        $inicio = (!$this->uri->segment("3")) ? 0 : $this->uri->segment("3");

        $config['base_url'] = '/portalpaulinho/index/noticia/';
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

}