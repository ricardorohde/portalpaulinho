<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 03/03/16
 * Time: 14:48
 */
class Galeria_model extends CI_Model
{

    public function inserirGaleria($dados = NULL)
    {
        if ($dados != NULL) {
            $this->db->insert("galeria", $dados);
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgsucesso", "Imagem inserida com sucesso", "sucesso");
                redirect("galeria/listarGaleria");
            } else {
                set_mensagem("msgerro", "A imagem não foi inserida", "erro");
                redirect("galeria/listarGaleria");
            }
        }
    }

    public function excluirGaleria($condicao = NULL)
    {
        if (is_array($condicao)) {
            $this->db->delete("galeria", $condicao);
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgerro", "Imagem removida com sucesso", "sucesso");
                redirect("galeria/listarGaleria");
            } else {
                set_mensagem("msgerro", "Não foi possível remover a imagem", "erro");
                redirect(current_url());
            }
        }
    }

    public function GetGaleria()
    {
        $this->db->order_by("data", "desc");
        $query = $this->db->get("galeria");
        return $query->result();
    }

    public function GetGaleriaPagination($maximo, $minimo)
    {
        $this->db->where("status", 1);
        $this->db->order_by("data", "desc");
        $query = $this->db->get("galeria", $maximo, $minimo);
        return $query;
    }

    public function ContarRegistros()
    {
        $this->db->where("status", 1);
        $query = $this->db->count_all_results("galeria");
        return $query;
    }

}