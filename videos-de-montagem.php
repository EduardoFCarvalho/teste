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
         <div class="row align-items-center">

            <div class="col-md-12">
               <div class="section-tittle text-center mb-5">
                  <h2 class="underline-title">Veja nossa montagem</h2>
               </div>
            </div>

            <?php

// ============== Editar Informação dos Cards Aqui ==============


$videosYT = [

    [
     "title" => "Gaiola de esfera Presilha giratória", // Titulo
     "thumb" => "https://img.youtube.com/vi/nn969hQBodA/hqdefault.jpg", // Thumb video .jpg .jpeg .png
     "link-video" => "https://www.youtube.com/embed/nn969hQBodA" // link do video
    ],
    
    [
      "title" => "Gaiola de esfera – Lisa", // Titulo
      "thumb" => "https://img.youtube.com/vi/m6h8ReIGZyg/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/m6h8ReIGZyg" // link do video
     ],

     [
      "title" => "Gaiola de esfera com limitador de altura", // Titulo
      "thumb" => "https://img.youtube.com/vi/JmH3FLkaXQE/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/JmH3FLkaXQE" // link do video
     ],
   
     [
      "title" => "Gaiola de esfera Arruela", // Titulo
      "thumb" => "https://img.youtube.com/vi/7KbvMiSPcsY/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/7KbvMiSPcsY" // link do video
     ],

     [
      "title" => "Gaiola de esfera Anti deslizante", // Titulo
      "thumb" => "https://img.youtube.com/vi/6bAOB2Mqow0/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/6bAOB2Mqow0" // link do video
     ],

     [
      "title" => "Gaiola de esfera – Anel elástico externo", // Titulo
      "thumb" => "https://img.youtube.com/vi/BCSmrDc6t2I/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/BCSmrDc6t2I" // link do video
     ],

     [
      "title" => "Coluna intermediária – Fixado por Grampos", // Titulo
      "thumb" => "https://img.youtube.com/vi/Tx_2stt2mqY/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/Tx_2stt2mqY" // link do video
     ],

     [
      "title" => "Coluna intermediária – Encaixe por pressão – Tipo CG", // Titulo
      "thumb" => "https://img.youtube.com/vi/AVLW1XaLESs/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/AVLW1XaLESs" // link do video
     ],

     [
      "title" => "Coluna Guia Lisa", // Titulo
      "thumb" => "https://img.youtube.com/vi/vID1lpm8ZF4/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/vID1lpm8ZF4" // link do video
     ],

     [
      "title" => "Coluna guia lisa com rosca", // Titulo
      "thumb" => "https://img.youtube.com/vi/KEQcbZPkXF0/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/KEQcbZPkXF0" // link do video
     ],

     [
      "title" => "Coluna guia desmontável – Fixação por grampos", // Titulo
      "thumb" => "https://img.youtube.com/vi/iE_ryk2jcBA/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/iE_ryk2jcBA&t=11s" // link do video
     ],

     [
      "title" => "Coluna guia desmontável – Fixação central", // Titulo
      "thumb" => "https://img.youtube.com/vi/SL9OCI5cP3E/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/SL9OCI5cP3E" // link do video
     ],

     [
      "title" => "Coluna guia cônica – Norma ISO", // Titulo
      "thumb" => "https://img.youtube.com/vi/wSy-H81pIfI/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/wSy-H81pIfI" // link do video
     ],

     [
      "title" => "Coluna Guia Lisa com oblongo", // Titulo
      "thumb" => "https://img.youtube.com/vi/JcNNu_TbsjY/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/JcNNu_TbsjY" // link do video
     ],

     [
      "title" => "Coluna guia com flange – Encaixe Paralelo", // Titulo
      "thumb" => "https://img.youtube.com/vi/s9nDYCab4qY/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/s9nDYCab4qY" // link do video
     ],

     [
      "title" => "Coluna guia com flange – Encaixe Cônico", // Titulo
      "thumb" => "https://img.youtube.com/vi/XxcUxnKrtSc/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/XxcUxnKrtSc" // link do video
     ],

     [
      "title" => "Coluna desmontável com oblongo", // Titulo
      "thumb" => "https://img.youtube.com/vi/8s_IqsHBbMs/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/8s_IqsHBbMs" // link do video
     ],

     [
      "title" => "Coluna com cone e rosca central", // Titulo
      "thumb" => "https://img.youtube.com/vi/TK81E15pYyI/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/TK81E15pYyI" // link do video
     ],

     [
      "title" => "Coluna com cone central sem rosca", // Titulo
      "thumb" => "https://img.youtube.com/vi/x5alKpAZBSk/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/x5alKpAZBSk" // link do video
     ],

     [
      "title" => "Bucha para gaiola de esferas – Anel elástico interno", // Titulo
      "thumb" => "https://img.youtube.com/vi/Njv90lz5b-g/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/Njv90lz5b-g" // link do video
     ],

     [
      "title" => "Bucha guia para gaiolas de esfera – Bucha desmontável longa", // Titulo
      "thumb" => "https://img.youtube.com/vi/ki2ONCjqblc/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/ki2ONCjqblc" // link do video
     ],
     
     [
      "title" => "Bucha guia para gaiolas de esfera – Bucha desmontável curta", // Titulo
      "thumb" => "https://img.youtube.com/vi/-p9helxClUU/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/-p9helxClUU" // link do video
     ],
     
     [
      "title" => "Bucha guia para gaiola de esferas – Para placa intermediária", // Titulo
      "thumb" => "https://img.youtube.com/vi/L-GEjaE4hBU/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/L-GEjaE4hBU" // link do video
     ],

     [
      "title" => "Bucha guia para gaiola de esferas – Lisa", // Titulo
      "thumb" => "https://img.youtube.com/vi/O7iOIdCpRic/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/O7iOIdCpRic" // link do video
     ],

     [
      "title" => "Bucha guia para gaiola de esferas – Com flange", // Titulo
      "thumb" => "https://img.youtube.com/vi/pI9uQXq14WQ/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/pI9uQXq14WQ" // link do video
     ],

     [
      "title" => "Bucha guia para gaiola de esferas – Com cabeça", // Titulo
      "thumb" => "https://img.youtube.com/vi/wSpmpYVjbGc/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/wSpmpYVjbGc" // link do video
     ],

     [
      "title" => "Bucha cônica sem rosca", // Titulo
      "thumb" => "https://img.youtube.com/vi/C0cTzcTJusc/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/C0cTzcTJusc" // link do video
     ],

     [
      "title" => "Bucha cônica para coluna cônica – Norma ISO", // Titulo
      "thumb" => "https://img.youtube.com/vi/ahVBMQp0hCU/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/ahVBMQp0hCU" // link do video
     ],

     [
      "title" => "Bucha cônica para coluna com flange – Encaixe cônico", // Titulo
      "thumb" => "https://img.youtube.com/vi/UjhebELmtsM/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/UjhebELmtsM" // link do video
     ],

     [
      "title" => "Bucha cônica com rosca", // Titulo
      "thumb" => "https://img.youtube.com/vi/GltiwE7VpSc/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/GltiwE7VpSc" // link do video
     ],
     
     [
      "title" => "Stop para gaiolas", // Titulo
      "thumb" => "https://img.youtube.com/vi/a-8nbGTAveU/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/a-8nbGTAveU" // link do video
     ],

     [
      "title" => "Porca para fixação da bucha cônica com rosca", // Titulo
      "thumb" => "https://img.youtube.com/vi/S2Lzm8iefH0/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/S2Lzm8iefH0" // link do video
     ],

     [
      "title" => "Porca para Coluna com Cone e rosca Central", // Titulo
      "thumb" => "https://img.youtube.com/vi/Lx9oZOKTPE8/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/Lx9oZOKTPE8" // link do video
     ],

     [
      "title" => "Porca para bucha guia com rosca – para placa intermediária", // Titulo
      "thumb" => "https://img.youtube.com/vi/tOeVdblPu3o/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/tOeVdblPu3o" // link do video
     ],

     [
      "title" => "Porca para bucha cônica e coluna com flange Encaixe cônico", // Titulo
      "thumb" => "https://img.youtube.com/vi/LLu_LD8jS4Y/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/LLu_LD8jS4Y" // link do video
     ],

     [
      "title" => "Limitador de Gaiola – Tipo 2", // Titulo
      "thumb" => "https://img.youtube.com/vi/IDF7cp43vOc/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/IDF7cp43vOc" // link do video
     ],
   
     [
      "title" => "Limitador de Gaiola – Tipo 1", // Titulo
      "thumb" => "https://img.youtube.com/vi/SO0TwaAuQtA/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/SO0TwaAuQtA" // link do video
     ],
   
     [
      "title" => "Fixador central para coluna desmontável", // Titulo
      "thumb" => "https://img.youtube.com/vi/caicY35leyE/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/caicY35leyE" // link do video
     ],

     [
      "title" => "Arruela de fixação da Coluna Cônica ISO", // Titulo
      "thumb" => "https://img.youtube.com/vi/MA0QMSwJDnw/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/MA0QMSwJDnw" // link do video
     ],

     [
      "title" => "Arruela de fixação da Coluna Cônica com Cone Central sem Rosca", // Titulo
      "thumb" => "https://img.youtube.com/vi/w-MGyyuE3Us/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/w-MGyyuE3Us" // link do video
     ],

     [
      "title" => "Arruela de fixação da Coluna Cônica Afnor", // Titulo
      "thumb" => "https://img.youtube.com/vi/wlpr3etN8LQ/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/wlpr3etN8LQ" // link do video
     ],
   
     [
      "title" => "Grampo para fixação de buchas e colunas desmontáveis", // Titulo
      "thumb" => "https://img.youtube.com/vi/EBgL9r5NE_0/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/EBgL9r5NE_0" // link do video
     ],

     [
      "title" => "Bucha cônica para coluna cônica – Norma AFNOR", // Titulo
      "thumb" => "https://img.youtube.com/vi/tx9ClwG_KiM/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/tx9ClwG_KiM" // link do video
     ],

     [
      "title" => "Coluna guia cônica – Norma AFNOR", // Titulo
      "thumb" => "https://img.youtube.com/vi/Yat0ZdbxsfQ/hqdefault.jpg", // Thumb video .jpg .jpeg .png
      "link-video" => "https://www.youtube.com/embed/Yat0ZdbxsfQ" // link do video
     ],



     


];

// =============================================================
foreach ($videosYT as $key => $value) {

    echo '
    
    <!-- ---- CARD ---- -->
    <div class="col-lg-4 col-md-6 col-12 my-2">
    <div class="card-videos">
       <a href="' . $value['link-video'] . '" data-fancybox="">
          <div class="thumb">
             <img src="' . $value['thumb'] . '" alt="<?= $title ?>" title="<?= $title ?>"

             <span class="btn-play"><i class="fa-solid fa-play"></i></span>
          </div>
          <div class="title">
             <h3>' . $value['title'] . '</h3>
          </div>
       </a>
    </div>
 </div> ';
}

?>




            <!-- <div class="col-md-6">
               <iframe width="100%" height="315" src="https://www.youtube.com/embed/oqlfiM2aNUo"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
            </div>

            <div class="col-md-6">
               <iframe width="100%" height="315" src="https://www.youtube.com/embed/bYCc3toOHdc"
                  title="YouTube video player" frameborder="0"
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowfullscreen></iframe>
            </div> -->


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