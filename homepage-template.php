
  <?php /* Template Name: homepage */ 
get_header();

    
?>
  
  <section>
    <div class="separator"></div>
    <div class="main-title">
      <h2>All posts</h2>
    </div>
  </section>
  <main>
    
    <a class="post item" data-category="poetry">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.png" alt="Image 1">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Poetry</div>
    </a>
    <a class="post item" data-category="short-stories">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.png" alt="Image 2">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Short stories</div>
    </a>
    <a class="post item" data-category="photography">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.png" alt="Image 3">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Photography</div>
    </a>
    <a class="post item" data-category="opinion">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.png" alt="Image 1">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Opinion</div>
    </a>
    <a class="post item" data-category="short-stories">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img5.png" alt="Image 2">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Short stories</div>
    </a>
    <a class="post item"  data-category="photography">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img6.png" alt="Image 3">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Photography</div>
    </a>
    <a class="post item" data-category="opinion">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img7.png" alt="Image 1">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Opinion</div>
    </a>
    <a class="post item" data-category="short-stories">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img8.png" alt="Image 2">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Short stories</div>
    </a>
    <a class="post item" data-category="photography" >
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img9.png" alt="Image 3">
      <h2>Lorem ipsum dolor</h2>
      <div class="category">Photography</div>
    </a>
    <!-- Repeat the post div for as many posts as you have -->
  </main>
  
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>


  <?php
get_footer();
?>
</section>