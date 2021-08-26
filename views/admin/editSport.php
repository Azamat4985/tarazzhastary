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
                  <label for="name_kz" class="form__label">Нысанның толық атауы<span class="label__required">*</span></label>
                  <input require value="<?php echo $sportItem['name_kz'] ?>" type="text" name="name_kz" id="name_kz" class="form__input" placeholder="Нысанның толық атауы" />
                </div>
                <div class="form__item">
                  <label for="name_rus" class="form__label">Полное названия объекта<span class="label__required">*</span></label>
                  <input require value="<?php echo $sportItem['name_rus'] ?>" type="text" name="name_rus" id="name_rus" class="form__input" placeholder="Полное названия объекта" />
                </div>
                <div class="form__item">
                  <label for="address" class="form__label">Мекен-жайы / Адрес</label>
                  <input require value="<?php echo $sportItem['address'] ?>" type="text" name="address" id="address" class="form__input" placeholder="Мекен-жайы / Адрес" />
                </div>
                <div class="form__item">
                  <label for="square" class="form__label">Ғимарат аумағы / Площадь здания</label>
                  <div>
                    <textarea require type="text" name="square" id="square" class="form__input--textarea" placeholder="Ақпаратты теріңіз... / Введите данные ..." rows="10"><?php echo $sportItem['square']?></textarea>
                  </div>
                </div>
                <div class="form__item">
                  <label for="tel_number" class="form__label">Телефон нөмірі / Номер телефона</label>
                  <input type="number" value="<?php echo $sportItem['tel_number'] ?>" name="tel_number" id="tel_number" class="form__input" placeholder="Телефон нөмірі / Номер телефона" />
                </div>
                <div class="form__item">
                  <label for="email" class="form__label">Email / сайт</label>
                  <input value="<?php echo $sportItem['email'] ?>" type="text" name="email" id="email" class="form__input" placeholder="Email / сайт" />
                </div>
                <div class="form__item">
                  <label for="instagram" class="form__label">Instagram</label>
                  <input value="<?php echo $sportItem['instagram'] ?>" type="text" name="instagram" id="instagram" class="form__input" placeholder="Instagram" />
                </div>
                <div class="form__item">
                  <label for="facebook" class="form__label">Facebook</label>
                  <input value="<?php echo $sportItem['facebook'] ?>" type="text" name="facebook" id="facebook" class="form__input" placeholder="Facebook" />
                </div>
                <div class="form__item">
                  <label for="shift_start" class="form__label">Жұмыс уақыты </label>
                  <p>от</p><input require value="<?php echo $sportItem['shift_start'] ?>" type="number" name="shift_start" id="shift_start" class="form__input" placeholder="..." />
                  <p>до</p><input require value="<?php echo $sportItem['shift_end'] ?>" type="number" name="shift_end" id="shift_end" class="form__input" placeholder="..." />
                </div>
                <div class="form__item">
                  <label for="charge_kz" class="form__label">Қызмет көрсету</label>
                  <select name="charge_kz" id="charge_kz">
                    <option value="Тегін" <?php if($sportItem['charge_kz'] == 'Тегін') echo ' selected="selected' ?>>Тегін</option>
                    <option value="Ақылы" <?php if($sportItem['charge_kz'] == 'Ақылы') echo ' selected="selected' ?>>Ақылы</option>
                    <option value="Тегін/Ақылы" <?php if($sportItem['charge_kz'] == 'Тегін/Ақылы') echo ' selected="selected' ?>>Тегін/Ақылы</option>
                  </select>
                </div>
                <div class="form__item">
                  <label for="charge_rus" class="form__label">Обслуживание</label>
                  <select name="charge_rus" id="charge_rus">
                    <option value="Бесплатно" <?php if($sportItem['charge_rus'] == 'Бесплатно') echo ' selected="selected' ?>>Бесплатно</option>
                    <option value="Платно" <?php if($sportItem['charge_rus'] == 'Платно') echo ' selected="selected' ?>>Платно</option>
                    <option value="Бесплатно/Платно" <?php if($sportItem['charge_rus'] == 'Бесплатно/Платно') echo ' selected="selected' ?>>Тегін/Ақылы</option>
                  </select>
                </div>
                <div class="form__item">
                  <label for="img" class="form__label">Обложка</label>
                  <div class="form__img-current" style="background-image: url(<?php echo Sport::getImage($sportItem['id'])?>)"></div>
                  <input type="file" name="img" id="img" value="<?php echo $sportItem['image']?>"/>
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
