<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <!-- <meta http-equiv="refresh" content="10"> -->
  <meta name="theme-color" content="#F44336">
  <title>{$SITE_NAME}</title>
  <link rel="icon" href="../img/logo_srcode.ico">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../css/materialize.min.css" type="text/css" rel="stylesheet"/>
  <link href="../css/style.css" type="text/css" rel="stylesheet" />
</head>
<body>
  <nav class="nav-bar" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="{$SITE_URL}" class="brand-logo"><img src="../img/logo2.png"></a>
      <ul class="right hide-on-med-and-down">
        <li {if $script eq "index"} id="currentSel" {/if} >
            <a href="index.php" type="button"><i class="material-icons left">home</i>INICIO</a>
        </li>

        <li {if $script eq "publishers"} id="currentSel" {/if} >
            <a href="publishers.php" type="button"><i class="material-icons left">monetization_on</i>EDITOR</a>
        </li>

        <li {if $script eq "advertisers"} id="currentSel" {/if} >
            <a href="advertisers.php" type="button"><i class="material-icons left">timeline</i>ANUNCIANTE</a>
        </li>

        <li {if $script eq "contact"} id="currentSel" {/if} >
            <a href="contact.php" type="button"><i class="material-icons left">contact_mail</i>CONTACTO</a>
        </li>

          <li {if $script eq "login"} id="currentSel" {/if} >
            <a href="login.php" type="button" ><i class="material-icons left">vpn_key</i>INICIAR SESIÓN</a>
        </li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li {if $script eq "index"} id="currentSel" {/if} >
            <a href="index.php" type="button"><i class="material-icons left">home</i>INICIO</a>
        </li>

        <li {if $script eq "publishers"} id="currentSel" {/if} >
            <a href="publishers.php" type="button"><i class="material-icons left">monetization_on</i>EDITOR</a>
        </li>

        <li {if $script eq "advertisers"} id="currentSel" {/if} >
            <a href="advertisers.php" type="button"><i class="material-icons left">timeline</i>ANUNCIANTE</a>
        </li>

        <li {if $script eq "contact"} id="currentSel" {/if} >
            <a href="contact.php" type="button"><i class="material-icons left">contact_mail</i>CONTACTO</a>
        </li>

          <li {if $script eq "login"} id="currentSel" {/if} >
            <a href="login.php" type="button" ><i class="material-icons left">vpn_key</i>INICIAR SESIÓN</a>
        </li>
      </ul>

      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>