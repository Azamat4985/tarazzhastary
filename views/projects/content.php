<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ақпарат</title>
    <link rel="stylesheet" href="/css/normalize.css" />
    <link rel="stylesheet" href="/css/style.css" />
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
          <h1 class="content__title"><?php echo $projectsItem['title']?></h1>
          <p><?php echo $projectsItem['text_short']?></p>
        </div>
      </div>
    </main>

    <?php include_once ROOT. '/templates/footer.html';?>
  </body>
</html>
