<li class="job-card">
    <div class="job-primary">
        <h1 class="job-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
        <div class="job-meta">
            <a class="meta-company"><?php the_category(); ?></a>
            <span class="meta-date"><?php the_date(); ?></span>
        </div>
    </div>
    <div class="job-logo">
        <div class="job-logo-box">
            <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else {
                echo '<img src="https://i.imgur.com/ZbILm3F.png" alt="default thumbnail">';
            }
            ?>

        </div>
    </div>
</li>