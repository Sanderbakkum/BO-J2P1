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
class RegisterController {

	

	public function registrationForm() {

		$template_engine = get_template_engine();
		echo $template_engine->render('register');

	}

public function registrationprocess(){
		
		
	$result = validateRegistationData($_POST);


	if ( count( $result['errors'] ) === 0 ) {


		createUser($result['data']['email'], $result['data']['password'], $result['data']['firstname'], $result['data']['lastname'], $result['data']['username']);
		
	} else {
			$errors['email'] = 'Dit gebruiker bestaat al';
		}
	
	}

	public function login() {

		$template_engine = get_template_engine();
		echo $template_engine->render('login');

	}

}

