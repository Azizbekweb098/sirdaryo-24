<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SIRDARYO 24</title>
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <!-- <div class="layer">
    <div class="modal-box basic-flex">
      <button type="button" class="btn hide-modal-btn">x</button>
      <h4>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</h4>
      <div class="telegram-join  basic-flex">
        <a href="#"><img src="img/tg.png" alt="Telegram">Подписатся</a>
      </div>
    </div>
  </div> -->
  <div class="menu-mask"></div>
  <main>
    <header class="main-header">
      <div class="container">
        <div class="basic-flex header__top">
          <a href="#" class="logo">
            <img src="./img/SIRDARYOLOGO.svg" alt="SIRTDARYOLIKLAR24">
          </a>
          <div class="currencies basic-flex">
            <div class="currency"><span>$</span><span>10137.2 </span></div>
            <div class="currency"><span>P</span><span>138.26</span></div>
            <div class="currency"><span>E</span><span>10988.72</span></div>
          </div>
          <div class="header__actions basic-flex">
            <form method="GET" class="search-form basic-flex">
              <input type="search" class="search-input">
              <button type="submit" class="btn search-btn"></button>
            </form>
            <div class="languages">
              <a href="/lang/en" class="btn language__option language__option--active">РУ</a>
              <div class="languages__list">
                <a href="/lang/uz" class="btn language__option language__option--uz" data-status="disabled">UZ</a>
              </div>
            </div>
            <div class="telegram-join basic-flex">
              <a href="#"><img src="img/tg.png" alt="Telegram">Подписатся</a>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-menu"><span class="hamburger"></span></button>
        <nav class="navbar">
          <div class="currencies-responsive basic-flex">
            <div class="currency"><span>$</span><span>10137.2 </span></div>
            <div class="currency"><span>P</span><span>138.26</span></div>
            <div class="currency"><span>E</span><span>10988.72</span></div>
          </div>
        <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <ul class="navbar__menu basic-flex">
            <li class="menu__item"><a href="#"> <?php echo e($cat['name_' . App::getLocale()]); ?></a></li>

          </ul>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>
        <div class="advertisement-box">
          <h4>PLACEHOLDER FOR ADVERTISEMENT</h1>
        </div>
      </div>
    </header>

    <div class="container">
      <div class="covid-block basic-flex ">
      	<div class="covid-block__title basic-flex">
      	  <div class="covid-title__img"></div>
      	  <a href="#" class="covid-title__text">Коронавирус COVID-19
      	    в Узбекистане</a>
      	</div>
      	<div class="covid-block__stats basic-flex">
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Инфицированы</h4>
      	      <p>3000</p>
      	    </div>
      	  </div>
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Выздоровели</h4>
      	      <p>2438</p>
      	    </div>
      	  </div>
      	  <div class="stats__item basic-flex">
      	    <div class="stats__img"></div>
      	    <div class="stats-text-box">
      	      <h4>Умерли</h4>
      	      <p>12</p>
      	    </div>
      	  </div>
      	</div>
      </div>
    </div>

    <section class="posts">
      <div class="container">
        <ul class="posts__list basic-flex">
          <li class="posts__item">
            <a href="#">
              <img src="img/top1.png" alt="Image" class="posts__img">
              <h2 class="posts__title">Мирзиёев рассказал, зачем было построено
                Сардобинское водохранилище</h2>
              <span class="posts__date">05:28 / 16.05.2020</span>
            </a>
          </li>
          <li class="posts__item">
            <a href="#">
              <img src="img/top2.png" alt="Image" class="posts__img">
              <h2 class="posts__title">Карантин в Узбекистане продлен до 1 июня</h2>
              <span class="posts__date">05:28 / 16.05.2020</span>
            </a>
          </li>
          <li class="posts__item">
            <a href="#">
              <img src="img/top3.png" alt="Image" class="posts__img">
              <h2 class="posts__title">Обмелевшая Сардоба: стихия или
                человеческий фактор?</h2>
              <span class="posts__date">05:28 / 16.05.2020</span>
            </a>
          </li>
          <li class="posts__item">
            <a href="#">
              <img src="img/top4.png" alt="Image" class="posts__img">
              <h2 class="posts__title">Следствие проверяет четыре версии
                прорыва Сардобинской плотины</h2>
              <span class="posts__date">05:28 / 16.05.2020</span>
            </a>
          </li>
          <li class="posts__item">
            <a href="#">
              <img src="img/top5.png" alt="Image" class="posts__img">
              <h2 class="posts__title">Выявлено еще 7 случаев коронавируса</h2>
              <span class="posts__date">05:28 / 16.05.2020</span>
            </a>
          </li>
          <li class="posts__item">
            <a href="#">
              <img src="img/top6.png" alt="Image" class="posts__img">
              <h2 class="posts__title">Итоги второго месяца карантина</h2>
              <span class="posts__date">05:28 / 16.05.2020</span>
            </a>
          </li>
        </ul>
      </div>
    </section>

    <div class="container">
      <div class="notification basic-flex">
        <div class="notification__text basic-flex">
          <h3>Хотите узнать новости первыми? подключите уведомления!
          </h3>
        </div>
        <button type="button" class="notification__button btn">
          Включит  уведомления!
        </button>
      </div>
    </div>

    <section class="news">
      <div class="container">
        <div class="news__wrapper basic-flex">
          <div class="column-news">
            <h2 class="news__title">Последние новости</h2>
            <ul class="news__list basic-flex">
              <li class="news__item">
                <a href="#" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="img/bottom1.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">По факту прорыва Сардобинского водохранилища
                      возбуждено уголовное дело</h4>
                    <p class="news__description">После прорыва дамбы Сардобинского водохранилища возбуждено уголовное дело, сообщили в пресс-службе Генпрокуратуры Узбекистана.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="#" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="img/bottom2.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">Мирзиёев: «Нам следовало бы принять некоторые правила
                      карантина как часть повседневной жизни»
                      </h4>
                    <p class="news__description">Президент Узбекистана заявил, что после того, как угроза коронавируса исчезнет, в стране следовало бы принять некоторые правила периода карантина как часть своей повседневной жизни.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="#" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="img/bottom3.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">В Ташкенте планируют ввести новую систему электронных проездных билетов
                    </h4>
                    <p class="news__description">Целью этих изменений является максимально возможное сокращение количества других маршрутов на улицах, где проходят основные маршруты.</p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="#" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="img/bottom1.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">По факту прорыва Сардобинского водохранилища
                      возбуждено уголовное дело</h4>
                    <p class="news__description">После прорыва дамбы Сардобинского водохранилища возбуждено уголовное дело, сообщили в пресс-службе Генпрокуратуры Узбекистана.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="#" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="img/bottom2.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">Мирзиёев: «Нам следовало бы принять некоторые правила
                      карантина как часть повседневной жизни»
                      </h4>
                    <p class="news__description">Президент Узбекистана заявил, что после того, как угроза коронавируса исчезнет, в стране следовало бы принять некоторые правила периода карантина как часть своей повседневной жизни.
                    </p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
              <li class="news__item">
                <a href="#" class="basic-flex news__link">
                  <div class="news-image-wrapper"><img src="img/bottom3.png" alt="Bottom Img"></div>
                  <div class="news-box basic-flex">
                    <h4 class="news__title">В Ташкенте планируют ввести новую систему электронных проездных билетов
                    </h4>
                    <p class="news__description">Целью этих изменений является максимально возможное сокращение количества других маршрутов на улицах, где проходят основные маршруты.</p>
                    <span class="news__date basic-flex">11:31 / 15.05.2020</span>
                  </div>
                </a>
              </li>
            </ul>
            <button type="button" class="btn load-more-btn">Больше новостей</button>
          </div>
          <div class="popular-news">
            <div class="popular-news-wrapper">
              <h4 class="popular-news__title">Cамые популярные новости</h4>
              <ul class="popular-news__list">
                <li class="popular-news__item">
                  <a href="#">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
                <li class="popular-news__item">
                  <a href="#">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
                <li class="popular-news__item">
                  <a href="#">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
                <li class="popular-news__item">
                  <a href="#">
                    <p class="popular-news__description">По факту прорыва Сардобинского водохранилища возбуждено уголовное дело</p>
                    <span class="popular-news__date">11:31 / 15.05.2020</span>
                  </a>
                </li>
              </ul>
            </div>
            <div class="ads-placeholder">
                <h4>ADS PLACEHOLDER</h4>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="apps-block container basic-flex">
      <div class="apps-block__image"></div>
      <div class="apps-block__content">
        <h4>Всегда будьте в курсе последних новостей!</h4>
        <p>Установите мобильное приложение NAMANGANLIKLAR24 и все новости в вашем кармане!</p>
      </div>
      <div class="apps-block__links basic-flex">
        <div class="links__item">
          <a href="#"><img src="img/googleplay.png" alt="googleplay"></a>
        </div>
        <div class="links__item">
          <a href="#"><img src="img/appstore.png" alt="googleplay"></a>
        </div>
      </div>
    </div>

  </main>

  <footer class="footer">
    <div class="container">
      <div class="footer__top basic-flex">
        <a href="#" class="footer_logo"><img src="img/3 sirdaryo.qayta.svg" alt="SIRDARYOLIKLAR@$"></a>
        <div class="join-telegram-wrapper basic-flex">
          <p>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</p>
          <a href="#" class="join-telegram">Подписатся</a>
        </div>
      </div>
      <div class="footer__bottom">
        <div class="about-site">
          <h4>О сайте</h4>
          <p>Воспроизводство, копирование, тиражирование, распространение и иное использование информации с сайта «SIRDARYO24.UZ» возможно только с предварительного письменного разрешения редакции.</p>
        </div>
        <ul class="footer-menu">
          <li class="footer-menu__item"><a href="#" class="footer-menu__link">Информация о сайте</a></li>
          <li class="footer-menu__item"><a href="#" class="footer-menu__link">Напишите нам</a></li>
          <li class="footer-menu__item"><a href="#" class="footer-menu__link">Реклама</a></li>
          <li class="footer-menu__item"><a href="#" class="footer-menu__link">Прислать новость</a></li>
        </ul>
        <ul class="footer-menu">
          <li class="footer-menu__item"><a href="#" class="footer-menu__link">Использование материалов </a></li>
          <li class="footer-menu__item"><a href="#" class="footer-menu__link">Темы дня</a></li>
          <li class="footer-menu__item"><a href="#" class="footer-menu__link">Наша команда</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script src="<?php echo e(asset('js/main.js')); ?>"></script>

</body>
</html>
<?php /**PATH D:\sirdaryo-2024\resources\views/home.blade.php ENDPATH**/ ?>