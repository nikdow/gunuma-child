<?php get_header(); ?>
<div id="main">
  <div class="post noborder">
    <h1>404 Error</h1>
    <div class="postcontent">
      <?php
        $page_requested = get_page_by_path($_SERVER['REQUEST_URI']);
        $page_status = get_post_status( $page_requested->ID );
        if( $page_status == 'private' && ! is_user_logged_in() ) {
          echo "<h2>This page requires a member login, please login at right to view this page</h2>";
        } else {
          echo "<p>Sorry the page you were looking for could not be retrieved.</p>";
        }
      ?>
    </div><!-- /Post Content -->
  </div><!-- /Post-->
  <div class="clear"></div>
</div><!-- /Main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
