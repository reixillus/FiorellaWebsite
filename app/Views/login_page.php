<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>FiorellaWebsite - LOGIN</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<section>
    <div class="uk-background-cover d-flex flex-column justify-content-start align-items-start" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill; padding-left: 20px; padding-right: 20px;" uk-img>
    <div style="max-width: 60%; margin: auto;">
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432); padding-left: 8%; padding-top: 20px;">LOGIN</h1>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-child-width-1-2@m uk-margin" uk-grid style="margin: auto;">
        <div class="login-container">
    <img src="images/ROADWISE LOGO.png" alt="RoadWise Logo" class="logo" />
    <h1>Welcome Back!</h1>
    <?php if (session()->getFlashdata('error')): ?>
    <p style="color: red;"><?= session()->get('error'); ?></p>
    <?php endif; ?>
    <form action="<?= base_url('login/filled') ?>" method="POST">
      <input type="text" placeholder="Username" id="username" name="username">
      <input type="password" placeholder="Password" id="password" name="password">
      <button type="submit">Login</button>
      <p>Don't have an account? <span class="toggle" onclick="showSignUp()">Sign Up Here</span></p>
    </form>
</div>

  <!-- Sign Up Form (Initially Hidden) -->
  <div class="login-container" id="signup" style="display: none;">
    <img src="images/logo.png" alt="RoadWise Logo" class="logo" />
    <h1>Create Account</h1>
    <form action="<?= BASEURL.'/register/add'?>" method ="POST">
      <input type="text" placeholder="Username" id="username" name="username" required>
      <input type="email" placeholder="Email" id="email" name="email" required>
      <input type="text" placeholder="Contact No." id="contactno" name="contactno" required>
      <input type="password" placeholder="Password" id="password" name="password" required>
      <input type="password" placeholder="Confirm Password" id="confirm-password" name="confirm-password" required>
      <button>Sign Up</button>
      <p>Already have an account? <span class="toggle" onclick="showLogin()">Login Here</span></p>
    </form>
  </div>
        </div>
    </div>
</section>



<?= $this->endSection('content') ?>