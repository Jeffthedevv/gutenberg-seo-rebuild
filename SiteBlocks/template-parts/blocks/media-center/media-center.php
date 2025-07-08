<?php
if (isset($block['data']['preview_image'])) : /* rendering in inserter preview */
    echo '<img src="' . esc_url($block['data']['preview_image']) . '" style="width:100%; height:auto;">';
    echo '<img src="' . esc_url($block['data']['preview_image2']) . '" style="width:100%; height:auto;">';
else : /* rendering in editor body */
    $alignClass = array();
    switch (get_field('spacing')) {
        case 'v2':
            $alignClass[] = 'py-0';
            break;
        case 'v3':
            $alignClass[] = 'pb-0';
            break;
        case 'v4':
            $alignClass[] = 'pt-0';
            break;
        default:
            $alignClass[] = '';
            break;
    }
?>

<?php if ('v2' == get_field('style')) : ?>
    <section class="content-area indstyle2 <?php echo join(' ', $alignClass); ?>">
        <div class="inner-mobile d-md-none">
            <div class="container">
                <?php if ($heading = get_field('heading')) : ?>
                    <h3 class="h1 text_white text-center"><?php echo esc_html($heading); ?></h3>
                <?php endif; ?>
                <ul class="custom_arrows indArrows d-flex align-items-center justify-content-between">
                    <li class="ind_prev prev_btn">
                        <em class="fa-solid fa-left-long"></em>
                    </li>
                    <li class="slides-numbers" style="display: block;">
                        <span class="active">1</span> <span class="div">/</span> <span class="total"></span>
                    </li>
                    <li class="ind_next next_btn">
                        <em class="fa-solid fa-right-long"></em>
                    </li>
                </ul>
            </div>
        </div>
        <div class="industry-alt">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-11 mx-auto">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-lg-4 col-md-5">
                                <div class="industryNav">
                                    <?php if ($heading = get_field('heading')) : ?>
                                        <h3 class="h1 text_white"><?php echo esc_html($heading); ?></h3>
                                    <?php endif; ?>
                                    <?php if (have_rows('media-center')) : ?>
                                        <div class="indsutry-slide-nav">
                                            <?php while (have_rows('media-center')) : the_row(); ?>
                                                <?php if ($title = get_sub_field('title')) : ?>
                                                    <div class="slide">
                                                        <span class="d-block title"><?php echo esc_html($title); ?>
                                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arrow-long-white.svg'); ?>" alt="Arrow">
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                    <ul class="custom_arrows">
                                        <li class="ind_prev prev_btn">
                                            <!-- SVG content -->
                                        </li>
                                        <li class="ind_next next_btn">
                                            <!-- SVG content -->
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xxl-7 col-md-7">
                                <?php if (have_rows('media-center')) : ?>
                                    <div class="industries-slider">
                                        <?php while (have_rows('media-center')) : the_row(); ?>
                                            <div class="slide">
                                                <div class="content-text">
                                                    <?php if ($title = get_sub_field('title')) : ?>
                                                        <h3 class="d-block h1"><?php echo esc_html($title); ?></h3>
                                                    <?php endif; ?>
                                                    <div class="desc">
                                                        <?php the_sub_field('description'); ?>
                                                    </div>
                                                    <?php $button = get_sub_field('button'); ?>
                                                    <?php if ($button) : ?>
                                                        <div class="text-md-end text-center section_action">
                                                            <a class="cta-btn btn_default" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>"><?php echo esc_html($button['title']); ?></a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endwhile; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php else : ?>
    <section class="content-area industris-areas <?php echo join(' ', $alignClass); ?>">
        <div class="inner-mobile d-md-none">
            <div class="container">
                <?php if ($heading = get_field('heading')) : ?>
                    <h3 class="h1 text_white text-center"><?php echo esc_html($heading); ?></h3>
                <?php endif; ?>
                <ul class="custom_arrows indArrows d-flex align-items-center justify-content-between">
                    <li class="ind_prev prev_btn">
                        <em class="fa-solid fa-left-long"></em>
                    </li>
                    <li class="slides-numbers" style="display: block;">
                        <span class="active">1</span> <span class="div">/</span> <span class="total"></span>
                    </li>
                    <li class="ind_next next_btn">
                        <em class="fa-solid fa-right-long"></em>
                    </li>
                </ul>
            </div>
        </div>
        <?php if (have_rows('media-center')) : ?>
            <div class="industries-slider">
                <?php while (have_rows('media-center')) : the_row(); ?>
                    <div class="slide">
                        <?php $image = get_sub_field('image'); ?>
                        <?php if ($image) : ?>
                            <div class="industries-img">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </div>
                        <?php endif; ?>
                        <div class="container" style="position: relative; z-index: 1000;">
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row justify-content-end">
                                        <div class="col-md-7">
                                            <div class="text">
                                                <?php if ($title = get_sub_field('title')) : ?>
                                                    <span class="d-block title"><?php echo esc_html($title); ?></span>
                                                <?php endif; ?>
                                                <div class="desc">
                                                    <?php the_sub_field('description'); ?>
                                                    <?php $button = get_sub_field('button'); ?>
                                                    <?php if ($button) : ?>
                                                        <a class="cta-btn btn_default" href="<?php echo esc_url($button['url']); ?>" target="<?php echo esc_attr($button['target']); ?>"><?php echo esc_html($button['title']); ?></a>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="inner-industry d-none d-md-block">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-11 mx-auto">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="industryNav">
                                    <?php if ($heading = get_field('heading')) : ?>
                                        <h3 class="h1 text_white"><?php echo esc_html($heading); ?></h3>
                                    <?php endif; ?>
                                    <?php if (have_rows('media-center')) : ?>
                                        <div class="indsutry-slide-nav">
                                            <?php while (have_rows('media-center')) : the_row(); ?>
                                                <?php if ($title = get_sub_field('title')) : ?>
                                                    <div class="slide">
                                                        <span class="d-block title"><?php echo esc_html($title); ?>
                                                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/arrow-long-white.svg'); ?>" alt="Arrow">
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>
                                    <ul class="custom_arrows">
                                        <li class="ind_prev prev_btn">
