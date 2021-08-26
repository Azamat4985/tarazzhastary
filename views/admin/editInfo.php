<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../../css/normalize.css" />
    <link rel="stylesheet" href="../../../css/admin.css" />
    <title>Admin panel</title>
  </head>

  <body>
    <div class="container">
      <div class="menu">
        <h1 class="menu__title">Админ-панель</h1>
        <ul class="menu__list">
          <li class="menu__item">
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
          <div class="form-wrap">
            <form method="post" class="content__form" enctype="multipart/form-data">
                <div class="form__item">
                  <label for="title" class="form__label">Тақырып<span class="label__required">*</span></label>
                  <input require type="text" name="title" id="title" class="form__input" placeholder="Тақырыпты жазыңыз" value="<?php echo $infoItem['title'] ?>" />
                </div>
                <div class="form__item">
                  <label for="img" class="form__label">Обложка</label>
                  <div class="form__img-current" style="background-image: url(<?php echo Info::getImage($infoItem['id'])?>)"></div>
                  <input type="file" name="img" id="img" value="<?php Info::getImage($infoItem['id'])?>"/>
                </div>
                <div class="form__item--textarea">
                  <label for="img" class="form__label">Мәтін</label>
                  <textarea require name="text" id="text" cols="30" rows="10" class="form__textarea" placeholder="Мәтінді теріңіз..."><?php echo $infoItem['text_short'] ?></textarea>
                </div>
                <div class="submit-box">
                  <input type="submit" name="submit" value="Дайын" class="form__submit" />
                </div>
            </form>
          </div>
      </div>
    </div>
  </body>
</html>
