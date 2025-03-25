<?php

use CodeIgniter\Database\BaseUtils;
?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>The Bluey Shop - Home</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


  <section>
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/headerimage2.png')?>" style="height: 700px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; font-weight: bold; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432);">The Bluey Shop</h1>
      <a href="<?= base_url('/catalog'); ?>" style="color: rgb(47, 62, 70); text-decoration: none;">
        <button class="zoom genbutton mt-3">Go To Catalog</button>
      </a>
    </div>

    <div data-aos="zoom-in" class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2 uk-margin" uk-grid style="max-width: 60%; margin: auto;">
      <div class="uk-card-media-left uk-cover-container" style="padding: 50px;">
        <img class="card-img" src="<?= base_url('assets/images/blueyfamily.png')?>" alt="Card image cap" style="height: 350px; object-fit: cover;">
        <canvas width="600" height="1"></canvas>
      </div>
      <div>
        <div class="uk-card-body" style="padding: 50px; margin-top: 10px;">
          <h1 style="font-family: DynaPuff; color:rgb(43, 44, 65); font-weight: bold; text-align: center;">Welcome to Bluey Store!</h1>
          <h2 style="font-family: Open Sans; color:rgb(43, 44, 65); text-align: justify; ">Bluey follows the adventures of a lovable & inexhaustible blue heeler puppy, who along with her sister Bingo, parents and friends is learning all about the world. Buy our legit merch!</h2>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="d-flex justify-content-around" style="max-width: 55%; margin: auto; padding-block: 8% 3%;">
      <div class="card" style="width: 20rem; position: relative; overflow: visible; border-radius: 10px;">
        <a href="<?= base_url('/catalog')?>" style="text-decoration: none;">
          <img class="zoom card-img-top" src="<?= base_url('assets/images/Shop.png')?>" style="position: absolute; top: -100px;">
        </a>
        <div class="card-body" style="padding-top: 20%;">
          <h5 class="card-title" style="font-family: DynaPuff; font-weight:bold; font-size: 20px; color:rgb(43, 44, 65); text-align: center;">Shop Now</h5>
          <p class="card-text" style="font-family: Open Sans; text-align: center;">Discover the latest Bluey merch and bring home your favorite characters today!</p>
        </div>
      </div>
      <div class="card" style="width: 20rem; position: relative; overflow: visible; border-radius: 10px;">
        <a href="<?= base_url('/')?>" style="text-decoration: none;">
          <img class="zoom card-img-top" src="<?= base_url('assets/images/DuckCake.png')?>" style="position: absolute; top: -100px;">
        </a>
        <div class="card-body" style="padding-top: 20%;">
          <h5 class="card-title" style="font-family: DynaPuff; font-weight:bold; font-size: 20px; color:rgb(43, 44, 65); text-align: center;">Join the Pack</h5>
          <p class="card-text" style="font-family: Open Sans; text-align: center;">Become a member to unlock exclusive discounts, early access to new merch, and special offers just for Bluey fans!</p>
        </div>
      </div>
        <div class="card" style="width: 20rem; position: relative; overflow: visible; border-radius: 10px;">
        <a href="<?= base_url('/about')?>" style="text-decoration: none;">
          <img class="zoom card-img-top" src="<?= base_url('assets/images/About.png')?>" style="position: absolute; top: -100px;">
        </a>
        <div class="card-body" style="padding-top: 20%;">
          <h5 class="card-title" style="font-family: DynaPuff; font-weight:bold; font-size: 20px; color:rgb(43, 44, 65); text-align: center;">More about Us</h5>
        <p class="card-text" style="font-family: Open Sans; text-align: center;">Learn more about our mission to bring joy to Bluey fans with high-quality, official merch made with love!</p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="uk-background-cover d-flex flex-column justify-content-end align-items-center" data-src="<?= base_url('assets/images/trio4.png')?>" style="max-width: 50%; margin: auto; height: 600px; object-fit: fill;" uk-img></div>
  </section>

  <section>
    <h1 class="zoom" style=" font-family: DynaPuff; text-align: center; color: rgb(255, 255, 255); text-shadow: 0px 2px 2px rgba(0,0,0,0.432); font-size: 70px; font-weight: bold; max-width:80%; margin: auto;">Featured Products</h1>
    <h3 class="zoom featured-text" style="font-family: DynaPuff; text-shadow: 0px 2px 2px rgba(0,0,0,0.432); max-width:80%; margin: auto; padding-bottom: 50px;">The Most Legit Bluey Collection</h3>
  </section>

  <section>
    <div class="uk-background-cover" data-src="<?= base_url('assets/images/footerbackground.png')?>" style="object-fit: fill; padding-bottom: 10%;" uk-img>
      <div style="background-color: rgba(255, 255, 255, 0.5); border-radius: 20px; max-width: 60%; margin: auto;">
          <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid style="max-width: 90%; margin: auto; padding-top: 3%;">
            <div>
                <div class="zoom uk-card uk-card-body">
                  <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                    <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/BABGrannyJanet.png')?>" style="width: 100%; height: 200px; object-fit: contain; border-radius: 10px 10px 0 0;" alt="">
                    </div>
                    <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px; height: 100px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                    <h3 class="uk-card-title" style="color: white; font-family: DynaPuff; font-size: 1rem; margin: 0;">Granny Janet Plush</h3>
                    <p style="color: white; font-size: 0.875rem; margin: 0;">wow!</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
                <div class="zoom uk-card uk-card-body">
                  <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                    <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/BAFrlife.png')?>" style="width: 100%; height: 200px; object-fit: contain; border-radius: 10px 10px 0 0;" alt="">
                    </div>
                    <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px; height: 100px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                    <h3 class="uk-card-title" style="color: white; font-family: DynaPuff; font-size: 1rem; margin: 0;">For Real Life Adult Hoodie</h3>
                    <p style="color: white; font-size: 0.875rem; margin: 0;">wow!</p>
                    </div>
                  </div>
                </div>
            </div>
            <div>
                <div class="zoom uk-card uk-card-body">
                  <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                    <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/BFFamily.png')?>" style="width: 100%; height: 200px; object-fit: contain; border-radius: 10px 10px 0 0;" alt="">
                    </div>
                    <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px; height: 100px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                      <h3 class="uk-card-title" style="color: white; font-family: DynaPuff; font-size: 1rem; margin: 0;">Family Toy Figure</h3>
                      <p style="color: white; font-size: 0.875rem; margin: 0;">wow!</p>
                    </div>
                  </div>
                </div>
            </div>
          </div>

        <div class="uk-grid-small uk-child-width-expand@s uk-text-center" uk-grid style="max-width: 90%; margin: auto;">
            <div>
                <div class="zoom uk-card uk-card-body">
                  <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                    <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/BABGrannyRita.png')?>" style="width: 100%; height: 200px; object-fit: contain; border-radius: 10px 10px 0 0;" alt="">
                    </div>
                    <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px; height: 100px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                    <h3 class="uk-card-title" style="color: white; font-family: DynaPuff; font-size: 1rem; margin: 0;">Granny Rita Plush</h3>
                    <p style="color: white; font-size: 0.875rem; margin: 0;">wow!</p>
                  </div>
                </div>
              </div>
            </div>
            <div>
                <div class="zoom uk-card uk-card-body">
                  <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                    <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/BAPajamas.png')?>" style="width: 100%; height: 200px; object-fit: contain; border-radius: 10px 10px 0 0;" alt="">
                    </div>
                    <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px; height: 100px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                    <h3 class="uk-card-title" style="color: white; font-family: DynaPuff; font-size: 1rem; margin: 0;">Bluey and Bingo Kid Pajamas</h3>
                    <p style="color: white; font-size: 0.875rem; margin: 0;">wow!</p>
                    </div>
                  </div>
                </div>
            </div>
            <div>
                <div class="zoom uk-card uk-card-body">
                  <div data-aos="fade-right" data-aos-duration="1000" class="uk-card uk-card-default" style="border-radius: 10px;">
                    <div class="uk-card-media-top" style="border-radius: 10px 10px 0 0;">
                      <img src="<?= base_url('assets/images/BFChefs.png')?>" style="width: 100%; height: 200px; object-fit: contain; border-radius: 10px 10px 0 0;" alt="">
                    </div>
                    <div class="uk-card-body" style="background-color: rgb(117, 85, 154); border-radius: 0 0 10px 10px; height: 100px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                      <h3 class="uk-card-title" style="color: white; font-family: DynaPuff; font-size: 1rem; margin: 0;">Chefs Toy Figure</h3>
                      <p style="color: white; font-size: 0.875rem; margin: 0;">wow!</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
      <button class="zoom genbutton mt-3" onclick="window.location.href='<?= base_url('/catalog'); ?>'" style="color: rgb(47, 62, 70); text-decoration: none; margin: auto;">Go To Catalog</button>
      <hr style="height: 5px;">
    </div>
  </section>

  <?= $this->endSection('content') ?>
