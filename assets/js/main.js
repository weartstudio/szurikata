// menu item hide
const social = document.querySelectorAll('a span.uk-text-small');
social.forEach(item => {
    var t = String(item.innerText); // make a string from name
    t = str = t.replace(/\s+/g, ''); // remove space from name
    if( t == 'hidden' ){
        item.querySelector('span.text').style.display = 'none';
        item.querySelector('span.fab').classList.remove('uk-margin-small-right');
    }
});

const services = document.querySelectorAll('#services .w-text');
services.forEach(item => {
    if(item.clientHeight > 90){
        item.classList.add('uk-height-90');
    }
});