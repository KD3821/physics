<?php
/*
Template Name: Главная
*/
get_header();
?>

<main>
    <div class="main my-container2">
        <section>
            <div class="klass">
                <div class="klass-content">
                    <div class="kc-img">
                        <img src="<?php bloginfo('template_directory')?>/img/en1.png" width="480" height="678" alt="">
                        <p>1 часть</p>
                    </div>
                    <button>Перейти</button>
                </div>
                <div class="klass-content">
                    <div class="kc-img">
                        <img src="<?php bloginfo('template_directory')?>/img/en2.png" width="436" height="697" alt="">
                        <p>2 часть</p>
                    </div>
                    <button>Перейти</button>
                </div>
                <div class="klass-content">
                    <div class="kc-img">
                        <img class="kci__img3" src="<?php bloginfo('template_directory')?>/img/en3.png" width="409" height="687" alt="">
                        <p class="kci__p3">Лабораторная работа</p>
                    </div>
                    <button>Перейти</button>
                </div>
            </div>
        </section>
        <section>
            <div class="question">
                <h2>Зачем нужен ОГЭ по физике?</h2>
                <div class="question-content">
                    <div class="qc-left">
                        <ul>
                            <li>ОГЭ по физике нужно школьникам, которые хотят поступить в 10 и 11 профильный инженерный класс.</li>
                            <li>Физика дает возможность в будущем поступить на специальность, связанную с техникой.</li>
                            <li>Для тех кому нужно будет сдавать ЕГЭ, это хорошая подготовка и тренировка.</li>
                        </ul>
                    </div>
                    <div class="qc-right">
                        <img src="<?php bloginfo('template_directory')?>/img/jke.png" width="233" height="186" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <h2>ОГЭ по физике состоит из трех частей и 26 заданий.</h2>
                <div class="container-content">
                    <div class="cc-left">
                        <ul>
                            <li><span>Первая часть</span> содержит 22 задания:
                                1, 6, 9, 15 и 19 задания с кратким ответом представляют собой задания на установление соответствия позиций, представленных в двух множествах, или задания на выбор двух правильных утверждений из предложенного перечня.
                                13 заданий с кратким ответом в виде одной цифры.
                                8 заданий с ответом в виде числа или набора чисел. одно задание с развернутым ответом.</li>
                            <li><span>Вторая часть</span>  6 заданий с развернутым ответом: 21-25  </li>
                            <li><span>Лабораторная часть</span>   17 задание(необходимо провести лабораторную работу и составить отчет по ней)_</li>
                        </ul>
                    </div>
                    <div class="cc-right">
                        <img src="<?php bloginfo('template_directory')?>/img/en4.png" width="653" height="714" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>Оцениевание балов по физике</h2>
            <div class="estimation">
                <div class="estimation-content">
                    <div class="ec-content">
                        <div class="circle">5</div>
                        <p>с 35 до 45 баллов</p>
                    </div>
                </div>
                <div class="estimation-content">
                    <div class="ec-content">
                        <div class="circle">4</div>
                        <p>с 23 до 34 баллов</p>
                    </div>
                </div>
                <div class="estimation-content">
                    <div class="ec-content">
                        <div class="circle">3</div>
                        <p>с 11 до 22 баллов</p>
                    </div>
                </div>
                <div class="estimation-content">
                    <div class="ec-content">
                        <div class="circle">2</div>
                        <p>с 0 до 10 баллов</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<footer>
    <div class="footer">
        <div class="footer-content my-container">
            Коровин Михаил, Copyright 2022
        </div>
    </div>
</footer>
<script src="<?php bloginfo('template_directory')?>/js/script.js"></script>
</body>
</html>

