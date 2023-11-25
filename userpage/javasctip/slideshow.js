let a = 1;
slideshow(a)
function slideshow() {
    let img = document.getElementsByClassName('img_main')
    for (let index = 0; index < img.length; index++) {
        img[index].style.display = "none";
    }
    img[a - 1].style.display = "block";
}
function slide_img(n) {
    a = n;
    slideshow()
}  
    //   let b=1
    //     let choose_prod=document.getElementsByClassName('detail_prod_color')
    //     for (let index = 0; index < choose_prod.length; index++) {
    //      choose_prod[index].classList.remove('active')    
    //     }
    //     console.log(choose_prod)
    //     choose_prod[b-1].classList.add('active')