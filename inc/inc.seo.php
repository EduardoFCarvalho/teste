<?php
header("Content-Type: text/html; charset=utf-8", true);

# ----------------------------------------
# Catch actual page
# ----------------------------------------
$activePage = basename($_SERVER['REQUEST_URI']);

# ----------------------------------------
# Cases
# ----------------------------------------
if ($activePage == '') {
  $activePage = 'home';
}
switch ($activePage) {


  case "quem-somos":
    $title       = "Quem somos";
    $description = "";
    break;

  case "acessorios":
    $title       = "Acessórios";
    $description = "";
    break;
    // =======
  case "aneis-elasticos":
    $title       = "Aneis elásticos";
    $description = "";
    break;

  case "fixador-central-para-coluna-desmontavel":
    $title       = "Fixador Central para Coluna Desmontável";
    $description = "";
    break;

  case "porca-para-fixacao-placa-intermediaria":
    $title       = "Porca para bucha guia para placa intermediária";
    $description = "";
    break;

  case "grampo-para-fixacao-de-buchas-e-colunas-desmontaveis":
    $title       = "Grampo para fixação de Buchas e Colunas Desmontáveis";
    $description = "";
    break;

  case "stop-para-gaiolas":
    $title       = "Stop para gaiolas";
    $description = "";
    break;

  case "arruela-de-fixacao-da-coluna-conica":
    $title       = "Arruela de fixação da Coluna Cônica Afnor";
    $description = "";
    break;

  case "arruela-de-fixacao-da-coluna-conica-com-cone-central":
    $title       = "Arruela de fixação da Coluna Cônica com Cone Central sem Rosca";
    $description = "";
    break;

  case "porca-para-fixacao-da-bucha-conica-com-rosca":
    $title       = "Porca para fixação da Bucha Cônica com Rosca";
    $description = "";
    break;

  case "porca-para-coluna-com-cone-e-rosca-central":
    $title       = "Porca para Coluna com Cone e Rosca Central";
    $description = "";
    break;


  case "mola-de-compressao":
    $title       = "Mola de compressao";
    $description = "";
    break;

  case "bucha-conica-para-coluna-conica-norma-iso":
    $title       = "Bucha conica para coluna conica norma iso";
    $description = "";
    break;

  case "bucha-conica-para-coluna-com-flange-encaixe-conico":
    $title       = "Bucha cônica para coluna com flange - Encaixe cônico";
    $description = "";
    break;

  case "bucha-conica-com-rosca":
    $title       = "Bucha conica com rosca";
    $description = "";
    break;

  case "bucha-guia-para-gaiola-de-esferas-lisa":
    $title       = "Bucha guia para gaiola de esferas – Lisa";
    $description = "";
    break;

  case "bucha-desmontavel-curta":
    $title       = "Bucha guia para gaiolas de esfera - Desmontável Curta";
    $description = "";
    break;

  case "bucha-desmontavel-curta-sob-desenho":
    $title       = "Bucha para gaiola de esferas - Anel elástico interno";
    $description = "";
    break;

  case "bucha-com-flange":
    $title       = "Bucha com flange";
    $description = "";
    break;


  case "bucha-com-cabeca":
    $title       = "Bucha guia para gaiola de esferas - Com cabeça";
    $description = "";
    break;

  case "bucha-guia-gaiola-para-placa-intermediaria":
    $title       = "Bucha guia gaiola para placa intermediária";
    $description = "";
    break;



  case "bucha-desmontavel-longa":
    $title       = "Bucha guia para gaiolas de esfera - Desmontável Longa";
    $description = "";
    break;



  case "bucha-conica-fixada-sem-rosca":
    $title       = "Bucha conica fixada sem rosca";
    $description = "";
    break;


    //  =========

  case "bucha-conica":
    $title       = "Bucha cônica";
    $description = "";
    break;

  case "bucha-e-placa-grafitada":
    $title       = "Bucha e Placa Grafitada";
    $description = "";
    break;

  case "bucha-guia":
    $title       = "Bucha guia";
    $description = "";
    break;

  case "coluna-guia":
    $title       = "Coluna guia";
    $description = "";
    break;

  case "coluna-guia-lisa":
    $title       = "Coluna guia Lisa";
    $description = "";
    break;


  case "coluna-guia-com-rosca-lisa":
    $title       = "Coluna guia com rosca - Lisa";
    $description = "";
    break;

  case "coluna-guia-oblongo-lisa":
    $title       = "Coluna guia com oblongo – Lisa";
    $description = "";
    break;

  case "coluna-desmontavel-oblongo":
    $title       = "Coluna guia desmontável – com Oblongo";
    $description = "";
    break;

  case "coluna-desmontavel-fixador-central":
    $title       = "Coluna guia desmontável – Fixação Central";
    $description = "";
    break;

  case "coluna-desmontavel-fixada-grampos":
    $title       = "Coluna guia desmontável – Fixação por grampos";
    $description = "";
    break;

  case "coluna-guia-conica":
    $title       = "Coluna guia cônica – Norma ISO";
    $description = "";
    break;

  case "coluna-guia-conica-norma-afnor":
    $title       = "Coluna guia cônica - Norma AFNOR";
    $description = "";
    break;

  case "coluna-intermediaria-fixado-por-grampos":
    $title       = "Coluna intermediária – Encaixe por pressão – Tipo CG";
    $description = "";
    break;

  case "coluna-com-flange-placa-paralela-sob-desenho":
    $title       = "Coluna guia com flange - Encaixe Paralelo";
    $description = "";
    break;

  case "coluna-guia-com-flange-cone-central":
    $title       = "Coluna guia com flange - Encaixe Cônico";
    $description = "";
    break;

  case "coluna-com-rosca-e-cone-central-placa-intermediaria":
    $title       = "Coluna com cone e rosca central";
    $description = "";
    break;

  case "coluna-sem-rosca-e-cone-central-placa-intermediaria":
    $title       = "Coluna com cone central sem rosca";
    $description = "";
    break;


  case "coluna-para-molde":
    $title       = "Coluna intermediária – Fixado por Grampos";
    $description = "";
    break;

  case "gaiola-em-aluminio":
    $title       = "Gaiola em alumínio";
    $description = "";
    break;

  case "gaiola-lisa":
    $title       = "Gaiola lisa";
    $description = "";
    break;

  case "gaiola-anel-elastico-externo":
    $title       = "Gaiola com anel elástico externo";
    $description = "";
    break;

  case "gaiola-com-arruela":
    $title       = "Gaiola com arruela";
    $description = "";
    break;

  case "gaiola-em-aluminio-anti-deslizante":
    $title       = "Gaiola com anti-deslizante";
    $description = "";
    break;

  case "gaiola-com-limitador-de-altura":
    $title       = "Gaiola com Limitador de Altura";
    $description = "";
    break;

  case "gaiola-com-presilha-giratoria":
    $title       = "Gaiola com Presilha Giratória";
    $description = "";
    break;


  case "gaiola-de-bronze":
    $title       = "Gaiola em bronze";
    $description = "";
    break;

  case "gaiola-em-bronze-lisa":
    $title       = "Gaiola com anel elástico externo";
    $description = "";
    break;

  case "gaiola-em-bronze-com-anel-elastico-externo":
    $title       = "Gaiola com anel elástico externo";
    $description = "";
    break;

  case "gaiola-em-bronze-com-arruela":
    $title       = "Gaiola com arruela";
    $description = "";
    break;

  case "gaiola-em-bronze-com-anti-deslizante":
    $title       = "Gaiola com anti deslizante";
    $description = "";
    break;

  case "gaiola-em-bronze-com-limitador-de-altura":
    $title       = "Gaiola com limitador de altura";
    $description = "";
    break;

  case "gaiola-em-bronze-com-presilha-giratoria":
    $title       = "Gaiola com presilha giratória";
    $description = "";
    break;

  case "gaiola-em-polyacetal":
    $title       = "Gaiola em polyacetal";
    $description = "";
    break;

  case "gaiola-em-polyacetal-com-anel-elastico-externo":
    $title       = "Gaiola com anel externo";
    $description = "";
    break;

  case "gaiola-em-polyacetal-lisa":
    $title       = "Gaiola lisa";
    $description = "";
    break;


  case "catalogos":
    $title       = "Catálogos";
    $description = "";
    break;

  case "catalogo-3d":
    $title       = "Catálogo 3D";
    $description = "";
    break;

  case "buchas-conicas":
    $title       = "Buchas conicas";
    $description = "";
    break;

  case "arruelas-fixadoras":
    $title       = "Arruelas fixadoras";
    $description = "";
    break;

  case "bucha-com-parafuso":
    $title       = "Bucha com parafuso";
    $description = "";
    break;

  case "bucha-esfera":
    $title       = "Bucha esfera";
    $description = "";
    break;

  case "clientes":
    $title       = "Principais Clientes";
    $description = "";
    break;

  case "fabricacao":
    $title       = "Fabricação";
    $description = "";
    break;

  case "videos-de-montagem":
    $title       = "Vídeos de montagem";
    $description = "";
    break;

  case "contato":
    $title       = "Contato";
    $description = "";
    break;

  case "politica-de-privacidade":
    $title = "Política de privacidade";
    $description = "";
    break;

  case "mapa-do-site":
    $title = "Mapa do site";
    $description = "";
    break;

  case "arruela-de-fixacao-da-coluna-conica-iso":
    $title = "Arruela de fixação da Coluna Cônica ISO";
    $description = "";
    break;

  case "limitador-de-gaiola-tipo-1":
    $title = "Limitador de Gaiola – Tipo 1";
    $description = "";
    break;

  case "limitador-de-gaiola-tipo-2":
    $title = "Limitador de Gaiola – Tipo 2";
    $description = "";
    break;

  case "porca-para-bucha-conica-e-coluna-com-flange-encaixe-conico":
    $title = "Porca para bucha cônica e coluna com flange – Encaixe cônico";
    $description = "";
    break;

  case "bucha-conica-para-coluna-conica-norma-afnor":
    $title = "Porca para bucha cônica e coluna com flange – Encaixe cônico";
    $description = "";
    break;

  default:
    $title       = "Home";
    $description = "";
    $activeHome  = "active";
    break;
}
$keywords = "";

