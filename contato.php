<?php include 'inc/inc.seo.php' ?>
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
                     <h1>Contato</h1>
                     <p class="color-w"><a class="ajust-link" href="home" title="Ir ao início">Home</a> | <a class="ajust-link"><?= $title ?></a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Hero End -->

   <!-- ================ contact section start ================= -->
   <section class="contact-section">
      <div class="container">

         <div class="row">
            <div class="col-12">
               <h2 class="contact-title">Entre em Contato</h2>
            </div>
            <div class="col-lg-8">
               <form class="form-contact contact_form" action="contato_envia.php" method="post" id="contactForm" novalidate="novalidate">
                  <div class="row">
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nome'" placeholder="Nome">
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <div class="form-group">
                           <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Insira o endereço de e-mail'" placeholder="E-mail">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" placeholder="Assunto">
                        </div>
                     </div>
                     <div class="col-12">
                        <div class="form-group">
                           <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mensagem'" placeholder=" Mensagem"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="form-group mt-3 mb-5">
                     <button type="submit" class="button button-contactForm boxed-btn">Enviar</button>
                  </div>
               </form>
            </div>
            <div class="col-lg-3 offset-lg-1">
               <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-home"></i></span>
                  <div class="media-body">
                     <h3><a href="https://goo.gl/maps/s3frSqbkJRXYx57SA" target="_blank">Rua Juari, 703</a>
                     </h3>
                  </div>
               </div>
               <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                  <div class="media-body">
                     <h3><a class="dn_btn" href="tel:+551145643480"> (11) 4564-3480</a></h3>
                     <p>Seg. a Sex: 08hs às 18:00</p>
                  </div>
               </div>
               <div class="media contact-info">
                  <span class="contact-info__icon"> <i class="fab fa-whatsapp"></i></span>
                  <div class="media-body">
                     <h3><a class="dn_btn" href="https://api.whatsapp.com/send?phone=551145643480"> (11) 4564-3480</a>
                     </h3>
                     <p>Seg. a Sex: 08hs às 18:00</p>
                  </div>
               </div>
               <div class="media contact-info">
                  <span class="contact-info__icon"><i class="ti-email"></i></span>
                  <div class="media-body">
                     <h3><a href="mailto:vendas@jmfcomponentes.com.br">vendas@jmfcomponentes.com.br</a>
                     </h3>
                     <p>Envie-nos um e-mail a qualquer momento!</p>
                  </div>
               </div>
            </div>
         </div>
         <div class="d-none d-sm-block mb-5 pb-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.432592228034!2d-46.5976777!3d-23.263726100000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cee956a8e784c1%3A0x20c2adc8c9af0764!2sFaustino%20Felix%20Bueno%2C%20235%20-%20Terra%20Preta%2C%20Mairipor%C3%A3%20-%20SP%2C%2007600-000!5e0!3m2!1spt-BR!2sbr!4v1675112051925!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
      </div>
   </section>
   <!-- ================ contact section end ================= -->

   <!-- footer start -->
   <?php include 'inc/inc.footer.php' ?>
   <!--/ footer end  -->

   <!-- JS here -->
   <?php include 'inc/inc.js.php' ?>
</body>

</html>