<?php include 'inc/inc.seo.php' ?>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css'>
</head>

<body>
   <!-- header-start -->
   <?php include 'inc/inc.header.php' ?>
   <!-- header-end -->

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

   <!-- ================ contact section start ================= -->
   <div class="container">
      <div class="row align-items-center mt-5 mb-5">

         <div class="col-lg-5 col-md-12">
            <img class="img-fluid w-100" src="img/produtos/aneis-elastico-g.jpg" alt="<?= $title ?>" title="<?= $title ?>">
         </div>

         <div class="col-lg-7 col-md-12">
            <div class="row">
               <div class="col-lg-12">
                  <p><b>Dureza:</b> 62 + 2HRC</p>

                  <p><b>Material:</b> Aço SAE 1045</p>

                  <p>Comprimentos especiais, somente sob consulta.</p>

                  <div class="row">
                     <div class="col-lg-6 my-3">
                        <a href="#" target="_blank" class="btn w-100 mb-4"> Orçamento Online</a>
                     </div>
                  </div>

               </div>
            </div>

         </div>
      </div>

      <div class="row mt-5">
         <div class="col-lg-12"></div>
         <!-- Tabs with Background on Card -->
         <div class="box-tabs">
            <div class="box-header">
               <ul class="nav nav-tabs nav-tabs-neutral justify-content-center" role="tablist" data-background-color="color-one">
                  <li class="nav-item">
                     <a class="nav-link active" data-toggle="tab" href="#tab01" role="tab">Detalhes do
                        produto</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#tab02" role="tab">Processos de fabricação</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#tab03" role="tab">Download CAD</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" data-toggle="tab" href="#tab04" role="tab">Exemplo de Montagens</a>
                  </li>

               </ul>
            </div>
            <div class="box-content">
               <!-- Tab panes -->
               <div class="tab-content ">
                  <div class="tab-pane active" id="tab01" role="tabpanel">
                     <p> <b>Arruela de fixação da Coluna Cônica Afnor</b></p>

                     <p>Montado com:</p>

                     <ul>
                        <li>• Coluna guia cônica – Norma AFNOR</li>
                        <li>• Bucha cônica para coluna cônica – Norma AFNOR</li>
                        <li>• Grampo para fixação de Buchas e Colunas Desmontáveis</li>
                     </ul>
                  </div>
                  <div class="tab-pane" id="tab02" role="tabpanel">
                     <p> Vídeos de cinemática demonstrando o funcionamento do produto.</p>
                     <div class="row">
                        <div class="col-lg-4 my-3">
                           <a href="https://www.youtube.com/embed/wlpr3etN8LQ" class="btn w-100 mb-4" target="_blank">Ver Vídeo</a>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane" id="tab03" role="tabpanel">
                     <p> <b>Veja nosso Catálogo </b></p>

                     <div class="row">
                        <div class="col-lg-4 my-3">
                           <a href="#" class="btn w-100 mb-4">Baixar Catálogo</a>
                        </div>
                     </div>
                  </div>

                  <div class="tab-pane" id="tab04" role="tabpanel">
                     <p> <b>Veja nosso Exemplo de Montagens </b></p>

                     <div class="row">
                        <div class="col-lg-4 my-3">
                           <a href="#" class="btn w-100 mb-4" target="_blank">Ver Vídeo</a>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
         <!-- End Tabs on plain Card -->
      </div>

   </div>
   <!-- ================ contact section end ================= -->
   <!-- Want To work -->
   <?php include 'inc/inc.parallax.php' ?>
   <!-- Want To work End -->

   <!-- footer start -->
   <?php include 'inc/inc.footer.php' ?>
   <!--/ footer end  -->

   <!-- JS here -->
   <?php include 'inc/inc.js.php' ?>
   <script src='https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js'></script>
</body>

</html>