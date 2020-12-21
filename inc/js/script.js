const menu = document.querySelector(".links-container");
const menuBtn = document.getElementById("menu-btn");
const overlay = document.querySelector(".overlay");
const closeBtn = document.getElementById("menu-close-btn");
const spanAll = document.querySelectorAll("#menu-btn span");
const span = document.querySelector("#menu-btn span:first-child");
const spanTwo = document.querySelector("#menu-btn span:nth-child(2)");
const spanThree = document.querySelector("#menu-btn span:last-child");
const nav = document.querySelector("nav");
const linksContainer = document.querySelector(".links-container");
const links = document.querySelectorAll("nav a");
const navbar = document.getElementById("nav");
const topLink = document.querySelector(".top-link");
const header = document.querySelector("header");
const hover = document.querySelector(".links-container a:hover");

if (header == null) {
  jQuery(document).ready(function () {
    // Select all links with hashes
    jQuery('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = jQuery(this.hash);
          target = target.length
            ? target
            : jQuery("[name=" + this.hash.slice(1) + "]");
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            jQuery("html, body").animate(
              {
                scrollTop: target.offset().top,
              },
              700,
              function () {
                // Callback after animation
                // Must change focus!
                var $target = jQuery(target);
                $target.focus();
                if ($target.is(":focus")) {
                  // Checking if the target was focused
                  return false;
                } else {
                  $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                }
              }
            );
          }
        }
      });
  });
  navbar.classList.add("fixed-nav");
} else {
  window.addEventListener("scroll", function () {
    const scrollHeight = window.pageYOffset;
    const navHeight = navbar.getBoundingClientRect().height;
    if (scrollHeight > navHeight) {
      navbar.classList.add("fixed-nav");
    } else {
      navbar.classList.remove("fixed-nav");
    }
    // setup back to top link

    if (scrollHeight > 300) {
      topLink.classList.add("show-link");
    } else {
      topLink.classList.remove("show-link");
    }
  });
}

// ------------------------------------------------------------------------------ //
// Menu Button
// ------------------------------------------------------------------------------ //

menuBtn.addEventListener("click", function () {
  menu.classList.toggle("menu-open");
  overlay.classList.toggle("overlay-visible");
  span.classList.toggle("menu-btn-open");
  spanTwo.classList.toggle("menu-btn-open-2");
  spanThree.classList.toggle("menu-close");
});

// ------------------------------------------------------------------------------ //
// Preloader
// ------------------------------------------------------------------------------ //

jQuery(window).on("load", function () {
  if (jQuery(".pre-loader-wrap").length > 0) {
    jQuery(".pre-loader-wrap").fadeOut("slow");
  }
});

// ------------------------------------------------------------------------------ //
// Dynamic Copyright Date
// ------------------------------------------------------------------------------ //

const dateElement = document.getElementById("copyright-date");

function updateDate() {
  const date = new Date().getFullYear();
  dateElement.innerHTML = date;
}

updateDate();

// ------------------------------------------------------------------------------ //
// Dynamic Carousel
// ------------------------------------------------------------------------------ //

jQuery(document).ready(function () {
  for (let j = 0; j < document.querySelectorAll(".carousel-item").length; j++) {
    jQuery(
      '<li data-target="#client-testimonial-carousel" data-slide-to="' +
        j +
        '"></li>'
    ).appendTo(".carousel-indicators");
  }
  jQuery(".carousel-item").first().addClass("active");
  jQuery(".carousel-indicators > li").first().addClass("active");
  jQuery("#carousel").carousel();
});

// ------------------------------------------------------------------------------ //
// Filter Active Links
// ------------------------------------------------------------------------------ //

jQuery(document).ready(function () {
  jQuery(".tabs-list a").click(function () {
    var filterValue = jQuery(this).attr("data-filter");
    if (filterValue == "cat-all") {
      jQuery(".cat-all").show();
    } else {
      jQuery(".cat-all")
        .not("." + filterValue)
        .hide();
      jQuery(".cat-all")
        .filter("." + filterValue)
        .show();
    }

    if (jQuery(this)) {
      jQuery(this).addClass("tab-active");
      jQuery(".tabs-list a").not(this).removeClass("tab-active");
    }
  });
});
