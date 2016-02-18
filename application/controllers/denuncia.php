<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 15:05
 */
class Denuncia extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->model("denuncia_model", "denuncia");
    }

    public function postarDenuncia()
    {
        $this->form_validation->set_rules("nome", "Seu nome", "trim|required");
        $this->form_validation->set_rules("telefone", "Seu telefone", "trim|required");
        $this->form_validation->set_rules("cep", "CEP", "trim|required");
        $this->form_validation->set_rules("endereco", "Endereço", "trim|required");
        $this->form_validation->set_rules("bairro", "Bairro", "trim|required");
        $this->form_validation->set_rules("numero", "Número", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $dados = array(
                "nome" => $this->input->post("nome"),
                "telefone" => $this->input->post("telefone"),
                "cep" => $this->input->post("cep"),
                "endereco" => $this->input->post("endereco"),
                "bairro" => $this->input->post("bairro"),
                "numero" => $this->input->post("numero"),
                "complemento" => $this->input->post("complemento"),
                "pontoref" => $this->input->post("pontoref"),
                "cidade" => $this->input->post("cidade"),
                "descricao" => $this->input->post("descricao"),
                "data" => date("Y-m-d"),
            );
            $this->denuncia->inserirDenuncia($dados);

        }
        init_front("front/postar-denuncia");
    }

    public function listarDenuncia()
    {
        init_back("back/listar-denuncia");
    }

    public function visualizarDenuncia()
    {
        init_back("back/visualizar-denuncia");
    }

}