<div class="comment-wrapper">
    <!-- Block comments.php from direct calling -->
    <?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
    <?php die('The "comments.php" file cannot be called directly.'); ?>
    <?php endif; ?>

    <h3>Comments</h3>

    <div class="comment-latest">
        <!-- Loop prints all Comments to this Post-ID -->
        <?php foreach ($comments as $comment) : ?>
        <!-- Comment-Template -->
        <div class="comment-tag" id="comment-<?php comment_ID() ?>">
            <div class="comment-info">
                <!-- Comment-Author-Name -->
                <span><?php comment_author_link() ?></span>
                <!-- Comment-Date | Comment-Time -->
                <span><?php comment_date('j. F Y') ?> | <?php comment_time('H:i') ?></span>
            </div>
            <div class="comment-text">
                <!-- Comment-Text -->
                <span><?php comment_text() ?></span>
            </div>
            <!-- If no Comment found -->
            <?php if ($comment->comment_approved == '0') : ?>
            <span class="comment-status">Warning: Comment-Status not approved!</span>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>

    <h3>Write a comment!</h3>

    <!-- Comment-Form-Template -->
    <form class="comment-form" action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post">
        <label for="author">Author</label>
        <!-- Comment-Author-Name -->
        <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="20" tabindex="1">
        <label for="email">E-Mail</label>
        <!-- Comment-Author-EMail (not public) -->
        <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="20" tabindex="2">
        <label for="url">URL</label>
        <!-- Comment-Author-URL (not public) -->
        <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="20" tabindex="3">
        <label for="comment">Comment</label>
        <!-- Comment-Text -->
        <textarea name="comment" id="comment" rows="10" tabindex="4"></textarea>
        <input name="submit" type="submit" id="submit" value="Post" tabindex="5">
        <input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>">
        <?php do_action('comment_form', $post->ID); ?>
    </form>
</div>