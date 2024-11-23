@extends('layout.all')
@section('title', "Главная страница")

@section('content')
<section id="info-sl" class="info-sl">
    <div class="_container">
        <div class="info-sl__row d-flex">

            <div class="info-sl__slider main_banner infoSlBg slider _swiper">
                @foreach ($banners["main_banner"] as $item)
                    <div class="slider__item main_slider__item">
                        <img src="img/banners/{{$item["img_name"]}}" alt="">
                    </div>
                @endforeach
                
            </div>

            <div class="info-sl__images d-flex ">

                <div class="info-sl__img-item img-item-l">
                    <img src="img/banners/{{$banners["info_slider_top"][0]["img_name"]}}" alt="">
                    <!-- <div class="img-l">
                        <p>Светильники <span>до 10 000 рублей</span></p>
                        <a href="#" class="btn">Смотреть</a>
                    </div> -->
                </div>

                <div class="info-sl__img-item img-item-r">
                    <img src="img/banners/{{$banners["info_slider_bottom"][0]["img_name"]}}" alt="">
                    <!-- <p>CYBER MONDAY <span>до -80%</span></p> -->
                </div>

            </div>

        </div>
    </div>
</section>

<section id="popular" class="popular">
    <div class="_container">
        <h2 class="popular__title title">Популярные товары</h2>

        <div class="popular__row">

            <div class="popular__column">
                <a href="#" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="img/popular/01.png" alt="">
                    </div>
                    <div class="circleCard__name">
                        Люстры
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="#" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="img/popular/02.png" alt="">
                    </div>
                    <div class="circleCard__name">
                        Светильники
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="#" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="img/popular/03.png" alt="">
                    </div>
                    <div class="circleCard__name">
                        Бра
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="#" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="img/popular/04.png" alt="">
                    </div>
                    <div class="circleCard__name">
                        Настольные лампы
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="#" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="img/popular/05.png" alt="">
                    </div>
                    <div class="circleCard__name">
                        Торшеры
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="#" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="img/popular/06.png" alt="">
                    </div>
                    <div class="circleCard__name">
                        Люстры
                    </div>
                </a>
            </div>

            <div class="popular__column">
                <a href="#" class="circleCard">
                    <div class="circleCard__img">
                        <div class="circleCard__img-nuar_blk nuar_blk"></div>
                        <img src="img/popular/07.png" alt="">
                    </div>
                    <div class="circleCard__name">
                        Уличное освещение
                    </div>
                </a>
            </div>

        </div>

        <div class="popular__baner" style = "background-image: url(img/banners/{{$banners["action_banner"][0]["img_name"]}})"></div>

    </div>
</section>

<section id="selection" class="selection">
    <div class="_container">
        <h2 class="selection__title title">ПОДБЕРИТЕ СВЕТИЛЬНИКИ ПО ТИПУ ПОМЕЩЕНИЯ</h2>

        <div class="selection__row d-flex">

            <div class="selection__column">
                <a href="#" class="cardType cardType_img-01">
                    <div class="cardType__color-block">
                        <p class="cardType__color-block-text">Спальня</p>
                    </div>
                </a>
            </div>

            <div class="selection__column">
                <a href="#" class="cardType cardType_img-02">
                    <div class="cardType__color-block">
                        <p class="cardType__color-block-text">КУХНЯ</p>
                    </div>
                </a>
            </div>

            <div class="selection__column">
                <a href="#" class="cardType cardType_img-03">
                    <div class="cardType__color-block">
                        <p class="cardType__color-block-text">ГОСТИННАЯ</p>
                    </div>
                </a>
            </div>

            <div class="selection__column">
                <a href="#" class="cardType cardType_img-04">
                    <div class="cardType__color-block">
                        <p class="cardType__color-block-text">ДЕТСКАЯ</p>
                    </div>
                </a>
            </div>

            <div class="selection__column">
                <a href="#" class="cardType cardType_img-05">
                    <div class="cardType__color-block">
                        <p class="cardType__color-block-text">ВАННАЯ</p>
                    </div>
                </a>
            </div>

        </div>

    </div>
</section>

<section id="new-items" class="new-items">
    <div class="_container">
        <h2 class="new-items__title title">Распродажа</h2>

        <div class="prod-card d-flex">

            <div class="sale-baner">
                <img src="img/banners/{{$banners["sale_banner"][0]["img_name"]}}" alt="">
            </div>

            @foreach ($sale_elements as $item)
                <x-tovar-card :minfo="$item"></x-tovar-card>    
            @endforeach
            

        </div>

    </div>
</section>

<section id="about" class="about">
    <div class="_container">
        <h2 class="about__title title">ИНТЕРНЕТ-МАГАЗИН СВЕТИЛЬНИКОВ И ЛЮСТР «МАРКЕТСВЕТА»</h2>

        <div class="about__inner">
            <div class="about__column">
                <p class="about__column-text">
                    Наш ассортимент осветительных приборов — это более 120 брендов, среди которых: потолочные, встраиваемые,
                    подвесные и трековые светильники. Есть роскошные хрустальные, лаконичные металлические, натуральные
                    деревянные, воздушные стеклянные — любые модели, которые только можно представить.
                </p>
                <p class="about__column-text">
                    Наш каталог постоянно пополняется новинками — как только у представленного бренда выходит новая
                    коллекция,
                    она сразу появляется в продаже у нас. Среди представленных марок — самые популярные бренды Италии,
                    Германии, Испании, Австрии, Бельгии, Чехии, Польши, Дании, Швеции, Франции, Турции, США, Китая и,
                    конечно,
                    России.
                </p>
                <p class="about__column-text">
                    Кроме регулярного обновления и пополнения ассортимента осветительных приборов, мы постоянно проводим
                    акции
                    — распродажи светильников и люстр со значительными скидками — порой они достигают 90%!
                </p>
            </div>

            <div class="about__column">
                <p class="about__column-text">
                    Это отличная возможность дополнить свой интерьер настольной лампой или торшером, купить люстру, выбрать
                    подарок или полностью обновить свет во всем доме.
                </p>
                <p class="about__column-text">
                    «МаркетСвета» — это простые лаконичные модели и эксклюзивные дизайнерские люстры из хрусталя, достойные
                    самых роскошных интерьеров.
                </p>
                <p class="about__column-text">
                    Наша служба доставки быстро и аккуратно привезет заказанные товары, а установкой осветительной техники
                    займутся специалисты службы монтажа. Кстати, если воспользоваться услугами наших специалистов,
                    гарантийный
                    срок на оборудование увеличивается до 2 лет! Так что лучше доверить работу профессионалам, которые
                    сделают
                    всё быстро и качественно — в квартире, доме или офисе.
                </p>
                <p class="about__column-text">
                    Если у вас остались вопросы, свяжитесь с менеджерами интернет-магазина люстр и светильников «ВамСвет» по
                    телефону 8 (495) 154-10-63 или закажите обратный звонок, оставив контактные данные.
                </p>
            </div>
        </div>

    </div>
</section>

@endsection