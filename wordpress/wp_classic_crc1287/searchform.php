<!-- Search-Form-Template -->
<form class="search-menu" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="text" placeholder="..." name="s" value="<?php echo get_search_query(); ?>">
    <button type="submit"><i class="fa fa-search fa-lg"></i></button>
</form>