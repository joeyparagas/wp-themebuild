<!--  Template for a full page design 
      Using page.php template to create this Custom Template
      Add php comments (File Header) below to show WP is a Custom Template
      WP will look for the string "Template_Name:" and use that name
      You can even put it in html comment like this one
-->
<?php 
/* 
*   TEmplate Name: Experimental
*/ 

get_header(); 


?>

<!-- Method 2: Use single_post_title() to output the title -->
<section id="page-title">
    <div class="container clearfix">
      <h1>Experimental Code</h1>
    </div>
  </section><!-- #page-title end -->

  

<!-- Content
============================================= -->
<section id="content">

  <div class="content-wrap">
 
    <div class="container clearfix">

        <!-- Testing out Login Tags -->
        <h2>List of Login Tags</h2>
        <?php 
        echo "echo wp_login_url(); = ";
        echo wp_login_url();
        echo nl2br("\n");
        echo nl2br("\n");

        echo "echo wp_logout_url() ; = ";
        echo wp_logout_url();
        echo nl2br("\n");
        echo nl2br("\n");
        
        echo "wp_loginout(); = ";
        wp_loginout();
        echo nl2br("\n");
        echo nl2br("\n");

        echo "echo wp_login_form(); = ";
        echo wp_login_form();
        echo nl2br("\n");
        echo nl2br("\n");

        echo "echo wp_lostpassword_url(); = ";
        echo wp_lostpassword_url();
        ?><br><a href="<?php echo esc_url( wp_lostpassword_url() ); ?>" >Lost Password</a><br><?php
        echo nl2br("\n");

        echo "wp_register(); = ";
        wp_register();
        echo nl2br("\n");
        echo nl2br("\n");

        echo "echo is_user_logged_in(); = ";
        echo is_user_logged_in();
        echo nl2br("\n");
        echo "(outputs 1 if true, nothing if false)"; 
        echo nl2br("\n");
        echo nl2br("\n");

        echo "bloginfo('admin_email'); = ";
        bloginfo('admin_email');
        echo nl2br("\n");
        echo nl2br("\n");

        echo "echo get_bloginfo('admin_email'); = ";
        echo get_bloginfo('admin_email');
        echo nl2br("\n");
        echo "Used if output is set to a variable instance like:" .  
            nl2br("\n") . "\$admin_email = get_bloginfo('admin_email'); ";        
        echo nl2br("\n");
        echo nl2br("\n");

        ?>

        <h2>Archive Tags</h2>
        <?php 
        
        echo "single_post_title(); = ";
        single_post_title();
        echo nl2br("\n");
        echo nl2br("\n");

        echo "wp_get_archives(); = ";
        echo wp_get_archives();
        echo nl2br("\n");
        echo nl2br("\n");

        ?>
      
        <h2>Calendar Tags</h2>

        <?php 
        
        echo "get_calendar(); = ";
        echo get_calendar();
        echo nl2br("\n");
        echo nl2br("\n");
        
        ?>

        <h2>Link Tags: Search</h2>
        <?php 
        
        echo "echo get_search_link( 'term searched' ); = ";
        echo get_search_link( 'term searched' );
        echo '<br>';
        echo "the_search_query(); = term searched";
        echo '<br>';
        echo "Note: this will only output if the function is called in the search.php page";
        the_search_query();
        
        
        ?>
    </div>

  </div>

</section><!-- #content end -->

<?php get_footer(); ?>