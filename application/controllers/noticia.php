<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 15:05
 */
class Noticia extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->model("usuario_model", "usuario");
        $this->load->model("noticia_model", "noticia");
    }

    public function publicarNoticiaPrincipal()
    {
        $this->form_validation->set_rules("titulo", "Título", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $upload = $this->noticia->UploadNoticia("imagem");
            if (is_array($upload) && $upload["file_name"] != "") {
                $dados = array(
                    "imagem" => $upload["file_name"],
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "status" => 1
                );
                $this->noticia->inserirNoticia($dados, "principal", "Principal");
            } else {
                var_dump($upload);
            }
        }
        init_back("back/publicar-noticia-principal");
    }

    public function publicarNoticiaSecundaria()
    {
        $this->form_validation->set_rules("titulo", "Título", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $upload = $this->noticia->UploadNoticia("imagem");
            if (is_array($upload) && $upload["file_name"] != "") {
                $dados = array(
                    "imagem" => $upload["file_name"],
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "status" => 1
                );
                $this->noticia->inserirNoticia($dados, "secundaria", "Secundaria");
            } else {
                var_dump($upload);
            }
        }
        init_back("back/publicar-noticia-secundaria");
    }

    public function publicarNoticiaTerciaria()
    {
        $this->form_validation->set_rules("titulo", "Título", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $upload = $this->noticia->UploadNoticia("imagem");
            if (is_array($upload) && $upload["file_name"] != "") {
                $dados = array(
                    "imagem" => $upload["file_name"],
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "status" => 1
                );
                $this->noticia->inserirNoticia($dados, "terciaria", "Terciaria");
            } else {
                var_dump($upload);
            }
        }
        init_back("back/publicar-noticia-terciaria");
    }

    public function publicarNoticiaQuaternaria()
    {
        $this->form_validation->set_rules("titulo", "Título", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $upload = $this->noticia->UploadNoticia("imagem");
            if (is_array($upload) && $upload["file_name"] != "") {
                $dados = array(
                    "imagem" => $upload["file_name"],
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "status" => 1
                );
                $this->noticia->inserirNoticia($dados, "quaternaria", "Quaternaria");
            } else {
                var_dump($upload);
            }
        }
        init_back("back/publicar-noticia-quaternaria");
    }

    public function publicarNoticiaQuinaria()
    {
        $this->form_validation->set_rules("titulo", "Título", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $upload = $this->noticia->UploadNoticia("imagem");
            if (is_array($upload) && $upload["file_name"] != "") {
                $dados = array(
                    "imagem" => $upload["file_name"],
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "status" => 1
                );
                $this->noticia->inserirNoticia($dados, "quinaria", "Quinaria");
            } else {
                var_dump($upload);
            }
        }
        init_back("back/publicar-noticia-quinaria");
    }

    public function publicarNoticiaSenaria()
    {
        $this->form_validation->set_rules("titulo", "Título", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $upload = $this->noticia->UploadNoticia("imagem");
            if (is_array($upload) && $upload["file_name"] != "") {
                $dados = array(
                    "imagem" => $upload["file_name"],
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "status" => 1
                );
                $this->noticia->inserirNoticia($dados, "senaria", "Senaria");
            } else {
                var_dump($upload);
            }
        }
        init_back("back/publicar-noticia-senaria");
    }

    public function listarNoticiaPrincipal()
    {
        init_back("back/listar-noticia-principal");
    }

    public function listarNoticiaSecundaria()
    {
        init_back("back/listar-noticia-secundaria");
    }

    public function listarNoticiaTerciaria()
    {
        init_back("back/listar-noticia-terciaria");
    }

    public function listarNoticiaQuaternaria()
    {
        init_back("back/listar-noticia-quaternaria");
    }

    public function listarNoticiaQuinaria()
    {
        init_back("back/listar-noticia-quinaria");
    }

    public function listarNoticiaSenaria()
    {
        init_back("back/listar-noticia-senaria");
    }

    public function editarNoticia()
    {
        $this->form_validation->set_rules("titulo", "Título", "trim|required");
        $this->form_validation->set_rules("conexao", "Nome do(s) Conexão Jovem", "trim|required");
        $this->form_validation->set_rules("descricao", "Descrição", "trim|required");
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $upload = $this->noticia->UploadNoticia("imagem");
            if (is_array($upload) && $upload["file_name"] != "") {
                $dados = array(
                    "imagem" => $upload["file_name"],
                    "titulo" => $this->input->post("titulo"),
                    "video" => $this->input->post("video"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "nome_conexao" => $this->input->post("conexao"),
                    "status" => $this->input->post("status")
                );
                $this->noticia->editarNoticia($dados, array("id" => $this->input->post("id")));
                redirect(base_url("noticia/listarNoticia"));
            } elseif (!isset($upload)) {
                $remover = array("/watch?", "=");
                $dados = array(
                    "video" => str_replace($remover, "/", $this->input->post("video")),
                    "titulo" => $this->input->post("titulo"),
                    "descricao" => $this->input->post("descricao"),
                    "data" => date("Y-m-d H:i:s"),
                    "url" => gerar_url($this->input->post("titulo")),
                    "nome_conexao" => $this->input->post("conexao"),
                    "status" => $this->input->post("status")
                );
                $this->noticia->inserirNoticia($dados);
            } else {
                var_dump($upload);
            }
        }
        init_back("back/editar-noticia");
    }

    public function excluirNoticia()
    {
        $this->noticia->excluirNoticia(array("id" => $this->input->get("id")));
    }

    public function buscarNoticia()
    {
        $busca = array(
            "titulo" => $this->input->get("busca"),
            "descricao" => $this->input->get("busca"),
            "nomeConexao" => $this->input->get("busca")
        );
        if ($this->input->get("busca") == "") {
            set_mensagem("msgerro", "Faça uma busca para prosseguir", "erro");
            redirect("/");
        } elseif ($this->noticia->FindNoticia($busca["titulo"], $busca["descricao"], $busca["nomeConexao"]) == NULL) {
            set_mensagem("msgerro", "A sua pesquisa não retornou resultados", "erro");
            redirect("/");
        } else {
            $query['dados'] = $this->noticia->FindNoticia($busca["titulo"], $busca["descricao"], $busca["nomeConexao"]);
            init_front("front/listar-noticia", $query);
        }
    }

    public function visualizarNoticiaPrincipal()
    {
        init_front("front/visualizar-noticia-principal");
    }

    public function visualizarNoticiaSecundaria()
    {
        init_front("front/visualizar-noticia-secundaria");
    }

    public function visualizarNoticiaTerciaria()
    {
        init_front("front/visualizar-noticia-terciaria");
    }

    public function visualizarNoticiaQuaternaria()
    {
        init_front("front/visualizar-noticia-quaternaria");
    }

    public function visualizarNoticiaQuinaria()
    {
        init_front("front/visualizar-noticia-quinaria");
    }

    public function visualizarNoticiaSenaria()
    {
        init_front("front/visualizar-noticia-senaria");
    }

}