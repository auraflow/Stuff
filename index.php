<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Обязательный метатеги -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Основной CSS -->
    <link rel="stylesheet" href="lib/nouislider/nouislider.min.css">
    <link rel="stylesheet" href="templates/css/style.css">

    <!-- Шрифты -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">

    <!-- Название вкладки -->
    <title>Актинидия "Пурпурная" (мини-киви) пурпурная 1 саженец</title>
</head>

<body>
    <!-- Шапка сайта -->
    <header>
        <div class="container top-list">
            <div class="row">
                <!-- Список -->
                <div class="col-md-7 nav-menu p-0">
                    <ul class="list-group list-group-horizontal">
                        <li class="list-group-item nav-menu-hover">
                            <a class="list-item-text" href="#">О нас</a>
                        </li>
                        <li class="list-group-item nav-menu-hover">
                            <a class="list-item-text" href="#">Контакты</a>
                        </li>
                        <li class="list-group-item nav-menu-hover">
                            <a class="list-item-text" href="#">Оплата и доставка</a>
                        </li>
                        <li class="list-group-item nav-menu-hover">
                            <a class="list-item-text" href="#">Гарантия на растения</a>
                        </li>
                        <li class="list-group-item nav-menu-hover">
                            <a class="list-item-text" href="#">Отзывы</a>
                        </li>
                        <li class="list-group-item nav-menu-hover">
                            <a class="list-item-text" href="#">Получить скидку</a>
                        </li>
                    </ul>
                </div>

                <!-- Спецакция -->
                <div class="col-md-5 spec-block">
                    <a href="#" class="spec-text">СПЕЦАКЦИЯ</a>
                </div>
            </div>

            <!-- Логотип -->
            <div class="row logo-inline">
                <div class="col-md-2">
                    <span class="logo-img inline-middle"></span>
                    <span class="logo-text inline-middle">ВЕСНА <br> ОСЕНЬ</span>
                </div>
                <!-- Поисковая строка -->
                <div class="col-md-5">
                    <form action="/catalog/" class="search-bar">
                        <input type="text" placeholder="Я ищу ..." class="search-suggest" size="40" maxlength="50">
                        <span class="search-img"></span>
                    </form>
                    <!-- Последние действия -->
                    <div>
                        <ul class="list-group list-group-horizontal jlinking">
                            <li class="list-group-item jlinking-item">
                                <a class="list-item-text jlinking-item-text" href="#">О нас</a>
                            </li>
                            <li class="list-group-item jlinking-item">
                                <a class="list-item-text jlinking-item-text" href="#">Контакты</a>
                            </li>
                            <li class="list-group-item jlinking-item">
                                <a class="list-item-text jlinking-item-text" href="#">Гарантия на растения</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Блок пользователя (Войти/Корзина) -->
                <div class="col-md-5">
                    <div class="user d-flex align-items-center justify-content-end">
                        <a href="/auth/" class="d-flex align-items-center justify-content-center user-block" id="user-a-first">
                            <span class="user-block-img"></span>
                            <span class="user-block-text">Войти</span>
                        </a>
                        <a href="cart-link" class="d-flex align-items-center justify-content-center cart-block" id="user-a-last">
                            <span class="cart-block-img"></span>
                            <span class="cart-block-text">Корзина</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Категории растений -->
    <section class="main-menu">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="list-group list-group-horizontal main-menu-ul p-0 m-0">
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Плодовые</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Ягодные</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Декоративные</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Луковицы</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Колоновидные</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Многолетние</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Розы</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Клубника</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Виноград</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Гортензия</a>
                        </li>
                        <li class="list-group-item main-menu-item">
                            <a class="list-item-text main-menu-text" href="#">Акции</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Назад и изображение иерархии -->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- Кнопка назад -->
                <div class="col-md-1 me-3 back-block">
                    <a href="#" class="back-text">НАЗАД</a>
                </div>
                <!-- Иерархия страниц сайта -->
                <div class="col-md-10">
                    <div class="content-item inline-middle">
                        <a href="#" class="content-item-link">
                            <span class="content-item-text">Главная страница</span>
                        </a>
                    </div>
                    <span class="separator">/</span>
                    <div class="content-item inline-middle">
                        <a href="#" class="content-item-link">
                            <span class="content-item-text">Саженцы ягодных кустарников</span>
                        </a>
                    </div>
                    <span class="separator">/</span>
                    <div class="content-item inline-middle">
                        <a href="#" class="content-item-link">
                            <span class="content-item-text">Саженцы мини-киви (актинидия)</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Карточка товара -->
    <section class="element">
        <div class="element-main">
            <div class="container">
                <!-- Название товара -->
                <div class="row mb-3">
                    <div class="col-md-12 element-name">
                        <h1 class="title">Актинидия "Пурпурная" (мини-киви) пурпурная 1 саженец</h1>
                    </div>
                </div>
                <div class="row">
                    <!-- Список изображений -->
                    <div class="col-md-1 thumbs">
                        <img class="thumbs-img" src="templates/images/Actinidia.jpeg" alt="Image not found">
                        <img class="thumbs-img" src="templates/images/Actinidia.jpeg" alt="Image not found">
                        <img class="thumbs-img" src="templates/images/Actinidia.jpeg" alt="Image not found">
                    </div>
                    <!-- Слайдер изображений -->
                    <div class="col-md-5 product-slider">
                        <img class="product-slider-img" src="templates/images/Actinidia.jpeg" alt="Image not found">
                    </div>

                    <!-- Блок информации о товаре (Цена, артикул, отзывы и т.д.) -->
                    <div class="col-md-5 product-purshase">
                        <div class="price-line">
                            <!-- Цена -->
                            <div class="price">398 ₽</div>
                            <!-- Артикул -->
                            <div class="articul">
                                Артикул:
                                <span class="value">1755</span>
                            </div>
                            <!-- Рейтинг товара -->
                            <div class="product-rating">
                                <span class="comment-star-group">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </span>
                                <span class="rating-value">5</span>
                                <span class="review-count">(1 отзыв)</span>
                            </div>
                            <!-- Оценки -->
                            <div class="like-block">
                                <span class="like">
                                    <span class="like-icon"></span>
                                    <span class="count">Нравится 8 чел.</span>
                                </span>
                            </div>
                        </div>
                        <!-- Наличие -->
                        <div class="availability-line">
                            <span class="novalid">Нет в наличии</span>
                            <span class="novalid">Сообщить о наличии</span>
                        </div>
                        <!-- Купить -->
                        <div class="buy-line-container"></div>
                        <!-- Преимущества #1 -->
                        <div class="advantages">
                            <span class="advantages-img"></span>
                            <span class="advantages-text">Болезнеустойчивый</span>
                            <span class="advantages-img"></span>
                            <span class="advantages-text">Высокоурожайный</span>
                        </div>
                        <!-- Преимущества #2 -->
                        <div class="property-block">
                            <div class="row">
                                <div class="col-md-10 p-0">
                                    <ul class="list-group property-list">
                                        <li class="list-group-item property-item">
                                            <span class="labels-img inline-middle">
                                                <img width="19" src="templates/icons/Vector1.svg" alt="nf">
                                            </span>
                                            <span class="inline-middle">
                                                Гарантированная доставка в сроки
                                            </span>
                                        </li>
                                        <li class="list-group-item property-item">
                                            <span class="labels-img inline-middle">
                                                <img src="templates/icons/Vector3.svg" alt="nf">
                                            </span>
                                            <span class="inline-middle">
                                                Только широко известные сорта
                                            </span>
                                        </li>
                                        <li class="list-group-item property-item">
                                            <span class="labels-img inline-middle">
                                                <img src="templates/icons/Vector5.svg" alt="nf">
                                            </span>
                                            <span class="inline-middle">
                                                Проверка каждого растения специалистами
                                            </span>
                                        </li>

                                        <li class="list-group-item property-item">
                                            <span class="labels-img inline-middle">
                                                <img src="templates/icons/Vector2.svg" alt="nf">
                                            </span>
                                            <span class="inline-middle">
                                                Абсолютное соответствие с описанием
                                            </span>
                                        </li>
                                        <li class="list-group-item property-item">
                                            <span class="labels-img inline-middle">
                                                <img src="templates/icons/Vector4.svg" alt="nf">
                                            </span>
                                            <span class="inline-middle">
                                                Достойная упаковка с надлежащей маркировкой
                                            </span>
                                        </li>
                                        <li class="list-group-item property-item">
                                            <span class="labels-img inline-middle">
                                                <img src="templates/icons/Vector6.svg" alt="nf">
                                            </span>
                                            <span class="inline-middle">
                                                Разнообразность выбора от классики до экзотики
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="element-info">
            <div class="container">
                <div class="row">
                    <div class="col description-left">
                        <p class="h1 description-name">Описание</p>

                        <div class="element-detail-text">
                            <h2 class="element-description-name">Актинидия "Пурпурная" (мини-киви)</h2>

                            <p class="description-text">
                                Актинидия "Пурпурная" (мини-киви) – это тропическое растение-лиана, относится к разновидности актинидии аргута.
                                Это самые морозоустойчивые культуры, способны расти и плодоносить в каждом регионе России.
                                Для выращивания в южных регионах можно выбрать актинидию китайскую.
                                Она отличается крупными плодами и также представлена в нашем магазине.
                            </p>

                            <p class="description-text">
                                Актинидия ценится за вкусные и полезные ягоды, декоративность, неприхотливость.
                                Растение используют для вертикального озеленения, создания живых изгородей, для оформления беседок.
                            </p>

                            <h2 class="element-description-name">Особенности культуры</h2>

                            <p class="description-text">
                                Актинидия "Пурпурная" (мини-киви) – это древовидная лиана, имеет высокую силу роста, хорошо приспосабливаются на новом месте.
                                Длина лиан достигает 8 метров, они густо покрыты эллиптическими листьями.
                            </p>

                            <p class="description-text">
                                Цветение начинается в конце мая. При этом на побегах распускаются белые, ароматные бутоны.
                                Для образования завязей необходимо иметь на участке женское и мужское растение.
                            </p>

                            <p class="description-text">
                                Ягоды созревают в конце сентября, они характеризуются:
                            </p>

                            <ul class="description-list">
                                <li class="description-list-item">весом до 11 г;</li>
                                <li class="description-list-item">овальной формой;</li>
                                <li class="description-list-item">темно-пурпурной окраской;</li>
                                <li class="description-list-item">тонкой кожицей;</li>
                                <li class="description-list-item">сочной мякотью с мелкими семенами;</li>
                                <li class="description-list-item">ананасным ароматом;</li>
                                <li class="description-list-item">кисло-сладким вкусом.</li>
                            </ul>

                            <p class="description-text">
                                Урожайность сорта составляет до 12 кг с одного куста.
                                Созревание плодов неравномерное, после созревания они не осыпаются.
                                Если существует угроза ранних заморозков, лучше снять ягоды одновременно, и оставить их для дозревания при комнатной температуре.
                            </p>

                            <h2 class="element-description-name">Выращивание и уход</h2>

                            <p class="description-text">
                                Саженцы актинидии "Пурпурная" (мини-киви) неприхотливы, для получения
                                высокого урожая рекомендуются посадка на солнечном месте с плодородной почвой.
                            </p>
                            <p class="description-text">
                                Уход при выращивании включает стандартную агротехнику:
                            </p>

                            <ul class="description-list">
                                <li class="description-list-item">полив;</li>
                                <li class="description-list-item">подкормку;</li>
                                <li class="description-list-item">обрезку.</li>
                            </ul>

                            <p class="description-text">
                                Морозоустойчивость сорта составляет до -30 градусов, при выращивании в серверных регионах требуется защита от мороза.
                            </p>

                            <p class="description-text">
                                В нашем магазине можно купить саженцы актинидии "Пурпурная" (мини-киви) высокого качества по доступной цене.
                                На сайте представлен большой выбор сортов с описанием, фото.
                            </p>

                            <p class="description-text">
                                Доставка в Москву, остальные города и областные центры России: Ростов, Краснодар, Ставрополь,
                                Санкт-Петербург, Самару, Нижний Новгород, Воронеж, Волгоград и др. производится транспортной компанией.
                            </p>
                        </div>
                    </div>
                    <div class="col description-right">
                        <p class="h1 description-name">Характеристики</p>

                        <div class="props-row">
                            <span class="props-name">Рост взрослого растения</span>
                            <span class="dashed"></span>
                            <span class="props-value">от 3.0м до 4.0м</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Цвет растения</span>
                            <span class="dashed"></span>
                            <span class="props-value">Зеленый</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Период цветения</span>
                            <span class="dashed"></span>
                            <span class="props-value">Июнь</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Тип использования</span>
                            <span class="dashed"></span>
                            <span class="props-value">В свежем виде, На компот и варенье, На сок</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Цвет цветка</span>
                            <span class="dashed"></span>
                            <span class="props-value">Белый</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Цвет плода</span>
                            <span class="dashed"></span>
                            <span class="props-value">Пурпурный</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Период доставки</span>
                            <span class="dashed"></span>
                            <span class="props-value">С февраля по май, с сентября по ноябрь</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Уровень полива</span>
                            <span class="dashed"></span>
                            <span class="props-value">2</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Уровень сложности ухода</span>
                            <span class="dashed"></span>
                            <span class="props-value">2</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Расстояние при посадке</span>
                            <span class="dashed"></span>
                            <span class="props-value">2-3м</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Тип климата</span>
                            <span class="dashed"></span>
                            <span class="props-value">Мягкий климат, Умеренный климат, Подходит для высадки на юге</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Тип почвы</span>
                            <span class="dashed"></span>
                            <span class="props-value">Глина, Песок, Кислая почва, Чернозем</span>
                        </div>
                        <div class="props-row">
                            <span class="props-name">Солнечный свет</span>
                            <span class="dashed"></span>
                            <span class="props-value">Растет в полутени; Рекомендуется светлая сторона</span>
                        </div>
                    </div>
                </div>

                <div id="form-anchor"></div>

                <!-- Здесь должна быть форма -->
                <div class="container form-block">
                    <form action="", method="get" class="form-container">
                        <!-- СЛАЙДЕР С ЦЕНАМИ -->
                        <div class="cost-block__slider" id="range-block">
                        </div>
                        <div class="cost-block__label">
                            <label class="cost__label">
                                <span class="cost-text">от</span>
                                <input type="number" name="mincost" class="filter-price__input" min="1" max="20000" placeholder="1" id="mincost-input" oninput="this.value = this.value.replace(/^0+(?=\d)/,'');">
                                <span class="cost-text">₽</span>
                            </label>
                            <label class="cost__label">
                                <span class="cost-text">до</span>
                                <input type="number" name="maxcost" class="filter-price__input" min="1" max="20000" placeholder="20000" id="maxcost-input" oninput="this.value = this.value.replace(/^0+(?=\d)/,'');">
                                <span class="cost-text">₽</span>
                            </label>

                            <!-- Название поля -->
                            <select name="field-name" class="select-field__input form-select" id="fields">
                                <!-- Default value -->
                                <option value="0">Выберите поле</option>

                                <!-- СПИСОК ПОЛЕЙ -->
                                <option value="1">Поле №1</option>
                                <option value="2">Поле №2</option>
                                <option value="3">Поле №3</option>
                                <option value="4">Поле №4</option>
                                <option value="5">Поле №5</option>
                                <option value="6">Поле №6</option>
                                <option value="7">Поле №7</option>
                                <option value="8">Поле №8</option>
                                <option value="9">Поле №9</option>
                                <option value="10">Поле №10</option>
                            </select>

                            <!-- Название растения -->
                            <input name="plant-name" type="text" class="plant-name__input form-control" maxlength="70" placeholder="Введите название">
                        </div>

                        <!-- Принять фильтр или очистить -->
                        <div class="ended-operation col">
                            <input value="Применить фильтр" name="accept-filter" type="submit" class="filter-accept__input">
                            <a href="http://localhost/site_filter/#form-anchor" type="button" class="clear-filter__input">Очистить фильтр</a>
                        </div>

                    </form>
                </div>

                <div class="container db-table__block">
                    <table class="db-table__table">
                        <thead class="db-table__head">
                            <tr class="table-rows__head">
                                <th class="table-head__element">Изображение</th>
                                <th class="table-head__element">Название</th>
                                <th class="table-head__element" id="table-field__cell">Поле</th>
                                <th class="table-head__element" id="table-description__cell">Описание</th>
                                <th class="table-head__element">Цена</th>
                            </tr>
                        </thead>
                        
                        <tbody class="db-table__body">
                            <?php if (isset($_GET["accept-filter"])) {

                                $mincost = htmlspecialchars($_GET["mincost"]);
                                $maxcost = htmlspecialchars($_GET["maxcost"]);
                                $field_name = htmlspecialchars($_GET["field-name"]);
                                $plant_name = htmlspecialchars($_GET["plant-name"]);
                                include 'core/filtered_output.php';

                            } else {

                                include 'core/unfiltered_output.php';

                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Нижняя часть сайта -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="footer-top">
                    <!-- Логотип -->
                    <div class="col-md-2 footer-logo">
                        <span class="logo-img inline-middle"></span>
                        <span class="logo-text inline-middle">ВЕСНА <br> ОСЕНЬ</span>
                    </div>
                    <div class="container">
                        <div class="row">
                            <!-- Списки верхней части футера -->
                            <div class="col-sm-3">
                                <ul class="list-group footer-list">
                                    <li class="list-group-item footer-list-item">О нас</li>
                                    <li class="list-group-item footer-list-item">Оплата и доставка</li>
                                    <li class="list-group-item footer-list-item">Статьи</li>
                                </ul>
                            </div>
                            <div class="col-sm-3">
                                <ul class="list-group footer-list">
                                    <li class="list-group-item footer-list-item">Контакты</li>
                                    <li class="list-group-item footer-list-item">Гарантия на растения</li>
                                    <li class="list-group-item footer-list-item">Отзывы</li>
                                </ul>
                            </div>
                            <!-- Телефон -->
                            <div class="col phones">
                                <span class="phones-img"></span>
                                
                                <span>
                                    <a href="#" class="phone">+7 499 346 82 26</a>
                                </span>
                            </div>
                            <div class="col stores">
                                <span class="store-img"></span>
                                
                                <span>
                                    <a href="#" class="store">Магазин "Растения для Вашего огорода и сада" Россия, г. Краснодар 350056</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="col-sm-5 copyright">
                        <span>Vesna-Osen.</span>
                        <span>Copyright © 2024.</span>
                        <span>Все права защищены</span>
                    </div>
                    <div class="col-sm-2 delivery">
                        <a href="#" class="delivery-link me-5">
                            <img width="83" height="40" src="templates/images/rupost.png" alt="rupost">
                        </a>
                        <a href="#" class="delivery-link">
                            <img width="187" height="40" src="templates/images/boxberry.png" alt="boxberry">
                        </a>
                    </div>
                    <div class="col-sm-2 social">
                        <a href="#" class="social-link">
                            <img src="templates/icons/fb.svg" alt="fb">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap JS отдельно от Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="lib/nouislider/nouislider.min.js"></script>
    <script src="templates/js/range-slider.js"></script>
</body>
</html>