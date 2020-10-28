(function ($) {
  "use strict";

  $('.popup-youtube, .popup-vimeo').magnificPopup({
    // disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });



  var review = $('.textimonial_iner');
  if (review.length) {
    review.owlCarousel({
      items: 1,
      loop: true,
      dots: true,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: false,
      responsive: {
        0: {
          margin: 15,

        },
        600: {
          margin: 10,
        },
        1000: {
          margin: 10,
        }
      }
    });
  }
  var best_product_slider = $('.best_product_slider');
  if (best_product_slider.length) {
    best_product_slider.owlCarousel({
      items: 4,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: ["Пред", "След"],
      responsive: {
        0: {
          margin: 15,
          items: 1,
          nav: false
        },
        576: {
          margin: 15,
          items: 2,
          nav: false
        },
        768: {
          margin: 30,
          items: 3,
          nav: true
        },
        991: {
          margin: 30,
          items: 4,
          nav: true
        }
      }
    });
  }

  //product list slider
  var product_list_slider = $('.product_list_slider');
  if (product_list_slider.length) {
    product_list_slider.owlCarousel({
      items: 1,
      loop: false,
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 5000,
      nav: true,
      navText: ["Пред", "След"],
      smartSpeed: 1000,
      responsive: {
        0: {
          margin: 15,
          nav: false,
          items: 1
        },
        600: {
          margin: 15,
          items: 1,
          nav: false
        },
        768: {
          margin: 30,
          nav: true,
          items: 1
        }
      }
    });
  }

  //single banner slider
  // var banner_slider = $('.banner_slider');
  // if (banner_slider.length) {
  //   banner_slider.owlCarousel({
  //     items: 1,
  //     loop: true,
  //     dots: false,
  //     autoplay: true,
  //     autoplayHoverPause: true,
  //     autoplayTimeout: 5000,
  //     nav: true,
  //     navText: ["next","previous"],
  //     smartSpeed: 1000,
  //   });
  // }

  if ($('.img-gal').length > 0) {
    $('.img-gal').magnificPopup({
      type: 'image',
      gallery: {
        enabled: true
      }
    });
  }


  //single banner slider
  $('.banner_slider').on('initialized.owl.carousel changed.owl.carousel', function (e) {
    function pad2(number) {
      return (number < 10 ? '0' : '') + number
    }
    var carousel = e.relatedTarget;
    $('.slider-counter').text(pad2(carousel.current()));

  }).owlCarousel({
    items: 1,
    loop: false,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: true,
    navText: ["Пред", "След"],
    smartSpeed: 1000,
    responsive: {
      0: {
        nav: false
      },
      600: {
        nav: false
      },
      768: {
        nav: true
      }
    }
  });



  // niceSelect js code
  $(document).ready(function () {
    $('select').niceSelect();
  });

  // menu fixed js code
  // $(window).scroll(function () {
  //   var window_top = $(window).scrollTop() + 1;
  //   if (window_top > 50) {
  //     $('.main_menu').addClass('menu_fixed animated fadeInDown');
  //   } else {
  //     $('.main_menu').removeClass('menu_fixed animated fadeInDown');
  //   }
  // });


  $('.counter').counterUp({
    time: 2000
  });

  $('.slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    speed: 300,
    infinite: true,
    asNavFor: '.slider-nav-thumbnails',
    autoplay: true,
    pauseOnFocus: true,
    dots: true,
  });

  $('.slider-nav-thumbnails').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider',
    focusOnSelect: true,
    infinite: true,
    prevArrow: false,
    nextArrow: false,
    centerMode: true,
    responsive: [{
      breakpoint: 480,
      settings: {
        centerMode: false,
      }
    }]
  });


  // Search Toggle
  $("#search_input_box").hide();
  $("#search_1").on("click", function () {
    $("#search_input_box").slideToggle();
    $("#search_input").focus();
  });
  $("#close_search").on("click", function () {
    $('#search_input_box').slideUp(500);
  });

  //------- Mailchimp js --------//  
  function mailChimp() {
    $('#mc_embed_signup').find('form').ajaxChimp();
  }
  mailChimp();

  //------- makeTimer js --------//  
  function makeTimer() {

    //		var endTime = new Date("29 April 2018 9:56:00 GMT+01:00");	
    var endTime = new Date("12 Oct 2020 12:56:00 GMT+06:00");
    endTime = (Date.parse(endTime) / 1000);

    var now = new Date();
    now = (Date.parse(now) / 1000);

    var timeLeft = endTime - now;

    // var days = Math.floor(timeLeft / 86400);
    var hours = Math.floor(timeLeft / 3600);
    var minutes = Math.floor((timeLeft - (hours * 3600)) / 60);
    var seconds = Math.floor((timeLeft - (hours * 3600) - (minutes * 60)));

    if (hours < "10") {
      hours = "0" + hours;
    }
    if (minutes < "10") {
      minutes = "0" + minutes;
    }
    if (seconds < "10") {
      seconds = "0" + seconds;
    }

    // $("#days").html("<span>Дни</span>" + days);
    $("#hours").html("<span>Часы</span>" + hours);
    $("#minutes").html("<span>Минуты</span>" + minutes);
    $("#seconds").html("<span>Секунды</span>" + seconds);

  }
// click counter js
(function() {
 
  window.inputNumber = function(el) {

    var min = el.attr('min') || false;
    var max = el.attr('max') || false;

    var els = {};

    els.dec = el.prev();
    els.inc = el.next();

    el.each(function() {
      init($(this));
    });

    function init(el) {

      els.dec.on('click', decrement);
      els.inc.on('click', increment);

      function decrement() {
        var value = el[0].value;
        value--;
        if(!min || value >= min) {
          el[0].value = value;
        }
      }

      function increment() {
        var value = el[0].value;
        value++;
        if(!max || value <= max) {
          el[0].value = value++;
        }
      }
    }
  }
})();

inputNumber($('.input-number'));



  setInterval(function () {
    makeTimer();
  }, 1000);

  // click counter js


  // var a = 0;
  // $('.increase').on('click', function(){
     
    

  //   console.log(  $(this).innerHTML='Product Count: '+ a++ );
  // });

 // var product_overview = $('#vertical');
 // if(product_overview.length){
 //  product_overview.lightSlider({
 //    gallery:true,
 //    item:1,
 //    vertical:true,
 //    verticalHeight:450,
 //    thumbItem:3,
 //    slideMargin:0,
 //    speed:600,
 //    autoplay: true,
 //    responsive : [
 //      {
 //          breakpoint:991,
 //          settings: {
 //              item:1,
 //
 //            }
 //      },
 //      {
 //          breakpoint:576,
 //          settings: {
 //              item:1,
 //              slideMove:1,
 //              verticalHeight:350,
 //            }
 //      }
 //  ]
 //  });
 // }

// Baglan changes start
  let productCategory = $('.product-categories .category');
  let productsTab = $('.products-tab');
  $('.product-categories .category .category-wrapper').click(function () {
    let tabData = $(this).closest('.category').data('tab');
    let tabId = '#p-tab' + tabData;
    let tab = $(tabId);

    productsTab.removeClass('active');
    tab.addClass('active');

    productCategory.removeClass('active');
    $(this).closest('.category').addClass('active');
  });

  $('.delivery-input, .discount-input, #inputChemPhone').mask('+7(999)-999-99-99');

  $('.navigate').click(function(e) {
    e.preventDefault();

    var id = $(this).attr('href');
    $([document.documentElement, document.body]).animate({
      scrollTop: $(id).offset().top
    }, 1000);
  });
  let preloaderWrapper = $('.preloader-wrapper');
  let orderForm = $('#orderForm');
  let errorSendMsg = 'Произошла ошибка при отправке. Пожалуйста попробуйте по позже.';

  $('.order-btn').click(function () {
    let productName = $('.product_name').text();
    let productPrice = $('.product_price').data('price');
    let productQuantity = $('.input-number').val();

    $('.product-name').val(productName);
    $('.product-price').val(productPrice);
    $('.product-quantity').val(productQuantity);
  });

  $('.order-send-btn').click(function () {
    let formValues = [
      $('#orderForm input[name=client_name]').val(),
      $('#orderForm input[name=client_phone]').val(),
      $('#orderForm input[name=product_name]').val(),
      $('#orderForm input[name=product_price]').val(),
      $('#orderForm input[name=product_quantity]').val(),
    ];

    let emptyFields = 0;
    for (let formValue of formValues) {
      if (formValue === '') {
        emptyFields++;
      }
    }

    if (emptyFields > 0) {
      customAlert.show('.custom-alert', 'Заполните все поля', 'danger');
    }
    else {
      preloaderWrapper.css('display', 'flex');

      $.ajax({
        url: orderForm.attr('action'),
        type: 'GET',
        data: orderForm.serialize(),
        dataType: 'JSON',
        success: function (response) {
          if (response.msg) {
            customAlert.show('.custom-alert', response.msg, 'success');
            preloaderWrapper.css('display', 'none');
            $('#orderModal').modal('hide');
          }
        },
        error: function (response) {
          customAlert.show('.custom-alert', errorSendMsg, 'danger');
          preloaderWrapper.css('display', 'none');
          $('#orderModal').modal('hide');
        }
      });
    }
  });

  let chemicalForm = $('#chemicalForm');
  let exampleModal = $('#exampleModal');

  $('.chemical-send').click(function () {
    if ($('#inputChemName').val() === '' || $('#inputChemPhone').val() === '') {

      customAlert.show('.custom-alert', 'Заполните все необходимые поля', 'danger');
    }
    else {
      preloaderWrapper.css('display', 'flex');

      $.ajax({
        url: chemicalForm.attr('action'),
        type: 'GET',
        data: chemicalForm.serialize(),
        dataType: 'JSON',
        success: function (response) {
          if (response.msg) {
            customAlert.show('.custom-alert', response.msg, 'success');
            preloaderWrapper.css('display', 'none');
            exampleModal.modal('hide');
          }
        },
        error: function (response) {
          customAlert.show('.custom-alert', errorSendMsg, 'danger');
          preloaderWrapper.css('display', 'none');
          exampleModal.modal('hide');
        }
      });
    }
  });


  let feedbackForm = $('#feedbackForm');
  let feedbackModal = $('#feedbackModal');

  $('.feedback-send').click(function () {
    if ($('#inputFeedbackClientName').val() === '' || $('#inputFeedbackClientPhone').val() === '') {
      customAlert.show('.custom-alert', 'Заполните все необходимые поля', 'danger');
    }
    else {
      preloaderWrapper.css('display', 'flex');

      $.ajax({
        url: feedbackForm.attr('action'),
        type: 'GET',
        data: feedbackForm.serialize(),
        dataType: 'JSON',
        success: function (response) {
          if (response.msg) {
            customAlert.show('.custom-alert', response.msg, 'success');
            preloaderWrapper.css('display', 'none');
            feedbackModal.modal('hide');
          }
        },
        error: function (response) {
          customAlert.show('.custom-alert', errorSendMsg, 'danger');
          preloaderWrapper.css('display', 'none');
          feedbackModal.modal('hide');
        }
      });
    }
  });

  let discountInput = $('.discount-input');
  
  $('.discount-btn').click(function () {
    if (discountInput.val() === '') {
      customAlert.show('.custom-alert', 'Заполните все необходимые поля', 'danger');
    }
    else {
      preloaderWrapper.css('display', 'flex');

      $.ajax({
        url: '/mail/discount/send',
        type: 'GET',
        data: 'discount_number=' + discountInput.val(),
        dataType: 'JSON',
        success: function (response) {
          if (response.msg) {
            customAlert.show('.custom-alert', response.msg, 'success');
            preloaderWrapper.css('display', 'none');
          }
        },
        error: function (response) {
          customAlert.show('.custom-alert', errorSendMsg, 'danger');
          preloaderWrapper.css('display', 'none');
        }
      });
    }
  });

  let deliveryInput = $('.delivery-input');

  $('#deliveryBtn').click(function () {
    if (deliveryInput.val() === '') {
      customAlert.show('.custom-alert', 'Заполните все необходимые поля', 'danger');
    }
    else {
      preloaderWrapper.css('display', 'flex');

      $.ajax({
        url: '/mail/specialist/send',
        type: 'GET',
        data: 'specialist_number=' + deliveryInput.val(),
        dataType: 'JSON',
        success: function (response) {
          if (response.msg) {
            customAlert.show('.custom-alert', response.msg, 'success');
            preloaderWrapper.css('display', 'none');
          }
        },
        error: function (response) {
          customAlert.show('.custom-alert', errorSendMsg, 'danger');
          preloaderWrapper.css('display', 'none');
        }
      });
    }
  });


  let contactForm = $('.contact_form');

  $('.button-contactForm').click(function () {

    let formFieldsValues = [
      $('.contact_form input[name=name]').val(),
      $('.contact_form input[name=email]').val(),
      $('.contact_form input[name=subject]').val(),
      $('.contact_form textarea[name=message]').val(),
    ];


    let emptyFields = 0;
    for (let fieldValue of formFieldsValues) {
      if (fieldValue === '') {
        emptyFields++;
      }
    }

    if (emptyFields > 0) {
      customAlert.show('.custom-alert', 'Заполните все необходимые поля', 'danger');
    }
    else {
      preloaderWrapper.css('display', 'flex');

      $.ajax({
        url: contactForm.attr('action'),
        type: 'GET',
        data: contactForm.serialize(),
        dataType: 'JSON',
        success: function (response) {
          if (response.msg) {
            customAlert.show('.custom-alert', response.msg, 'success');
            preloaderWrapper.css('display', 'none');
          }
        },
        error: function (response) {
          customAlert.show('.custom-alert', errorSendMsg, 'danger');
          preloaderWrapper.css('display', 'none');
        }
      });
    }

  });




// Baglan changes end




}(jQuery));