(() => {
  let lozungWords = ["қолдаймыз", "қорғаймыз", "сыйлаймыз", "білімге үйретеміз"]; // Слова для смены в лозунге
  let lozungWordsCounter = 0;

  document.addEventListener("DOMContentLoaded", () => {
    const cursor = document.querySelector(".cursor");
    const body = document.body;
    const bgColor = document.querySelector(".first__bg");
    const bgImg = document.querySelector(".first__bg--img");
    const supportTitle = document.querySelector(".support__title");
    const secondFeatures = document.querySelector(".second__features");
    const triangleOne = document.querySelector('.second__triangleOne');
    const triangleTwo = document.querySelector('.second__triangleTwo');
    const dropdownBtn = document.querySelector('.navbar__burger');
    const dropDownList = document.querySelector('.dropdown__list');

    dropdownBtn.addEventListener('click', () => {
      dropDownList.classList.toggle('dropdown__show');
    });


    // отслеживание курсора
    document.addEventListener("mousemove", (e) => {
      cursor.style.left = e.clientX + "px";
      cursor.style.top = e.clientY + "px";
      cursor.classList.remove("hidden");
    });

    body.addEventListener("mouseout", () => {
      cursor.classList.add("hidden");
    });

    const links = document.getElementsByTagName("a");
    for (let i = 0; i < links.length; i++) {
      links[i].addEventListener("mouseover", () => {
        cursor.classList.add("hover");
      });
      links[i].addEventListener("mouseout", () => {
        cursor.classList.remove("hover");
      });
    }

    // смена слов в 1 секции
    const lozungWord = document.querySelector(".lozung__word");
    const lozungUnderline = document.querySelector(".lozung__underline");
    let lozungCounter = 0;
    let lozungInterval = setInterval(changeWord, 2000);

    function changeWord() {
      if (lozungCounter >= lozungWords.length) {
        lozungCounter = 0;
      }
      lozungWord.style.top = -30 + "px";
      lozungWord.style.opacity = 0;
      let lozungPosTimeout = setTimeout(() => {
        lozungWord.style.top = 0 + "px";
        lozungWord.textContent = lozungWords[lozungCounter];
        lozungUnderline.style.width = lozungWord.offsetWidth + "px";
        lozungCounter++;
      }, 600);
      let lozungOpaciteTimeout = setTimeout(() => {
        lozungWord.style.opacity = 1;
      }, 1200);
    }

    // анимации задних фонов при скролле
    window.addEventListener("scroll", function () {
      bgImg.style.top = this.pageYOffset / 10 + "px";
      if(isInViewport(secondFeatures)){
        triangleOne.style.opacity = 1;
        triangleOne.style.left = -30 + '%';
        triangleTwo.style.opacity = 1;
        triangleTwo.style.right = -30 + '%';
      } else {
        triangleOne.style.opacity = 0;
        triangleOne.style.left = -100 + '%';
        triangleTwo.style.opacity = 0;
        triangleTwo.style.right = -100 + '%';
      }
      if (isScrolledIntoView(supportTitle) || isInViewport(secondFeatures)) {
        bgColor.style.opacity = 0;
        bgImg.style.opacity = 0;
      } else {
        bgColor.style.opacity = 1;
        bgImg.style.opacity = 1;
      }
    });

    function isScrolledIntoView(el) {
      var rect = el.getBoundingClientRect();
      var elemTop = rect.top;
      var elemBottom = rect.bottom;
      var isVisible = elemTop >= 0 && elemBottom <= window.innerHeight;
      return isVisible;
    }

    function isInViewport(el, percentVisible = 10) {
      let rect = el.getBoundingClientRect();
      let windowHeight = window.innerHeight || document.documentElement.clientHeight;

      return !(Math.floor(100 - ((rect.top >= 0 ? 0 : rect.top) / +-rect.height) * 100) < percentVisible || Math.floor(100 - ((rect.bottom - windowHeight) / rect.height) * 100) < percentVisible);
    }


  });
})();
