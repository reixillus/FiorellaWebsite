<body class="uk-background-cover" data-src="<?= base_url('assets/images/newBGS.png')?>" style="object-fit: fill;" uk-img>

  <nav class="navbar navbar-expand-lg bg-body-tertiary" >

    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url('/'); ?>"><img src="<?= base_url('assets/images/FloraLogo.png')?>" class="logo" style="width:75px; margin-left: 50px;" ></a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>" style="font-family: raleway; text-decoration: none;" >Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/catalog'); ?>" style="font-family: raleway; text-decoration: none;">Updates</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/about'); ?>" style="font-family: raleway; text-decoration: none;" >Trailer</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/contact'); ?>" style="font-family: raleway; text-decoration: none;" >Features</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/contact'); ?>" style="font-family: raleway; text-decoration: none;" >Characters</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('/contact'); ?>" style="font-family: raleway; text-decoration: none;" >AboutUs</a>
          </li>

        </ul>
      </div>

    <div class="d-flex" style="padding-inline: 5px;">
      <a href="<?= base_url('/login'); ?>" class="login-text" style="font-family: raleway; text-decoration: none; color: rgb(88, 235, 125); font-size: 20px; margin-right: 20px;">
      Login/Signup
      </a>
    </div>

  </nav>