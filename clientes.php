<?php include 'inc/inc.seo.php' ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
</head>

<body>

  <!-- header -->
  <?php include 'inc/inc.header.php' ?>
  <!-- header -->

  <main>
    <!--? Hero Start -->
    <div class="slider-area2">
      <div class="slider-height2 hero-overly d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap hero-cap2 text-center ajust-padding">
                <h1><?= $title ?></h1>
                <p class="color-w"><a class="ajust-link" href="home" title="Ir ao início">Home</a> | <a class="ajust-link"><?= $title ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <div class="container mt-5 mb-5">
      <div class="row align-items-center">

        <?php $items = glob("img/brands/*.{jpg,png,gif}", GLOB_BRACE); natsort($items);?>

        <?php foreach($items as $col4):?>
          <div class="col4">
            <div class="card">
              <a href="<?= $col4;?>" data-fancybox="gallery" data-caption="<?=$title?>" >
                <img class="brandsimg" src="<?= $col4;?>" alt="<?=$title?>" title="<?=$title?>">
              </a>
            </div>
          </div>
        <?php endforeach;?>


      </div>
    </div>


  </main>

  <?php include 'inc/inc.parallax.php' ?>

  <!-- footer -->
  <?php include 'inc/inc.footer.php' ?>
  <!-- footer -->

  <!-- JS here -->
  <?php include 'inc/inc.js.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
</body>

</html>