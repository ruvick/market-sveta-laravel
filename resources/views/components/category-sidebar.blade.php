<aside class="page__sidebar">
{{-- 
    <div class="page__sidebar-title-block d-flex">
        <h1 class="page__sidebar-title">Светильники</h1>
        <div class="page__sidebar-amount">23212 товаров</div>
    </div> --}}

    <div class="page__sidebar-filter-block-mob">
        <p class="page__sidebar-filter-block-mob-text">Фильтры</p>
    </div>

    <div class="page__sidebar-body">
        <div class="loaderSize" id="categoryFilterLoader" style="display: none;">Загрузка...</div>

        <div class="page__sidebar-navigation">
            <div class="spollers-block" data-spollers data-one-spoller>

                <div class="page__sidebar-navigation-col">
                    <div class="page__sidebar-navigation-block-name d-flex">
                        <div class="page__sidebar-navigation-name">Категории</div>
                    </div>
                    <ul class="page__sidebar-navigation-menu sidebar-navigation-catMenu">
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Каталог</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Светильники</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Подвесные</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Потолочные</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Настенные</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Настенно-потолочные</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Накладные светильники</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Встраиваемые</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Точечные светильники</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Ночники</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Мебельные</a>
                        </li>
                        <li class="sidebar-navigation-catMenu-item">
                            <a href="#" class="sidebar-navigation-catMenu-item-link">Для растений</a>
                        </li>
                    </ul>
                </div>

                <div class="page__sidebar-navigation-col page__sidebar-navigation-col-price">
                    
                    <div class="page__sidebar-navigation-block-name d-flex">
                        <div class="page__sidebar-navigation-name">ЦЕНА</div>
                    </div>
                    <form method="GET" action="{{url()->current()}}" class="page__sidebar-navigation-col-price-selects">
                        <input type="text" name="style" value="">
                        <div class="page__sidebar-navigation-col-price-selects-col">
                            <div class="page__sidebar-navigation-col-price-selects-text">от</div>
                            <input type="number" class="page__sidebar-navigation-col-price-selects-input" name="num"
                                min="0" max="1000000" value="1">
                            <div class="page__sidebar-navigation-col-price-selects-text">руб</div>
                        </div>
                        <div class="page__sidebar-navigation-col-price-selects-col">
                            <div class="page__sidebar-navigation-col-price-selects-text">до</div>
                            <input type="number" class="page__sidebar-navigation-col-price-selects-input" name="num"
                                min="1" max="1000000" value="2">
                            <div class="page__sidebar-navigation-col-price-selects-text">руб</div>
                        </div>
                        <br>
                        <button type ="submit">Отправить</button>
                    </form>
                    <form class="page__sidebar-navigation-col-price-switch d-flex">
                        <div class="page__sidebar-navigation-col-price-switch-col">
                            <div class="switch-block">
                                <input type="checkbox" id="price-switch-sale" class="switch-block__input" />
                                <label for="price-switch-sale" class="switch-block__label"></label>
                            </div>
                            <div class="page__sidebar-navigation-col-price-switch-name">Распродажа</div>
                        </div>
                        <div class="page__sidebar-navigation-col-price-switch-col">
                            <div class="switch-block">
                                <input type="checkbox" id="price-switch-exclusive" class="switch-block__input" />
                                <label for="price-switch-exclusive" class="switch-block__label"></label>
                            </div>
                            <div class="page__sidebar-navigation-col-price-switch-name">Эксклюзив</div>
                        </div>
                        <div class="page__sidebar-navigation-col-price-switch-col">
                            <div class="switch-block">
                                <input type="checkbox" id="price-switch-new" class="switch-block__input" />
                                <label for="price-switch-new" class="switch-block__label"></label>
                            </div>
                            <div class="page__sidebar-navigation-col-price-switch-name">Новинки</div>
                        </div>
                    </form>
                </div>

                <div class="page__sidebar-navigation-col">
                    <div class="page__sidebar-navigation-block-name d-flex">
                        <div class="page__sidebar-navigation-name">ЗАБРАТЬ ИЗ МАГАЗИНА</div>
                        <div class="switch-block">
                            <input type="checkbox" id="toggle" class="switch-block__input" />
                            <label for="toggle" class="switch-block__label"></label>
                        </div>
                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>РАЗМЕРЫ</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>СТИЛЬ</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                        <div class="page__sidebar-navigation-body-menu">

                            <input type="text" placeholder="Поиск по списку"
                                class="page__sidebar-navigation-body-menu-search">

                            <div class="page__sidebar-navigation-body-menu-options options">
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="1" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Американский</span>274</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="2" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Арт-деко</span>596</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="3" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Восточный</span>102</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="4" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Дизайнерский</span>522</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="5" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Замковый</span>50</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="6" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Кантри</span>289</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="7" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Классика</span>1444</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>МЕСТО ПРИМЕНЕНИЯ
                    </div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ТИП ЛАМПОЧКИ</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ФОРМА СВЕТИЛЬНИКА
                    </div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ПАРАМЕТРЫ ПЛАФОНОВ
                    </div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ТИП УПРАВЛЕНИЯ</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ОСОБЕННОСТИ</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                    </div>
                </div>

                <div class="page__sidebar-navigation-col">
                    <div class="page__sidebar-navigation-block-name d-flex">
                        <div class="page__sidebar-navigation-name">ПУЛЬТ ДУ</div>
                        <div class="switch-block">
                            <input type="checkbox" id="toggle-2" class="switch-block__input" />
                            <label for="toggle-2" class="switch-block__label"></label>
                        </div>
                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ВЫКЛЮЧАТЕЛЬ</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                        <div class="page__sidebar-navigation-body-menu">

                            <div class="page__sidebar-navigation-body-menu-options options">
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="8" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Присутствует</span></span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>ТИП ПОДВЕСА</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                        <div class="page__sidebar-navigation-body-menu">

                            <div class="page__sidebar-navigation-body-menu-options options">
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="9" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Провод</span>3585</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="10" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Трос</span>1310</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="11" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Цепь</span>404</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="12" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Штанга</span>235</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="page__sidebar-navigation-col spollers-block__item">
                    <div class="page__sidebar-navigation-name spollers-block__title" data-spoller>СТРАНА</div>
                    <div class="page__sidebar-navigation-body spollers-block__body">

                        <div class="page__sidebar-navigation-body-menu">

                            <input type="text" placeholder="Поиск по списку"
                                class="page__sidebar-navigation-body-menu-search">

                            <div class="page__sidebar-navigation-body-menu-options options">
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="1" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Австрия</span>152</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="2" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Беларусь</span>581</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="3" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Бельгия</span>559</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="4" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Венгрия</span>721</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="5" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Германия</span>3906</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="6" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Дания</span>795</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="7" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Испания</span>1267</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="8" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Италия</span>789</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="9" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Китай</span>1654</span>
                                </label>
                                <label class="page__sidebar-navigation-body-menu-options-item options__item">
                                    <input class="page__sidebar-navigation-body-menu-options-item-input options__input"
                                        type="radio" value="10" name="form[option]">
                                    <span
                                        class="page__sidebar-navigation-body-menu-options-item-input-text options__text"><span
                                            class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">Россия</span>368</span>
                                </label>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

</aside>