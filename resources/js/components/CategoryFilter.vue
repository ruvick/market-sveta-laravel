<template>
    <aside id="cat_filter" class="page__sidebar">   
        <div v-show="filterList.length == 0" class="filter_loading">
            Фильтр загружается...
        </div>

        
        <div v-show="filterList.length != 0" class="page__sidebar-body">
            <div class="page__sidebar-navigation">
                <div class="spollers-block" data-spollers data-one-spoller>
        
                    <div class="page__sidebar-navigation-col">
                        <div class="page__sidebar-navigation-block-name d-flex">
                                <div class="page__sidebar-navigation-name">Категории</div>
                        </div>
                        
                        <ul class="page__sidebar-navigation-menu sidebar-navigation-catMenu">
                                    <li v-for="(item, index) in mainCatList" :key="item.id" :data-index="index"  class="sidebar-navigation-catMenu-item">
                                        <a :href="homeRout+'/category/'+item.slug" class="sidebar-navigation-catMenu-item-link">{{item.name}}</a>
                                    </li>    
                        </ul>
                    </div>


                    <form method="GET" :action="catUrl" class = "page__sidebar_form" id="cat_filter_form">   
                        <pre-search-informer :dom-element="clicedElement" :element-count="preSerchCount"></pre-search-informer>

                        <price-select-category-filter @chenge-price="chengePrice"></price-select-category-filter>

                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.brand.length != 0" property-name="brand" property-text="Бренд" :values="filterList.brand"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.style.length != 0" property-name="style" property-text="Стиль" :values="filterList.style"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.state.length != 0" property-name="state" property-text="Страна" :values="filterList.state"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.forma.length != 0" property-name="forma" property-text="Форма" :values="filterList.forma"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.arm_color.length != 0" property-name="arm_color" property-text="Цвет арматуры" :values="filterList.arm_color"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.plaf_color.length != 0" property-name="plaf_color" property-text="Цвент плафона" :values="filterList.plaf_color"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.arm_material.length != 0" property-name="arm_material" property-text="Материал арматуры" :values="filterList.arm_material"></multy-select-category-filter>
                        <multy-select-category-filter @chenge-list="chengeList" v-show="filterList.length!= 0 && filterList.plaf_material.length != 0" property-name="plaf_material" property-text="Материал плафона" :values="filterList.plaf_material"></multy-select-category-filter>
                        
                        <div class="filter_controll">
                            <button class="btn full_width" type="submit" >Выбрать</button>
                            <button class="btn empty_btn full_width" @click.prevent="clearFilter">Сбросить фильтр</button>
                            <!-- <button class="btn empty_btn full_width" @click.prevent="test">Test</button> -->
                        </div>
                    </form>

                </div>
            </div>    
        </div>
  </aside>
</template>

<script>
import PriceSelectCategoryFilter from '../components/PriceSelectCategoryFilter.vue'
import MultySelectCategoryFilter from '../components/MultiSelectCategoryFilter.vue'
import PreSearchInformer from '../components/PreSearchInformer.vue'

export default {

    data() {
        return {
            filterList:[],
            filterListEmpty:[],
            selectedParam:{},
            mainCatList:JSON.parse(this.catList),
            clicedElement:{},
            preSerchCount:0
        }
    },

    components: {
        PriceSelectCategoryFilter,
        MultySelectCategoryFilter,
        PreSearchInformer
    },

    props:['homeRout', 'catList', 'catUrl', 'catName', 'catId'],

    mounted: function() {
        let prefix_api_url = document.location.protocol+"//"+document.location.host
        console.log(prefix_api_url+'/api/v1/get_category_filter/'+this.catId)
        axios.get(prefix_api_url+'/api/v1/get_category_filter/'+this.catId)
        .then((response) => {
            this.filterList = response.data.incount;
            this.filterListEmpty = response.data.empty
        })
        .catch(error => console.log(error));
    }, 

    methods: {
        get_pre_filter() {
            let prefix_api_url = document.location.protocol+"//"+document.location.host

            axios.get(prefix_api_url+'/api/v1/get_sorted_category_filter/'+this.catId, {
                params: {
                    filter_empty:this.filterListEmpty,
                    filter:this.selectedParam
                }
            })
            .then((response) => {
                console.log(response.data);
                this.preSerchCount=response.data.products.length
                // this.filterList=response.data.filter

                if (this.clicedElement.dataset.razdel != "style")
                    this.filterList.style = response.data.filter.style
                
                if (this.clicedElement.dataset.razdel != "brand")
                    this.filterList.brand = response.data.filter.brand
                
                if (this.clicedElement.dataset.razdel != "state")
                    this.filterList.state = response.data.filter.state
                
                if (this.clicedElement.dataset.razdel != "forma")
                    this.filterList.forma = response.data.filter.forma
                
                if (this.clicedElement.dataset.razdel != "arm_color")
                    this.filterList.arm_color = response.data.filter.arm_color
                
                if (this.clicedElement.dataset.razdel != "plaf_color")
                    this.filterList.plaf_color = response.data.filter.plaf_color
                
                if (this.clicedElement.dataset.razdel != "arm_material")
                    this.filterList.arm_material = response.data.filter.arm_material
                
                if (this.clicedElement.dataset.razdel != "plaf_material")
                    this.filterList.plaf_material = response.data.filter.plaf_material
                
                
            })
            .catch(error => console.log(error));
            },

        clearFilter: () => {
            window.location.href = window.location.protocol+"//"+window.location.host+window.location.pathname
        },

        chengeList(element, list, item) {
            this.selectedParam[item] = list
            this.get_pre_filter()
            this.clicedElement = element
            console.log(element.dataset.razdel)
        },

        chengePrice(element, min, max, sale) {
            this.selectedParam["minprice"] = min
            this.selectedParam["maxprice"] = max
            this.selectedParam["insales"] = (sale)?"on":""
            this.get_pre_filter()
            this.clicedElement = element
        }

    }
}
</script>

<style>

</style>