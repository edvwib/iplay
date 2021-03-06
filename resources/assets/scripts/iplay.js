/*
 * This file is part of IPLAY.
 * (c) IPY Holding AB.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

'use strict';

import Swiper from 'swiper';
import Flickity from 'flickity';
import LazyLoad from 'vanilla-lazyload';

export default class Iplay {
  constructor () {

  }
}

new Iplay();
var lazyLoad = new LazyLoad();

// Header background
let header = document.querySelector('header');
let ticking = false;

const checkScroll = (scrollPos) => {
  if (scrollPos > 0)
    header.classList.add('scrolled');
  else
    header.classList.remove('scrolled');
}
checkScroll(window.scrollY);

window.addEventListener('scroll', (e) => {
  let lastPos = window.scrollY;

  if (!ticking) {
    window.requestAnimationFrame(function () {
      checkScroll(lastPos);
      ticking = false;
    });
    ticking = true;
  }
});


// Mobile hamburger button
let menuButton = document.querySelector('.hamburger_button');
let menu = document.querySelector('.hamburger_menu');

menuButton.addEventListener('click', () => {
  let isOpen = menu.classList.contains('active');

  if (isOpen) {
    menu.classList.remove('active');
    menuButton.classList.remove('active');
  } else {
    menu.classList.add('active');
    menuButton.classList.add('active');
  }

});


// Key points slider
if (document.querySelector('.flickity-wrapper')) {
  let keyPointsFlick = new Flickity('.flickity-wrapper', {
    // options
    cellAlign: 'center',
    contain: false,
    initialIndex: 1,
    prevNextButtons: false,
    pageDots: false,
  });

  let progressBar = document.querySelector('.progressbar')
  let containerWidth = document.querySelector('.progressbar_container').offsetWidth;
  let barWidth = progressBar.offsetWidth;
  let offset = containerWidth / barWidth;

  console.log(containerWidth/barWidth);


  keyPointsFlick.on('scroll', (progress) => {
    updateScrollbar(progress);
  });

  const updateScrollbar = (progress) => {
    progress = Math.max(0, Math.min(1, progress));

    progressBar.style.transform = `translateX(${(progress * 80) * offset}%)`;
  }
  updateScrollbar(.5);
}


// Swiper sliders
let theTeamSwiper = new Swiper('.the_team_container', {
  slidesPerView: 2,
  slidesPerColumn: 2,
  spaceBetween: 30,
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  lazy: true,
});

let theAppSwiper = new Swiper('.frame', {
  slidesPerView: 1,
  spaceBetween: 30,
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'progressbar',
  },
  lazy: true,
});


// The app progressbar
let featuresProgressContainer = document.querySelector('.features_progressbar_container');
let featuresProgress = document.querySelector('.features_progressbar');

if(featuresProgress){
  featuresProgress.style.width = '100px'; /*Todo: calculate width*/
}

// The app scrollbar
let appScrollbarContainer = document.querySelector('.features_scroll_container');
if (appScrollbarContainer){
  let appFeaturesContainer = document.querySelector('.upcoming_features_wrapper');
  let appScrollbar = appScrollbarContainer.querySelector('features_scroll');

  console.log(appFeaturesContainer.scrollTop);

}
