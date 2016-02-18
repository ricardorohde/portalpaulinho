<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:16
 */
class Noticia_model extends CI_Model
{

    public function inserirNoticia($dados = NULL, $bancoNoticia = NULL, $redirect = NULL)
    {
        if ($dados != NULL) {
            $this->db->insert("noticia_$bancoNoticia", $dados);
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgsucesso", "Projeto adicionado com sucesso", "sucesso");
                redirect("noticia/listarNoticia$redirect");
            } else {
                set_mensagem("msgerro", "Não foi possível adicionar o projeto", "erro");
                redirect("noticia/listarNoticia$redirect");
            }
        }
    }

    public function editarNoticia($dados = NULL, $condicao = NULL, $bancoNoticia = NULL, $redirect = NULL)
    {
        if ($dados != NULL && is_array($condicao)) {
            $this->db->update("noticia_$bancoNoticia", $dados, $condicao);
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgsucesso", "Projeto editado com sucesso", "sucesso");
                redirect("noticia/listarNoticia$redirect");
            } else {
                set_mensagem("msgerro", "Não foi possível editar o projeto", "erro");
                redirect("noticia/listarNoticia$redirect");
            }
        }
    }

    public function excluirNoticia($condiçao = NULL, $bancoNoticia = NULL, $redirect = NULL)
    {
        if (is_array($condiçao)) {
            $this->db->delete("noticia_$bancoNoticia", $condiçao);
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgerro", "Projeto excluído com sucesso", "erro");
                redirect("noticia/listarNoticia$redirect");
            } else {
                set_mensagem("msgerro", "Não foi possível excluir o projeto", "erro");
                redirect(current_url());
            }
        }
    }

    public function UploadNoticia($campo = NULL)
    {
        $config["upload_path"] = "./uploads/";
        $config["allowed_types"] = "gif|jpg|png";
        $this->load->library("upload", $config);
        if ($this->upload->do_upload($campo)) {
            return $this->upload->data();
        } else {
            $this->upload->display_errors();
        }
    }

    public function GetNoticia($bancoNoticia = NULL)
    {
        $this->db->limit(5);
        $this->db->order_by("data", "desc");
        $query = $this->db->get("noticia_$bancoNoticia");
        return $query->result();
    }

    public function GetNoticiaSingle($bancoNoticia = NULL)
    {
        $this->db->limit(1);
        $this->db->order_by("data", "desc");
        $query = $this->db->get("noticia_$bancoNoticia");
        return $query->row();
    }

    public function GetNoticiaPagination($maximo, $minimo)
    {
        $this->db->where("status", 1);
        $this->db->order_by("data", "desc");
        $query = $this->db->get("noticia_principal", $maximo, $minimo);
        return $query;
    }

    public function GetNoticiaById($id = NULL, $bancoNoticia = NULL)
    {
        $this->db->where("id", $id);
        return $this->db->get("noticia_$bancoNoticia");
    }

    public function ContarRegistros()
    {
        $this->db->where("status", 1);
        $query = $this->db->count_all_results("noticia_principal");
        return $query;
    }

    public function FindNoticia($titulo = NULL, $descricao = NULL, $nomeConexao = NULL)
    {
        $query = $this->db->query("SELECT * FROM noticia
                                  WHERE status = 1 AND titulo LIKE '%$titulo%'
                                  OR status = 1 AND descricao LIKE '%$descricao%'
                                  OR status = 1 AND nome_conexao LIKE '$nomeConexao%'");
        return $query->result();
    }


}