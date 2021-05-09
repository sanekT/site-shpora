<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сайт шпаргалка</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://sanekt.github.io/site-shpora/css/main.css">
</head>
<body>

   <div id="container">

<!--      HEADER-->
       <header id="head">
            <div class="head total-block">
                <h1 class="header-style" id="up">Шпаргалка по веб разработке</h1>
                <?php echo 123; ?>
            </div>
        </header>
       
       
<!--       MAIN-->
        <main id="main">
        
<!--           SIDEBAR-->
            <section class="sidebar total-block">
                <ul class="sidebar__list">
                    <li data-tech="html"><span class="sidebar__folder-close"></span><div class="v-aligne">HTML</div>
                        <ul class="sidebar__list2">
                            <li><a href="https://sanekt.github.io/site-shpora/articles/html-semantic-tags.html" target="_blank">Семантические теги</a></li>
                            <li data-arc="meta-info">Meta информация</li>
                            <li data-arc="file-reference">Тег &lt;a&gt;, ссылка на файл, ссылка-якорь</li>
                            <li data-arc="table">Таблица</li>
                            <li data-arc="tag-img">Тег &lt;img&gt;, тег &lt;figure&gt; и &lt;figcaption&gt;</li>
                            <li data-arc="public-site-github">Как выложить простенький сайт бесплано на GitHub</li>
                            <li data-arc="float">Как сделать, чтобы родительский блок при свойстве float не схлопывался</li>
                        </ul>
                    </li>
                    
                    <li data-tech="js"><span class="sidebar__folder-close"></span><div class="v-aligne">JavaScript</div>
                        <ul class="sidebar__list2">
                           <li data-arc="info">Различная информация</li>
                            <li data-arc="arr-methods">Методы массивов</li>
                            <li data-arc="string">Строки</li>
                            <li data-arc="obj-methods">Методы объектов</li>
                            <li data-arc="cicles">Цыклы</li>
                            <li data-arc="obj-to-primitive">Преобразование объектов в примитивы</li>
                            <li data-arc="task-solution">Решения различных задач</li>
                            <li data-arc="func-helpful">Полезные функции</li>
                            <li data-arc="ajax">AJAX</li>
                            <li data-arc="animation">JavaScript анимация</li>
                            <li data-arc="parallax">Parallax на чистом js</li>
                            <li data-arc="fichi">Различные фишки на сайте</li>
                            <li data-arc="dom-shpora">DOM: шпора от специалиста</li>
                            <li data-arc="specialist">Курс специалиста JavaScript</li>
                        </ul>
                    </li>
                    
                    <li data-tech="php"><span class="sidebar__folder-close"></span><div class="v-aligne">PHP</div>
                        <ul class="sidebar__list2">
                            <li data-arc="base">Основа PHP</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </li>
                    
                    
                    <li data-tech="jQuery"><span class="sidebar__folder-close"></span><div class="v-aligne">jQuery</div>
                        <ul class="sidebar__list2">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </li>
                    
                    <li data-tech="css"><span class="sidebar__folder-close"></span><div class="v-aligne">CSS</div>
                        <ul class="sidebar__list2">
                            <li data-arc="property">Различные знания о свойствах</li>
                            <li data-arc="media-query">Медиа запросы и директива @import</li>
                            <li data-arc="animation">Анимация</li>
                            <li data-arc="font-awesome">Font-Awesome</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </li>
                    
                    <li data-tech="example"><span class="sidebar__folder-close"></span><div class="v-aligne">Анимация css, js</div>
                        <ul class="sidebar__list2">
                            <li data-arc="forms">Создаём форму. CSS3.HTML</li>
                            <li data-arc="animate-icons">Анимированые соц. иконки</li>
                            <li data-arc="menu">Красивое меню</li>
                            <li data-arc="animate">Анимированная картинка</li>
                            <li data-arc="sliders">Слайдеры картинок на CSS</li>
                            <li data-arc="arrow">Стрелка на css</li>
                        </ul>
                    </li>
                    
                    <li data-tech="flex"><span class="sidebar__folder-close"></span><div class="v-aligne">Flexbox</div>
                        <ul class="sidebar__list2">
                            <li data-arc="">1</li>
                            <li data-arc="">2</li>
                            <li data-arc="">3</li>
                            <li data-arc="">4</li>
                        </ul>
                    </li>
                    
                    <li data-tech="canvas"><span class="sidebar__folder-close"></span><div class="v-aligne">Canvas</div>
                        <ul class="sidebar__list2">
                            <li data-arc="theory">Теория</li>
                            <li data-arc="example">Примеры</li>
                            <li>3</li>
                            <li>4</li>
                            <li>5</li>
                        </ul>
                    </li>
                    
                    <li data-tech="node"><span class="sidebar__folder-close"></span><div class="v-aligne">Node.js</div>
                        <ul class="sidebar__list2">
                            <li data-arc="node">Установка и использование node.js, npm, gulp</li>
                            <li data-arc="node2">Npm, webpack</li>
                        </ul>
                    </li>
                    
                    <li data-tech="video"><span class="sidebar__folder-close"></span><div class="v-aligne">Видео</div>
                        <ul class="sidebar__list2">
                            <li data-arc="css">Различные видео по CSS</li>
                            <li>-</li>
                        </ul>
                    </li>
                    
                    <li data-tech="vue"><span class="sidebar__folder-close"></span><div class="v-aligne">Vue.js</div>
                        <ul class="sidebar__list2">
                            <li data-arc="direct">Директивы</li>
                            <li data-arc="computed-prop">Вычисляемые свойства, свойство computed</li>
                            <li data-arc="watch-prop">Свойство watch</li>
                            <li data-arc="filter-prop">Работа с фильтрами, свойство filters</li>
                            <li data-arc="animation">Анимация во Vue</li>
                            <li data-arc="cli">Vue CLI</li>
                            <li data-arc="example">Примеры</li>
                        </ul>
                    </li>
                    
                     <li data-tech="wp"><span class="sidebar__folder-close"></span><div class="v-aligne">Wordpress</div>
                        <ul class="sidebar__list2">
                            <li data-arc="begin">Начало работы с wordpess</li>
                            <li data-arc="create-theme">Создаём тему  и подключаем стили и скрипты.</li>
                            <li data-arc="bloginfo">Функция bloginfo() и the_custom_logo()</li>
                            <li data-arc="reg-menu">Регистрация меню и динамическое добавление меню из ВП</li>
                            <li data-arc="reg-sidebar">Регистрация сайдбаров</li>
                            <li data-arc="output-category">Вывод категорий на страницу и записей из них</li>
                            <li data-arc="output-post-page">Вывод записей(постов) и страниц(page), вывод картинки у постов, вывод пагинации</li>
                            <li data-arc="self-post">Свои типы записей</li>
                            <li data-arc="custom-fields">Дополнительные произвольные поля</li>
                            <li data-arc="huks">Хуки действий, хуки фильтры, шорткоды</li>
                            <li data-arc="post-format">Различные форматы постов и свои шаблоны для страниц</li>
                            <li data-arc="taksonomia">Таксономии</li>
                            <li data-arc="forms">Формы</li>
                            <li data-arc="child-theme">Дочерние темы</li>
                            <li data-arc="private-cabinet">Делаем личный кабинет, форум и др. Плагин WP-Recall</li>
                            <li data-arc="shpargalka">Шпаргалка</li>
                        </ul>
                    </li>
                    
                    <li data-tech="ubuntu"><span class="sidebar__folder-close"></span><div class="v-aligne">Ubuntu</div>
                        <ul class="sidebar__list2">
                            <li data-arc="cli">Команды терминала ubuntu</li>
                            <li data-arc="">-</li>
                        </ul>
                    </li>
                    
                    <li data-tech="shparg"><span class="sidebar__folder-close"></span><div class="v-aligne">Шпаргалка обо всём</div>
                        <ul class="sidebar__list2">
                            <li data-arc="shpora">Шпора</li>
                        </ul>
                    </li>
                    
                    <li data-tech="st3"><span class="sidebar__folder-close"></span><div class="v-aligne">Sublime Text3</div>
                        <ul class="sidebar__list2">
                            <li data-arc="st3">Всё про редактор</li>
                        </ul>
                    </li>
                    
                    <li data-tech="bootstrap"><span class="sidebar__folder-close"></span><div class="v-aligne">Bootstrap</div>
                        <ul class="sidebar__list2">
                            <li data-arc="grid">Bootstrap</li>
                        </ul>
                    </li>
                    
                    <li data-tech="makesite"><span class="sidebar__folder-close"></span><div class="v-aligne">Вёрстка сайта</div>
                        <ul class="sidebar__list2">
                            <li data-arc="ms">Вёрстка сайта</li>
                            <li data-arc="ms2">Вёрстка сайта2</li>
                            <li data-arc="ms3">Вёрстка сайта3</li>
                        </ul>
                    </li>
                    
                    
                    <li data-tech="figma"><span class="sidebar__folder-close"></span><div class="v-aligne">Figma</div>
                        <ul class="sidebar__list2">
                            <li data-arc="hot-keys">Горящие клавиши</li>
                        </ul>
                    </li>
                    
                    <li data-tech="vscode"><span class="sidebar__folder-close"></span><div class="v-aligne">VSCode</div>
                        <ul class="sidebar__list2">
                            <li data-arc="hot-keys">Горящие клавиши</li>
                        </ul>
                    </li>
                    
                    <li data-tech="photoshop"><span class="sidebar__folder-close"></span><div class="v-aligne">Photoshop</div>
                        <ul class="sidebar__list2">
                            <li data-arc="hot-keys">Горящие клавиши</li>
                        </ul>
                    </li>
                    
                </ul>
                
            </section>
            
            
            
<!--            MAINBAR-->
            <section class="mainbar total-block">
               
            </section>
            <a href="#up"  class="up">Вверх</a> 
        </main>
        
        
<!--        FOOTER-->
        <footer>
            <div class="foot total-block"></div>
        </footer>
   </div>

    <script src="https://sanekt.github.io/site-shpora/js/main.js"></script>

</body>
</html>
