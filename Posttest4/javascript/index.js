const toggle = document.getElemenById('toggleDark');
const body = document.querySelector('body');

toggle.addEventListener('click', function(){
    this.classlist.toggle(bi-moon);
    if(this.classlist.toggle(bi-brightness-high-Fill)){
        body.style.background = 'white';
        body.style.color = 'black'; 
        body.style.transition = '2s'
    }else{
        body.style.background = 'black';
        body.style.color = 'white'; 
        body.style.transition = '2s'
    }
})