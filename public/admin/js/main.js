const hamburgerBtn =  document.querySelector(".hamburger-btn")
const sideBar =  document.querySelector("#side_bar")
const main =  document.querySelector(".main")
const header =  document.querySelector("header")
const closeBtn =  document.querySelector(".close-btn")
const dropBtn =  document.querySelector(".account-name")
const dropDown =  document.querySelector(".drop-down")

let screen = window.matchMedia("(min-width: 1200px)")

hamburgerBtn.addEventListener("click",()=>{
    if (sideBar.style.left == "-240px" ) {
        if (screen.matches) {
            main.style.marginLeft = "240px"
            header.style.marginLeft = "240px"
            header.style.width = "calc(100% - 240px)"
        }
        sideBar.style.left = "0px"
        
    } else {
        sideBar.style.left = "-240px"
        main.style.marginLeft = "0px"
        header.style.marginLeft = "0px"
        header.style.width = "100%"
        
    }
})
closeBtn.addEventListener("click",()=>{
        sideBar.style.left = "-240px"
})

dropBtn.addEventListener("click",()=>{
    if (dropDown.style.transform == "scale(1)") {
        dropDown.style.transform = "scale(0)"
    }
    else{
        dropDown.style.transform = "scale(1)"
    }
})



