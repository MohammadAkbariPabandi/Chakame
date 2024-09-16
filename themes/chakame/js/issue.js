const faqElements = document.getElementsByClassName("accordion");

const FAQHandler = () => {
  for (let i = 0; i < faqElements.length; i++) {
    const currFaqElem = faqElements[i];
    currFaqElem.addEventListener("click", function () {
      /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
      this.classList.toggle("active");

      /* Toggle between hiding and showing the active panel */
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
        panel.style.maxHeight = null;

      } else {
        panel.style.display = "block";
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
      const chavron = currFaqElem.children[1];
      console.log(chavron)
      chavron.classList.toggle("bi-chevron-up");
    });
  }
};

const init = () => {
    FAQHandler();
};

init();
