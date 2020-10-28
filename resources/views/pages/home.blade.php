@extends('layouts.default')

@section('content')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row reverse">
                                <div class="col-lg-6 col-md-12">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1 class="banner_title">ФИЛЬТРЫ ДЛЯ ОЧИСТКИ ВОДЫ</h1>
                                            <div class="border_text">
                                                <p>
                                                    Монтаж и химический анализ воды <b>БЕСПЛАТНО!</b>
                                                    <br>
                                            </div>
                                            <p>
                                                ОТВЕТЬТЕ НА 5 ПРОСТЫХ ВОПРОСОВ И ПОЛУЧИТЕ <b>СКИДКУ ДО 30%*</b>
                                            </p>
                                            <a href="#" class="banner-btn btn_2"> ХОЧУ СКИДКУ! </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img col-lg-6 col-md-12">
                                    <img src="{{ asset('assets/filter/images/banner1.1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--                        <div class="slider-counter"></div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->


    <!-- product_list start-->
    <section id="filters" class="product_list section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center custom-title">
                        <h2>ГОТОВЫЕ КОМПЛЕКТЫ СИСТЕМ ДЛЯ ОЧИСТКИ ВОДЫ</h2>
                    </div>
                </div>
            </div>
            @if ($categories->count())
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product-categories d-flex">
                            @foreach($categories as $category)
                                <div class="category @if($category->id == 1) active @endif" data-tab="{{ $category->id }}">
                                    <div class="category-img">
                                        <img src="{{ asset($category->image) }}" class="img-fluid" alt="">
                                    </div>
                                    <div class="category-wrapper">
                                        <p>{{ $category->name }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                @foreach($categories as $category)
                    <div class="row products-tab @if($category->id == 1) active @endif" id="p-tab{{ $category->id }}">
                        <div class="col-lg-12">
                            <div class="product_list_slider owl-carousel">
                                <div class="single_product_list_slider">
                                    <div class="row align-items-center justify-content-between">
                                        @if ($category->products->count())
                                            @foreach($category->products as $product)
                                                <div class="col-lg-3 col-sm-6">
                                                    <div class="single_product_item">
                                                        <img src="{{ asset($product->main_image) }}" alt="">
                                                        <div class="single_product_text">
                                                            <h4>
                                                                <a href="{{ route('product', $product->id) }}" style="color: #000; font-size: 16px;">{{ $product->name }}</a>
                                                            </h4>
                                                            <h3>{{ $product->price }} ₸</h3>
                                                            <a href="{{ route('product', $product->id) }}" class="add_cart">+ заказать</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <hr>
    </section>
    <!-- product_list part start-->

    <section class="water-bg">
        <div class="container">
            <div class="row">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section_tittle text-center custom-title">
                            <h2 class="d-flex flex-column">
                                <span class="mb-3">ОЧИСТИТЕ ВОДУ ОТ ВСЕХ ИЗВЕСТНЫХ ВИДОВ ПРИМЕСЕЙ</span>
                                <span>ЗАКАЗАВ ПРОВЕДЕНИЕ ХИМ. АНАЛИЗА</span>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="water-img align-items-center justify-content-center">
            <img src="assets/filter/images/water_bg.jpg" alt="" class="img-fluid">
        </div>
        <div class="d-flex justify-content-center mb-5">
            <button type="button" class="btn btn_2" data-toggle="modal" data-target="#exampleModal">Заказать хим.анализ воды</button>
        </div>
    </section>

    <!-- awesome_shop start-->
    <section class="our_offer section_padding" id="discount">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <div class="action-day">
                        <img src="{{ asset('assets/filter/images/4.png') }}" alt="">
                        </div>
                        <img src="{{ asset('assets/filter/images/banner1.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Акция дня на фильтры 20%</h2>
                        <div class="price-block">
                            <p class="price old">
                                127 500 ₸
                                <span class="new-price">102 000 ₸</span>
                            </p>
                        </div>
                        <div class="date_countdown">
                            <div id="timer">
                                <div id="hours" class="date"></div>
                                <div id="minutes" class="date"></div>
                                <div id="seconds" class="date"></div>
                            </div>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control discount-input" placeholder="Ваш телефон"
                                   aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="input-group-text btn_2 discount-btn" type="button" id="basic-addon2">Купить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- awesome_shop part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Хиты продаж</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-12">
                    <div class="best_product_slider owl-carousel">
                        @if (isset($top_sales) && $top_sales->count())
                            @foreach($top_sales as $top_sale)
                                <div class="single_product_item">
                                    <img src="{{ asset($top_sale->main_image) }}" alt="">
                                    <div class="single_product_text">
                                        <h4>
                                            <a href="{{ route('product', $top_sale->id) }}" style="color: #000; font-size: 16px;">{{ $top_sale->name }}</a>
                                        </h4>
                                        <h3>{{ $top_sale->price }} ₸</h3>
                                        <a href="{{ route('product', $top_sale->id) }}" class="add_cart">+ заказать</a>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product_list part end-->

    <!-- subscribe_area part start-->
    <section class="subscribe_area section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="subscribe_area_text text-center">
                        <h2 class="delivery-title">Наш специалист готов выехать на ваш вызов через 5 минут</h2>
                        <div class="input-group">
                            <input type="text" class="form-control delivery-input" placeholder="Ваш телефон" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="input-group-text btn_2" id="deliveryBtn">Вызвать</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::subscribe_area part end::-->


    <section class="advantages">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_tittle text-center custom-title">
                        <h2 class="d-flex flex-column">
                            НАШИ ПРЕИМУЩЕСТВА
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="advantage">
                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="title">
                            <h3>Работаем строго по договору</h3>
                        </div>
                        <div class="text">
                            <p>
                                Несем юридическую ответственность за качество наших работ и за качество воды,
                                которая будет течь из вашего крана
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="advantage">
                        <div class="icon">
                            <i class="fas fa-business-time"></i>
                        </div>
                        <div class="title">
                            <h3>Расширенная гарантия <br> на 3 года</h3>
                        </div>
                        <div class="text">
                            <p>
                                Мы гарантируем качественную работу наших фильтров сроком на 3 года.
                                Стоит отметить, что реальный срок эксплуатации оборудования во много раз больше.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="advantage">
                        <div class="icon">
                            <i class="fas fa-wallet"></i>
                        </div>
                        <div class="title">
                            <h3>Удобный способ оплаты</h3>
                        </div>
                        <div class="text">
                            <p>
                                Оплачивайте любым для вас удобным способом: банковской картой, наличными или безналичными способами оплаты.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="advantage">
                        <div class="icon">
                            <i class="fas fa-percent"></i>
                        </div>
                        <div class="title">
                            <h3>Безпроцентная рассрочка</h3>
                        </div>
                        <div class="text">
                            <p>
                                Предлагаем настоящую безпроцентную рассрочку. Все ваши расходы на оплату процентов банку мы берем на себя
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="advantage">
                        <div class="icon">
                            <i class="fas fa-microscope"></i>
                        </div>
                        <div class="title">
                            <h3>Бесплатный анализ воды и выезд специалиста</h3>
                        </div>
                        <div class="text">
                            <p>
                                Мы предлагаем клиентам бесплатный анализ воды. К вам выезжает специалист и проводит химический анализ воды
                                и производит подбор оборудования очистки воды.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="advantage">
                        <div class="icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <div class="title">
                            <h3>Без предоплаты</h3>
                        </div>
                        <div class="text">
                            <p>
                                Мы не берем предоплаты. Вы оплачиваете только тогда, когда работа по монтажу выполнена,
                                и из крана течет чистая вода.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </section>


    <!-- ================ contact section start ================= -->
    <section class="contact-section padding_top" id="contacts">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="section_tittle text-center">
                        <h2>Наши контакты</h2>
                    </div>
                </div>
            </div>
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 480px;"></div>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                saturation: -90
                            },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                            {
                                elementType: 'labels.text.fill',
                                stylers: [{
                                    color: '#ccdee9'
                                }]
                            }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
                </script>

            </div>


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Напишите нам</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('contact.send') }}" method="post" id="contactForm"
                          novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">

                          <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Сообщение'"
                                    placeholder='Сообщение'></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Ваше имя'" placeholder='Ваше имя'>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Ваш e-mail'" placeholder='Ваш e-mail'>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''"
                                           onblur="this.placeholder = 'Тема'" placeholder='Тема'>
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button class="btn_3 button-contactForm">Отправить</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Шымкент, Казахстан.</h3>
                            <p>ул.Казыбек би, 51 д.</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>00 (440) 9865 562</h3>
                            <p>Пн-Пт от 09:00 до 18:00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@filters.com</h3>
                            <p>Пишите нам в любое время</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection