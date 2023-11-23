let bart = document.getElementById('navbar');
let content = document.getElementById('content');
let span = document.getElementById('span');
let showws = document.getAnimations('showws');

var but_more_colofa=document.querySelector('.but_more_table_color')
var big_mode_color=document.querySelector('.big_mode_color')
var closs=document.querySelector('.moder_footer_color button')
var icon_closs=document.querySelector('.moder_header_color i')
function clickmenu() {
    bart.style.top = "0";
}
function clickremove() {
    bart.style.top = "-350px";
}
function toggleMode(){
    big_mode_color.classList.toggle('hidden')
    // classList.toggle chuyển đổi lớp
}
but_more_colofa.addEventListener('click',toggleMode)
//addEventListener thêm một sự kiện khi nhấp chuột vào màn hình
more_product_color.addEventListener('click',toggleMode)
