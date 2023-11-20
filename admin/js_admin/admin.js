a = 1;
let slidebar = document.getElementById('slidebars');
let chevron = document.getElementById('change');
function change() {
    if (chevron.classList.contains('bx-chevron-right')) {
        //contains thức trả về true chưa một lớp
        chevron.classList.replace('bx-chevron-right', 'bx-chevron-left')
        // replace chả về một chuỗi mới nếu có một, một số hoặc tất cả 
        // các kết quả khớp của a pattern(mẫu) được thay thế bằng a replacement(thay thế)
        slidebar.style.width = "110px"
    } else {
        chevron.classList.replace('bx-chevron-left', 'bx-chevron-right')
        slidebar.style.width = "350px"
    }
}

function menu_link() {
    let nav_link = document.getElementsByClassName('nav_link');
    for (let i = 0; i < nav_link.length; i++) {
        nav_link[i].classList.remove('active');
    }
    nav_link[a - 1].classList.add('active');
}
function click_menu(n) {
    a = n
    menu_link(a)
}

