<?php

class DefaultController
{
    public function __construct()
    {
        include_once($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
        require('models/default-model.php' );
    }

    // function para criar uma news
    public function create_news()
    {
        if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone'])) {
            $default_model = new defaultModel();
            //validacao para impedir sql injection
            $palavras = ['delete','update','insert','drop'];
            //procura e substitui as palavras por nd, assim o banco n aceita a inserção
            $news = array(
            'nome' => str_ireplace($palavras,'',$_POST['nome']),
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone']
            );
            if ($default_model->create("news",$news)) {
                return true;
            }
        }
        return false;
    }

    // function para criar um contato
    public function create_contact()
    {
        if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['telefone']) && !empty($_POST['mensagem'])) {
            $default_model = new defaultModel();

            //validacao para impedir sql injection
            $palavras = ['delete','update','insert','drop'];
            //procura e substitui as palavras por nd, assim o banco n aceita a inserção
            $contact = array(
            'nome' => str_ireplace($palavras,'',$_POST['nome']),
            'email' => $_POST['email'],
            'telefone' => $_POST['telefone'],
            'mensagem' => $_POST['mensagem']
            );

            if ($default_model->create("contacts",$contact)) {
                if ($this->send_mail_to_admin($contact)) {
                    return true;
                }
            }
        }
        return false;
    }
    /*function para enviar email de aviso para o admin, ao receber novo contato*/
    public function send_mail_to_admin($dados){

        $admin_email = get_option('admin_email');
        $from = $dados['nome']." < ".$dados['email']." >";
        $header = array('Content-Type: text/html; charset=UTF-8');
        $subject = "Formulario Fale Conosco - ".$from;
        $text = "<h3>Mensagem:</h3> ".$dados['mensagem']."<p> <h3>Telefone:</h3> ".$dados["telefone"];
        $text = $text."<p> <h3>De:</h3> ".$from;
        $result = wp_mail( $admin_email, $subject, $text, $header );
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
