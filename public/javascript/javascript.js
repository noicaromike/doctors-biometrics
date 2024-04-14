const saveBtn = document.querySelector('#save');
const printBtn = document.querySelector('#print');

printBtn.addEventListener('click', function(){
    window.print();
});



document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function(){
        const msg = document.querySelector('#message');
        msg.innerText = '';
    }, 3000);
});


