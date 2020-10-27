<div class="quiz-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="quiz-block">
                    <div class="quiz-header">
                        <div class="icons">
                            <span class="red"></span>
                            <span class="orange"></span>
                            <span class="green"></span>
                        </div>
                        <span class="quiz-close">
                            <i class="fas fa-times"></i>
                        </span>
                    </div>
                    <div class="quiz-body" style="background-image: url({{ asset('assets/filter/images/quiz-bg.png') }})">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="quiz-main-title quizing">
                                        <h3 class="text-center">
                                            УЗНАЙТЕ СТОИМОСТЬ «ФИЛЬТРА»
                                            <br>
                                            ОТВЕТИВ НА <span class="q-of">7</span> ПРОСТЫХ ВОПРОСОВ
                                        </h3>
                                        <span>И ПОЛУЧИТЕ СКИДКУ 20%</span>
                                    </div>
                                    <div class="quiz-main-title finish">
                                        <h3 class="text-center">
                                            ВЫ УСПЕШНО ОТВЕТИЛИ НА ВСЕ ВОПРОСЫ
                                            <br>
                                            И ПОЛУЧАЕТЕ ПОЛУЧАЕТЕ СКИДКУ
                                            <br>
                                            20% НА ОБОРУДОВАНИЕ
                                        </h3>
                                        <span>
                                            Введите контактные данные чтобы получить
                                            <br>
                                            подборку фильтров с ценами
                                        </span>
                                    </div>
                                    <div class="quiz-counter">
                                        <p>
                                            Вопрос <span class="q-current">1</span> из <span class="q-of">7</span>
                                        </p>
                                    </div>
                                    <div class="quiz-slider">
                                        <form action="{{ route('quiz.send') }}">
                                            <div class="question-group">
                                                <p class="quiz-question">Какой у Вас источник водоснабжения?</p>
                                                <div class="quiz-options">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="source" id="q1o1" value="Скважина">
                                                        <label class="form-check-label" for="q1o1">
                                                            Скважина
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="source" id="q1o2" value="Открытый водозабор">
                                                        <label class="form-check-label" for="q1o2">
                                                            Открытый водозабор
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="source" id="q1o3" value="Водопровод">
                                                        <label class="form-check-label" for="q1o3">
                                                            Водопровод
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="question-group">
                                                <p class="quiz-question">Выберите тип объекта</p>
                                                <div class="quiz-options">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="object_type" id="q2o1" value="Коттедж">
                                                        <label class="form-check-label" for="q2o1">
                                                            Коттедж
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="object_type" id="q2o2" value="Квартира">
                                                        <label class="form-check-label" for="q2o2">
                                                            Квартира
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="object_type" id="q2o3" value="Турбаза">
                                                        <label class="form-check-label" for="q2o3">
                                                            Турбаза
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="object_type" id="q2o4" value="Производство">
                                                        <label class="form-check-label" for="q2o4">
                                                            Производство
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="question-group">
                                                <p class="quiz-question">Какие у вас проблемы с водой?</p>
                                                <div class="quiz-options">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="problem_type" id="q3o1" value="Жесткость (накипь)">
                                                        <label class="form-check-label" for="q3o1">
                                                            Жесткость (накипь)
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="problem_type" id="q3o2" value="Неприятный запах">
                                                        <label class="form-check-label" for="q3o2">
                                                            Неприятный запах
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="problem_type" id="q3o3" value="Много железа">
                                                        <label class="form-check-label" for="q3o3">
                                                            Много железа
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="problem_type" id="q3o4" value="Мутность цветность">
                                                        <label class="form-check-label" for="q3o4">
                                                            Мутность цветность
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="problem_type" id="q3o5" value="Другая проблема">
                                                        <label class="form-check-label" for="q3o5">
                                                            Другая проблема
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="question-group">
                                                <p class="quiz-question">Сколько людей проживает?</p>
                                                <div class="quiz-options">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="people_count" id="q4o1" value="1">
                                                        <label class="form-check-label" for="q4o1">
                                                            1
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="people_count" id="q4o2" value="2">
                                                        <label class="form-check-label" for="q4o2">
                                                            2
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="people_count" id="q4o3" value="3">
                                                        <label class="form-check-label" for="q4o3">
                                                            3
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="people_count" id="q4o4" value="4">
                                                        <label class="form-check-label" for="q4o4">
                                                            4
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="people_count" id="q4o5" value="5">
                                                        <label class="form-check-label" for="q4o5">
                                                            5
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="people_count" id="q4o6" value="6 и более">
                                                        <label class="form-check-label" for="q4o6">
                                                            6 и более
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="question-group">
                                                <p class="quiz-question">В пределах какой суммы ищете фильтр?</p>
                                                <div class="quiz-options">
                                                    <div class="form-group">
                                                        <label class="" for="q5o1">Укажите сумму</label>
                                                        <input class="quiz-sum-input" type="number" name="max_sum" id="q5o1">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="inputs-group flex-column justify-content-center align-items-center">
                                                <input type="text" class="quiz-name" name="name" placeholder="Ваше имя">
                                                <input type="text" class="quiz-phone" name="phone" placeholder="Номер телефона">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="quiz-buttons d-flex">
                                        <button class="btn btn-next">Следующий вопрос</button>
                                        <button class="btn btn-finish">Готово</button>
                                        <button class="btn btn-send">Получить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>