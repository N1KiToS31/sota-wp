<section class = 'hero' id = 'hero'>
    <div class = 'hero__container'>

        <div class = 'hero__header'>
            <h1 class = 'hero__title'>
                <?php the_field('hero_title'); ?>
            </h1>

            <h2 class = 'hero__text'>
                <?php the_field('hero_text'); ?>
            </h2>

            <a class = 'hero__cta' href="<?php the_field('hero_button_link'); ?>">
                <svg class = 'hero__cta-svg' width="279" height="100" viewBox="0 0 279 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <foreignObject x="-15" y="-15" width="308.859" height="130"><div xmlns="http://www.w3.org/1999/xhtml" style="backdrop-filter:blur(7.5px);clip-path:url(#bgblur_0_4104_11533_clip_path);height:100%;width:100%"></div></foreignObject><path data-figma-bg-blur-radius="15" d="M278.359 25.418V74.5811L139.43 99.4912L0.5 74.5811V25.418L139.43 0.507812L278.359 25.418Z" fill="#14110F" stroke="white"/>
                    <defs>
                    <clipPath id="bgblur_0_4104_11533_clip_path" transform="translate(15 15)"><path d="M278.359 25.418V74.5811L139.43 99.4912L0.5 74.5811V25.418L139.43 0.507812L278.359 25.418Z"/>
                    </clipPath></defs>
                </svg>
                <span class = 'hero__cta-text'><?php the_field('hero_button_text'); ?></span>
            </a>
        </div>

        <footer class="footer">
            <div class="footer__container">
                <a class = 'footer__container-more'>
                Подробнее
                </a>
                <p class = 'footer__container-date'>&copy;<?php echo date('Y'); ?></p>
                <nav class = 'footer__container-socials'>
                <ul class = 'footer__container-socials-list'>
                    <li class = 'footer__container-socials-list-item'>
                    youtube
                    </li>
                    <li class = 'footer__container-socials-list-item'>
                    behance
                    </li>
                    <li class = 'footer__container-socials-list-item'>
                    vkontakte
                    </li>
                    <li class = 'footer__container-socials-list-item'>
                    pinterest
                    </li>
                </ul>
                </nav>
            </div>
        </footer>

    </div>
</section>