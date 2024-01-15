let open_close_properties=document.getElementById('toggleButton');
let properties_list=document.querySelector('.hide-show-prop');
if(open_close_properties){
open_close_properties.addEventListener('click', () => {
    if (open_close_properties.innerText == 'Open') {
        open_close_properties.innerText = "Close";
        properties_list.style.display="none";
    } else {
        open_close_properties.innerText = "Open";
        properties_list.style.display="block";
    }
});
}

let list_view=document.getElementById('list-view');
let grid_view=document.getElementById('grid-view');
let properties_cards=document.querySelectorAll('.properties-cards');

if(list_view){
    list_view.addEventListener('click',()=>{
        list_view.classList.add('active');
        grid_view.classList.remove('active');
        properties_cards.forEach((single_prop)=>{
            single_prop.classList.add('active');
       })
    })
}
if(grid_view){
    grid_view.addEventListener('click',()=>{
        list_view.classList.remove('active');
        grid_view.classList.add('active');
        properties_cards.forEach((single_prop)=>{
            single_prop.classList.remove('active');
       })
    })
}

