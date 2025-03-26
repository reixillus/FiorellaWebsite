<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>FiorellaWebsite - LOGIN</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<section>
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/newsBG.png')?>" style="height: 700px; object-fit: fill; padding-left: 20px; padding-right: 20px;" uk-img>
      <div style="max-width: 60%; text-align: center;">
        <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432); padding-top: 20px;">LOGIN</h1>
        
        <div id="form-container">
          <!-- Login Form -->
          <div class="login-container d-flex flex-column align-items-center" id="login-form" style="display: flex;">
            <img src="<?= base_url('assets/images/FloraLogo.png')?>" style="width: 100px; height: auto; margin-bottom: 20px;">
            <form action="<?= base_url('login/filled') ?>" method="POST" style="width: 100%; max-width: 300px;">
              <input type="text" placeholder="Username" id="username" name="username" style="margin-bottom: 10px; width: 100%;">
              <input type="password" placeholder="Password" id="password" name="password" style="margin-bottom: 10px; width: 100%;">
              <button type="submit" style="width: 100%;">Login</button>
              <button type="button" onclick="replaceWithSignUp()" style="width: 100%; margin-top: 10px;">Sign Up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
</section>

<script>
function replaceWithSignUp() {
    document.getElementById('form-container').innerHTML = `
        <div class="login-container d-flex flex-column align-items-center" id="signup-form">
          <img src="<?= base_url('assets/images/FloraLogo.png')?>" alt="FloraLogo" style="width: 100px; height: auto; margin-bottom: 20px;">
          <h1 style="margin-bottom: 20px;">Create Account</h1>
          <form action="<?= BASEURL.'/register/add'?>" method ="POST" style="width: 100%; max-width: 300px;">
            <input type="text" placeholder="Username" id="signup-username" name="username" required style="margin-bottom: 10px; width: 100%;">
            <input type="email" placeholder="Email" id="email" name="email" required style="margin-bottom: 10px; width: 100%;">
            <input type="text" placeholder="Contact No." id="contactno" name="contactno" required style="margin-bottom: 10px; width: 100%;">
            <input type="password" placeholder="Password" id="signup-password" name="password" required style="margin-bottom: 10px; width: 100%;">
            <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password" required style="margin-bottom: 10px; width: 100%;">
            <button type="submit" style="width: 100%;">Sign Up</button>
            <button type="button" onclick="replaceWithLogin()" style="width: 100%; margin-top: 10px;">Back to Login</button>
          </form>
        </div>
    `;
}

function replaceWithLogin() {
    document.getElementById('form-container').innerHTML = `
        <div class="login-container d-flex flex-column align-items-center" id="login-form">
            <img src="<?= base_url('assets/images/FloraLogo.png')?>" style="width: 100px; height: auto; margin-bottom: 20px;">
            <form action="<?= base_url('login/filled') ?>" method="POST" style="width: 100%; max-width: 300px;">
              <input type="text" placeholder="Username" id="username" name="username" style="margin-bottom: 10px; width: 100%;">
              <input type="password" placeholder="Password" id="password" name="password" style="margin-bottom: 10px; width: 100%;">
              <button type="submit" style="width: 100%;">Login</button>
              <button type="button" onclick="replaceWithSignUp()" style="width: 100%; margin-top: 10px;">Sign Up</button>
            </form>
          </div>
    `;
}
</script>

<?= $this->endSection('content') ?>
