<?php get_header(); ?>
   
   <main>
      <div class="container">
        <div class="result ">
         <h1>Resultados de "<?php
               the_search_query();
            ?>"</h1>
        </div>
        <div class="link-list">
                     <?php
                      global $post; 
                      $args = array( 'numberposts' => 20, 's' => $s, 'order' => 'DESC', 'orderby' => 'title' );
                      $myposts = get_posts( $args );
                      $h = count($myposts);
                      if( $h == 0):
                          echo "<h3>Não resultado há resultados para sua busca</h3>";
                      else: 
                     
                      foreach( $myposts as $post ) : setup_postdata($post); ?>
                      
                        <ul>
                              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                              
                        </ul>
                        
                    <?php endforeach; endif;?> 
                       
                </div>
      </div>
     
   </main>
<?php get_footer(); ?>
<style>

.container h3{
   color: #353d40;
   margin: 20px 0;
   font-size: 20px;
}

 
.search {
  padding: 50px;
  display: flex;
  justify-content: center;
  background-color: #f9f9f9;
}

.search .wrap {
  background-color: #fff;
  height: 85px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.25);
  border-radius: 3px;
  padding-left: 30px;
}

.search .wrap input {
  width: 460px;
  font-size: 1em;
  color: #353d40;
}

.search .wrap input::placeholder {
  font-family: Roboto;
  font-style: normal;
  font-weight: 300;
  font-size: 1em;
  line-height: 21px;
  color: #7c979d;
}

.search .wrap button {
  cursor: pointer;
  width: 30px;
}


main {
  display: grid;
  grid-template-columns: 1fr 1140px 1fr;
}


main .container {
  grid-column-start: 2;
  grid-column-end: 3;
  display: flex;
  flex-direction: column;
}

main h1 {
    font-family: Roboto;
    font-style: normal;
    font-weight: 900;
    font-size: 42px;
    line-height: 140%;
    /* identical to box height, or 59px */
    display: flex;
    align-items: center;
    color: #353D40;
    width: fit-content;
}


main .container .owner, .tenant, .regions{
    display: flex;
}

.result{
    margin: 30px 0;
}



.link-list{
    flex: 0 0 49%;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.link-list ul{
    display: flex;
    flex-direction: column;
    list-style-type: none;
}


.link-list ul li:hover {
  transform: translate(25px, 0px);
  color: #0c3f9b;
  transition: all 300ms ease-in;
}

.link-list ul li a{
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #055EFF;
    text-decoration: none;
}


.link-list ul li {
   margin-bottom: 30px;
}

</style>
