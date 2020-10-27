@php
    use App\Http\Controllers\Elements\HeaderController;
    use App\Http\Controllers\Elements\FooterController;
@endphp
<!DOCTYPE html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Filters</title>
        <link rel="icon" href="{{ asset('assets/filter/img/favicon.png') }}">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/bootstrap.min.css') }}">
        <!-- animate CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/animate.css') }}">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/owl.carousel.min.css') }}">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/all.css') }}">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/filter/css/themify-icons.css') }}">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/magnific-popup.css') }}">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/slick.css') }}">
        <!-- style CSS -->
        <link rel="stylesheet" href="{{ asset('assets/filter/css/quiz.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/filter/css/style.css') }}">
    </head>

    <body>
        <!--::header part start::-->
        {!! (new HeaderController) -> index() !!}
        <!-- Header part end-->

        <main>
            @yield('content', 'Default Content')
        </main>


        <!--::footer_part start::-->
        {!! (new FooterController) -> index() !!}
        <!--::footer_part end::-->
        @component('modules.chemical-form')@endcomponent
        @component('modules.order-form')@endcomponent
        @component('modules.feedback-form')@endcomponent
        @component('modules.quiz')@endcomponent
        @component('modules.preloader')@endcomponent
        <button class="feedback-btn" data-toggle="modal" data-target="#feedbackModal">
            <i class="fas fa-phone"></i>
        </button>

        <!-- jquery plugins here-->
        <script src="{{ asset('assets/filter/js/jquery-1.12.1.min.js') }}"></script>
        <!-- popper js -->
        <script src="{{ asset('assets/filter/js/popper.min.js') }}"></script>
        <!-- bootstrap js -->
        <script src="{{ asset('assets/filter/js/bootstrap.min.js') }}"></script>
        <!-- easing js -->
        <script src="{{ asset('assets/filter/js/jquery.magnific-popup.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('assets/filter/js/swiper.min.js') }}"></script>
        <!-- swiper js -->
        <script src="{{ asset('assets/filter/js/masonry.pkgd.js') }}"></script>
        <!-- particles js -->
        <script src="{{ asset('assets/filter/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/filter/js/jquery.nice-select.min.js') }}"></script>
        <!-- slick js -->
        <script src="{{ asset('assets/filter/js/slick.min.js') }}"></script>
        <script src="{{ asset('assets/filter/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('assets/filter/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/filter/js/contact.js') }}"></script>
        <script src="{{ asset('assets/filter/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('assets/filter/js/jquery.form.js') }}"></script>
        <script src="{{ asset('assets/filter/js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('assets/filter/js/mail-script.js') }}"></script>
        <!-- custom js -->
        <script src="{{ asset('assets/filter/js/maskedinput.js') }}"></script>
        <script src="{{ asset('assets/filter/js/quiz.js') }}"></script>
        <script src="{{ asset('assets/filter/js/custom.js') }}"></script>
    </body>

</html>