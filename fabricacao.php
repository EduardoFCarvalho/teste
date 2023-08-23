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
                <p class="color-w"><a class="ajust-link" href="home" title="Ir ao início">Home</a> | <a
                    class="ajust-link"><?= $title ?></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero End -->

    <div class="container mt-5 mb-5">

      <div class="row my-4">
        <div class="col-md-12">
          <div class="section-tittle text-center mb-5">
            <h2 class="underline-title">VEJA O PASSO A PASSO DE NOSSA PRODUÇÃO:</h2>
          </div>
        </div>
      </div>


      <div class="row">
        <div class="col-lg-12">
          <div class="card-fab w-100">
            <div class="row align-items-center">
              <div class="col-md-4">
                <a href="img/products/coluna-guia.jpg" data-fancybox="gallery">
                  <img class="img-fluid" src="img/products/coluna-guia.jpg" alt="Acessórios" title="Acessórios">
                </a>
              </div>

              <div class="col-md-8">
                <h3>COLUNA GUIA</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card-fab w-100">
            <div class="row align-items-center">
              <div class="col-md-4">
                <a href="img/products/bucha-guia-home.jpg" data-fancybox="gallery">
                  <img class="img-fluid" src="img/products/bucha-guia-home.jpg" alt="Acessórios" title="Acessórios">
                </a>
              </div>

              <div class="col-md-8">
                <h3>BUCHA GUIA</h3>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="card-fab w-100">
            <div class="row align-items-center">
              <div class="col-md-4">
                <a href="img/products/gaioladesferas-home.jpg" data-fancybox="gallery">
                  <img class="img-fluid" src="img/products/gaioladesferas-home.jpg" alt="Acessórios" title="Acessórios">
                </a>
              </div>

              <div class="col-md-8">
                <h3>GAIOLA DE ESFERAS</h3>
              </div>
            </div>
          </div>
        </div>



      </div>

      <!-- <div class="row align-items-center mt-4">
            <?php $items = glob("img/gallery/*.{jpg,png,gif}", GLOB_BRACE); natsort($items);?>

            <?php foreach($items as $col4):?>
            <div class="col4">
               <div class="card">
                  <a href="<?= $col4;?>" data-fancybox="gallery" data-caption="<?=$title?>">
                     <img class="galeriaimg" src="<?= $col4;?>" alt="<?=$title?>" title="<?=$title?>">
                  </a>
               </div>
            </div>
            <?php endforeach;?>
         </div> -->

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