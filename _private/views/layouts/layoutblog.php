<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transforms Community</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style2.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
    
    <link rel="icon" href="<?php echo site_url( '/images/icon.png' ) ?>">

    
</head>
<body>
    <div id="dashboard">

        <div class="item header">Header</div>
        <div class="center">
        <?php echo $this->section( 'content' ) ?>
        </div>
        
        <div class="center2">

        
        


        
        </div>
        
    
    </div>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class= "Logo">
            <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>> <img src="<?php echo site_url( '/images/logo.webp' ) ?>">
            </a>
        </div>

<?php if (isLoggedIn()):?>
    <ul class = "links"> 
            <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
            <a href="<?php echo url( 'blog' ) ?>"<?php if ( current_route_is( 'blog' ) ): ?> class="active"<?php endif ?>>Blog</a>
            <a href="<?php echo url( 'wordtransformer' ) ?>"<?php if ( current_route_is( 'wordtransformer' ) ): ?> class="active"<?php endif ?>>Mijn Informatie</a>
            <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active"<?php endif ?>>Contact</a>
            <a href="<?php echo url( 'logout' ) ?>"<?php if ( current_route_is( 'logout' ) ): ?> class="active"<?php endif ?>>Uitloggen</a>
    <?php else: ?>
        <ul class = "links"> 
            <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
            <a href="<?php echo url( 'overons' ) ?>"<?php if ( current_route_is( 'overons' ) ): ?> class="active"<?php endif ?>>Over ons</a>
            <a href="<?php echo url( 'wordtransformer' ) ?>"<?php if ( current_route_is( 'wordtransformer' ) ): ?> class="active"<?php endif ?>>Word Transformer!</a>
            <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active"<?php endif ?>>Contact</a>
            <a href="<?php echo url( 'register' ) ?>"<?php if ( current_route_is( 'register' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>
            <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'login' ) ): ?> class="active"<?php endif ?>>Inloggen</a>
        </ul>
        <?php endif;?>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    
</body>
</html>