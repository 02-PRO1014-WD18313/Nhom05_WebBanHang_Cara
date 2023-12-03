let allstart = document.querySelectorAll('.star');
let number_of_start_selec = document.querySelector('.number_of_start_selec');
allstart.forEach((star, i) => {
    star.onclick = function () {
        let number_start = i + 1
       number_of_start_selec.value=number_start;
        //    console.log(number_start)
        allstart.forEach((star, j) => {
            // console.log(j+1);
            if (number_start >= j + 1) {
                star.innerHTML = '&#9733'
            }else{
                star.innerHTML = '&#9734'
            }
        })
    }
})