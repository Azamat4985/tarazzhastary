<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ақпарат</title>
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <script src="/js/main.js"></script>
  </head>
  <body>
    <div class="cursor"></div>
    <div class="page__bg">
      <div class="page-bg__obj"></div>
    </div>
    <?php include_once ROOT. '/templates/header.html';?>

    <main class="page-body">
      <div class="container">
        <div class="page-content__wrap">
        <h1 class="content__title"><?php echo $sportItem['name_kz']?></h1>
          <table class="culture__table">
            <tr>
              <th>№</th>
              <th>Атауы</th>
              <th>Мазмұны</th>
            </tr>
            <tr>
              <td>1</td>
              <td>Нысанның толық атауы</td>
              <td><?php echo $sportItem['name_kz']?></td>
            </tr>
            <tr>
              <td>2</td>
              <td>Заңды мекен – жайы </td>
              <td><?php echo $sportItem['address']?></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Ғимараттың аумағы, ш.м</td>
              <td><?php echo $sportItem['square']?></td>
            </tr>
            <tr>
              <td>4</td>
              <td>Байланыс номері</td>
              <td><?php echo $sportItem['tel_number']?></td>
            </tr>
            <tr>
              <td>5</td>
              <td>Сайт, электронды мекенжай (бар/жоқ)</td>
              <td><?php echo $sportItem['email']?></td>
            </tr>
            <tr>
              <td>6</td>
              <td>Instagram парақшасы</td>
              <td><?php echo $sportItem['instagram']?></td>
            </tr>
            <tr>
              <td>7</td>
              <td>Facebook парақшасы</td>
              <td><?php echo $sportItem['facebook']?></td>
            </tr>
            <tr>
              <td>8</td>
              <td>Жұмыс уақыты</td>
              <td style="display: flex;"><p style="margin-right: 1rem">от</p><?php echo $sportItem['shift_start']?><p style="margin-right: 1rem;margin-left: 1rem"> до </p><?php echo $sportItem['shift_end']?></td>
            </tr>
            <tr>
              <td>9</td>
              <td>Қызмет көрсету</td>
              <td><?php echo $sportItem['charge_kz']?></td>
            </tr>
          </table>
          <img src="<?php echo Sport::getImage($sportItem['id'])?>" alt="" width="100%">
          
        </div>
      </div>
    </main>

    <?php include_once ROOT. '/templates/footer.html';?>
  </body>
</html>
