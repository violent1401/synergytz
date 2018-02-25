jQuery(function($) {
  /* Клики по миниатюрам */
  $('.product-thumbs__link').each(function(){
    $(this).on('click', function(){
      $('.product-thumbs').find('.active').removeClass('active');
      $('.product-main').find('.active').removeClass('active');
      var targetImg = $(this).data('target');
      console.log(targetImg);
      $(this).addClass('active');
      $('.'+targetImg).addClass('active');
    });
  });


  /* Клики по размерам */
  $('.size__item').each(function () {
    $(this).on('click', function () {
      $('.size__list').find('.selected').removeClass('selected');
      $(this).addClass('selected');
      $('[name=product_size]').val($(this).text());
    });
  });
  var sizeInit = $('.size__list').find('.selected').text();
  $('[name=product_size]').val(sizeInit);
  /* Модальное окно */
  $('.modal_open').on('click', function(){
    var modal = $(this).attr('href');
    $(modal).addClass('open');
    if($('body').find('.modal.open').length > 0 ) {
      $('body').addClass('modal-opened');
    }
  });
  $('.modal .close').on('click', function(){
    $(this).parent().parent().removeClass('open');
    $('body').removeClass('modal-opened');
  });
  $('.overlay').on('click', function () {
    $(this).parent().removeClass('open');
    $('body').removeClass('modal-opened');
  });

  /* Количество товара для добавления в корзину */
  $('.plus').on('click', function () {
    $parent = $(this).parent();
    $input = $parent.find('.qnt');
    $prodQnt = $('.cart-form').find('[name=product_qnt]');
    $val = parseInt($input.val());
    if ($val > 0) {
      $input.val($val + 1);
      $prodQnt.val($val + 1);
    } else {
      $input.val(1);
      $prodQnt.val(1);
    }
  });
  $('.minus').on('click', function () {
    $parent = $(this).parent();
    $input = $parent.find('.qnt');
    $prodQnt = $('.cart-form').find('[name=product_qnt]');
    $val = parseInt($input.val());        
    if ($val > 1) {
      $input.val($val - 1);
      $prodQnt.val($val-1);
    }
  });

  /* Табы */
  $('.tab').each(function(){
    $(this).on('click', function (e) {
      e.preventDefault();
      var tabContent = $(this).attr('href');
      $('.tabs').find('.active').removeClass('active');
      $('.tabs-content').find('.active').removeClass('active');
      $(this).addClass('active');
      $(tabContent).addClass('active');
    });
  });

  $(".phone").mask("(999) 999-99-99");


  $(".phone").on("blur", function () {
    var last = $(this).val().substr($(this).val().indexOf("-") + 1);
    if (last.length == 4) {
      var move = $(this).val().substr($(this).val().indexOf("-") + 1, 1);
      var lastfour = last.substr(1, 4);
      var first = $(this).val().substr(0, 9);
      $(this).val(first + move + '-' + lastfour);
    }
  });

  /* Добавление в корзину (в БД) */
  $('#addtocart_btn').on('click', function (e) {
    e.preventDefault();
    var title = $('[name=product_title]').val();
    var qnt = $('[name=product_qnt]').val();
    var size = $('[name=product_size]').val();
    $.ajax({
      type: "POST",
      url: "cart",
      data: { qnt: qnt, title: title, size: size },
      headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (data) {
        var result;
        $('#addedToCart').addClass('open');
        result = '<div class="cart-description">';
        result += 'Товар: <b>' + data['title'] + '</b> (размер: '+data['size']+') / кол-во: <b>' + data['qnt'] + '</b> добавлен в корзину!';
        result += '</div>';
        $('#addedToCart .modal-body').append(result);
      }
    });
  });
  $('#addedToCart .close').on('click', function(){
    $('.cart-description').remove();
  });

  /* Заказ в один клик */
  $('.quickbuy-form').on('submit', function (e) {
    e.preventDefault();
    var phone = $('[name=phone]').val();
    $.ajax({
      type: "POST",
      url: "quickbuy",
      data: { phone: phone },
      headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
      },
      success: function (data) {
        console.log(data);

      },
      error: function (response) {
        if (response.status == 500) {
          var result;
          $('#addedToCart').addClass('open');
          result = '<div class="cart-description">';
          result += 'Спасибо за Ваш заказ!';
          result += '</div>';
          $('#addedToCart .modal-body').append(result);
          $('[name=phone]').val('');
        }
      }
    });
  });
  
  var gSlider = $('.gs-control');
  gSlider.on('change', function(){
    var sliderVal = $(this).val();
    $('.growth-input').val(sliderVal);
  });
  var wSlider = $('.ws-control');
  wSlider.on('change', function () {
    var sliderVal = $(this).val();
    $('.weight-input').val(sliderVal);
  });

  if($(window).width() < 768) {
    var modalHeight = $(window).height();
    $('.modal-body').height(modalHeight);
  }
});