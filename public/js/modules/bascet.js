import axios from 'axios'

// params: {
//     _token:document.querySelector('meta[name="_token"]').content,
// }

function bascet_to_page() {
            axios.get('/bascet/get', {
                
            })
            .then((response) => {
                if (response.data.length != 0)
                    for (let element of response.data) {
                        let card = document.querySelector('.main-prod-card__column[data-prodid="'+element.product_sku+'"]')
                        if (card != undefined)
                        {
                            card.classList.add("in-bascet")
                            card.querySelector(".bascet_count span").innerHTML = element.quentity
                            card.querySelector(".card_to_bascet_btn").style.display = "none"
                            card.querySelector(".card_bascet_btn").style.display = "block"
                        }
                    }           
                
            })
            .catch(error => console.log(error));
}

document.addEventListener("DOMContentLoaded", () => { 
    
    bascet_to_page();

    let add_buttons = document.querySelectorAll(".to_bascet")

    for (let elem of add_buttons)
        elem.addEventListener("click", function (e) {
            e.preventDefault()
            let product_id = elem.dataset.prodid;
            let tiken = document.querySelector('meta[name="_token"]').content;
            
            let data = new FormData()
            data.append("product_id", product_id)
            data.append("_token", tiken)

            var xhr = new XMLHttpRequest()
                
                xhr.open("post", "/bascet/add", true)
                xhr.responseType = 'json'
                xhr.setRequestHeader('Accept', 'application/json')
                
                xhr.onload = function () {
                    console.log(xhr)
                    if (xhr.status == 422) {
                        
                        for (let error of Object.entries(xhr.response.errors) )
                        {
                            console.log(error[0])
                            console.log(error[1][0])
                        }
                    } else

                    if (xhr.status == 200) {
                        let main_card = document.querySelector(".main-prod-card__column[data-prodid='"+product_id+"']");

                        main_card.classList.add("in-bascet")
                        main_card.querySelector(".card_to_bascet_btn").style.display = "none"
                        main_card.querySelector(".card_bascet_btn").style.display = "block"
                    }

                };

                xhr.onerror = function () {
                    alert(xhr.responseText)
                    console.log(xhr.status)
                };

                xhr.send(data);
        });

})