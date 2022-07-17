const slider = () => {
  const heroHeading = document.querySelector(".hero-heading");
  const subHeading = document.querySelector(".hero-sub-heading");
  const bannerImage = document.querySelector(".hero-image-container img");
  let activeSlide = false;

  const sliderBtnOne = document.querySelector(".slider-button-one");
  const sliderBtnTwo = document.querySelector(".slider-button-two");

  sliderBtnOne.addEventListener("click", (e) => {
    heroHeading.textContent = "Get relief from Erectile Dysfunction today!";
    subHeading.innerHTML = `
      <li>Treatments starting at <strong>1 cent/dose</strong></li>
      <li>100% online and discreet delivery</li>
      <li>Free expert consultation</li>
      <li>Judgment - free care</li>
      `;
    bannerImage.src = "/assets/Banner.png";
    activeSlide = true;
    sliderBtnOne.classList.add("active-button");
    sliderBtnTwo.classList.remove("active-button");
  });

  sliderBtnTwo.addEventListener("click", (e) => {
    heroHeading.textContent = "Pain relief when you need it.";
    subHeading.innerHTML = `
      <li>Buy effective pain relief medications from us</li>
      <li>Become pain-free</li>
      <li>Successfully treats muscular spasms</li>
      `;
    bannerImage.src = "/assets/pain_banner.png";
    activeSlide = false;
    sliderBtnOne.classList.remove("active-button");
    sliderBtnTwo.classList.add("active-button");
  });
};

const showPopupForm = () => {
  const popUp = document.querySelector(".pop-up-form");
  const closeForm = document.querySelector(".form-close");

  closeForm.addEventListener("click", (e) => {
    popUp.style.display = "none";

    window.onscroll = function () {};
  });

  setTimeout(() => {
    popUp.style.display = "block";

    // Get the current page scroll position
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    (scrollLeft = window.pageXOffset || document.documentElement.scrollLeft),
      // if any scroll is attempted, set this to the previous value
      (window.onscroll = function () {
        window.scrollTo(scrollLeft, scrollTop);
      });
  }, 20000);

  slider();
};

const init = (e) => {
  showPopupForm();
  const faqs = document.querySelectorAll(".faq span");

  faqs.forEach((faq) => {
    faq.addEventListener("click", (e) => {
      if (e.target.textContent === "+") {
        e.target.textContent = "-";
      } else {
        e.target.textContent = "+";
      }

      e.target.parentNode.parentNode.children[1].classList.toggle(
        "faq-answer-hide"
      );
    });
  });

  window.addEventListener("scroll", (e) => {
    if (window.scrollY > 10) {
      // document.querySelector(".call-us-container").style.display = "block";
      document.querySelector(".call-us-container").style.transform =
        "translateX(0%)";
    } else {
      document.querySelector(".call-us-container").style.transform =
        "translateX(-150%)";
      // document.querySelector(".call-us-container").style.display = "none";
    }
  });
};

window.addEventListener("DOMContentLoaded", init);
