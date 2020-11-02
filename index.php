<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Shopping 2</title>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css2?family=Solway:wght@500&display=swap" rel="stylesheet">
  </head>
  <body>
    <!--<div id="reduc" class="text-center">Vous êtes à ...€ d'un envoie gratuit.</div>-->
    <!--<header>
      <div id="shoppingName">
        <div id="shoppingLinkContainer">
          <a href="index.php" class="link">Shopping</a>
        </div>
        <span id="basketContainer"><a href="index.php" class="link"><img src="img/bag.png" alt="Panier" width="25"></a></span>
      </div>
    </header>-->
    <div class="banner">
      <div id="basketContainer"><a href="index.php" class="link"><img src="img/bagW.png" alt="Panier" width="25"></a></div>
      <div id="logo">Site web.</div>
      <div id="downArrow"><a id="aScroll" href="#articleShop">&#8964;</a></div>
    </div>
    <main>
      <article id="articleShop">
        <section>
          <div class="container">
            <?php
            $con = mysqli_connect("localhost","root","","coding");
            $qCatalogue = $con->query("SELECT * FROM `catalogue`");
            $fetchCatalogue = mysqli_fetch_all($qCatalogue,MYSQLI_ASSOC);
            $nb = 0;
            for ($i=0; $i < sizeof($fetchCatalogue); $i++) {
            $nb++;
            $nbLink = $fetchCatalogue[$i]['id_img'];
            $nameImg = $fetchCatalogue[$i]['name_img'];
            $prix = $fetchCatalogue[$i]['prix'];
            ?>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 text-center element">
              <a href="article.php?nb=<?php echo $nbLink;?>">
                <img class="showCaseImg" src="img/<?php echo $nameImg; ?>" alt="Item n°1">
                <div class="itemColor">Item n°<?php echo $nb; ?></div>
                <div class="itemColor">Prix: <?php echo $prix; ?>€</div>
              </a>
            </div>
            <?php
            }
            ?>
          </div>
        </section>
      </article>
    </main>
    <footer>© Nom site web - 2020</footer>
  </body>
</html>
