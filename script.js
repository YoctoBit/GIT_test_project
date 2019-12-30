console.log('Кнопка нажата!');

let button = document.querySelector('button');
let i = 0;
button.textContent = 'Кнопка нажата' + i + 'раз';
button.onclick = function() {
    console.log('Кнопка нажата!');
    i++;
    button.textContent = 'Кнопка нажата' + i + 'раз';
};