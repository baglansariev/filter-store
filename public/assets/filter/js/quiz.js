$(function () {
    let quizWrapper = $('.quiz-wrapper');
    let bannerBtn = $('.banner-btn');
    let quizSlider = $('.quiz-slider');
    
    bannerBtn.click(function (e) {
        e.preventDefault();
        quizWrapper.fadeIn();

        let quizSliderWidth = quizSlider.width();
        let quizForm = quizSlider.find('form');
        let questionGroup = $('.question-group');
        let inputsGroup = $('.inputs-group');
        let next = $('.btn-next');
        let finish = $('.btn-finish');
        let send = $('.btn-send');
        let toLeft = quizSliderWidth;
        let totalQuestion = questionGroup.length;
        let currentQuestion = 1;
        let sumInput = $('.quiz-sum-input');

        quizForm.css('left', 0);
        finish.removeClass('active');
        $('.q-of').text(totalQuestion);
        $('.q-current').text(currentQuestion);

        questionGroup.width(quizSliderWidth + 'px');
        inputsGroup.width(quizSliderWidth + 'px');
        quizForm.width( (quizSliderWidth * totalQuestion) + 'px' );

        next.click(function () {
            next.removeClass('active');
            quizForm.animate({
                left: -toLeft + 'px',
            });
            toLeft += quizSliderWidth;
            currentQuestion++;
            $('.q-current').text(currentQuestion);
        });
        $('.form-check-input').change(getActiveButtons);
        sumInput.on('keyup', getActiveButtons);

        function getActiveButtons() {
            if (toLeft !== (quizSliderWidth * totalQuestion)) {
                next.addClass('active');
            }
            else {
                finish.addClass('active');
            }
        }

        finish.click(function () {
            finish.removeClass('active');
            $('.quiz-main-title.quizing').css('display', 'none');
            $('.quiz-main-title.finish').css('display', 'flex');
            $('.quiz-counter').css('display', 'none');
            questionGroup.css('display', 'none');
            quizForm.css('left', 0);
            inputsGroup.css('display', 'flex');
            send.addClass('active');
        });
        send.click(function () {
            if ($('.quiz-name').val() === '' || $('.quiz-phone').val() === '') {
                customAlert.show('.custom-alert', 'Заполните все необходимые поля.', 'danger');
            }
            else {
                $('.preloader-wrapper').css('display', 'flex');

                $.ajax({
                    url: quizForm.attr('action'),
                    type: 'GET',
                    data: quizForm.serialize(),
                    dataType: 'JSON',
                    success: function (response) {
                        if (response.msg) {
                            quizWrapper.fadeOut();
                            $('.preloader-wrapper').css('display', 'none');
                            customAlert.show('.custom-alert', response.msg, 'success');
                        }
                    },
                    error: function (response) {
                        $('.preloader-wrapper').css('display', 'none');
                        customAlert.show('.custom-alert', 'Прозошла ошибка при отправке. Пожалуйста попробуйте по позже.', 'danger');
                    }
                })
            }
        })
    });

    $('.quiz-close').click(function () {
        quizWrapper.fadeOut();
    });

    $('.quiz-phone').mask('+7(999)-999-99-99');
});