<html>
<link rel="stylesheet" href="<?php echo site_url( '/css/style3.css' ) ?>" media="all">
<br>
<br>
<br>

<center><h1>Transformers Community</h1></center>
<div id="login-box">
  <div class="left">
  
    <h1>Inloggen</h1>
    <form action ="<?php echo url('login.handle')?>" method="POST">
    <input type="email" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Wachtwoord" />
    
    <input type="submit" name="signup_submit" value="Inloggen" />
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