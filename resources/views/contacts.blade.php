@extends('layout.all')
@section('title', "")

@section('content')

    <section id="select-prod" class="select-prod">
        <div class="_container">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{route('home')}}">Главная</a></li>
                    <li>Контакты</li>
                </ul>
            </div>
            <h1>Контакты</h1>
            
            <div class="contacts_data contacts_phone">
                <a href="tel:+{{preg_replace('/[^0-9]/', '',Config::get('contact.phone'))}}">{{Config::get('contact.phone')}}</a>
                <br>
                <span class="phone_subtitle">По вопросам покупки и сотрудничества</span>
            </div>

            <div class="contacts_data contacts_email">
                <a href="mailto:{{Config::get('contact.mail')}}">{{Config::get('contact.mail')}}</a>
            </div>

            <div class="contacts_data contacts_adress">
                {{Config::get('contact.adress')}}
            </div>

            <div class="text_style">
                <p>Мы всегда на связи с нашими покупателями. Связаться с нашим менеджером можно по телефону +7 (994) 444 48 44. По вопросам оформления заказа, оплаты и доставки звоните нам в рабочее время с 9:00 до 18:00.</p>
                <p>Если вам нужна помощь в выборе светильника или вы хотите обсудить нюансы оптового сотрудничества, звоните или пишите нам на email. На ваше электронное письмо мы ответим в ближайшее рабочее время.</p>
                <p>Наш магазин «Маркет Света» находится по адресу г. Москва, Дмитровское шоссе., 100, стр. 2. По этому адресу работает наш пункт самовывоза. Если вы хотите самостоятельно забрать свою покупку, обязательно укажите это при оформлении заказа.</p>
            </div>

            <div class="block__map" id="map"></div>

            
        </div>
    </section>

    <script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script> 
    <script>
        ymaps.ready(init); 

        function init () {
            let hint = "{{Config::get('contact.maptext')}}"
            var myMap = new ymaps.Map("map", {
                // Координаты центра карты
                center: {{Config::get('contact.coord')}},
                // Масштаб карты
                zoom: 17,
                // Выключаем все управление картой
                controls: []
            }); 

            var myGeoObjects = [];

            // Указываем координаты метки
            myGeoObjects = new ymaps.Placemark({{Config::get('contact.coord')}},{
                                            hintContent: '<div class="map-hint">Авто профи, Курск, ул.Комарова, 16</div>',
                                            balloonContent: '<div class="map-hint">'+hint+'</div>', 
                                            }
                                            ,{
                                                iconLayout: 'default#image',
                            // Путь до нашей картинки
                            iconImageHref: '/img/icons/map-marker.svg',  
                            // Размеры иконки
                            iconImageSize: [60, 60],
                            // Смещение верхнего угла относительно основания иконки
                            iconImageOffset: [-25, -90]
                        });

            var clusterer = new ymaps.Clusterer({
                clusterDisableClickZoom: false,
                clusterOpenBalloonOnClick: false,
            });
            
            clusterer.add(myGeoObjects);
            myMap.geoObjects.add(clusterer);
            // Отключим zoom
            myMap.behaviors.disable('scrollZoom');

    }
</script>

@endsection