(() => {
  let currentMenuItem;
  const currentPageTitle = document.querySelector(".content__title");
  const menuButtons = document.querySelectorAll(".menu__button");
  const menuItems = document.querySelectorAll(".menu__item");
  const menu = document.querySelector(".menu");
  const createItemBtn = document.querySelector(".item__newBtn");

  for (const menuButton of menuButtons) {
    menuButton.addEventListener("click", () => {
      for (const menuItem of menuItems) {
        menuItem.classList.remove("menu__item--active");
      }
      identifyPage(menuButton.textContent);
      menuButton.parentNode.classList.add("menu__item--active");
    });
  }

  function identifyPage(pageName) {
    currentPageTitle.textContent = pageName;
    if (pageName == "Ақпараттар беті") menu.style.backgroundColor = "#654DFF";
    if (pageName == "Мәдениет беті") menu.style.backgroundColor = "#FFA24D";
    if (pageName == "Спорт нысандары беті") menu.style.backgroundColor = "#5FD16A";
    if (pageName == "Бағдарламалар беті") menu.style.backgroundColor = "#FF6F6F";
    if (pageName == "Аудан директорлары беті") menu.style.backgroundColor = "#FFF16F";
  }
})();
