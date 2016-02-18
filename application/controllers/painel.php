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
        $this->load->model("usuario_model", "usuario");
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

}