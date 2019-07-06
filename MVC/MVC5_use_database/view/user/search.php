<form action="index.php" id="form_search">
    <input type="hidden" name="action" value ="search">
    <input type="text" name="search" value="<?php echo htmlentities(filter_input(INPUT_GET, 'search')); ?>" placeholder="Search for Name or Email">
    <button>Search</button>
</form>