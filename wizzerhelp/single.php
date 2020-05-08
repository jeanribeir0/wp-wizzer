<?php get_header(); ?>
<main>
  <div class="wrap-post">
    <sidebar class="container-single">
      <div class="owner">
        <div class="cat-title">
          <h1>Proprietários</h1>
        </div>
        <div class="link-list">
          <ul>
            <?php
            global $post;
            $args = array('numberposts' => 7, 'cat' => 2);
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="tenant">
        <div class="cat-title">
          <h1>Inquilinos</h1>
        </div>
        <div class="link-list">
          <ul>
            <?php
            global $post;
            $args = array('numberposts' => 7, 'cat' => 3);
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <div class="regions">
        <div class="cat-title">
          <h1>Regiões Atendidas</h1>
        </div>
        <div class="link-list">
          <ul>
            <?php
            global $post;
            $args = array('numberposts' => 7, 'cat' => 4);
            $myposts = get_posts($args);
            foreach ($myposts as $post) : setup_postdata($post); ?>
              <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </sidebar>
    <div class="post-content">
      <h1><?php single_post_title(); ?></h1>
      <p><?php if (have_posts()) : while (have_posts()) : the_post();
              the_content();
            endwhile;
          else : ?>
          <p>Desculpe, nenhum post encontrado.</p>
        <?php endif; ?></p>
    </div>
  </div>
</main>
<?php get_footer(); ?>

<style>
  main {
    display: grid;
    grid-template-columns: 1fr 1140px 1fr;
  }

  main .container-single {
    grid-column-start: 2;
    grid-column-end: 3;
    display: flex;
    flex-direction: column;
    margin-top: 6%;
  }

  main .post-content {
    grid-column-start: 2;
    grid-column-end: 3;
    display: flex;
    flex-direction: column;
    margin-top: 6%;
    width: 80%;
  }

  main .cat-title h1 {
    font-size: 24px;
    font-weight: 900;
    margin-bottom: 30px;
  }

  main .wrap-post {
    grid-column-start: 2;
    grid-column-end: 3;
    display: flex;
  }

  main .tenant,
  .regions {
    flex-direction: column;
  }

  main .tenant,
  .owner,
  .regions {
    width: 80%;
    border-right: 1px solid gray;
  }

  main .post-content h1 {
    font-size: 2em;
    color: #055eff;
    font-weight: 600;
    margin-bottom: 24px;
  }

  main .post-content h3 {
    font-size: 1.125em;
    padding: 24px 0;
    font-weight: 300;
    color: #7C979D;
  }

  main .post-content p {
    line-height: 140%;
    font-size: 1em;
    color: #353d40;
  }

  .container h3 {
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

  .link-list {
    flex: 0 0 49%;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .link-list ul {
    display: flex;
    flex-direction: column;
    list-style-type: none;
  }


  .link-list ul li {
    margin-bottom: 25px;
  }

  .link-list ul li:hover {
    transform: translate(25px, 0px);
    color: #0c3f9b;
    transition: all 300ms ease-in;
  }

  .link-list ul li a {
    font-family: Roboto;
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 21px;
    color: #055EFF;
    text-decoration: none;
  }
</style>