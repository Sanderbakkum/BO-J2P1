<?php
// Dit bestand hoort bij de router, en bevat nog een aantal extra functies je kunt gebruiken
// Lees meer: https://github.com/skipperbent/simple-php-router#helper-functions
require_once __DIR__ . '/route_helpers.php';

// Hieronder kun je al je eigen functies toevoegen die je nodig hebt
// Maar... alle functies die gegevens ophalen uit de database horen in het Model PHP bestand

/**
 * Verbinding maken met de database
 * @return \PDO
 */
function dbConnect() {

	$config = get_config( 'DB' );

	try {
		$dsn = 'mysql:host=' . $config['HOSTNAME'] . ';dbname=' . $config['DATABASE'] . ';charset=utf8';

		$connection = new PDO( $dsn, $config['USER'], $config['PASSWORD'] );
		$connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
		$connection->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC );

		return $connection;

	} catch ( \PDOException $e ) {
		echo 'Fout bij maken van database verbinding: ' . $e->getMessage();
		exit;
	}

}

/**
 * Geeft de juiste URL terug: relatief aan de website root url
 * Bijvoorbeeld voor de homepage: echo url('/');
 *
 * @param $path
 *
 * @return string
 */
function site_url( $path = '' ) {
	return get_config( 'BASE_URL' ) . $path;
}

function get_config( $name ) {
	$config = require __DIR__ . '/config.php';
	$name   = strtoupper( $name );

	if ( isset( $config[ $name ] ) ) {
		return $config[ $name ];
	}

	throw new \InvalidArgumentException( 'Er bestaat geen instelling met de key: ' . $name );
}

/**
 * Hier maken we de template engine en vertellen de template engine waar de templates/views staan
 * @return \League\Plates\Engine
 */
function get_template_engine() {

	$templates_path = get_config( 'PRIVATE' ) . '/views';

	$template_engine = new League\Plates\Engine( $templates_path );
	$template_engine->addFolder('layouts', $templates_path . '/layouts');

	return $template_engine;

}

/**
 * Geef de naam (name) van de route aan deze functie, en de functie geeft
 * terug of dat de route is waar je nu bent
 *
 * @param $name
 *
 * @return bool
 */
function current_route_is( $name ) {
	$route = request()->getLoadedRoute();

	if ( $route ) {
		return $route->hasName( $name );
	}

	return false;

}

function validateRegistationData($data) {

	$errors = [];

	$email = filter_var( $data['email'], FILTER_VALIDATE_EMAIL );
	$password = trim( $data['password'] );
	
	if ( $email == false ) {
		$errors['email'] = 'Geen geldig email ingevuld';
	}


	if ( strlen( $password ) <6 ) {
		$errors['password'] = 'Geen geldig wachtwoord';
	}

	

	$data = [
		'email' => $email,
		'password' => $password
	];

	return [
		'data' => $data,
		'errors' => $errors
	];

}

function userNotRegistered($email) {
 
	// Checken of de gebruiker al bestaat
	 
	$connection = dbConnect();
	$sql = "SELECT * FROM `gebruikers` WHERE `email` = :email";
	$statement = $connection->prepare($sql);
	$statement->execute(['email' => $email]);
	 
	$num_rows = $statement->rowCount();
	 
	return ($num_rows === 0); // True of false
	 
	}
	

function createUser($email, $password){
	
	$connection = dbConnect();
	$sql = "INSERT INTO `users` (`email`, `password`) VALUES (:email, :password)";
			$statement = $connection->prepare( $sql );
			$safe_password = password_hash( $password, PASSWORD_DEFAULT);
			$params = [
				'email' => $email,
				'password' => $safe_password
			]; 
			$statement->execute( $params );
			echo "Klaar";

}