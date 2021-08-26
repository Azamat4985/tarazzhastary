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
        <form method="post" style="margin-left: 50px;">
            <p>Сенімдісіз бе?</p>
            <input type="submit" name="submit" value="Иә" />
        </form>
      </div>
    </div>
  </body>
</html>
