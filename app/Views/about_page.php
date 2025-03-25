<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>The Bluey Shop - About</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>


  <section>
    <div class="uk-background-cover d-flex flex-column justify-content-start align-items-start" data-src="<?= base_url('assets/images/headerimage.png')?>" style="height: 700px; object-fit: fill; padding-left: 20px; padding-right: 20px;" uk-img>
    <div style="max-width: 60%; margin: auto;">
      <h1 style="font-family: DynaPuff; font-size: 100px; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432); padding-left: 8%; padding-top: 20px;">TRAILER</h1>
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-1@s uk-child-width-1-2@m uk-margin" uk-grid style="margin: auto;">
          <div class="uk-card-media-left uk-cover-container">
            <iframe src="https://www.youtube-nocookie.com/embed/-qkZy7ih4MY?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" title="Bluey Video" allowfullscreen uk-responsive uk-video="automute: true" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"></iframe>
            <canvas width="700" height="450"></canvas>
          </div>
          <div>
            <div class="uk-card-body">
              <h3 class="uk-card-title" style="font-family: DynaPuff; color: rgb(43, 44, 65); text-align: justify;">
                FLORA AND FAUNA
              </h3>
              <p style="font-family: Open Sans; color: rgb(43, 44, 65); text-align: justify; font-size: 1rem;">
                We specialize in creating top-tier Bluey products that bring smiles to children and families alike. Our products are crafted with utmost care, using only the finest materials and advanced techniques. This ensures their safety, durability, and ability to withstand countless hours of imaginative play. Beyond entertainment, our products are designed to stimulate learning and development, making playtime a valuable experience. We are committed to providing exceptional value and service to our customers. Our diverse range of products caters to various preferences and occasions, making it easy to find the perfect Bluey gift. We believe in going the extra mile, offering free shipping on orders exceeding a certain amount to enhance your shopping experience.
              </p>
            </div>
          </div>
        </div>
    </div>
  </section>

</section>

  <?= $this->endSection('content') ?>