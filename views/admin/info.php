<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/admin.css" />
    <title>Admin panel</title>
  </head>

  <body>
    <div class="container">
      <div class="menu">
        <h1 class="menu__title">Админ-панель</h1>
        <ul class="menu__list">
          <li class="menu__item menu__item--active">
            <a href="/admin/info" class="menu__button">Ақпараттар беті</a>
          </li>
          <li class="menu__item ">
            <a href="/admin/culture" class="menu__button">Мәдениет беті</a>
          </li>
          <li class="menu__item">
            <a href="/admin/sport" class="menu__button">Спорт нысандары беті</a>
          </li>
          <li class="menu__item">
            <a href="/admin/projects" class="menu__button">Бағдарламалар беті</a>
          </li>
        </ul>
      </div>
      <div class="content">
        <h2 class="content__title">Ақпараттар беті</h2>
        <div class="newItem-box">
          <a href="/admin/info/create" class="item__newBtn">Қосу +</a>
        </div>
        <div class="content__items">
          <?php foreach ($infoList as $infoItem):?>
          <div class="content__item">
          <div class="item__img" style="background-image: url(<?php echo Info::getImage($infoItem['id'])?>);"></div>
            <div class="item__content">
              <h2 class="item__title"><?php echo $infoItem['title'] ?></h2>
              <p class="item__text"><?php echo $infoItem['text_short'] ?></p>
              <div class="item__btnbox">
                <a href="/admin/info/edit/<?php echo $infoItem['id'] ?>" class="item__editBtn"></a>
                <a href="/admin/info/delete/<?php echo $infoItem['id'] ?>" class="item__deleteBtn"></a>
              </div>
            </div>
          </div>
          <?php endforeach;?>

        </div>
      </div>
    </div>
  </body>
</html>
