<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ақпарат</title>
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <!-- <script defer src="js/main.js"></script> -->
    <script defer src="/js/createPage.js"></script>
  </head>
  <script>
      document.addEventListener('DOMContentLoaded', () => {
        createPage('/img/page/info-banner.png','Мәдениет', 'Жамбыл облысы жастарының мәдениеті туралы');
      });
  </script>
  <body>
    <div class="cursor"></div>
    <div class="page__bg">
      <div class="page-bg__obj"></div>
    </div>
    <?php include_once ROOT. '/templates/header.html';?>

    <main class="page-body">
      <div class="container">
        <div class="page__content">
          <article class="page__banner">
            <div class="banner__img"></div>
            <h1 class="banner__title"></h1>
            <p class="banner__text"></p>
          </article>
          
          <?php foreach ($cultureList as $cultureItem):?>
          <a href="/culture/<?php echo $cultureItem['id']?>" >
            <article class="page__item">
            <div class="item__img" style="background-image: url(<?php echo Culture::getImage($cultureItem['id'])?>);"></div>
              <div class="item__content">
                <h2 class="item__title"><?php echo $cultureItem['name_kz'] ?></h2>
                <p class="item__text"><?php echo $cultureItem['address'] ?></p>
              </div>
              
                <button class="item__btn">Әрі қарай оқу</button>
            </article>
          </a>
          <?php endforeach;?>
        </div>
      </div>
    </main>
    <?php include_once ROOT. '/templates/footer.html';?>
  </body>
</html>
