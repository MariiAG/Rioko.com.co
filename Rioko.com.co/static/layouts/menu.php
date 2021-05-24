<link rel="stylesheet" href="../static/css/index.css">
<?php include_once("../static/layouts/header.php")?>
<body>
    <div id="body">
        <div>
            <div id="first" class="col s12 center"></div>
            <nav>
                <div class="nav-wrapper">
                    <img id="logo" src="../static/img/logo2.gif">
                    <a href="index.php" class="brand-logo">RyoKo.com.co</a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a id="home" class="li-menu" href="index.php">Principal</a></li>
                    <li><a class="li-menu" href="covid.php">Protocolos COVID-19</a></li>
                    <li><a class="li-menu" href="login.php">Unirme a Rioko</a></li>
                    <li><a class="li-menu" href="contact.php">Contacto</a></li>
                    <li><a class="li-menu" onclick="openModal();">Ingresar</a></li>
                  </ul>
                </div>
            </nav>
        </div>
        <?php include_once("../static/layouts/session-container.php")?>
