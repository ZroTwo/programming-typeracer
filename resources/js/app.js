require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.addEventListener('keyup', logKey);

function logKey(e) {

    var code = document.getElementById('code').textContent;
    var re = new RegExp('^' + document.getElementById('typeracer').value,'g');
    console.log(code.match(re));

}
