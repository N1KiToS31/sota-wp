<section class="cases" id="cases">
    <div class="cases__container">
        <h1 class="cases__container-title">
            Кейсы
        </h1>
        <h2 class="cases__container-subtitle">
            <?php the_field('cases_subtitle'); ?>
        </h2>
        <div class="cases__container-example">
            <img src="<?php echo esc_url(get_field('cases_image-1')); ?>" alt="iamge" class="cases__container-example-img">
            <span class="cases__container-example-text"><?php the_field('cases_text-1'); ?></span>
        </div> 
        <div class="cases__container-example">
            <span class="cases__container-example-text"><?php the_field('cases_text-2'); ?></span>
            <img src="<?php echo esc_url(get_field('cases_image-2')); ?>" alt="iamge" class="cases__container-example-img">
        </div>
        <a href="<?php the_field('cases_btn-link'); ?>" class="cases__container-btn">
            <svg width="222" height="100" viewBox="0 0 193 100" fill="none" xmlns="http://www.w3.org/2000/svg" class="cases__container-btn-img">
                <path d="M191.758 25.3867V74.6123L96.1289 99.4824L0.5 74.6123V25.3867L96.1289 0.516602L191.758 25.3867Z" stroke="white"/>
            </svg>
            <span class="cases__container-btn-text"><?php the_field('cases_btn'); ?></span>
        </a>
        <a class="cases__container-about" href="#about">О команде</a>
    </div>
</section>