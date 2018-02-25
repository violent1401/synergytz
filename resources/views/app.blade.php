<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Тестовое задание</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
<body>
  <div class="container">
    <div class="product">
      <div class="product-top">
        <div class="product-images">
          <div class="product-main">
            <img src="img/product-img.jpg" alt="" class="product-image image1 active">
            <img src="img/product-img2.jpg" alt="" class="product-image image2">
            <img src="img/product-img3.jpg" alt="" class="product-image image3">
          </div>
          <div class="product-thumbs">
            <a href="#" class="active product-thumbs__link" data-target="image1">
              <img src="img/prod-thumb1.jpg" alt="" class="product-thumb">
            </a>
            <a href="#" class="product-thumbs__link" data-target="image2">
              <img src="img/prod-thumb2.jpg" alt="" class="product-thumb">
            </a>
            <a href="#" class="product-thumbs__link" data-target="image3">
              <img src="img/prod-thumb3.jpg" alt="" class="product-thumb">
            </a>
          </div>
        </div>
        <div class="attributes">
          <div class="attributes-top">
            <div class="product-prices">
              <div class="price">
                <div class="price__old">3 700 <span class="currency">Р</span></div>
                <div class="price__current">2 290 <span class="currency">Р</span></div>
                <div class="price__economy"><span class="price__economy-red">1 110 <span class="currency">Р</span></span> экономии</div>
              </div>
              <div class="badge">-23%</div>
            </div>
            <div class="product-sku">
              <div class="sku">Код товара: <span>15112</span></div>
              <div class="stock in-stock">На скаде много</div>
              <div class="cheap">Нашли дешевле? <br><a href="#">Снизим цену!</a></div>
            </div>
          </div>
          <div class="attributes-middle">
            <div class="product-size">
              <div class="size">
                <div class="size-label">Выбрать размер</div>
                <div class="size__list">
                  <div class="size__item selected">S</div>
                  <div class="size__item">M</div>
                  <div class="size__item">L</div>
                  <div class="size__item disabled">XL</div>
                  <div class="size__item disabled">XXL</div>
                </div>
              </div>
              <div class="size-choose">
                <a href="#sizeModal" class="modal_open">Подобрать оптимальный размер</a>
              </div>
            </div>
          </div>
          <div class="attributes-cart">
            <form action="" class="cart-form">
              <div class="addtocart">
                <div class="quantity">
                  <div class="minus"></div>
                  <input type="text" class="qnt" value="1">
                  <div class="plus"></div>
                </div>
                <div class="addtocart__button">
                  <button type="submit" class="addtocart__submit" id="addtocart_btn"><span class="addtocart__icon"></span>В корзину</button>
                </div>
              </div>
              <input type="hidden" name="product_title" value="Товар 1">
              <input type="hidden" name="product_qnt" value="1">
              <input type="hidden" name="product_size" value="">
            </form>
          </div>
          <div class="attributes-quickbuy">
            <div class="quickbuy-header">Быстрый заказ</div>
            <div class="quickbuy-description">Вы можете на заполнять никаких форм, просто оставьте свой телефон <br>и наш менеджер свяжется с вами</div>
            <form action="" class="quickbuy-form">
              <div class="quickbuy">
                <div class="quickbuy__phone">
                  +7<input type="text" class="phone" name="phone" placeholder="(___) ___-__-__">
                </div>
                <div class="addtocart__button addtocart__button-quickbuy">
                  <button type="submit" class="addtocart__submit addtocart__submit-orange">Заказать в один клик</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="product-bottom">
        <div class="product-delivery">
          <div class="delivery-region">
             Регион доставки: 
             <select>
               <option value="Краснодар">Краснодар</option>
               <option value="Ростов">Ростов</option>
             </select>
          </div>
          <div class="delivery-table">
            <table>
              <tbody>
                <tr>
                  <td>
                    <a href="#" class="delivery__points">Пункты самовывоза</a>
                  </td>
                  <td>2 дня</td>
                  <td class="delivery-price">165
                    <span class="currency">Р</span>
                  </td>
                </tr>
                <tr>
                  <td>Курьером</td>
                  <td>2 дня</td>
                  <td class="delivery-price">305
                    <span class="currency">Р</span>
                  </td>
                </tr>
                <tr>
                  <td>Почта России</td>
                  <td>5-14 дней</td>
                  <td class="delivery-price">250
                    <span class="currency">Р</span>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="delivery-conditions">
            <div class="condition">
              <div class="condition__item condition__item-wallet">Оплата после <br>проверки</div>
              <div class="condition__item condition__item-calendar">14 дней <br>на возврат</div>
            </div>
          </div>
          <div class="delivery-ordercall">
            <div class="ordercall">
              <div class="ordercall-text">
                 Есть вопросы? <br>Звоните!
              </div>
              <div class="ordercall-point">
                <div class="ordercall-phone">8 (495) 105-98-18</div>
                <div class="ordercall-button">
                  <a href="#" class="ordercall-button__link">Заказать обратный звонок</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="product-description">
          <div class="product-tabs">
            <div class="tabs">
              <a href="#description" class="tab active" data-content="">Описание</a>
              <a href="#characteristics" class="tab">Характеристики</a>
            </div>
            <div class="tabs-content">
              <div class="content description active" id="description">
                <p>Помните веселого персонажа из мультфильма про кунг-фу? Энергичный, немного глуповатый и малость невезучий, По доказал каждому,
                что его возможности безграничны. Пожалуй, эта панда – настоящий символ настойчивости и упорства. Мы предлагаем вам облачиться
                в нежную черно-белую шерстку, которая так и просит «обними меня!».</p>
                <p>Костюм мастера кунг-фу изготовлен из велсофта. Это позволяет коже дышать и не потеть, даже если вам предстоит веселить своих
                друзей весь день. Пижама застегивается на пуговички и плотно прилегает к рукам и ногам в области манжетов. Голову прикрывает
                яркая мордочка с ушками, которая завершает образ.</p>
                <p>Панды – ленивые создания, но очень притягательные. Вам будет сложно отказать в объятиях. Почему бы не воспользоваться этой
                особенностью с пользой для себя? В таком костюме не важно, где именно будет ваша вечеринка. Главное то, что никто на ней
                вас точно не забудет.</p>
              </div>
              <div class="content charachteristics " id="characteristics">
                <table>
                  <tbody>
                    <tr>       
                      <td>Материал</td>
                      <td>Велсофт</td>
                    </tr>
                    <tr>
                      <td>Цвет</td>
                      <td>
                        <div class="colors">
                          <div class="color white"></div>
                          <div class="color red"></div>
                          <div class="color black"></div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>Для кого</td>
                      <td>Унисекс</td>
                    </tr>
                    <tr>
                      <td>Тапочки в комплекте</td>
                      <td>Нет</td>
                    </tr>
                    <tr>
                      <td>Уход</td>
                      <td>Деликатная стирка</td>
                    </tr>
                    <tr>
                      <td>Молния на попе</td>
                      <td>Есть</td>
                    </tr>
                    <tr>
                      <td>Хвост</td>
                      <td>Есть</td>
                    </tr>
                    <tr>
                      <td>Тип застежки</td>
                      <td>Пуговицы</td>
                    </tr>
                    <tr>
                      <td>Карманы</td>
                      <td>Нет</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="sizeModal">
    <div class="overlay"></div>
    <div class="modal-content">
      <div class="close"></div>
      <div class="modal-body">
        <div class="modal-body-top">
          <div class="ch-size-header">Подобрать оптимальный размер</div>
          <div class="ch-size-container">
            <div class="ch-size-left">
              <div class="ch-size-text">Не уверены, какой размер подойдет именно вам? <br>Просто укажите свой рост и вес и вы узнаете свой размер.</div>
              <div class="ch-size-calc">
                <div class="size-growth">
                  <div class="s-title">Рост, см</div>
                  <div class="s-flex">
                    <div class="sg-input">
                      <input type="text" class="calc-input growth-input" value="170" disabled>
                    </div>
                    <div class="sg-slider">
                      <div class="sg-slider-grid">
                        <span>145</span>
                        <span>155</span>
                        <span>165</span>
                        <span>175</span>
                        <span>185</span>
                        <span>195</span>
                      </div>
                      <input type="range" min="145" max="195" step="1" value="170" class="growth-slider gs-control">
                    </div>
                  </div>
                </div>
                <div class="size-weight">
                  <div class="s-title">Вес, кг</div> 
                  <div class="s-flex">
                    <div class="sw-input">
                      <input type="text" class="calc-input weight-input" value="70" disabled>
                    </div>
                    <div class="sg-slider">
                      <div class="sg-slider-grid">
                        <span>40</span>
                        <span>60</span>
                        <span>80</span>
                        <span>100</span>
                        <span>120</span>
                      </div>
                      <input type="range" min="40" max="120" step="1" value="70" class="growth-slider ws-control">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ch-size-right">
              <div class="ch-size-label-title">Ваш оптимальный <br>размер:</div>
              <div class="ch-size-label">XXL</div>
            </div>
          </div>
        </div>
        <div class="modal-body-bottom">
          <button type="button" class="ch-size-button">Выбрать этот размер</button>
        </div>
      </div>
    </div>
  </div>
  <div class="modal" id="addedToCart">
    <div class="overlay"></div>
    <div class="modal-content">
      <div class="close"></div>
      <div class="modal-body"></div>
    </div>
  </div>
  <script src="js/jquery.min.js"></script> 
  <script src="js/jquery.maskedinput.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>
