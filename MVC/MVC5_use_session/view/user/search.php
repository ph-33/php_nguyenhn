<form action="." id="form_search">
    <input type="text" name="search" value="<?php echo htmlentities(filter_input(INPUT_GET, 'search')); ?>">
    <button>Search</button>
</form>