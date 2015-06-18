<article id="post">
    <header class="entry-header">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <div class="entry-meta">
          <?php get_template_part('template/entry', 'header'); ?>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <footer class="entry-footer">
        <?php get_template_part('templates/entry', 'footer'); ?>
    </footer>
</article>
