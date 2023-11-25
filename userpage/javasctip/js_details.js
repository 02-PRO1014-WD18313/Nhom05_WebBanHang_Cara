
let color_prod_choose = document.querySelectorAll('.detail_prod_color')
let choose_color_prod = document.querySelectorAll("input[name='color']")
let innerHTML_color = document.getElementById('innerHTML_color')
let inner_price = document.getElementById('price')
let checkradio = document.getElementsByName('color');
let radioget = () => {
    let select = document.querySelector("input[name='color']:checked").value
    console.log(select)
}
choose_color_prod.forEach(choose_color_prod => {
    choose_color_prod.addEventListener('change', radioget)
    // console.log(choose_color_prod)
});

function showDetails(animal, tien) {
    let animalType = animal.getAttribute("data-animal-type");
    let gia = tien.getAttribute("data-animal");
    innerHTML_color.innerHTML = animalType
    inner_price.innerHTML = gia
    
}