<?php require APPROOT . '/views/inc/header.php'; ?>
<a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"style="color:#212F3C;background-color:#FAD7A0"><i class="fa fa-backward"></i> Back</a>
<br>
<h1><?php echo $data['post']->title; ?></h1>
<div class="p-2 mb-3" style=" color:#773214;font-size: 13px; color:#7B241C;background-color:#F0B27A">
        Written by <?php echo $data['user']->username; ?> on <?php echo $data['post']->created_at; ?>
</div>
<p "><?php echo $data['post']->body; ?></p>

<?php if($data['post']->user_id == $_SESSION['user_id']) : ?>
  <hr>
  <a href="<?php echo URLROOT; ?>/posts/edit/<?php echo $data['post']->id; ?>" class="btn btn-light text-light"style="color:#212F3C;background-color:#538DCB">Edit</a>

  <form class="pull-right" action="<?php echo URLROOT; ?>/posts/delete/<?php echo $data['post']->id; ?>" method="post">
    <input type="submit" value="Delete" class="btn btn-danger">
  </form>
<?php endif; ?>

<?php require APPROOT . '/views/inc/footer.php'; ?>