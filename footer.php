<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TrueWorld
 */

?>

<footer>
    <div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png" alt="Logo" width="26px" height="71px">
        <div>
          <p>Luke Ntare</p>
          <p>Copyright 2023.
            All rights reserved</p>
        </div>
      </div>
      <div class="column">
        <p>Subscribe to our newsletter</p>
        <form>
          <input type="email" placeholder="Your email">
          <button type="submit">Subscribe</button>
        </form>
      </div>
      <div class="column">
        <p>Connect with us</p>
        <ul>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/facebook.svg" alt="Facebook" width="36.99px" height="37px"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Twitter.svg" alt="Twitter" width="36.99px" height="37px"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Instagram.svg" alt="Instagram" width="36.99px" height="37px"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Whatsapp.svg" alt="Whatsapp" width="36.99px" height="37px"></a></li>
          <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/Linkedin.svg" alt="Linkedin" width="36.99px" height="37px"></a></li>
        </ul>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>

</body>
</html>
