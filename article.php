<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title>Article</title>
    <link type="text/css" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body style="background: #2a2d3a;">
    <?php
    if (isset($_GET['nb'])) {
      $imgNB = $_GET['nb'];
      $con = mysqli_connect("localhost","root","","coding");
      $qPic = $con->query("SELECT `name_img`, `prix`, `description` FROM `catalogue` WHERE `id_img` = '$imgNB'");
      $fetchPic = mysqli_fetch_all($qPic,MYSQLI_ASSOC);
    }else{
      header("Location: index.php#articleShop");
      exit();
    }
    ?>
    <!--<div id="reduc" class="text-center">Vous êtes à ...€ d'un envoie gratuit.</div>-->
    <header>
      <div id="shoppingName">
        <div id="shoppingLinkContainer">
          <a href="index.php#articleShop" class="link">Shopping</a>
        </div>
        <span id="basketContainerHead" style="float: right; margin-top: -22px;"><a href="index.php" class="link"><img src="img/bag.png" alt="Panier" width="25"></a></span>
      </div>
    </header>
    <main id="articleShop">
      <div id="topArticle" class="container-fluid">
        <div id="imgArticleContainer">
          <img id="ActualPreviewImg" class="mainImgArticle col-lg-3 col-md-4 col-sm-6 col-xs-12" src="img/<?php echo $fetchPic[0]['name_img'];?>" alt="article6">
        </div>
        <div id="productName"><span class="inlnBlck">Nom du produit</span></div>
        <div>
          <div class="InfoArticle"><span id="desc" class="activeInfo">Description</span></div>
          <div id="descTxt">
            <?php echo $fetchPic[0]['description']; ?>
          </div>
        </div>
        <div>
          <div id="price">Prix: <span style="color:#ecc979;"><?php echo $fetchPic[0]['prix']."€"; ?></span></div>
        </div>
        <div id="btnAddToCart">
          <button class="btn btn-success" type="submit" name="btnAddToCart">Ajouter au panier</button>
        </div>
      </div>
    </main>
  </body>
</html>
