<?php
/**
 * Created by PhpStorm.
 * User: enzo
 * Date: 19/11/15
 * Time: 12:54
 */

function gerar_url($string)
{
    $a = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿ??"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $b = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr                                 ';
    $string = strtr($string, $a, $b);
    $string = strip_tags(trim($string));
    $string = str_replace(" ", "-", $string);
    $string = str_replace(",", "-", $string);
    $string = str_replace(array("-----", "----", "---", "--"), "-", $string);
    $string = strtolower($string);
    return $string;
}

//Carregar um ou vários arquivos .CSS de uma pasta
function load_css($arquivo = NULL, $pasta = "css", $media = "all")
{

    if ($arquivo != NULL) {
        $CI = &get_instance();
        $CI->load->helper("url");
        $retorno = "";

        if (is_array($arquivo)) {
            foreach ($arquivo as $css) {
                $retorno .= '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$css.css") . '" media="' . $media . '" />';
            }
        } else {
            $retorno .= '<link rel="stylesheet" type="text/css" href="' . base_url("$pasta/$arquivo.css") . '" media="' . $media . '" />';
        }
    }
    return $retorno;
}

//Carregar um ou vários arquivos .JS de uma pasta ou servidor remoto
function load_js($arquivo = NULL, $pasta = "js", $remoto = FALSE)
{
    if ($arquivo != NULL) {
        $CI = &get_instance();
        $CI->load->helper("url");
        $retorno = "";

        if (is_array($arquivo)) {
            foreach ($arquivo as $js) {
                if ($remoto) {
                    $retorno .= '<script type="text/javascript" src="' . $js . '"></script>';
                } else {
                    $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$js.js") . '"></script>';
                }
            }
        } else {
            if ($remoto) {
                $retorno .= '<script type="text/javascript" src="' . $arquivo . '"></script>';
            } else {
                $retorno .= '<script type="text/javascript" src="' . base_url("$pasta/$arquivo.js") . '"></script>';
            }
        }
    }
    return $retorno;
}

function resumirNoticia($string, $words = '100')
{
    $string = strip_tags($string);
    $count = strlen($string);

    if ($count <= $words) {
        return $string;
    } else {
        $strpos = strrpos(substr($string, 0, $words), ' ');
        return substr($string, 0, $strpos) . '..';
    }
}

function init_front($view = NULL, $vars = NULL)
{
    $ci = &get_instance();
    $ci->load->view("front/header");
    $ci->load->view($view, $vars);
    $ci->load->view("front/footer");
}

function init_back($view = NULL, $vars = NULL)
{
    verificarSeEstaLogado();
    $ci = &get_instance();
    $ci->load->view("back/header");
    $ci->load->view($view, $vars);
    $ci->load->view("back/footer");
}

function verificarSeEstaLogado()
{
    $ci = &get_instance();
    if (!$ci->session->userdata("userLogin")) {
        session_destroy();
        set_mensagem("msgerro", "Você precisa estar logado para prosseguir", "erro");
        redirect("/");
    } else {
        return TRUE;
    }
}

//Define uma mensagem para ser exibida na próxima tela carregada
function set_mensagem($id = "msgerro", $msg = NULL, $tipo = "erro")
{
    $ci = &get_instance();
    switch ($tipo):
        case "erro":
            $ci->session->set_flashdata($id, '<div class="alert alert-danger"><p>' . $msg . '</p></div>');
            break;
        case "warning":
            $ci->session->set_flashdata($id, '<div class="alert alert-warning"><p>' . $msg . '</p></div>');
            break;
        case "sucesso":
            $ci->session->set_flashdata($id, '<div class="alert alert-success"><p>' . $msg . '</p></div>');
            break;
        default:
            $ci->session->set_flashdata($id, '<div class="alert alert-info"><p>' . $msg . '</p></div>');
            break;
    endswitch;
}

//Verifica se existe uma mensagem para ser exibida na tela atual
function get_mensagem($id, $printar = TRUE)
{
    $ci = &get_instance();
    if ($ci->session->flashdata($id)) {
        if ($printar) {
            echo $ci->session->flashdata($id);
            return TRUE;
        } else {
            return $ci->session->flashdata($id);
        }
    }
    return FALSE;
}

function enviar_email($assunto, $msg, $destino, $nomeDestino, $de)
{
    $ci = get_instance();
    $ci->load->library("My_PHPMailer");
    $mail = new PHPMailer();
    $mail->IsSMTP(); //habilita  smtp
    $mail->SMTPAuth = TRUE; //ativa email autenticado
    $mail->Host = 'smtp.profpaulinho.com.br'; //servidor de envio
    $mail->Port = '587'; //porta de envio
    $mail->CharSet = "UTF-8"; //charset html
    $mail->Username = 'profpaulinho@profpaulinho.com.br'; //email de envio
    $mail->Password = '123456asd'; //senha

    $mail->From = 'profpaulinho@profpaulinho.com.br'; //remetente
    $mail->FromName = $de; //nome remetente

    $mail->IsHTML(true);
    $mail->Subject = $assunto; //assunto
    $mail->Body = $msg; //mensagem
    $mail->AddAddress($destino, $nomeDestino); //email e nome do destino
    $mail->Send(); //enviar Email
}