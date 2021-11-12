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
class BlogController {

	public function blog() {
        loginCheck();
		$template_engine = get_template_engine();
		echo $template_engine->render('blog');

	}

    public function postMaken() {
        loginCheck();
		$template_engine = get_template_engine();
		echo $template_engine->render('blog.post');

	}

    public function postVerwerken() {

        $title = $_POST['title'];
	    $description = $_POST['description'];
	    $username = getLoggedInUsername();
	    $image = $_POST['image'];


        $connection = dbConnect();
	    $sql = "INSERT INTO `blog` (`title`, `description`, `creator`, `image`) VALUES (:title, :description, :creator, :image)";
			$statement = $connection->prepare( $sql );
			$params = [
				'title' => $title,
				'description' => $description,
				'creator' => $username,
				'image' => $image,
			]; 
			$statement->execute( $params );
			header("Location: /blog");
			die();

	}


}




