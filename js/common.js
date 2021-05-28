var boxParalax = document.querySelectorAll('.paralaxImgWrap');
new simpleParallax(boxParalax, {
    delay: .2,
    scale: 1.2,
});

var pageparalaxWrap = document.getElementsByClassName('heading-page__paralaxWrap');
new simpleParallax(pageparalaxWrap, {
    delay: .2,
    scale: 1.15,
});

var sliderMain = new Swiper(".sliderMain-js", {
    speed: 1000,
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });

  var swiperClients = new Swiper(".clientsSlider-js", {
    slidesPerView: 5,
    spaceBetween: 10,
    speed: 1000,
    loop: true,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 3,
      },
      991: {
        slidesPerView: 4,
      },
      1200: {
        slidesPerView: 5,
      },
    },
  });

  var galleryCarousel = new Swiper(".galleryCarousel-js", {
    slidesPerView: 4,
    spaceBetween: 5,
    speed: 1000,
    loop: true,
    navigation: {
      nextEl: ".slider-btn-next",
      prevEl: ".slider-btn-prev",
    },
    breakpoints: {
      0: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 3,
      },
      991: {
        slidesPerView: 3,
      },
      1200: {
        slidesPerView: 4,
      },
    },
  });
  

  var sliderAboutUsAnimation = new SwiperAnimation();
  var sliderAboutUs = new Swiper(".aboutUsSlider-js", {
    slidesPerView: 1,
    spaceBetween: 10,
    speed: 500,
    autoHeight: true,
    effect: "fade",
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + "</span>";
      },
    },
    on: {
      init: function () {
        sliderAboutUsAnimation.init(this).animate();
      },
      slideChange: function () {
        sliderAboutUsAnimation.init(this).animate();
      }
    },
  });

  //Переменные
  const menuBtn = document.querySelector('.menu-burger-js');
  const menuContent = document.querySelector('.navMain-js');
  const shadowDocument = document.querySelector('.shadow');
  const html = document.querySelector('html');
  const animItems = document.querySelectorAll('._anim-items');
  const menuLinks = document.querySelectorAll('.link-anchor');
  const navLinks = document.querySelectorAll('.nav__link-anim');
  const sliderMainWrap = document.querySelector('.sliderMainWrap');

  //Анимация при скролле
  if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(params) {
      for (let index = 0; index < animItems.length; index++) {
        const animItem = animItems[index];
        const animItemHeight = animItem.offsetHeight;
        const animItemOffset = offset(animItem).top;
        const animStart = 4;

        let animItemPoint = window.innerHeight - animItemHeight / animStart;
        if (animItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart;
        }

        if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)){
          animItem.classList.add('_active');
        
        } else {
          if (!animItem.classList.contains('_anim-no-hide')) {
            animItem.classList.remove('_active');
          }
          
        }

      }

    }
    function offset(el) {
      const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageYOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
    }


    setTimeout(() => {
      animOnScroll();
    }, 200);
  }

  // Прокрутка при клике
  if(menuLinks.length > 0){
    menuLinks.forEach(menuLink => {
      menuLink.addEventListener("click", onMenuLinkClick)
    });
    function onMenuLinkClick(e){
      e.preventDefault();
      let href = this.getAttribute('href').substring(1);
      const scrollTarget = document.getElementById(href);
      const topOffset = 0;
      const elementPosition = scrollTarget.getBoundingClientRect().top;
      const offsetPosition = elementPosition - topOffset;
      if(menuBtn.classList.contains('active')){
        menuBtn.classList.remove('active');
        menuContent.classList.remove('open');
        shadowDocument.classList.remove('open');
        html.classList.remove('fix-doc');
      }
      window.scrollBy({
        top: offsetPosition,
        behavior: 'smooth'
      });
    }
  }

  // Анимация при переходе
  if(navLinks.length > 0){
    navLinks.forEach(navLinks => {
      if(!navLinks.classList.contains('link-anchor') && !navLinks.classList.contains('link-anchor-inner')){
        navLinks.addEventListener("click", function(e){
          e.preventDefault();
          if(sliderMainWrap){
            sliderMainWrap.classList.add('no-visible');
          }
          if (animItems.length > 0) {
              for (let i = 0; i < animItems.length; i++) {
                const animItem = animItems[i];
                if (animItem.classList.contains('_anim-no-hide')) {

                  if(menuBtn.classList.contains('active')){
                    menuBtn.classList.remove('active');
                    menuContent.classList.remove('open');
                    shadowDocument.classList.remove('open');
                    html.classList.remove('fix-doc');
                  }

                  animItem.classList.remove('_active');
                  setTimeout(() => {
                    document.location.href = navLinks.pathname;
                  }, 1000);
                }
                else{
                  document.location.href = navLinks.pathname;
                }
              }
          }
        })
      }
    });
  }

  //  Кнопка меню
  if(menuBtn){
      menuBtn.addEventListener("click", function(e){
          this.classList.toggle('active');
          menuContent.classList.toggle('open');
          shadowDocument.classList.toggle('open');
          html.classList.toggle('fix-doc');
      });
  }

  window.addEventListener("DOMContentLoaded", function() {
    [].forEach.call( document.querySelectorAll('.phone'), function(input) {
    var keyCode;
    function mask(event) {
        event.keyCode && (keyCode = event.keyCode);
        var pos = this.selectionStart;
        if (pos < 3) event.preventDefault();
        var matrix = "+7 (___) ___-__-__",
            i = 0,
            def = matrix.replace(/\D/g, ""),
            val = this.value.replace(/\D/g, ""),
            new_value = matrix.replace(/[_\d]/g, function(a) {
                return i < val.length ? val.charAt(i++) || def.charAt(i) : a
            });
        i = new_value.indexOf("_");
        if (i != -1) {
            i < 5 && (i = 4);
            new_value = new_value.slice(0, i)
        }
        var reg = matrix.substr(0, this.value.length).replace(/_+/g,
            function(a) {
                return "\\d{1," + a.length + "}"
            }).replace(/[+()]/g, "\\$&");
        reg = new RegExp("^" + reg + "$");
        if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
        if (event.type == "blur" && this.value.length < 5)  this.value = ""
    }

    input.addEventListener("input", mask, false);
    input.addEventListener("focus", mask, false);
    input.addEventListener("blur", mask, false);
    input.addEventListener("keydown", mask, false)

  });

});

  $('.spoilersItem__btn').on('click', function() {
    if($(this).hasClass('active')){
        $(this).removeClass('active');
        $(this).parent().find('.spoilersItem__content').slideUp(500); 
    }
    else{
        $('.spoilersItem__btn').removeClass('active');
        $('.spoilersItem__content').slideUp(500);
        $(this).addClass('active');
        $(this).parent().find('.spoilersItem__content').slideDown(500); 
    }
  })

  $(".footer .nav__link").mouseenter(function() {
    $(".footer .nav__link").removeClass('nav__link--active');
    $(this).addClass('nav__link--active')
  });
  

  


    
