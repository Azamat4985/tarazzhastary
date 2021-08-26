(() => {
  //   document.addEventListener("DOMContentLoaded", () => {
  const cursor = document.querySelector(".cursor");
  const body = document.body;
  const dropdownBtn = document.querySelector(".navbar__burger");
  const dropDownList = document.querySelector(".dropdown__list");
  const bgObj = document.querySelector(".page-bg__obj");
  const banner = document.querySelector(".page__banner");
  const bannerImg = document.querySelector(".banner__img");
  const bannerTitle = document.querySelector(".banner__title");
  const bannerText = document.querySelector(".banner__text");

  function createPage(img, title, text) {
    bannerImg.style.backgroundImage = `url(${img})`;
    // console.log(img);
    bannerTitle.textContent = title;
    bannerText.textContent = text;
  }

  let eX = banner.offsetWidth / 2;
  let eY = banner.offsetHeight / 2;

  dropdownBtn.addEventListener("click", () => {
    dropDownList.classList.toggle("dropdown__show");
  });

  window.addEventListener("scroll", function () {
    bgObj.style.top = this.pageYOffset / -5 + "px";
  });

  banner.addEventListener("mousemove", (e) => {
    let dX = e.clientX - eX;
    let dY = e.clientY - eY;
    let tiltX = dY / eY;
    let tiltY = dX / eX;
    let radius = Math.sqrt(Math.pow(tiltX, 1) + Math.pow(tiltY, 1));
    let degree = radius * 20;
    banner.style.transform = `rotate3d(${tiltX}, ${tiltY}, 0, ${degree}deg)`;
  });

  banner.addEventListener("mouseout", (e) => {
    banner.style.transform = `rotate3d(1, 1, 0, 0deg)`;
  });

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

  window.createPage = createPage;
  //   }); //DOMContentLoaded
  // IIFE
})();
