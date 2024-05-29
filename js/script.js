//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,
  grabCursor: true,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

document.querySelectorAll("#subnavbar a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    var target = document.querySelector(this.getAttribute("href"));
    target.scrollIntoView({
      behavior: "smooth",
    });

    // Thay đổi URL mà không cần tải lại trang
    history.pushState(null, null, " ");
  });
});

document.querySelectorAll("#navitem-col-ul a").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    var target = document.querySelector(this.getAttribute("href"));
    target.scrollIntoView({
      behavior: "smooth",
    });

    // Thay đổi URL mà không cần tải lại trang
    history.pushState(null, null, " ");
  });
});

document.querySelectorAll("#letter-nav").forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    var target = document.querySelector(this.getAttribute("href"));
    target.scrollIntoView({
      behavior: "smooth",
    });

    history.pushState(null, null, " ");
  });
});

//-------------------------------------------------------------

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------
function chigoExpand() {
  let Content = document.getElementById("chigo-des");
  let Button = document.getElementById("chigo-btn");

  if (Content.style.display === "none") {
    Button.style.transform = "rotate(90deg)";
    Content.style.display = "block";
  } else {
    Content.style.display = "none";
    Button.style.transform = "rotate(0)";
  }
}

function hboExpand() {
  let Content = document.getElementById("hbo-des");
  let Button = document.getElementById("hbo-btn");

  if (Content.style.display === "none") {
    Button.style.transform = "rotate(90deg)";
    Content.style.display = "block";
  } else {
    Content.style.display = "none";
    Button.style.transform = "rotate(0)";
  }
}

function getExpand() {
  let Content = document.getElementById("get-des");
  let Button = document.getElementById("get-btn");

  if (Content.style.display === "none") {
    Button.style.transform = "rotate(90deg)";
    Content.style.display = "block";
  } else {
    Content.style.display = "none";
    Button.style.transform = "rotate(0)";
  }
}

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

const sections = gsap.utils.toArray("section");
let item = [
  document.getElementById("item-home"),
  document.getElementById("item-myself"),
  document.getElementById("item-resume"),
  document.getElementById("item-gallery"),
  document.getElementById("item-identity"),
];

secID = [
  { name: "home-section", value: 0 },
  { name: "myself-section", value: 1 },
  { name: "resume-section", value: 2 },
  { name: "gallery-section", value: 3 },
  { name: "identity-section", value: 4 },
];

function changeIndex(sec) {
  let current = secID.find(({ name }) => name === sec.id).value;

  for (let i = 0; i < item.length; ++i) {
    item[i].classList.remove("un");
    item[i].classList.remove("un-static");
    item[i].style.color = "#A6A6A6";
  }

  item[current].style.color = "#000000";
  item[current].classList.add("un-static");

  for (let i = 0; i < item.length; ++i)
    if (i != current) item[i].classList.add("un");
}

sections.forEach((section) => {
  ScrollTrigger.create({
    trigger: section,
    start: "top 40",
    end: "bottom 40",
    onEnter: () => changeIndex(section),
    onEnterBack: () => changeIndex(section),
  });
});

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

function phonenumCopy() {
  var copyText = "0919706390";
  navigator.clipboard.writeText(copyText);
  alert("Copied phone number: " + copyText);
}

function emailCopy() {
  var copyText = "nvbaohien@gmail.com";
  navigator.clipboard.writeText(copyText);
  alert("Copied mail address: " + copyText);
}

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("show");
    }
    // else {
    //   entry.target.classList.remove("show");
    // }
  });
});

const hiddenElements = document.querySelectorAll(" .hidden");

hiddenElements.forEach((el) => observer.observe(el));

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

const observerY = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      entry.target.classList.add("showY");
    }
    // else {
    //   entry.target.classList.remove("showY");
    // }
  });
});

const hiddenYElements = document.querySelectorAll(" .hiddenY");

hiddenYElements.forEach((el) => observerY.observe(el));

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

$(document).ready(function () {
  $("#color_mode").on("change", function () {
    colorModePreview(this);
  });
});

function colorModePreview(ele) {
  if ($(ele).prop("checked") == true) {
    $("body").addClass("dark-preview");
    $("body").removeClass("white-preview");
  } else if ($(ele).prop("checked") == false) {
    $("body").addClass("white-preview");
    $("body").removeClass("dark-preview");
  }
}

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

$(".images img").click(function () {
  $("#full-image").attr("src", $(this).attr("src"));
  $("#image-viewer").show();
});

$("#image-viewer .close").click(function () {
  $("#image-viewer").hide();
});

//-------------------------------------------------------------
//-------------------------------------------------------------
//-------------------------------------------------------------

function menuExpand() {
  let Content = document.getElementById("navitem-col-ul");
  let Button = document.getElementById("menu");

  if (Content.style.display === "none") {
    Button.style.transform = "rotate(90deg)";
    Content.style.display = "flex";
  } else {
    Content.style.display = "none";
    Button.style.transform = "rotate(0)";
  }
}
