?>

<?= $this->extend('layout/main_layout') ?>
<?= $this->section('title') ?>
<title>Contact</title>
<?= $this->endSection('title') ?>
<?= $this->section('content') ?>

  <div class="line"></div>

  <section>
    <div class="uk-background-cover d-flex flex-column justify-content-center align-items-center" data-src="<?= base_url('assets/images/amazingphone.png')?>" style="height: 300px; object-fit: fill;" uk-img>
      <h1 style="font-family: DynaPuff; font-size: 100px; font-weight: bold; color:rgb(43, 44, 65); text-shadow: 2px 2px rgba(0, 0, 0, 0.432);">Contact Us</h1>
    </div>

    <div style="max-width: 60%; margin: auto;">
      <article class="uk-comment" role="comment" style = "padding: 20px; font-family: DynaPuff;">
      <header class="uk-comment-header">
        <div class="uk-grid-medium uk-flex-middle" uk-grid>
            <div class="uk-width-auto">
              <img class="card-img" src="<?= base_url('assets/images/FamilyPicAbout.png')?>" alt="Card image cap" style="height: 350px; width: 300px; object-fit: cover;">
                </div>
                <div class="uk-width-expand">
                    <h4 class="uk-comment-title uk-margin-remove" style = "font-family: DynaPuff; font-size: 34px;">We love to meet new people!
                    Reach out and say hello...</h4>
                    <div class="uk-comment-body">
                      <p style = "font-family: Open Sans;">
                        The Official Bluey Merchandise doesn't accept unsolicited materials or ideas but if you think we'd make a good match please just send us an email and introduce yourself (not your project).
                      </p>
                    </div>
                </div>
            </div>
        </header>
      </article>
      <article class="uk-comment" role="comment" style = "padding: 20px; font-family: DynaPuff;">
      <header class="uk-comment-header">
            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <img class="card-img" src="<?= base_url('assets/images/ReadingBook.png')?>" alt="Card image cap" style="height: 350px; width: 300px; object-fit: cover;" >
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove" style = "font-family: DynaPuff; font-size: 34px;">Our Contacts</h4>
                        <div class="uk-comment-body">
                          <p style = "font-family: Open Sans;">hello@ludostudio.com.au<br>daley@ludostudio.com.au</p>
                        </div>
                    </div>
                </div>
        </header>
      </article>

      <article class="uk-comment" role="comment" style = "padding: 20px; font-family: DynaPuff;">
      <header class="uk-comment-header">
            <div class="uk-grid-medium uk-flex-middle" uk-grid>
                <div class="uk-width-auto">
                  <img class="card-img" src="<?= base_url('assets/images/BlueyHouse.png')?>" alt="Card image cap" style="height: 350px; width: 300px; object-fit: cover;" >
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove" style = "font-family: DynaPuff; font-size: 34px;">Address</h4>
                        <div class="uk-comment-body">
                          <p style = "font-family: Open Sans;">PO Box 1073 Fortitude Valley, QLD, 4006<br>daley@ludostudio.com.au</p>
                        </div>
                    </div>
                </div>
        </header>
      </article>
    </div>


  </section>
  

  <?= $this->endSection('content') ?>

