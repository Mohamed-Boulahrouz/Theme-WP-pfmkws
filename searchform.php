
<form class="d-flex" role="search" action="<?= esc_url(home_url('/')); ?>">
    <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search" name="s" value="<?= get_search_query(); ?>">
    <button class="btn btn-outline" type="submit">Rechercher</button>
</form>