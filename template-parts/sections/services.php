<section class = 'services section' id = 'services'>
   <div class = 'services__container'>
        <h1 class = 'services__container-title'>
            Услуги
        </h1>

        <h2 class = 'services__container-subtitle'>
            Мы не просто делаем сайты. Мы создаем инструменты для роста и развития для вашего бизнеса.
        </h2>

        <div class = 'services__container-list'>

            <div class="services__container-list-item">
            <h1 class="services__container-list-item-title"><?php the_field('services-title-1'); ?></h1>
            <div class="services__container-list-item-hover">
                <p class="services__container-list-item-hover-subtitle">
                <?php the_field('services-subtitle-1'); ?>
                </p>
                <p class="services__container-list-item-hover-date"><?php the_field('services-time-1'); ?> дней</p>
            </div>
            <h2 class="services__container-list-item-price">от <?php the_field('services-price-1'); ?> ₽</h2>
            </div>

            <div class="services__container-list-item">
            <h1 class="services__container-list-item-title"><?php the_field('services-title-2'); ?></h1>
            

            <div class="services__container-list-item-hover">
                <p class="services__container-list-item-hover-subtitle">
                <?php the_field('services-subtitle-2'); ?>
                </p>
                <p class="services__container-list-item-hover-date"><?php the_field('services-time-2'); ?> дней</p>
            </div>
            <h2 class="services__container-list-item-price">от <?php the_field('services-price-2'); ?> ₽</h2>
            </div>

            <div class="services__container-list-item">
            <h1 class="services__container-list-item-title"><?php the_field('services-title-3'); ?></h1>
            

            <div class="services__container-list-item-hover">
                <p class="services__container-list-item-hover-subtitle">
                <?php the_field('services-subtitle-3'); ?>
                </p>
                <p class="services__container-list-item-hover-date"><?php the_field('services-time-3'); ?> дней</p>
            </div>
            <h2 class="services__container-list-item-price">от <?php the_field('services-price-3'); ?> ₽</h2>
            </div>

            <div class="services__container-list-item">
            <h1 class="services__container-list-item-title"><?php the_field('services-title-4'); ?></h1>
            

            <div class="services__container-list-item-hover">
                <p class="services__container-list-item-hover-subtitle">
                <?php the_field('services-subtitle-4'); ?>
                </p>
                <p class="services__container-list-item-hover-date"><?php the_field('services-time-4'); ?> дней</p>
            </div>
            <h2 class="services__container-list-item-price">от <?php the_field('services-price-4'); ?> ₽</h2>
            </div>

            <div class="services__container-list-item">
            <h1 class="services__container-list-item-title"><?php the_field('services-title-5'); ?></h1>
            

            <div class="services__container-list-item-hover">
                <p class="services__container-list-item-hover-subtitle">
                <?php the_field('services-subtitle-5'); ?>
                </p>
                <p class="services__container-list-item-hover-date"><?php the_field('services-time-5'); ?> дней</p>
            </div>
            <h2 class="services__container-list-item-price">от <?php the_field('services-price-5'); ?> ₽</h2>
            </div>

        </div>

        <a class = 'services__container-cta'>
            <svg class = 'services__container-cta-img' width="193" height="100" viewBox="0 0 193 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M191.758 25.3867V74.6123L96.1289 99.4824L0.5 74.6123V25.3867L96.1289 0.516602L191.758 25.3867Z" stroke="white"/>
            </svg>
            <span class = 'services__container-cta-text'>
                Заказать
            </span>
        </a>

        <a class = 'services__container-additional'>
            Примеры
        </a>
   </div>
</section>