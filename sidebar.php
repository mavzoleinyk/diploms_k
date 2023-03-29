<style>
body{
    background-color:#fff;
}
.ciy {
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.products.columns-3{
    display: block;
    display: flex;
	flex-wrap: wrap;
    justify-content: space-between;
}
</style>
<div class="catalog__sec-io-sidebar">
	<?php
	if ( function_exists('dynamic_sidebar') )
		dynamic_sidebar('homepage-sidebar');
	?>
</div>