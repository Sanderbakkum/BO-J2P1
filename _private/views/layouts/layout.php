<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transforms Community</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
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
        <div class="left">
            <h1> Transformers <br> Community </1>
            <h3 class="otext"> Wij empoweren jongeren<br>om mentaalgezond te zijn.</h3>
            <hr class="underline">
            <p class="kvk"> Stichting Transformers Community is geregistreerd<br>bij de Kamer van Koophandel onder RSIN nummer<br> 861477194.
        </div>
        <div class="middle">
            <h3>Let's Keep in touch!</h3>
            <p>Wil je verhalen en praktische tips ontvangen? Schrijf je <br> in voor onze nieuwsbrief:
            <div class="nieuwsbrief">
                <input class="emailinp" type="email" placeholder="E-mail">
                <input class="Joinbtn" type="submit" value="Join">
            </div>
                <div class="contactus">
                    <h3> Volg ons via:</h3>
                    <img alt="Insta" src="https://images-ext-1.discordapp.net/external/yL_6GEgww1MU5s0AbfDTo93l3pxcxImrmk-MDW5q90k/https/static.wixstatic.com/media/da7ef6dd1302486c9a67baebe4b364bc.png/v1/fill/w_28%2Ch_28%2Cal_c%2Cq_85%2Cusm_0.66_1.00_0.01/da7ef6dd1302486c9a67baebe4b364bc.webp">
                    <img alt="FB" src="https://static.wixstatic.com/media/e0678ef25486466ba65ef6ad47b559e1.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01/e0678ef25486466ba65ef6ad47b559e1.webp">
                    <img alt="Id" src="https://static.wixstatic.com/media/f61c7a3b4b4947b28511a25034973383.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01/f61c7a3b4b4947b28511a25034973383.webp">
                    <img alt="Id" src="https://static.wixstatic.com/media/e9bb463a1bc4434c9d33b81b1fe937f5.png/v1/fill/w_28,h_28,al_c,q_85,usm_0.66_1.00_0.01/e9bb463a1bc4434c9d33b81b1fe937f5.webp">
                </div>  
        <div class="right">
            <h4 href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active1"<?php endif ?>>Home</a><br><br>
            <h4 href="<?php echo url( 'overons' ) ?>"<?php if ( current_route_is( 'overons' ) ): ?> class="active1"<?php endif ?>>Over ons</a><br><br>
            <h4 href="<?php echo url( 'wordtransformer' ) ?>"<?php if ( current_route_is( 'wordtransformer' ) ): ?> class="active1"<?php endif ?>>Word Transformer!</a><br><br>
            <h4 href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active1"<?php endif ?>>Contact</a>
        </div>


        </div>
        </div>
        
    
    </div>
    <nav>
        <input id="nav-toggle" type="checkbox">
        <div class= "Logo">
            <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>> <img src="<?php echo site_url( '/images/logo.webp' ) ?>">
            </a>
        </div>


        <ul class = "links"> 
            <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
            <a href="<?php echo url( 'overons' ) ?>"<?php if ( current_route_is( 'overons' ) ): ?> class="active"<?php endif ?>>Over ons</a>
            <a href="<?php echo url( 'wordtransformer' ) ?>"<?php if ( current_route_is( 'wordtransformer' ) ): ?> class="active"<?php endif ?>>Word Transformer!</a>
            <a href="<?php echo url( 'contact' ) ?>"<?php if ( current_route_is( 'contact' ) ): ?> class="active"<?php endif ?>>Contact</a>
            <a href="<?php echo url( 'register' ) ?>"<?php if ( current_route_is( 'register' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>
            
            
            
            <li><a href="">Inloggen</a></li>
    
        </ul>
        <label for="nav-toggle" class="icon-burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </label>
    </nav>
    
</body>
</html>