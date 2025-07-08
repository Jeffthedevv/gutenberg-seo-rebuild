<!DOCTYPE html>

<?php if (is_user_logged_in()) { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" class="wpadmin-logged-in">
<?php } else { ?>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<?php } ?>

<?php include('header.php'); ?>
  <body itemscope itemtype="https://schema.org/WebPage">

    <?php $blog_page_id = get_option('page_for_posts');
      if ( is_home() && ! is_front_page() ) :  
        include('blog.php'); ?>
    <?php endif; ?>
    

    <?php include('footer.php'); ?>

  </body>

</html>