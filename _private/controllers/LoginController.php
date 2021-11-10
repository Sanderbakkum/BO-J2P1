<?php

namespace Website\Controllers;

/**
 * Class WebsiteController
 *
 * Deze handelt de logica van de homepage af
 * Haalt gegevens uit de "model" laag van de website (de gegevens)
 * Geeft de gegevens aan de "view" laag (HTML template) om weer te geven
 *
 */
class LoginController {

	public function loginForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('login_form');

	}

	public function handleLoginForm() {
		$result = validateLoginData($_POST);
        
        if ( userNotRegistered( $result['data']['email'])) {
            $result['errors']['email'] = 'Deze gebruiker is niet bekend';
        } else {
            echo "dit werkt"; exit;
        
        }
        $template_engine = get_template_engine();
		echo $template_engine->render('login_form', ['errors' => $result['errors']]);
    }

}




