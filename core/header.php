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

            <div class="col give-role">
                <form action="core/assign_role.php" method="POST" class="role-form">
                    <button type="submit" name="role" value="1" class="btn role-element spec-text btn-secondary">Админ</button>
                    <button type="submit" name="role" value="2" class="btn role-element spec-text btn-primary">Пользователь</button>
                </form>
                <form action="core/secret_open.php" method="GET" class="secret-form">
                <button type="submit" name="secret-access" value="secretopen" class="btn spec-text secret btn-secondary">???</button>
                </form>
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
                    <div class="d-flex align-items-center justify-content-center user-block" id="user-a-first">
                        <span class="user-block-img"></span>
                        <span class="user-block-name"><?php echo $username_email ?></span>
                        <a href="<?php echo $login_link ?>">
                            <span class="user-block-text"><?php echo $login ?></span>
                        </a>
                    </div>
                    <a href="cart-link" class="d-flex align-items-center justify-content-center cart-block" id="user-a-last">
                        <span class="cart-block-img"></span>
                        <span class="cart-block-text">Корзина</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>