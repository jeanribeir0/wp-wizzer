<?php get_header(); ?>

    <main>
       <div class="container">
            <div class="owner">
                <div class="art">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Ilustr-Prop.svg" alt="Wizzer">
                    <h1>Proprietários</h1>
                </div>
                <div class="link-list">
                    <ul>
                        <?php
                            global $post;
                            $args = array( 'numberposts' => 7, 'cat' => 2);
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ) : setup_postdata($post); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endforeach; ?> 
                    </ul>
                </div>
            </div>
            <div class="tenant">
                <div class="art">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Ilusrt-Inqui.svg" alt="Wizzer">
                    <h1>Inquilino</h1>
                </div>
                <div class="link-list">
                    <ul>
                        <?php
                            global $post;
                            $args = array( 'numberposts' => 7, 'cat' => 3);
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ) : setup_postdata($post); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endforeach; ?> 
                    </ul>
                </div>
            </div>
            <div class="regions">
                <div class="art">
                    <img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/Ilustr-Reg.svg" alt="Wizzer">
                    <h1>Regiões Atendias</h1>
                </div>
                <div class="link-list">
                    <ul>
                        <?php
                            global $post;
                            $args = array( 'numberposts' => 7, 'cat' => 4);
                            $myposts = get_posts( $args );
                            foreach( $myposts as $post ) : setup_postdata($post); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php endforeach; ?> 
                    </ul>
                </div>
            </div>
       </div>
    </main>
<?php get_footer(); ?>
<style>
   
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

.art{
    margin: 90px 0;
    flex: 0 0 49%;
    border-right:1px solid rgba(0, 0, 0, 0.2);
}

.art img{
    margin-bottom: 30px;
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
    padding: 80px;
}


.link-list ul li{
    margin-bottom: 25px;
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

</style>