// Подсказка в поиске

function all_component_set_display(componrnt = "", param = "") {
	let components = document.querySelectorAll(componrnt);
	for (let ic = 0; ic < components.length; ic++) {
		components[ic].style.display = param
	}	
} 


function all_component_set_value(componrnt = "", param = "") {
	let components = document.querySelectorAll(componrnt);
	for (let ic = 0; ic < components.length; ic++) {
		components[ic].value = param
	}	
} 

document.addEventListener("DOMContentLoaded", () => {

	let clBtnEvent = document.querySelectorAll('.sub-sclose');
	for (let index = 0; index < clBtnEvent.length; index++) { 
		clBtnEvent[index].addEventListener('click', function (e) { 
			
			all_component_set_display('.preSearchWrap', 'none')
			all_component_set_value('.search__input', '')

			clBtnEvent[index].style.display = "none"
		});

		
	}


	
	let search = document.querySelectorAll('.search__input');
	if (search) {
		for (let index = 0; index < search.length; index++) { 

			search[index].addEventListener('keydown', function (e) {
				let prefix_api_url = document.location.protocol+"//"+document.location.host
                
				console.log(search[index].value);
				
				var xhr = new XMLHttpRequest()

				if (search[index].value.length < 4) {
					
					all_component_set_display('.preSearchWrap', 'none')
					all_component_set_display('.sub-sclose', 'none')
					
					return;
				}

				
				

				all_component_set_display('.sub-load', 'block')

				xhr.onload = function (e) {
					let searchElements = JSON.parse( xhr.response)
					let rez_str = ""
					
					if ((searchElements.products.length == 0)&&(searchElements.categories.length == 0)) {
						all_component_set_display('.sub-load', 'none')
						return;
					}

					for (let i = 0; i<searchElements.categories.length; i++){
						rez_str += '<a class="catPreSearchElemLnk" href="'+prefix_api_url+'/category/'+searchElements.categories[i].slug+'">'+
			                           'Категория: ' +searchElements.categories[i].name+
									'</a>'
					}

					for (let i = 0; i<searchElements.products.length; i++){
						rez_str += '<a class="preSearchElemLnk" href="'+prefix_api_url+'/product/'+searchElements.products[i].slug+'">'+
										'<div class="preSearchElem">'+
					  						'<div class="img" style="background-image: url('+searchElements.img_prefix+"/"+searchElements.products[i].img+')"></div>'+
						  				
										'<div class="text">'+
											'<span>'+searchElements.products[i].name+'</span>'+
										'</div>'+
										
										'<div class="price">'+
											'<span class="cur">'+searchElements.products[i].price+' <span class="arial">₽</span></span>'+
										'</div>'+
									'</div>'+
									'</a>'
				

					}


						all_component_set_display('.sub-load', 'none')
                        all_component_set_display('.sub-sclose', 'block')
						

						let inputClue = document.querySelectorAll('.preSearchWrap');
						let inputClue_panel = document.querySelectorAll('.preSearchWrap .preSearchWrap_panel');
						for (let ic = 0; ic < inputClue.length; ic++) {
							inputClue[ic].style.display = "block"
							inputClue_panel[ic].innerHTML = rez_str;
						}
					

					console.log(JSON.parse( xhr.response));		
				}

				xhr.onerror = function () {
					error(xhr, xhr.status);
				};

                

				xhr.open('GET', prefix_api_url+'/api/v1/get_search_pds/?search_str='+search[index].value, true);
				xhr.send();
			});
		}
		

	}

});