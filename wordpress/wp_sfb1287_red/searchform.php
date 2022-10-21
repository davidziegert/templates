<?php if (ICL_LANGUAGE_CODE == 'de') : ?>
	<!-- Search-Form-Template -->
	<form class="search-menu" method="get" action="<?php echo esc_url(home_url('/')); ?>">
		<input type="text" placeholder="Suche.." name="s" value="<?php echo get_search_query(); ?>">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
<?php endif; ?>

<?php if (ICL_LANGUAGE_CODE == 'en') : ?>
	<!-- Search-Form-Template -->
	<form class="search-menu" method="get" action="<?php echo esc_url(home_url('/')); ?>">
		<input type="text" placeholder="Search.." name="s" value="<?php echo get_search_query(); ?>">
		<button type="submit"><i class="fa fa-search"></i></button>
	</form>
<?php endif; ?>