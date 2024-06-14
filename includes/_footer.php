
<footer>

  <div class="source">
    Missing something?
    <?php
      if(isset($EDIT_THIS_PAGE_LINK))
        $editurl = $EDIT_THIS_PAGE_LINK;
      else
        $editurl = 'https://github.com/aaronpk/oauth.net/blob/main/public' . $_SERVER['REQUEST_URI'] . 'index.php';
    ?>
    <a href="<?= $editurl ?>">Edit this page</a>.
  </div>

  <div class="container">
    <?php if(file_exists(__DIR__.'/.supported.php')): ?>
      <?php include(__DIR__.'/.supported.php'); ?>
    <?php endif ?>
  </div>

</footer>


<script src="/stylesheets/jquery-3.2.1.slim.min.js"></script>
<script src="/stylesheets/bootstrap/js/bootstrap.min.js"></script>

<script>
function ea(response) {
  if(response.html) {
    $("#ea").html(response.html);
  }
};
$(function(){
  if(window.fathom && $(".featured-banner").data("view-code")) {
    window.fathom.trackGoal($(".featured-banner").data("view-code"), 0);
  }
});
</script>
<script async src="/thanks.php"></script>
<?php 
if(isset($FOOTERSCRIPTS)) {
  echo $FOOTERSCRIPTS;
}
?>

</body>
</html>