<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" width="56" height="56">
	<defs>
		<image  width="56" height="56" id="img1" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAAXNSR0IB2cksfwAAAIdQTFRFAAAA8/Pz9PTy9PLx9fPy9PPx9fTy9PPy9PTx8/Py9PPy9evr9PTy9PPy39/f9PTz9PLy8/Px8/Pz+PDw////gICA9PTy9fPz8/Py9PLy8fHx8PDw9fTz8/Pz////8fHx9fPz9PTz9PT09PLy9PPy9PPz9PLy8/Px9PLy9PPy9PPy8/Px9PLyhMYKnAAAAC10Uk5TAD50osbi9P5Zq/8ahusI4aJtQiIMAqKY7I04I+FtAjWCzDDf75Cgf+Dw0IBgpE8olQAAAdNJREFUeJydl3l7gjAMxiOnHFNuAfFibnPH9/98I2kV0Ao17x/q0/a3pEnaZgAqLQzTsh3XdWzLNBbKJQotPccfyfGW81QQvvkKvYXBJLYKXRWGcsPVhJO2XLWO4iTN8jxLk7hYy0H7qcMbsaCs6vF4XZViZqPEthZNNrv949x+19CktX2cOwg3jwqM0KNw9/DAUTBPtQqSDp8ovHfkluwVT8xJowXZHHtL+6umMFRF+xyObLQ4SQ5iuyQ/5zkA8vaWzxVu8DS5v6v2GCH7WkMh/pmJeA5V49pQ/A6wPo96HADm0w1uBhstR8nZ5mYSU7/T5QB2WAb4A0NaahvsTJYysJ5eCnthMr3u29EPqRAG1unuJTy3r3AAeLIXYOgWTa+oQwwwu8+4H2zf21kw7hCTzkXSc2f/YxZM6IxgnaYD7nPe1RTrlYKa9dz5a0JyWUZhxULN5cjl2aUqJZflWK4jsP32f34nNAKHriL5N79H4eooOHqkCM44HdBe5vMo0nFXADoSBYAlF70GFlRy7CJnHyv+QWZfHezLin89si9k9hPAf3TYzxz/YeU/5fzmgd2u8BskfksG7CYQhm1n0bed0XzbyW90gd1aC4dZzbyQxr8P/xBCNu6s7e7FAAAAAElFTkSuQmCC"/>
	</defs>
	<style>
	</style>
	<use href="#img1" x="0" y="0"/>
</svg>
                                        </li>
                                        <li class="ind_next next_btn">
<svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 56" width="56" height="56">
	<defs>
		<image  width="56" height="56" id="img2" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADgAAAA4CAMAAACfWMssAAAAAXNSR0IB2cksfwAAAIRQTFRFAAAA8/Pz9PTy9PLx9fPy9PPx9fTy9PPy9PTx8/Py9PPy9evr9PTy9PPy39/f9PTz9PLy8/Px8/Pz+PDw////gICA9PTy9fPz8/Py9PLy8fHx8PDw9fTz8/Pz////8fHx9fPz9PTz9PT09PLy9PLy9PPy8/Px9PPx9PLy8/Px9PPy9PPy750dgwAAACx0Uk5TAD50osbi9P5Zq/8ahusI4aJtQiIMAqKY7I04I+FtAjWCzDDfYO9/z+CA0PD25gAWAAABz0lEQVR4nJ1X2YKCMAysnHKo3ALixV7u7v//35K0QllrqZkHxTZDpknaRsZUWFm243q+77mOba2UJgqsAy+cwQvWy6wo3oQKbOJIS9vGvooG8OOtRqQrrHZJmuVFWRZ5llY7Meg+FbznBnXTzsfbpuYzeyXt4OBkdzw9zp2OHU46h8e5M5d5UdCQeuFyzw88DOa1VZGE4CuG9x/zgP6qJ+6E0wp9ztXi+hodDdDgOuWRvRFPMKXYrlHnMo8xVDvmcwsLvGrXd8cJIuTeayiG12jiKaMF25g/R1CfFzMeY5BPPxoddkZCUWw3uoTUH015jB2hDOABQlobOxxc1iKwgVkKJ0Ayg+HbMw8pBwTWG84l2Lev8BiDnb1ilmnRTEgGisXs4TNdtO3f+ulHOlBs3BfZIvE9/JiYGe4RqNN8WZ7MzKFeMaiFGPnU4GtiFhhWKNRSjDw7UwVuwqyEcp0RvzX4CX/7GVGWql3jyBNSzYIj80RwzNLR36Q88nSYFcAMvACg5JLXiBWWHLnIyduKvpHJRwf5sKIfj+QDmXwF0C8d8jVHv1jpVzm9eSC3K/QGid6SMXITyOS2s5razmS57aQ3uozcWnPBpGaew+Dvwx+dZzaTfq021QAAAABJRU5ErkJggg=="/>
	</defs>
	<style>
	</style>
	<use id="Layer 2" href="#img2" x="0" y="0"/>
</svg>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php endif; ?>