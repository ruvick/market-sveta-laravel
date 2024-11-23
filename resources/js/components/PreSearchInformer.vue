<template>
  <div v-show="showed" :style="{top: coord_top+'px'}" class = "flter_pods" id = "flter_pods" >
		<div class="triangle"></div>
		
        <div v-show="loadet" class = "loader_white"></div>
			
		<div v-show="!loadet" class = "loader_info">
			<p  class = "pds_naideno" id = "pds_naideno">
                Найдено<br>
                {{ elementCount }}
            </p>
			<button type = "submit" class = "pds_submit">Показать</button>	
		</div>
	</div>
</template>

<script>
export default {
    data() {
        return{
            loadet:false,
            showed:false,
            coord_top:0
        }
    },

    props: ['domElement', 'elementCount'],

    watch:{
        domElement() {
            let inp = this.domElement.getBoundingClientRect()
            let win = document.getElementById("cat_filter_form").getBoundingClientRect()
            this.coord_top = (inp.top - win.top)-33
            this.showed=true;
        }
    }
}
</script>

<style>

</style>