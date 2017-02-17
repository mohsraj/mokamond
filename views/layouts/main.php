<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<?php $this->beginBody() ?>

    <nav class="navbar navbar-default" id="header-nav">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">

            <a href="index.php" ><div id="logo-img"></div></a>
            <div class="navbar-brand">
                <a href="index.php"><h1><span class="logoP1">MOKA</span><span class="logoP2">MOND</span></h1></a>
                <div><p><span id="logoP3">Chocolate Cafe</span></p></div>
            </div>
            <img class="social hidden-xs" src="imgs/facebook-icon.png">
            <img class="social hidden-xs" src="imgs/phone-icon.png">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
            <li>
              <a href="menu-categories.html">
                <span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs"> Menu</a>
            </li>
            <li>
              <a href="#">
                <span class="glyphicon glyphicon-info-sign"></span><br class="hidden-xs"> About</a>
            </li>
            <li>
                <?php 
                    echo (Yii::$app->user->isGuest ? 
                        (
                            ''
                        )
                            : 
                        (
                            '<a href="http://localhost/mokamond/web/index.php?r=site%2Flogin"><span class="glyphicon glyphicon-shopping-cart"></span><br class="hidden-xs"> Sales</a>'
                        )
                    );
                 ?>
            </li>
            <li>
                <?php 
                    echo (Yii::$app->user->isGuest ? 
                        (
                            '<a href="http://localhost/mokamond/web/index.php?r=site%2Flogin"><span class="glyphicon glyphicon-log-in"></span><br class="hidden-xs"> Login</a>'
                        )
                            : 
                        (
                            '<li>'
                            . Html::beginForm(['/site/logout'], 'post')
                            . Html::submitButton(
                                'Logout (' . Yii::$app->user->identity->username . ')',
                                ['class' => 'btn btn-link logout']
                            )
                            . Html::endForm()
                            . '</li>'
                        )
                    );
                 ?>
            </li>
            
            <li id="phone" class="hidden-xs">
              <a href="tel:410-602-5008">
                <span>410-602-5008</span></a><div>* We Deliver</div>
            </li>
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div>
    </nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="panel-footer">
    <div class="container">
      <div class="row">
        <section id="hours" class="col-sm-4">
          <span>Hours:</span><br>
          Sun-Thurs: 11:15am - 10:00pm<br>
          Fri: 11:15am - 2:30pm<br>
          Saturday Closed
          <hr class="visible-xs">
        </section>
        <section id="address" class="col-sm-4">
          <span>Address:</span><br>
          7105 Reisterstown Road<br>
          Baltimore, MD 21215
          
          <hr class="visible-xs">
        </section>
      </div>
      <div class="text-center">&copy; Copyright Mokamond <?= date('Y') ?></div>
    </div>
  </footer>

<?php $this->endBody() ?>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php $this->endPage() ?>
