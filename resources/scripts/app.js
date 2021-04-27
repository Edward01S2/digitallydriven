/**
 * External Dependencies
 */
import 'jquery';
import 'alpinejs';

import { debounce } from 'underscore';
import Swiper, { Navigation } from 'swiper';

Swiper.use([Navigation]);

import { gsap } from "gsap";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";
import { Draggable } from "gsap/Draggable";
import { InertiaPlugin } from "gsap/InertiaPlugin";

gsap.registerPlugin(ScrollTrigger, ScrollToPlugin, Draggable, InertiaPlugin);

$(document).ready(() => {
  // console.log('Hello world');

// if($('.home .slide').length) {
//   const slides = document.querySelectorAll(".home .slide");
//   const container = document.querySelector(".home .slide-container");
//   let oldSlide = 0;
//   let activeSlide = 0;
//   let dur = 0.6;
//   let offsets = [];
//   let ih = window.innerHeight;


//   // figure out which of the 4 nav controls called the function
//     function slideAnim(e) {

//     oldSlide = activeSlide;
//     // dragging the panels
//     if (this.id === "dragger") {
//       activeSlide = offsets.indexOf(this.endY);
//     } else {
//       if (gsap.isTweening(container)) {
//         return;
//       }
//       // up/down arrow clicks
//       if (e.keyCode === 40 || e.keyCode === 38) {
//         activeSlide = e.keyCode === 40 ? (activeSlide += 1) : (activeSlide -= 1);
//         // click on a dot
//       } else if (this.className === "dot") {
//         activeSlide = this.index;
//         // scrollwheel
//       } else {
//           //var delta = ((e.deltaY || -e.wheelDelta || e.detail) >> 10) || 1;
//           //console.log(e.deltaY)
//           // activeSlide = e.deltaY > 5 ? (activeSlide += 1) : (activeSlide -= 1);
//           if(e.deltaY > 10) {
//             activeSlide = activeSlide += 1;
//           }
//           if(e.deltaY < -10) {
//             activeSlide = activeSlide -= 1;
//           }
//       }
//     }
//     // make sure we're not past the end or beginning slide
//     activeSlide = activeSlide < 0 ? 0 : activeSlide;
//     activeSlide = activeSlide > slides.length - 1 ? slides.length - 1 : activeSlide;
//     if (oldSlide === activeSlide) {
//       return;
//     }
//     // if we're dragging we don't animate the container
//     if (this.id != "dragger") {
//       gsap.to(container, dur, { y: offsets[activeSlide], ease:"power2.inOut" });
//     }
//   }

//   window.addEventListener("wheel", debounce(slideAnim, 20));
//   window.addEventListener("resize", newSize);
//   $(document).on("keydown", slideAnim);

//   // make the container a draggable element
//     let dragMe = Draggable.create(container, {
//     type: "y",
//     edgeResistance: 1,
//     onDragEnd: slideAnim,
//     snap: offsets,
//     inertia:true,
//     zIndexBoost: false,
//     allowNativeTouchScrolling: false,
//     bounds: ".slide-wrapper"
//   });

//   dragMe[0].id = "dragger";
//   newSize();

//   // resize all panels and refigure draggable snap array
//   function newSize() {
//     offsets = [];
//     ih = window.innerHeight;
//     gsap.set(".slide-container", { height: slides.length * ih });
//     gsap.set(slides, { height: ih });
//     for (let i = 0; i < slides.length; i++) {
//       offsets.push(-slides[i].offsetTop);
//     }
//     gsap.set(container, { y: offsets[activeSlide] });
//     dragMe[0].vars.snap = offsets;
//   }
// }

  const statSwiper1 = new Swiper('.stats-slider-1', {
    slidesPerView: 1,
    grabCursor: false,
    spaceBetween: 24,
    preventClicks: false,
    navigation: {
      nextEl: '.stats-swiper-next-1',
      prevEl: '.stats-swiper-prev-1',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 48,
      },
      1024:  {
        slidesPerView: 3,
        spaceBetween: 48,
        allowTouchMove: false,
      },
    }
  });

  const statSwiper2 = new Swiper('.stats-slider-2', {
    slidesPerView: 1,
    grabCursor: false,
    spaceBetween: 24,
    preventClicks: false,
    navigation: {
      nextEl: '.stats-swiper-next-2',
      prevEl: '.stats-swiper-prev-2',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 48,
      },
      1024:  {
        slidesPerView: 3,
        spaceBetween: 48,
        allowTouchMove: false,
      },
    }
  });

  const statSwiper3 = new Swiper('.stats-slider-3', {
    slidesPerView: 1,
    grabCursor: false,
    spaceBetween: 24,
    preventClicks: false,
    navigation: {
      nextEl: '.stats-swiper-next-3',
      prevEl: '.stats-swiper-prev-3',
    },
    breakpoints: {
      768: {
        slidesPerView: 2,
        spaceBetween: 48,
      },
      1024:  {
        slidesPerView: 3,
        spaceBetween: 48,
        allowTouchMove: false,
      },
    }
  });

  const storySwiper1 = new Swiper('.story-slider-1', {
    slidesPerView: 1,
    grabCursor: false,
    spaceBetween: 24,
    preventClicks: false,
    navigation: {
      nextEl: '.story-swiper-next-1',
      prevEl: '.story-swiper-prev-1',
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      1024:  {
        slidesPerView: 3,
      },
      // 1536: {
      //   slidesPerView: 4,
      //   spaceBetween: 32,
      // }
    }
  });

  const storySwiper2 = new Swiper('.story-slider-2', {
    slidesPerView: 1,
    grabCursor: false,
    spaceBetween: 24,
    preventClicks: false,
    navigation: {
      nextEl: '.story-swiper-next-2',
      prevEl: '.story-swiper-prev-2',
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 24,
      },
      1024:  {
        slidesPerView: 3,
      },
      // 1536: {
      //   slidesPerView: 4,
      //   spaceBetween: 32,
      // }
    }
  });

  $("#country-select").change(function() {
    var $option = $(this).find(':selected');
    var url = $option.val();
    if (url != "") {
      //url += "/countries/" + country;
      // Show URL rather than redirect
      //$("#output").text(url);
      //console.log(url);
      window.location.href = url;
    }
  });

  $('.return-top').on('click', function(e) {
    e.preventDefault();
    gsap.to(window, {duration: 2, scrollTo: {y: 0}});
  });

  $('.find-btn').on('click', function(e) {
    var href = e.currentTarget.getAttribute("href")
    var anchor = href.substring(href.indexOf("#"))

    if(document.querySelectorAll(anchor).length > 0) {
      e.preventDefault();
      gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 100 }});
    }
  });

  const navLinks = gsap.utils.toArray(".nav-container .nav-link");
  //console.log(navLinks);
  navLinks.forEach((link, i) => {
    link.addEventListener("click", function(e) {
      var href = e.currentTarget.getAttribute("href")
      var anchor = href.substring(href.indexOf("#"))

      if(document.querySelectorAll(anchor).length > 0) {
        e.preventDefault();
        gsap.to(window, {duration: 1.5, scrollTo: {y: anchor, offsetY: 100 }});
      }
    });
  });

  // gsap.utils.toArray(".slide").forEach((box, i) => {
  //   var id = box.getAttribute("id");
  //   gsap.to(box, {
  //     scrollTrigger: {
  //       trigger: box,
  //       start: "top 60%",
  //       end: "bottom 20%",
  //       //markers: true,
  //       toggleClass: {targets: ".nav-container a[href='#" + id + "']", className: "active"},
  //     },
  //   });
  // });

});
