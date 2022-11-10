const btnHeader = document.querySelector('.header_list_btn')
const nav = document.querySelector('.nav')
const nav_link = document.querySelectorAll('.nav_link')
const momondo = document.querySelector('.header')
const content = document.querySelector('.container_content')
const footer = document.querySelector('.footer')
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


        control= false
    }else{
        nav.style.width = '64px'
        nav_link.forEach(el=>{
        el.children[1].style.display = 'none'
        }) 
        
        content.style.padding = `62px 0 0 64px`
        momondo.style.padding = `0px 18px 0px 80px` 
        footer.style.padding = `40px 0 0 64px`
        control= true
        
  
        
        
      } 
    
    
    }
    
    

