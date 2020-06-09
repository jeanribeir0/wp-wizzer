<section>
    <form role="search" method="get" id="searchform"
    class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div id="searchcamp" >
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Busque termos como 'pagamento'"/>
        <button type="submit" id="searchsubmit"
            value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/lupa.svg" alt="Wizzer"></button>
        
    </div>
</form>
</section>
<style>
#searchcamp{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
#searchcamp button{
    padding: 30px;
    background: transparent;
    margin-right: 30px;
}
</style>