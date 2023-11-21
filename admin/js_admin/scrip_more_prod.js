let droparea = document.querySelector('.shows_image')
let droptexr = document.querySelector('.p_img')
let button_img_prod = document.querySelector('.but')
let input_img_prod = document.querySelector('.input_img')
let check_drop_img=document.querySelector('.check_drop_img')
function check(fileimg){
    console.log(fileimg.value)
    const file = fileimg.files[0]
        showfile(file)
}

droparea.addEventListener('dragover',(event)=>{
    event.preventDefault()
    droptexr.innerHTML="Thả để tải ảnh lên"
})
droparea.addEventListener('dragleave',(event)=>{
    event.preventDefault()
    droptexr.innerHTML="kéo và thả để tải ảnh lên"
})
droparea.addEventListener('drop',(event)=>{
    event.preventDefault()
    const file=event.dataTransfer.files[0]
    console.log(file.name)
    check_drop_img.value=file.name
    showfile(file)
})
function showfile(file) {
    const filetype = file.type;
    const validate_img = ['image/jpeg', 'image/jpg', 'image/png'];
    if (validate_img.includes(filetype)) {
        const filreader = new FileReader()
        filreader.onload = () => {
            const fileURL = filreader.result;
            const imgtag = `<img src="${fileURL}" style="width:75%; ">`;
            droparea.innerHTML = imgtag
        }
        filreader.readAsDataURL(file)
    } else {
        alert('Đây không phải là file ảnh')
    }
}

let btn_more_prod=document.querySelector('.more_prod_img')
let more_color_prod=document.querySelector('.more_color_prod')
let close_more_prod=document.querySelector('.header_color_prod i')
 
function toggle(){
    more_color_prod.classList.toggle('hidden_color_prod')
}
btn_more_prod.addEventListener('click',toggle)
close_more_prod.addEventListener('click',toggle)