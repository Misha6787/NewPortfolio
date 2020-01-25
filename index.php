<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Филимон Михаил - фрилансер</title>
</head>
<body>
    <header class="hero">
        <div class="container">
            <div class="hero-header">
                <img src="Img/logo.png" alt="logo" class="logo">
                <div class="social-links">
                    <a href="#В_будущем" class="social-links"><img src="Img/social/github.png" alt="GitHub"></a>
                    <a href="#В_будущем" class="social-links"><img src="Img/social/twitter.png" alt="Twitter"></a>
                    <a href="#В_будущем" class="social-links"><img src="Img/social/instagram.png" alt="instagram"></a>
                    <a href="#В_будущем" class="social-links"><img src="Img/social/facebook.png" alt="Fb"></a>
                </div>
            </div>
            <div class="hero-content">
                <div class="hero-text">
                    <span class="hero-subtitle wow fadeInRight" data-wow-delay="0.2s">Фрилансер</span>
                    <h1 class="hero-title wow fadeInRight" data-wow-delay="0.4s">Филимон Михаил</h1>
                    <p class="hero-description wow fadeInRight" data-wow-delay="0.6s">Разрабатываю сайты для малого и среднего бизнеса.
                     У меня можно заказать дизайн и верстку небольшого сайта или интернет-магазина</p>
                    <button class="button hero-button wow fadeInRight" data-wow-delay="0.8s">Бесплатная консультация</button>
                </div>
                <div class="hero-avatar wow fadeIn" data-wow-delay="1.5s">
                    
                </div>
            </div>
        </div>
    </header>
    <main>
        <section class="features sections">
            <div class="container">
                <h2 class="section-title wow fadeInRight" data-wow-delay="0.4s">Со мной удобно работать</h2>
                <div class="features-block">
                    <div class="features-item">
                        <img src="Img/Features/offer-img.png" alt="По договору" class="features-image wow fadeInRight" data-wow-delay="0.3s">
                        <h3 class="features-title wow fadeInRight" data-wow-delay="0.4s">По договору</h3>
                        <p class="features-text wow fadeInRight" data-wow-delay="0.6s">Предоставлю все документы для бухгалтерии: договоры, счета и акты. Работаю как ИП без НДС.</p>
                    </div>
                    <div class="features-item">
                        <img src="Img/Features/deadline-img.png" alt="Точно в срок" class="features-image wow fadeInRight" data-wow-delay="0.3s">
                        <h3 class="features-title wow fadeInRight" data-wow-delay="0.4s">Точно в срок</h3>
                        <p class="features-text wow fadeInRight" data-wow-delay="0.6s">В договоре прописана моя  ответственность за срок проекта. Если просрочу — плачу неустойку. </p>
                    </div>
                    <div class="features-item">
                        <img src="Img/Features/agreement-img.png" alt="Ценник под вас" class="features-image wow fadeInRight" data-wow-delay="0.3s">
                        <h3 class="features-title wow fadeInRight" data-wow-delay="0.4s">Ценник под вас</h3>
                        <p class="features-text wow fadeInRight" data-wow-delay="0.6s">Если у вас нетиповой проект, сделаю рассчет цены за работу и объясню, как складывается цена.</p>
                    </div>
                    <div class="features-item">
                        <img src="Img/Features/steps-img.png" alt="Премежуточные итоги" class="features-image wow fadeInRight" data-wow-delay="0.3s">
                        <h3 class="features-title wow fadeInRight" data-wow-delay="0.4s">Премежуточные итоги</h3>
                        <p class="features-text wow fadeInRight" data-wow-delay="0.6s">Показываю работу поэтапно, а не  в последий момент перед  крайним сроком. </p>
                    </div>
                    <div class="features-item">
                        <img src="Img/Features/storage-img.png" alt="Хостинг и домен" class="features-image wow fadeInRight" data-wow-delay="0.3s">
                        <h3 class="features-title wow fadeInRight" data-wow-delay="0.4s">Хостинг и домен</h3>
                        <p class="features-text wow fadeInRight" data-wow-delay="0.6s">Если мы договорились о цене проекта, в неё входит всё: домен и хостинг на год + SSL сертификат.</p>
                    </div>
                    <div class="features-item">
                        <img src="Img/Features/conversation-img.png" alt="Не брошу после сдачи" class="features-image wow fadeInRight" data-wow-delay="0.3s">
                        <h3 class="features-title wow fadeInRight" data-wow-delay="0.4s">Не брошу после сдачи</h3>
                        <p class="features-text wow fadeInRight" data-wow-delay="0.6s">Научу вас или вашего сотрудника пользоваться сайтом, запишу видео-инструкции.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section projects">
            <div class="container">
                <h2 class="section-title">Последние проекты</h2>

                    <!-- Slider main container -->
                <div class="swiper-container projects-slider">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide projects-slide">
                            <img src="Img/project-img.png" alt="Сайт строительной фирмы “Велстрой”" class="project-image">
                            <div class="project-text">
                                <h3 class="project-title">Сайт строительной фирмы “Велстрой”</h3>
                                <div class="project-time">
                                    <img src="Img/time-icon.png" alt="Срок" class="project-icon">
                                    <div class="project-description">
                                        <h4 class="project-subtitle">Срок</h4>
                                        <p class="project-paragraph">4 рабочих дня</p>
                                    </div>
                                </div>
                                <div class="project-cost">
                                    <img src="Img/cost-icon.png" alt="Цена" class="project-icon">
                                    <div class="project-description">
                                        <h4 class="project-subtitle">Цена</h4>
                                        <p class="project-paragraph">14 000 рублей</p>
                                    </div>
                                </div>
                                <div class="project-feedback">
                                    <img src="Img/feedback-icon.png" alt="Отзыв клиента" class="project-icon">
                                    <div class="project-description">
                                        <h4 class="project-subtitle">Отзыв клиента</h4>
                                        <p class="project-paragraph">Мне понравилось работать с Артемом,
                                        потому что он все время был на связи и предлагал свои решения,
                                        когда мы заходили в тупик с дизайном.
                                        Мне нужны были закрывающие документы для бухгалтерии,
                                        и Артем — тот редкий фрилансер, у которого с документами все в порядке</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide projects-slide">
                            <img src="Img/project-img.png" alt="Сайт строительной фирмы “Велстрой”" class="project-image">
                            <div class="project-text">
                                <h3 class="project-title">Сайт строительной фирмы “БелкамНефть”</h3>
                                <div class="project-time">
                                    <img src="Img/time-icon.png" alt="Срок" class="project-icon">
                                    <div class="project-description">
                                        <h4 class="project-subtitle">Срок</h4>
                                        <p class="project-paragraph">4 рабочих дня</p>
                                    </div>
                                </div>
                                <div class="project-cost">
                                    <img src="Img/cost-icon.png" alt="Цена" class="project-icon">
                                    <div class="project-description">
                                        <h4 class="project-subtitle">Цена</h4>
                                        <p class="project-paragraph">14 000 рублей</p>
                                    </div>
                                </div>
                                <div class="project-feedback">
                                    <img src="Img/feedback-icon.png" alt="Отзыв клиента" class="project-icon">
                                    <div class="project-description">
                                        <h4 class="project-subtitle">Отзыв клиента</h4>
                                        <p class="project-paragraph">Мне понравилось работать с Артемом,
                                        потому что он все время был на связи и предлагал свои решения,
                                        когда мы заходили в тупик с дизайном.
                                        Мне нужны были закрывающие документы для бухгалтерии,
                                        и Артем — тот редкий фрилансер, у которого с документами все в порядке</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- If we need pagination -->
                    <div class="projects-pagination"></div>

                </div>
            </div>
        </section>

    </main>

    <footer class="section">
        <div class="container container-contacts">
            <h2 class="section-title">Свяжитесь со мной</h2>
                <div class="contacts-block">
                    <form action="#" class="contacts-form">
                        <h4 class="form-title">Можете просто оставить заявку, я позвоню вам сегодня</h4>
                        <input type="text" class="input input-name" placeholder="Ваше Имя">
                        <input type="text" class="input input-phone" placeholder="Ваш телефон">
                        <button class="button form-button">Бесплатная консультация</button>
                    </form>
                    <div class="contacts-text">
                        <div class="contacts-data">
                            <div class="contacts-phone">
                                <h4 class="contacts-title">Телефон</h4>
                                <a href="tel:+79991234567" class="contacts-link">+7 999 123-45-67</a>
                            </div>
                            <div class="contacts-mail">
                                <h4 class="contacts-title">Почта</h4>
                                <a href="mailto:mail@mail.ru" class="contacts-link">mail@mail.ru</a>
                            </div>
                            <div class="contacts-social">
                                <h4 class="contacts-title">Соцсети</h4>
                                <a href="#" class="contacts-link">t.me/Misha</a>
                                <a href="#" class="contacts-link">Vk.me/Misha</a>
                                <a href="#" class="contacts-link">Fb.me/Misha</a>
                            </div>
                        </div>
                        <div class="social-links">
                            <a href="#В_будущем" class="social-links"><img src="Img/social/github.png" alt="GitHub"></a>
                            <a href="#В_будущем" class="social-links"><img src="Img/social/twitter.png" alt="Twitter"></a>
                            <a href="#В_будущем" class="social-links"><img src="Img/social/instagram.png" alt="instagram"></a>
                            <a href="#В_будущем" class="social-links"><img src="Img/social/facebook.png" alt="Fb"></a>
                        </div>
                        <a href="#" class="contacts-policy">Политика конфиденциальности</a>
                    </div>
                </div>
        </div>
    </footer>
    <script src="js/wow.min.js"></script>
    <script src="js/swiper.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>