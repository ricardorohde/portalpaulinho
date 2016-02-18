<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 18/11/15
 * Time: 16:11
 */
class Usuario_model extends CI_Model
{

    public function DoLogin($email = NULL, $senha = NULL)
    {
        if (!empty($email) && !empty($senha)) {
            $this->db->where("u.email", $email);
            $this->db->where("u.senha", $senha);
            $query = $this->db->get("usuario u");
            if ($query->num_rows() == 1) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function GetByEmail($email = NULL)
    {
        if (isset($email)) {
            $this->db->where("u.email", $email);
            $this->db->join("moderador m", "m.id = u.moderador_id");
            $this->db->limit(1);
            return $this->db->get("usuario u")->row();
        } else {
            return FALSE;
        }
    }

    public function GetUsuario()
    {
        $query = $this->db->get("usuario")->result();
        return $query;
    }

}