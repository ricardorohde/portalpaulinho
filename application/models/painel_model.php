<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 26/02/16
 * Time: 19:28
 */
class Painel_model extends CI_Model
{

    public function getBiografia()
    {
        $query = $this->db->get("biografia")->row();
        return $query;
    }

    public function biografia($dados = NULL)
    {
        if ($dados != NULL) {
            $this->db->update("biografia", $dados, "id = 1");
            if ($this->db->affected_rows() > 0) {
                set_mensagem("msgwarning", "Biografia alterada com sucesso.", "warning");
                redirect("/painel");
            } else {
                set_mensagem("msgerro", "Não foi possível alterar a biografia. Contate-nos.", "erro");
                redirect("/painel");
            }
        }
    }

}