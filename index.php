<?php
print ('
<!DOCTYPE html>
<html lang="ru">
<head>
<title>Тестовый проект для тренировки работы с GIT</title>
<link href="CSS/style.css" rel="stylesheet">
<link href="img/favicon-2.png" rel="icon">
<meta charset="utf-8">
<meta name="keywords" content="GIT, гит, система контроля версий">
<meta name="description" content="Проект в котором я тренируюсь работать с системой 
контроля версий GIT">
</head>
<body>
<H1>ПРИВЕТ ДРУЗЬЯ!</H1>
<p>Я <span>первый</span> и только первый пункт</p>
</body>
</html>
');
print ('hello   world');
print ('
<div class="feature-kitten">
<ol>
  <li>Я первый и только первый пункт</li>
  <li>Я не я, если я не второй пункт</li>
  <li>Третий после стольких лет? Всегда!</li>
</ol></div>');
print ('&ltНовая строка в которой будут изминения для конфликта в пулреквест на GitHub&gt<br>');
print ('Он взглянул в окно и подумал — <i>такого просто не может быть</i>!<br>');
print ('новая строка в которой будут изминения для Enother_branch ветки<br>');

print ('<ul>
  <li>Почистить посудомоечную машину</li>
  <li><del datetime="2009-10-11T01:25-07:00">Погулять</del></li>
  <li><del datetime="2009-10-10T23:38-07:00">Поспать</del></li>
  <li><ins>Купить принтер</ins></li>
</ul><br>');
print ('<article>
  <div class="highlight">
    <p>Кryptologin cмерджил kryptologins_branch</p>
    <p>Новый коммит от kryptologin</p>
  </div>
  <p>Текст, в котором <span>выделена фраза</span></p>
</article>');
print ('Кryptologin cмерджил kryptologins_branch<br>');
print ('новая строка в которой будут изминения для Enother_branch ветки-2<br>');
print ('Кryptologin cмерджил kryptologins_branch<br>');
print ('новый коммит от kryptologins_branch<br>');
print ('Ссылка на <a href="/DelitedFile.php">DelitedFile</a> <br>');
print ('Ссылка на <a href="/hello_GIT.php">hello_GIT</a> <br>');
print ('Ссылка на <a href="/newList.php">newList_GIT</a> <br>');
print ('<section><div class="new"><button class="button">Нажми на меня</button></div></section>
');
print ('<section><div class="sum new"><button class="button">Нажми на меня</button></div></section>
');
?>
<script defer>
let button = document.querySelector('.button');
let i = 0;

// button.innerText = 'Кнопка нажата' + i + 'раз';

button.onclick = function() {
    i++;
        if (i > 10) {
            for (let y = 0; y <= 1000000; y++){
            button.textContent = 'сейчас у нас ' + y + "времени";
            }
        }

    else {button.textContent = 'Кнопка нажата ' + i + ' раз';}


var s = 2392013;
window.onload=function(){
setInterval(function(){
s-=1;
document.getElementById("sum").children[0].innerHTML=s;
},1000)
}
}</script>
<svg height='200' width='150'>
    <rect fill='orange' height='100' width='150'></rect>
    <polygon points="70,5 90,41 136,48 103,80 111,126 70,105 29,126 36,80 5,48 48,41"fill="red"/>
</svg>
<svg>
    <circle r="10" cx="50" cy="50%" fill="crimson"/>
    <circle r="30" cx="105" cy="50%" fill="orangered"/>
    <circle r="50" cx="200" cy="50%" fill="gold"/>
</svg>
<svg width="300" height="290">
    <rect class="sky" width="100%" fill="skyblue" />
    <rect class="sod" width="100%" y="180" fill="yellowgreen" />
    <rect class="leg" width="10" height="30" rx="5" x="80" y="230" fill="black" />
    <rect class="leg" width="10" height="30" rx="5" x="210" y="230" fill="black" />
    <circle class="target" r="100" cx="50%" cy="160" fill="crimson" />
    <circle class="target" r="80" cx="50%" cy="160" fill="white" />
    <circle class="target" r="60" cx="50%" cy="160" fill="crimson" />
    <circle class="target" r="40" cx="50%" cy="160" fill="white" />
    <circle class="target" r="20" cx="50%" cy="160" fill="crimson" />
</svg>
