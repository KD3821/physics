const open = document.querySelector('.open');
const modal = document.querySelector('.modal');
const modalClose = document.querySelector('.modal-close');
const open1 = document.querySelector('.open2');
const modal1 = document.querySelector('.modal2');
const modalClose1 = document.querySelector('.modal2-close');
const open2 = document.querySelector('.open3');
const modal2 = document.querySelector('.modal3');
const modalClose2 = document.querySelector('.modal3-close');
const regist = document.querySelector('.register');
const open4 = document.querySelector('.open4');

regist.addEventListener('click', function () {
    open4.classList.add('active');
})
open4.addEventListener('click', function () {
    open4.classList.remove('active');
})
open4.addEventListener('click', function () {
    open2.classList.remove('down');
    open1.classList.remove('down');
})
open.addEventListener('click', function () {
    modal.classList.add('active');
})
modalClose.addEventListener('click', function () {
    modal.classList.remove('active');
})

open1.addEventListener('click', function () {
    modal1.classList.add('active');
})

modalClose1.addEventListener('click', function () {
    modal1.classList.remove('active');
})

open2.addEventListener('click', function () {
    modal2.classList.add('active');
})

modalClose2.addEventListener('click', function () {
    modal2.classList.remove('active');
})
function setCursorPosition(pos, e) {
    e.focus();
    if (e.setSelectionRange) e.setSelectionRange(pos, pos);
    else if (e.createTextRange) {
        var range = e.createTextRange();
        range.collapse(true);
        range.moveEnd("character", pos);
        range.moveStart("character", pos);
        range.select()
    }
}

function mask(e) {
    //console.log('mask',e);
    var matrix = this.placeholder,// .defaultValue
        i = 0,
        def = matrix.replace(/\D/g, ""),
        val = this.value.replace(/\D/g, "");
    def.length >= val.length && (val = def);
    matrix = matrix.replace(/[_\d]/g, function(a) {
        return val.charAt(i++) || "_"
    });
    this.value = matrix;
    i = matrix.lastIndexOf(val.substr(-1));
    i < matrix.length && matrix != this.placeholder ? i++ : i = matrix.indexOf("_");
    setCursorPosition(i, this)
}
window.addEventListener("DOMContentLoaded", function() {
    var input = document.querySelector("#online_phone");
    input.addEventListener("input", mask, false);
    input.focus();
    setCursorPosition(3, input);
});