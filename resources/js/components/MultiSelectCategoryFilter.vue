<template>
    <div class="page__sidebar-navigation-col spollers-block__item">
        <div @click="showBody = !showBody" class="page__sidebar-navigation-name spollers-block__title" :class="{_active:showBody }" >{{ propertyText }}</div>
        

            <div class="page__sidebar-navigation-body spollers-block__body" :class="{_showed:showBody }">

                <div class="page__sidebar-navigation-body-menu">

                    <input v-model="searchStr" type="text" placeholder="Поиск по списку" class="page__sidebar-navigation-body-menu-search">
                    
                    <div class="page__sidebar-navigation-body-menu-options options">
                        
                        <label v-for="(item, key, index) in showedList" :key="key" :data-index="index" class="page__sidebar-navigation-body-menu-options-item options__item">
                                <input :disabled="item==0" @change="chengeList($event)" v-model="selectedElement" :data-razdel="propertyName" type="checkbox" :value="key" :name="propertyName+'[]'" class="page__sidebar-navigation-body-menu-options-item-input options__input" >
                                <span class="page__sidebar-navigation-body-menu-options-item-input-text options__text">
                                <span class="page__sidebar-navigation-body-menu-options-item-input-text-main options__text-main">{{key}}</span>{{item}}</span>
                        </label>
                        
                    </div>
                </div>
            </div>
        
    </div>
</template>

<script>
import { watch } from '@vue/runtime-core'
import allLibs from '../lib/lib.js'
export default {
    data() {
        return{
            showedList:this.values,
            showBody:false,
            searchStr:"",
            selectedElement:[]
        }
    },

    emits: ['chengeList'],
    props:['propertyText', 'propertyName', 'values'],

    mounted: function() {
        let allGetKey = allLibs.getRequestParam()

        if (allGetKey[this.propertyName] != undefined)
            {
                this.selectedElement = Array.from(allGetKey[this.propertyName])
                this.showBody = true;
            }
    },

    watch: {

        values(newVal) {
            this.showedList = newVal;
        },

        searchStr(newVal) {
            this.showedList = {};
            for (let k in this.values) {
                if (k.indexOf(newVal) >= 0) 
                this.showedList[k] = this.values[k]; 
            }
        }
    },
    methods: {
        chengeList(event) {
            this.$emit('chengeList', event.target, this.selectedElement, this.propertyName);
        },

    }
}
</script>

<style>

</style>