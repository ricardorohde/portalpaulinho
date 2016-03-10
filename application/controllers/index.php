<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

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
        $this->load->model("galeria_model", "galeria");
        $this->load->model("painel_model", "painel");
    }

    public function index()
    {
        $parametros["noticiaPrincipal"] = $this->noticia->GetNoticiaFront("principal");
        $parametros["noticiaSecundaria"] = $this->noticia->GetNoticiaSingle("secundaria");
        $parametros["noticiaTerciaria"] = $this->noticia->GetNoticiaSingle("terciaria");
        $parametros["noticiaQuaternaria"] = $this->noticia->GetNoticiaSingle("quaternaria");
        $parametros["noticiaQuinaria"] = $this->noticia->GetNoticiaSingle("quinaria");
        $parametros["noticiaSenaria"] = $this->noticia->GetNoticiaFront("senaria");
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

    public function biografia()
    {
        init_front("front/biografia");
    }

    public function contato()
    {
        init_front("front/contato");
    }

    public function enviarContato()
    {
        $composicao = array();
        $composicao["assunto"] = $this->input->post("assunto");
        $composicao["texto"] =
            "<p>O contato <strong>".$this->input->post("nome")."</strong>
            com o email <strong>".$this->input->post("email")."</strong>
            lhe enviou a seguinte mensagem: </p><br/>".$this->input->post("texto");
        $composicao["destino"] = "profpaulinho@profpaulinho.com.br";
        $composicao["nomeDestino"] = "Professor Paulinho";

        enviar_email($composicao["assunto"], $composicao["texto"], $composicao["destino"], $composicao["nomeDestino"], $this->input->post("nome"));
        set_mensagem("msgsucesso", "Mensagem enviada com sucesso! Aguarde retorno.", "sucesso");
        redirect("/");
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

        $config['base_url'] = '/portalpaulinho/index/galeria/';
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