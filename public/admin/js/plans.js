
const standardPrice = document.querySelector("#standard_price")
const starterPrice = document.querySelector("#starter_price")
const professionalPrice = document.querySelector("#professional_price")
const buisnessPrice = document.querySelector("#buisness_price")
const buisnessPlusPrice = document.querySelector("#buisness_plus_price")
const currency = document.querySelectorAll(".currency")
const month = document.querySelectorAll(".month")
const currencySwitch = document.querySelector("#currency_switch")
const monthly = document.querySelector("#monthly")
const needMore = document.querySelector("#need_more")
const moreDevice = document.querySelector("#more_device")


monthly.addEventListener("click", function () {
    if (monthly.checked == true) {
        standardPrice.innerHTML = "349.99/"
        starterPrice.innerHTML = "279.99/"
        professionalPrice.innerHTML = "418.99/"
        buisnessPrice.innerHTML = "558.99/"
        buisnessPlusPrice.innerHTML = "697.99/"
        month.forEach(mont => {
            mont.innerHTML = "year"
        })
        if (currencySwitch.checked == true) {

            standardPrice.innerHTML = "249.99/"
            starterPrice.innerHTML = "199.99/"
            professionalPrice.innerHTML = "299.99/"
            buisnessPrice.innerHTML = "399.99/"
            buisnessPlusPrice.innerHTML = "499.99/"
        }
    }

    else {
        standardPrice.innerHTML = "34.99/"
        starterPrice.innerHTML = "27.99/"
        professionalPrice.innerHTML = "41.99/"
        buisnessPrice.innerHTML = "55.99/"
        buisnessPlusPrice.innerHTML = "69.99/"
        month.forEach(mont => {
            mont.innerHTML = "month"
        })
        if (currencySwitch.checked == true) {
            standardPrice.innerHTML = "24.99/"
            starterPrice.innerHTML = "19.99/"
            professionalPrice.innerHTML = "29.99/"
            buisnessPrice.innerHTML = "39.99/"
            buisnessPlusPrice.innerHTML = "49.99/"
        }

    }
})
currencySwitch.addEventListener("click", function () {
    if (currencySwitch.checked == true) {

        standardPrice.innerHTML = "24.99/"
        starterPrice.innerHTML = "19.99/"
        professionalPrice.innerHTML = "29.99/"
        buisnessPrice.innerHTML = "39.99/"
        buisnessPlusPrice.innerHTML = "49.99/"
        currency.forEach(curr => {
            curr.innerHTML = "&#163;"
        })
        if (monthly.checked == true) {
            standardPrice.innerHTML = "249.99/"
            starterPrice.innerHTML = "199.99/"
            professionalPrice.innerHTML = "299.99/"
            buisnessPrice.innerHTML = "399.99/"
            buisnessPlusPrice.innerHTML = "499.99/"
            
        }
    }
    else {
        standardPrice.innerHTML = "34.99/"
        starterPrice.innerHTML = "27.99/"
        professionalPrice.innerHTML = "41.99/"
        buisnessPrice.innerHTML = "55.99/"
        buisnessPlusPrice.innerHTML = "69.99/"
        currency.forEach(curr => {
            curr.innerHTML = "$"
        })
        if (monthly.checked == true) {
            standardPrice.innerHTML = "349.99/"
            starterPrice.innerHTML = "279.99/"
            professionalPrice.innerHTML = "418.99/"
            buisnessPrice.innerHTML = "558.99/"
            buisnessPlusPrice.innerHTML = "697.99/"



        }
    }
})
needMore.addEventListener("click", () => {
    moreDevice.style.display = "flex"
})