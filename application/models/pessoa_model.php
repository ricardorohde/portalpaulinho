<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:16
 */
class Pessoa_model extends CI_Model
{

    public function inserirPessoa($dados = NULL)
    {
        if ($dados != NULL) {
            $this->db->insert("pessoas", $dados);
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgsucesso", "Pessoa cadastrada com sucesso.", "sucesso");
                redirect("pessoa/listarPessoas");
            } else {
                set_mensagem("msgerro", "Não foi possível cadastrar a pessoa. Contate-nos.", "erro");
                redirect("pessoa/listarPessoas");
            }
        }
    }

    public function getPessoas()
    {
        $query = $this->db->get("pessoas");
        return $query;
    }

    public function getPessoaById($id = NULL)
    {
        $this->db->where("id", $id);
        return $this->db->get("pessoas");
    }

}