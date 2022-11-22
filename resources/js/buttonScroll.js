const toTop = document.querySelector(".to-top");

window.addEventListener("scroll", () => {
    console.log(window.pageYOffset);
    if(window.pageYOffset > 300){
        toTop.classList.remove("translate-y-40")
        toTop.classList.add("translate-y-0")
    } else {
         toTop.classList.add("translate-y-40")
        toTop.classList.remove("translate-y-0")
    }
})

