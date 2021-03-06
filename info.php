<?php ?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ақпарат</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <script defer src="js/main.js"></script> -->
    <script defer src="js/createPage.js"></script>
  </head>
  <script>
      document.addEventListener('DOMContentLoaded', () => {
        createPage('../img/page/info-banner.png','Ақпарат', 'Бұл жерде сіз өзекті әрі жаңа ақпаратты ала аласыз');
      });
  </script>
  <body>
    <div class="cursor"></div>
    <div class="page__bg">
      <div class="page-bg__obj"></div>
    </div>
    <header class="header">
      <div class="container">
        <div class="nav">
          <nav class="navbar">
            <a href="#" class="logo">ЛОГОТИП</a>
            <ul class="navbar__list">
              <li class="navbar__item"><a href="projects.html" class="navbar__link">Бағдарламалар</a></li>
              <li class="navbar__item"><a href="culture.html" class="navbar__link">Мәдениет</a></li>
              <li class="navbar__item"><a href="sport.html" class="navbar__link">Спорт нысаны</a></li>
              <li class="navbar__item"><a href="directors.html" class="navbar__link">Аудан директорлары</a></li>
              <li class="navbar__item"><a href="info.html" class="navbar__link">Ақпараттар</a></li>
            </ul>
          </nav>
          <a href="#form" class="nav__btn">Бізбен хабарласыңыз</a>
          <div class="navbar__dropdown">
            <button class="navbar__burger"></button>
            <ul class="dropdown__list">
              <li><a h ref="projects.html">Бағдарламалар</a></li>
              <li><a href="culture.html">Мәдениет</a></li>
              <li><a href="sport.html">Спорт нысаны</a></li>
              <li><a href="directors.html">Аудан директорлары</a></li>
              <li><a href="info.html">Ақпараттар</a></li>
              <li><a href="#form" class="dropdown-item__contact">Бізбен хабарласыңыз</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <main class="page-body">
      <div class="container">
        <div class="page__content">
          <article class="page__banner">
            <div class="banner__img"></div>
            <h1 class="banner__title"></h1>
            <p class="banner__text"></p>
          </article>
          <a href="#">
            <article class="page__item">
              <div class="item__img"></div>
              <div class="item__content">
                <h2 class="item__title">Ақпарат 1</h2>
                <p class="item__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nec leo ultrices, euismod sapien eu, hendrerit turpis.</p>
              </div>
            </article>
          </a>
        </div>
      </div>
    </main>
    <footer class="footer">
        <div class="container">
          <div class="footer__content">
            <div class="footer__firstcol">
              <div class="footer__telnumbers">
                <a href="tel:+77777777777" class="footer__link footer__tel">+7 (777) 777-77-77</a>
                <a href="tel:+77777777777" class="footer__link footer__tel">+7 (777) 777-77-77</a>
              </div>
              <a href="mailto:email@email.com" class="footer__link footer__email">email@email.com</a>
              <address class="footer__link footer__address">Тараз қаласы, Жеңіс көшесі, 32 үй</address>
              <p class="footer__copyright">© 2020-2021. Сайтты жасаған - Даулетияров Азамат. ‘Polytech’ командасы.</p>
              <div class="footer__valid">
                <p>
                  <a href="http://jigsaw.w3.org/css-validator/check/referer">
                      <img style="border:0;width:88px;height:31px"
                          src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
                          alt="Правильный CSS!" />
                      </a>
                </p>
                <p>
                  <a href="https://validator.w3.org/#validate_by_upload">
                      <img style="border:0;width:88px;height:31px"
                          src="http://www.w3.org/Icons/valid-html401"
                          alt="Правильный CSS!" />
                      </a>
                </p>
  
              </div>
                            
            </div>
            <div class="footer__secondcol" id="form">
              <form action="https://jsonplaceholder.typicode.com/posts" class="footer__form" method="POST" >
                <p class="form__title">Бізбен хабарласыңыз</p>
                <input required type="text" name="fio" placeholder="Аты-жөніңіз*" class="form__input" />
                <input required type="email" name="email" placeholder="E-mail*" class="form__input" />
                <input type="submit" value="Жіберу" class="form__submit">
              </form>
            </div>
            <div class="footer__thirdcol">
              <ul class="footer__socials-list">
                <li class="footer__socials-item"><a href="#"><img src="/img/instagram.svg" alt=""></a></li>
                <li class="footer__socials-item"><a href="#"><img src="/img/facebook.svg" alt=""></a></li>
                <li class="footer__socials-item"><a href="#"><img src="/img/vk.svg" alt=""></a></li>
              </ul>
            </div>
          </div>
          <div class="footer__socials--small">
            <ul class="footer__socials-list--small">
              <li class="footer__socials-item"><a href="#"><img src="/img/instagram.svg" alt=""></a></li>
              <li class="footer__socials-item"><a href="#"><img src="/img/facebook.svg" alt=""></a></li>
              <li class="footer__socials-item"><a href="#"><img src="/img/vk.svg" alt=""></a></li>
            </ul>
          </div>
        </div>
      </footer>
  </body>
</html>
