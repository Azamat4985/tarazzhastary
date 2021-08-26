
<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>AULIEATA JASTARY</title>
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script defer src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.3/lottie.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  </head>
  <body>
    <div class="cursor"></div>

    <?php include_once ROOT. '/templates/header.html';?>

    <main>
      <section class="first">
        <div class="first__bg">
          <img src="/img/bg1.png" class="first__bg--img" alt="" />
        </div>
        <div class="container">
          <div class="first__wrap">
            <h1 class="first__title">АУЛИЕАТА ЖАСТАРЫ</h1>
            <p class="first__text">Біз Тараз қаласының мемлекеттік жастар саясатын іске асыруда мемлекеттік органның функцияларын орындауға уәкілетті мемлекеттік органбыз.</p>
            <h2 class="first__lozung">
              Біз жастарды <p class="lozung__box"><span class="lozung__underline"></span> <span class="lozung__word">қолдаймыз</span></p>
            </h2>
          </div>
          <a href="/projects" class="first__btn">Бағдарламалар</a>
          <div class="first__btn-box">
            <a href="/culture" class="btn-box__btn"><p class="btn-box__btn__text--culture">Мәдениет</p></a>
            <a href="/sport" class="btn-box__btn"><p class="btn-box__btn__text--sport">Спорт</p></a>
            <a href="/directors" class="btn-box__btn"><p class="btn-box__btn__text--directors">Аудан директорлары</p></a>
          </div>
        </div>
      </section>
      <section class="second">
        <div class="second__triangleOne">
          <img src="/img/triangle1.png" alt="" />
        </div>
        <div class="second__triangleTwo">
          <img src="/img/triangle2.png" alt="" />
        </div>
        <div class="container">
          <div class="second__support-wrap">
            <div class="second__support">
              <h2 class="support__title">Бізді қолдайды</h2>
              <div class="support__imgbox">
                <a href="#" class="support__img"><img src="/img/nur.png" alt="" class="support__img"/></a>
                <a href="#" class="support__img"><img src="/img/zhastar.png" alt="" class="support__img"/></a>
                <a href="#" class="support__img"><img src="/img/ruh.png" alt="" class="support__img"/></a>
              </div>
            </div>
          </div>
          <div class="second__features">
            <a href="/info">
              <div class="features__info">
                <lottie-player class="features__anim" src="/anims/Animation 02/drawkit-grape-animation-2-LOOP.json" background="transparent" speed="1" loop autoplay></lottie-player>
                <h3 class="features__title">Өзекті ақпарат</h3>
                <p class="info__text">Ең актуалды әрі қызықты ақпараттардан қалып қоймаңыз!</p>
                <span class="info__go">Алға</span>
              </div>
            </a>
            <div class="features__right">
              <a href="/projects">
                <div class="right__one">
                  <h3 class="features__title">Бағдарламалар</h3>
                  <ul class="features__list">
                    <li class="features__item">
                      Жастарды қолдау бағдарламалары мен жобаларын жетілдіру, оларды іске асыруда нақты тетіктер мен жаңа тәсілдерді ұсыну. Жастарды қолдаудың жаңа шараларын енгізу;
                    </li>
                    <li class="features__item">Жастарды мемлекеттің қоғамдық-саяси өміріне тарту және азаматтық жауапкершілікті қалыптастыру;</li>
                    <li class="features__item">Жастар саясатының инфрақұрылымын институционалдық дамыту.</li>
                  </ul>
                </div>
              </a>
              <a href="/sport">
                <div class="right__two">
                  <h3 class="right-two__title">Жамыл облысының спорт насындары</h3>
                  <ul class="right__img-accordeon">
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                    <li class="accordeon__img"></li>
                  </ul>
                </div>
              </a>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php include_once ROOT. '/templates/footer.html';?>
  </body>
</html>
