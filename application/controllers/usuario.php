<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('America/Sao_Paulo');
        $this->load->library("session");
        $this->load->model("usuario_model", "usuario");
    }

    public function index()
    {
        $this->login();
    }

	public function login()
	{
        $this->form_validation->set_rules("email", "Email", "trim|required");
        $this->form_validation->set_rules("senha", "Senha", "required");
        $this->form_validation->set_error_delimiters('<p class="callout alert">', '</p>');
        if ($this->form_validation->run() == TRUE) {
            $email = $this->input->post("email");
            $senha = md5($this->input->post("senha"));
            if ($this->usuario->DoLogin($email, $senha)) {
                $query = $this->usuario->GetByEmail($email);
                $dados = array(
                    "userId" => $query->id,
                    "userName" => $query->nome,
                    "userEmail" => $query->email,
                    "userLastLogin" => date("Y/m/d H:i:s"),
                    "userLevel" => $query->nivel,
                    "userLogin" => TRUE
                );
                $this->session->set_userdata($dados);
                redirect("/painel");
            } else {
                $query = $this->usuario->GetByEmail($email);
                if (empty($query)) {
                    set_mensagem("msgerro", "Usuário inexistente", "erro");
                    redirect("usuario/login");
                } elseif ($query->senha != $senha) {
                    set_mensagem("msgerro", "Senha inválida", "erro");
                    redirect("usuario/login");
                } else {
                    set_mensagem("msgerro", "Erro desconhecido. Contate o administrador", "erro");
                    redirect("usuario/login");
                }
            }
        }
		init_front('front/login');
	}

    public function logout()
    {
        if ($this->session->userdata("userLogin") == TRUE) {
            $this->session->sess_destroy();
            set_mensagem("msgerro", "Deslogado com sucesso", "erro");
            redirect("/");
        } else {
            echo "Você não está logado!";
        }
    }

}

/* End of file usuario.php */
/* Location: ./application/controllers/usuario.php */