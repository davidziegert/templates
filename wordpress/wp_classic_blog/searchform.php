<!-- Search-Form-Template -->
<form class="search-menu" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" placeholder="What you looking for ?" name="s" value="<?php echo get_search_query(); ?>">
    <button type="submit">Search</button>
</form>