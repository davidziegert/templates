<div class="comment-wrapper">
    <h3>Comments</h3>

    <!-- Block comments.php from direct calling -->
    <?php
    if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) :
        die('The "comments.php" file cannot be called directly.');
    endif;
    ?>

    <div class="comment-latest">
        <!-- Loop prints all Comments to this Post-ID -->
        <?php foreach ($comments as $comment) : ?>
        <!-- Comment-Template -->
        <div class="comment-tag" id="comment-<?php comment_ID(); ?>">
            <div class="comment-info">
                <!-- Comment-Date | Comment-Time -->
                <span><?php comment_date('j. F Y'); ?></span>
                <!-- Comment-Time -->
                <span><?php comment_time('H:i'); ?></span>
                <!-- Comment-Author -->
                <span><?php comment_author_link(); ?></span>
            </div>
            <div class="comment-text">
                <span><?php comment_text(); ?></span>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <h3>Write a comment!</h3>
    <!-- Comment-Form-Template -->
    <form class="comment-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
        <!-- Comment-Author-Name -->
        <label for="author">Author</label>
        <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="20" tabindex="1">
        <!-- Comment-Author-EMail -->
        <label for="email">E-Mail</label>
        <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="20" tabindex="2">
        <!-- Comment-Author-URL -->
        <label for="url">URL</label>
        <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="20" tabindex="3">
        <!-- Comment-Text -->
        <label for="comment">Comment</label>
        <textarea name="comment" id="comment" rows="10" tabindex="4"></textarea>
        <input name="submit" type="submit" id="submit" value="Post" tabindex="5">
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
        <?php do_action('comment_form', $post->ID); ?>
    </form>
</div>