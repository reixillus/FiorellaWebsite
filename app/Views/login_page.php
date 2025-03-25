<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>FiorellaWebsite - Home</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<div class="login-container">
    <img src="images/FloraLogo.png" alt="FloraLogo.png" class="logo" />
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

<?= $this->endSection('content') ?>