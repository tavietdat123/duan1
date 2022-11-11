let index = 0
const prev =  document.querySelector('.flight_shouldcome_img_prev')
const next = document.querySelector('.flight_shouldcome_img_next')
const shouldcome = document.querySelector('.flight_shouldcome_slider')
const leg1 = document.querySelectorAll('.shouldcome_item_1')
let indexmax = Math.round(leg1.length / 4)

next.onclick = ()=>{
    index++;
    if(index >= indexmax){
        index = 0
    }
    row.style.transform = `translateX(-${row.offsetWidth * index}px)`
}
prev.onclick = ()=>{
    index--;
    if(index < 0 ){
        index = indexmax - 1 
    }
    row.style.transform = `translateX(-${row.offsetWidth * index}px)`
}