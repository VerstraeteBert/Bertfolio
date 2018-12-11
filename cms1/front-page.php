<?php
/* Front Page Template */
    get_header();
?>

<section class="content-wrapper hero section" id="content">
    <div class="hero-avatar">
        <img id="avatar" src="<?php bloginfo('template_url') ?>/images/meMyselfAndI.jpg" alt="A beautiful picture of Bert, he's handsome, right?">
    </div>
    <div class="hero-about">
        <p>
            <strong>Hi I'm <a href="/about">Bert Verstraete</a>, a full stack developer and applied informatics student </strong> based in Belgium.
            With passion for delivering maintainable and scalable code and <a href="/work">building cool things</a> in general.
            Currently learning Golang and generally kicking ass. Dive into my mind and adventures on <a href="/blog">my blog</a>.
        </p>
        <p>
            Don't hesitate to <a href="/contact">contact me</a> if you have any questions about my work, want to collaborate on a project, or just chat.
            You can follow me on stuff too, if that's your thing.
        </p>
    </div>
</section>

<?php get_footer(); ?>