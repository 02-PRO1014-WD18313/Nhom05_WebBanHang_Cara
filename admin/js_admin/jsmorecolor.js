//mã js của phần thêm màu sản phẩm
var but_more_colofa = document.querySelector('.but_more_table_color')
var big_mode_color = document.querySelector('.big_mode_color')
var closs = document.querySelector('.moder_footer_color button')
var icon_closs = document.querySelector('.moder_header_color i')

var more_color_prod=document.querySelector('.remove_choose')

function toggleMode() {
    big_mode_color.classList.toggle('hidden')
    // classList.toggle chuyển đổi lớp
}
if(but_more_colofa){
    but_more_colofa.addEventListener('click', toggleMode);
icon_closs.addEventListener('click', toggleMode)
}
if(more_color_prod){
    more_color_prod.addEventListener('click',toggleMode)
    icon_closs.addEventListener('click', toggleMode)
}

//addEventListener thêm một sự kiện khi nhấp chuột vào màn hình
function getcolor(){
    var input_color=document.querySelector('#input_color').value
    var block_color=document.querySelector('.block_color')
    block_color.innerHTML=input_color
    console.log(input_color)
}
//mã js thêm kích cỡ sản phẩm 
var btn_more_size=document.querySelector('.contructer_more_size button');
var block_size=document.querySelector('.more_size_prod');
var close_table_size=document.querySelector('.header_size i');
function toggle_size(){
 block_size.classList.toggle('hidden_more_size');
 console.log(block_size);
}
btn_more_size.addEventListener('click',toggle_size)
close_table_size.addEventListener('click',toggle_size)