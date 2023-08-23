<!--🟡 ESTILO DO WHATS FLUTUANTE 🟡-->
<style>
/* animaçãozinha */
@keyframes sweep {
  0% {
    opacity: 0;
    transform: translateX(-10px);
  }

  100% {
    opacity: 1;
    transform: translateX(0);
  }
}

/*=============*/

.whatsapp {
  position: fixed;
  width: 60px;
  height: 60px;
  bottom: 75px;
  right: 28px;
  background-color: #25d366;
  color: #FFF;
  border-radius: 50px;
  text-align: center;
  font-size: 30px;
  z-index: 100;
  animation: sweep 1.5s ease-in-out;
}

.whatsapp-icon {
  margin-top: 13px;
}

/* posição no mobile */
@media (max-width: 600px) {
  .whatsapp {
    right: 12px;
    bottom: 73px;
  }
}

/* ================== */
</style>
<!--==============================-->

<!--🟢 BOTÃO FLUTUANTE WHATSAPP 🟢-->
<div class="whats-flutuante">
  <!-- somente alterar dps do +55 ^^  -->
  <a href="https://api.whatsapp.com/send?phone=5511999999999" target="_blank">
    <div class="whatsapp">
      <i class="fab fa-whatsapp whatsapp-icon"></i>
    </div>
  </a>
</div>
<!--==============================-->