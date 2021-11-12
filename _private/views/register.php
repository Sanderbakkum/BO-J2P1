<html>
<link rel="stylesheet" href="<?php echo site_url( '/css/style3.css' ) ?>" media="all">
<br>
<br>
<br>

<center><h1>Transformers Community</h1></center>
<div id="login-box">
  <div class="left">
  
    <h1>Aanmelden</h1>
    <form action ="/register/verwerken" method="POST">
    <input type="text" name="username" placeholder="Gebruikersnaam" />
    <input type="email" name="email" placeholder="E-mail" />
    <input type="text" name="firstname" placeholder="Voornaam" />
    <input type="text" name="lastname" placeholder="Achternaam" />
    <input type="password" name="password" placeholder="Wachtwoord" />
    <input type="password" name="password2" placeholder="Herhaal wachtwoord" />
    
    <input type="submit" name="signup_submit" value="Aanmelden" />
    </form>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in met facebook</button>
    <button class="social-signin twitter">Log in met Twitter</button>
    <button class="social-signin google">Log in met Google+</button>
  </div>
  <div class="or">OF</div>
</div>
</html>