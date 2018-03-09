<form role="search" method="get" action="<?php echo home_url('/');?>">
    <input type="search" placeholder="Search..." value="<?php echo get_search_query();?>" name="s" title="search">
    <button type="submit"><i class="fas fa-search"></i></button>
</form>