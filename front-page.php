<?php get_header(); ?>
<main>
    <div class="SectionHero">
        <h1>Hello World</h1>
    </div>
    <div class="Section2">
        <div class="container">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis consectetur amet velit blanditiis nemo culpa ab eaque consequatur expedita ipsam corrupti suscipit, placeat ratione, quia ex debitis modi quod minus!</p>
        </div>
    </div>
    <div class="Section3">
        <div class="container">
            <h2>
                Best Article 
            </h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nulla harum autem molestiae atque, quae velit accusamus, impedit ut perferendis voluptatibus eum vero deleniti aspernatur, obcaecati molestias consectetur magnam error ipsa?</p>
            <?= do_shortcode('[show_bestarticle]'); ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>