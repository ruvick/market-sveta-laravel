<template>
    <div class="page__sidebar-navigation-col page__sidebar-navigation-col-price">   
        <div class="page__sidebar-navigation-block-name d-flex">
            <div class="page__sidebar-navigation-name">ЦЕНА</div>
        </div>
        <div class="page__sidebar-navigation-col-price-selects">
            <div class="page__sidebar-navigation-col-price-selects-col">
                <div class="page__sidebar-navigation-col-price-selects-text">от</div>
                <input @change="changeComponent($event)" v-model="minPrice" type="number" class="page__sidebar-navigation-col-price-selects-input" name="minprice"
                    min="1" max="10000000">
                <div class="page__sidebar-navigation-col-price-selects-text">руб</div>
            </div>
            <div class="page__sidebar-navigation-col-price-selects-col">
                <div class="page__sidebar-navigation-col-price-selects-text">до</div>
                <input @change="changeComponent($event)" v-model="maxPrice" type="number" class="page__sidebar-navigation-col-price-selects-input" name="maxprice"
                    min="1" max="10000000" >
                <div class="page__sidebar-navigation-col-price-selects-text">руб</div>
            </div>
        </div>
        <div class="page__sidebar-navigation-col-price-switch d-flex">
            <div class="page__sidebar-navigation-col-price-switch-col">
                <div class="switch-block">
                    <input @change="changeComponent($event)" v-model="sale" name="insales" type="checkbox" id="price-switch-sale" class="switch-block__input" />
                    <label for="price-switch-sale" class="switch-block__label"></label>
                </div>
                <div class="page__sidebar-navigation-col-price-switch-name">Со скидкой</div>
            </div>
        </div>
    </div>
</template>

<script>
import allLibs from '../lib/lib.js'

export default {
    data() {
        return {
            minPrice:0,
            maxPrice:10000000,
            sale:false
        }
    },

    mounted: function() {
        let allGetKey = allLibs.getRequestParam()

        this.minPrice = (allGetKey["minprice"] != undefined)?parseInt(allGetKey["minprice"],10):0
        this.maxPrice = (allGetKey["maxprice"] != undefined)?parseInt(allGetKey["maxprice"],10):10000000
        this.sale = (allGetKey["insales"] == 'on')?true:false
    },

    methods:{
        changeComponent(event) {
            this.$emit('chengePrice', event.target, this.minPrice, this.maxPrice, this.sale);
        }
    }
}
</script>

<style>

</style>