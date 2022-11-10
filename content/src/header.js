const btnHeader = document.querySelector('.header_list_btn')
const nav = document.querySelector('.nav')
const nav_link = document.querySelectorAll('.nav_link')
const momondo = document.querySelector('.header')
const content = document.querySelector('.container_content')
const content1 = document.querySelector('.content')
const footer = document.querySelector('.footer')
const footer1 = document.querySelector('.container_footer')

let control = false
console.dir(nav)
btnHeader.onclick = ()=>{
    if(control){
        nav.style.width = 240 + 'px'
        nav_link.forEach(el=>{
        el.children[1].style.display = 'block'
        }) 
    momondo.style.padding = `0px 18px 0px 256px` 
    content.style.padding = `62px 0 0 240px`
    footer.style.padding = `40px 0 0 240px`
    content1.style.padding ="36px 30px "
    footer1.style.padding = "0 30px"


        control= false
    }else{
        nav.style.width = '64px'
        nav_link.forEach(el=>{
        el.children[1].style.display = 'none'
        }) 
        content.style.padding = `62px 0 0 64px`
        content1.style.padding ="36px 85px "
        momondo.style.padding = `0px 18px 0px 80px` 
        footer.style.padding = `40px 0 0 64px`
        footer1.style.padding = "0 85px"
        control= true
      } 
    }
    
    

