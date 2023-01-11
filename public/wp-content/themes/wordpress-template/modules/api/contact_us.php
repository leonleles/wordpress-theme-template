<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class ContactUs extends WP_REST_Controller {

    /**
     * Register the routes for the objects of the controller.
     */
    public function register_routes() {
        $version = '1';
        $namespace = 'contact/v' . $version;
        $base = 'send';

        register_rest_route($namespace, '/' . $base, array(
            array(
                'methods' => WP_REST_Server::CREATABLE,
                'callback' => array($this, 'send_message'),
                'permission_callback' => '__return_true'
            ),
        ));
    }

    /**
     * @param $request WP_REST_Request
     * @return WP_REST_Response
     */
    public function send_message($request) {
        $params = $request->get_params();

        $mail_contact_us = get_theme_mod('mail_contact_us');

        if (!$mail_contact_us) return new WP_REST_Response(false, 400);

        $mail = new PHPMailer();
        $mail->isHTML(true);
        $mail->setFrom($params['mail']);
        $mail->addAddress($mail_contact_us, "Usuário do site - " . get_bloginfo('name'));
        $mail->Subject = 'Mensagem enviada do fale conosco no site';
        $mail->Body = "<p><b>Nome: </b>{$params['name']}</p><br/>";
        $mail->Body .= "<p><b>Telefone: </b>{$params['phone']}</p><br/>";
        $mail->Body .= "<p><b>E-mail: </b>{$params['mail']}</p><br/>";
        $mail->Body .= "<p><b>Mensagem: </b>{$params['message']}</p><br/>";

        if ($mail->send()) {
            $response = new WP_REST_Response(true, 200);
        } else {
            $response = new WP_REST_Response(false, 400);
        }

        return $response;
    }

}