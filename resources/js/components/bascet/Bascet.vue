<template>
    <div v-show="!show_bascet" class="bascet_lader">
        <span></span>
        <p>Загружаем корзину...</p>
    </div>
    <div  v-show="bascetList.length != 0" class="bascet">
        <div class="bascet_tovar">
            <div class="control">
                <a @click.prevent="clearBascet()" class="clear_bascet_btn" href="#"><span>Очистить корзину</span></a>
            </div>

            <div class="tovar_list">
                
                <div v-for="(item, index) in bascetList" :key="item.product_sku" class="tovar">

                    <div class="tovar_all_blk picture_blk">
                        <img :src="'/storage/products_galery/'+item.tovar_data.img" alt="">
                    </div>
                    <div class="tovar_all_blk name_blk">
                        <h2>{{item.tovar_data.name}}</h2>
                        <p>{{item.tovar_data.brand}} ({{item.tovar_data.state}}) Артикул: {{item.product_sku}}</p>
                    </div>
                    <div class="tovar_all_blk price_blk">
                        <span class="rub price_formator">{{Number(item.price).toLocaleString('ru-RU')}}</span>
                    </div>
                    <div class="tovar_all_blk couint_blk">
                        <div class="number_wrapper">
                            <span @click="item.quentity--; updateBascet(); updateItem(item)" class="number_btn val_down">-</span>
                            <input type="number"  :value="item.quentity">
                            <span @click="item.quentity++; updateBascet(); updateItem(item)" class="number_btn val_upp">+</span>
                        </div>
                    </div>
                    <div class="tovar_all_blk summ_blk">
                        <span class="rub price_formator">{{Number(parseFloat(item.quentity)*parseFloat(item.price)).toLocaleString('ru-RU')}}</span>
                    </div>
                    <div class="tovar_all_blk dll_blk">
                        <span @click.prevent="deleteElement(item, index)" title="Удалить товар"></span>
                    </div>
                </div>
            </div>

            <div class="itogo">
                <div class="itogo_price_count">
                    <div class="itogo_row">
                        <span class="text">Товары (<span>{{count}}</span>)</span>
                        <span class="razd"></span>
                        <span class="p_price rub price_formator">{{Number(subtotal).toLocaleString('ru-RU')}}</span>
                    </div>

                    <div class="itogo_row itogo_row_final">
                        <span class="text">Итого</span>
                        <span class="razd"></span>
                        <span class="p_price rub price_formator">{{Number(subtotal).toLocaleString('ru-RU')}}</span>
                    </div>
                </div>
            </div>

        </div>
        
        <div class="bascet_form">
            <h2>Контактные данные</h2>
            <form action="GET">
                <input v-model="bascetInfo.fio" name="fio" type="text" placeholder="Фамилия, Имя*">
                <input v-model="bascetInfo.email" name="email" type="email" placeholder="e-mail">
                <input v-model="bascetInfo.phone" name="phone" type="text" placeholder="Телефон*">
                <textarea v-model="bascetInfo.adress" name="adress" placeholder="Адрес"></textarea>
                <textarea v-model="bascetInfo.comment" name="comment" placeholder="Комментарий"></textarea>
                <button @click.prevent="sendBascet()" class="btn" type="submit">Отправить</button>
                <p class="policy">Заполняя данную форму и отправляя заказ вы соглашаетесь с <a href="#">политикой конфиденциальности</a></p>
            </form>
        </div>
    </div>
    <h3 v-show="show_bascet && bascetList.length == 0" >Ваша корзина пуста</h3>
</template>

<script>
export default {
    data() {
        return {
            bascetList:[],
            count:0,
            subtotal:0,
            show_bascet:false,
            bascetInfo:{
                fio:"",
                email:"",
                phone:"",
                adress:"",
                comment:"",
            }
        }
    },

    mounted: function() {
        this.show_bascet = false;
        axios.get('/bascet/get/')
            .then((response) => {
                this.bascetList = response.data
                this.updateBascet()
                this.show_bascet = true
            })
            .catch(error => console.log(error));
    },
    methods: {
        sendBascet() {
            axios.post('/bascet/send/', {
                _token: document.querySelector('meta[name="_token"]').content,
                fio: this.bascetInfo.fio,
                phone: this.bascetInfo.phone
            })
            .then((response) => {
                console.log(response.data);
            })
            .catch(error => console.log(error));
        },
        updateItem(item){
            axios.post('/bascet/update/', {
                _token: document.querySelector('meta[name="_token"]').content,
                product_id: item.product_sku,
                count: item.quentity
            })
            .then(() => {
                console.log("updatet");
            })
            .catch(error => console.log(error));
        },

        updateBascet() {
            if (this.bascetList.length == 0) return;
            
            this.count = 0;
            this.subtotal = 0;
            for (let i = 0; i<this.bascetList.length; i++) {
                this.count+=this.bascetList[i].quentity
                this.subtotal+=parseFloat(this.bascetList[i].quentity)*parseFloat(this.bascetList[i].price)
            }
        },

        clearBascet() {
            axios.delete('/bascet/clear/', {
                _token: document.querySelector('meta[name="_token"]').content
            })
            .then(() => {
                this.count = 0
                this.subtotal = 0
                this.bascetList = []
                this.show_bascet = true
            })
            .catch(error => console.log(error));
        },

        deleteElement(item,index) {
            axios.delete('/bascet/delete/', {
                data: {
                    _token: document.querySelector('meta[name="_token"]').content,
                    product_id: item.product_sku
                }
            })
            .then(() => {
                console.log(item.product_sku);
                item.quentity = 0
                this.bascetList.splice(index, 1)
                this.updateBascet()

            })
            .catch(error => console.log(error));
        }
    }

}
</script>

<style>

</style>