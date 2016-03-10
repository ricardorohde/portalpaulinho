<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 03/03/16
 * Time: 14:46
 */
class Galeria extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->model("noticia_model", "noticia");
        $this->load->model("galeria_model", "galeria");
    }

    public function publicarGaleria()
    {
        init_back("back/publicar-galeria");
    }

    public function inserirGaleria()
    {
        $upload = $this->noticia->UploadNoticia("imagem");
        if (is_array($upload) && $upload["file_name"] != "") {
            $dados = array(
                "imagem" => $upload["file_name"],
                "data" => date("Y-m-d H:i:s"),
                "status" => 1
            );
            $this->galeria->inserirGaleria($dados);
        } else {
            var_dump($upload);
        }
    }

    public function excluirGaleria()
    {
        $this->galeria->excluirGaleria(array("id" => $this->input->get("id")));
    }

    public function listarGaleria()
    {
        init_back("back/listar-galeria");
    }

}