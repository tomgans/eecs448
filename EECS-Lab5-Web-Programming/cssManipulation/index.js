function enter(){
    let text = document.getElementById('bar');
    let border = document.getElementById('foo');
    let bg = document.getElementById('liz');
    if(border.value == 'red') text.style.borderColor = 'red';
    if(border.value == 'green') text.style.borderColor = 'green';
    if(border.value == 'blue') text.style.borderColor = 'blue';
    if(bg.value == 'green') text.style.backgroundColor = 'green';
    if(bg.value == 'blue') text.style.backgroundColor = 'blue';
    if(bg.value == 'red') text.style.backgroundColor = 'red';
}