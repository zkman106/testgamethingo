<?php
  include_once 'header.php'
?>


<section class="signup-form">
    <h2>Log In</h2>
    <div class="signup-form-form">
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="name" placeholder="Username/Email...">
        <input type="password" name="pwd" placeholder="Password...">
        <input type="password" name="pwdrepeat" placeholder="Repeat Password...">
        <button type="submit" name="submit">Log In</button>
    </form>
</div>
</section>


<?php
  include_once 'footer.php'
?>

