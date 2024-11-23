<template>
  <div class="cityselectWrapper">
    <input v-model="searchStr" type="text" placeholder="Введите название города для поиска">
    
    <div class="all_city_list_wrapper">
        <ul class="all_city_list">
            <li v-for ="(item) in filtredList" :key="item">
                <a href="#">{{item}}</a>
            </li>
        </ul>
    </div>
  </div>
</template>

<script>
export default {
    data() {
        return {
            searchStr:"",
            filtredList:[],
            allCity: [
                "Москва",
                "Санкт-Петербург",
                "Альметьевск",
                "Армавир",
                "Архангельск",
                "Астана: Казахстан",
                "Астрахань",
                "Балаково",
                "Барнаул",
                "Белгород",
                "Благовещенск",
                "Брянск",
                "Великий Новгород",
                "Владивосток",
                "Владимир",
                "Волгоград",
                "Вологда",
                "Воронеж",
                "Екатеринбург",
                "Иваново",
                "Ижевск",
                "Иркутск",
                "Йошкар-Ола",
                "Казань",
                "Калининград",
                "Калуга",
                "Кемерово",
                "Киров",
                "Кострома",
                "Краснодар",
                "Красноярск",
                "Курган",
                "Курск",
                "Липецк",
                "Магнитогорск",
                "Миасс",
                "Мурманск",
                "Набережные Челны",
                "Нальчик",
                "Нижневартовск",
                "Нижний Новгород",
                "Нижний Тагил",
                "Новокузнецк",
                "Новороссийск",
                "Новосибирск",
                "Ноябрьск",
                "Омск",
                "Орел",
                "Оренбург",
                "Орск",
                "Пенза",
                "Пермь",
                "Петрозаводск",
                "Псков",
                "Пятигорск",
                "остов-на-Дону",
                "Рыбинск",
                "Рязань",
                "Самара",
                "Саранск",
                "Саратов",
                "Симферополь",
                "Смоленск",
                "Сочи",
                "Ставрополь",
                "Старый Оскол",
                "Стерлитамак",
                "Сургут",
                "Сыктывкар",
                "Таганрог",
                "Тамбов",
                "Тверь",
                "Тольятти",
                "Томск",
                "Тула",
                "Тюмень",
                "Улан-Удэ",
                "Ульяновск",
                "Уссурийск",
                "Уфа",
                "Хабаровск",
                "Чебоксары",
                "Челябинск",
                "Череповец",
                "Чита",
                "Энгельс",
                "Ярославль",
            ]
        }
    },

    mounted: function() {
        this.filtredList = this.allCity
    },

    watch: {
        searchStr(newVal) {
            this.filtredList = []
            for (let k = 0; k<this.allCity.length; k++) {
                if (this.allCity[k].indexOf(newVal) >= 0) 
                    this.filtredList.push(this.allCity[k]); 
            }
        }
    }
}
</script>

<style>
    .cityselectWrapper input{
        width:100%;
    }

    .all_city_list_wrapper {
        padding: 14px 18px;
        border: 1px solid #dbe0e5;
        margin-top: 20px;
        border-radius: 8px;
    }

    .all_city_list {
        max-height: 300px;
        overflow: auto;
    }

    .all_city_list li{ 
        padding: 5px 0;
    }
</style>