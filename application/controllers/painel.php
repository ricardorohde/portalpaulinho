<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 11:24
 */
class Painel extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->library("session");
        $this->load->model("painel_model", "painel");
        if (!$this->session->userdata("userLogin")) {
            redirect("/");
        }
    }

    public function index()
    {
        $this->painel();
    }

    public function painel()
    {
        init_back("back/painel");
    }

    public function editarBiografia()
    {
        $this->form_validation->set_rules("texto", "Texto", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $dados = array(
                "texto" => $this->input->post("texto"),
                "data" => date("Y-m-d H:i:s")
            );
            $this->painel->biografia($dados);
        }
        init_back("back/biografia");
    }

}