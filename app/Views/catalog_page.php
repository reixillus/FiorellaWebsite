<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>The Bluey Shop - Catalog</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

<section>
  <div class="uk-background-cover" data-src="<?= base_url('assets/images/HomeBackGround.png')?>" style="object-fit: contain; padding-bottom: 10%;" uk-img>
    <div style="padding-block: 50px; max-width: 60%; margin: auto;">
      <h1 style="font-family: DynaPuff; font-size: 90px; font-weight: bold; color: rgb(126, 209, 94); text-shadow: 2px 2px rgba(0, 0, 0, 0.432); padding-block: 10px; text-align: center;">UPDATES</h1>
      <button class="zoom genbutton mt-3" onclick="window.location.href='<?= base_url('/'); ?>'" style="color: rgb(47, 62, 70); text-decoration: none;">Go Back</button>
      <div uk-filter="target: .js-filter" style="padding-top: 3%;">

        <ul class="js-filter uk-child-width-1-2 uk-child-width-1-3@m uk-text-center" uk-grid>
              
          <li data-color="apparel">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/ForestsBG.jpg')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-position-bottom">
                 <p style="color: white; background-color: rgb(43,44,65); border-radius: 10px;">BOSS AI UPDATED</p>
                </div>
            </div>
          </li>
          <li data-color="apparel">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/WeddingBackground.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/ForestsBG.jpg')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-position-bottom">
                 <p style="color: white; background-color: rgb(43,44,65); border-radius: 10px;">Weapon Switching Added</p>
                </div>
            </div>
          </li>
          <li data-color="toys">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/ForestsBG.jpg')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-position-bottom">
                 <p style="color: white; background-color: rgb(43,44,65); border-radius: 10px;">UI added</p>
                </div>
            </div>
          </li>
          <li data-color="plushies">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
              <img src="<?= base_url('assets/images/ForestsBG.jpg')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
              <div class="uk-overlay uk-position-bottom">
               <p style="color: white; background-color: rgb(43,44,65); border-radius: 10px;">Enemy AI added</p>
              </div>
            </div>
          </li>
          <li data-color="plushies">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Hallway.png')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
              <img src="<?= base_url('assets/images/ForestsBG.jpg')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
              <div class="uk-overlay uk-position-bottom">
               <p style="color: white; background-color: rgb(43,44,65); border-radius: 10px;">Terrain Created</p>
              </div>
            </div>
          </li>
          <li data-color="toys">
            <div class="zoom uk-card uk-background-cover uk-inline" data-src="<?= base_url(relativePath: 'assets/images/Kindy.jpg')?>" style="object-fit: fill; border-radius: 10px;" uk-img>
                <img src="<?= base_url('assets/images/ForestsBG.jpg')?>" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px 10px 0 0;" alt="">
                <div class="uk-overlay uk-position-bottom">
                 <p style="color: white; background-color: rgb(43,44,65); border-radius: 10px;">Development Started</p>
                </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

<?= $this->endSection('content') ?>



