<form class="search-bar" role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <label>
        <input type="text" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit">
        <span class="recherche__icone">🔍</span>
    </button>
</form>