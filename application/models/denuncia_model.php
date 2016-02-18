<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:16
 */
class Denuncia_model extends CI_Model
{

    public function inserirDenuncia($dados = NULL)
    {
        if ($dados != NULL) {
            $this->db->insert("denuncia", $dados);
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgwarning", "Denuncia postada com sucesso. Entraremos em contato assim que possível.", "warning");
                redirect("/");
            } else {
                set_mensagem("msgerro", "Não foi possível postar a denuncia. Contate-nos.", "erro");
                redirect("/");
            }
        }
    }

    public function GetDenuncia()
    {
        $query = $this->db->get("denuncia");
        return $query;
    }

    public function GetDenunciaById($id = NULL)
    {
        $this->db->where("id", $id);
        return $this->db->get("denuncia");
    }

}