$proto = (isset($_SERVER['HTTPS']) === true) ? 'https' : 'http';
$canonical = $proto . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
?>
<!doctype html>
<html lang="pt-BR">
<!--
# ~~~~~~~~~~~~~~~~~~ #
# Author: Ubika Brasil #
# ~~~~~~~~~~~~~~~~~~ #
-->

<head>

  <!-- Sempre checar se está OK daqui para baixo -->

  <!-- Title -->
  <title><?= $title ?><?= $isHome = !isset($isHome) ? ' | JMF Componentes' : ''; ?></title>
  <!-- Charset -->
  <meta charset="UTF-8">
  <!-- Meta Tags -->
  <meta name="description" content="<?= $description ?>">
  <meta name="keywords" content="<?= $keywords ?>">
  <!-- Canonical -->
  <link rel="canonical" href="<?= $canonical ?>" />
  <!-- OpenGraph -->
  <meta property="og:region" content="Brasil">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:type" content="article">
  <meta property="og:description" content="<?= $description ?>">
  <meta property="og:site_name" content="<?= $title ?>">
  <meta property="og:keywords" content="<?= $keywords ?>">
  <meta property="og:canonical" content="<?= $canonical ?>">

  <meta name="author" content="Ubika Brasil">
  <meta name="fone" content="11 3673-7056 | 11 3864-6282" />
  <meta name="city" content="São Paulo" />

  <!-- Daqui para baixo é padrão, não mexer -->

  <meta name="country" content="Brasil" />
  <meta name="geo.region" content="-BR" />
  <meta name="copyright" content="Copyright " />
  <meta name="geo.position" content="-23.539351;-46.681925">
  <meta name="geo.placename" content="São Paulo-SP">
  <meta name="geo.region" content="SP-BR">
  <meta name="ICBM" content="-23.539351;-46.681925">
  <meta name="robots" content="index,follow">
  <meta name="rating" content="General">
  <meta name="revisit-after" content="2 days">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <script src="https://kit.fontawesome.com/75eaba243c.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <!-- Favicon -->
  <link rel="icon" href="img/icon/icon.ico" type="image/x-icon">
  <!-- CSS -->
  <?php include 'inc/inc.css.php'; ?>