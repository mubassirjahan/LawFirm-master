<?php require APPROOT . '/views/inc/header.php'; ?>
  <?php flash('post_message'); ?>
  <div class="row mb-3">
    <div class="col-md-6"style="color:#7B241C">
      <h1>Posts</h1>
    </div>
    <div class="col-md-6">
      <a href="<?php echo URLROOT; ?>/posts/add" class="btn btn-primary pull-right">
        <i class="fa fa-pencil "></i> Add Post
      </a>
    </div>
  </div>
  <?php foreach($data['posts'] as $post) : ?>
    <div class="card card-body mb-3"style="color:#212F3C;background-color:#FAD7A0">
      <h4 class="card-title"style=" font-size: 30px;"><?php echo $post->title; ?></h4>
      <div class="p-2 mb-3" style=" color:#773214;font-size: 13px; color:#7B241C;background-color:#F0B27A">
        Written by <?php echo $post->username; ?> on <?php echo $post->postCreated; ?>
      </div>
      <p class="card-text"  style="font-size: 20px;" ><?php echo $post->body; ?></p>
      <a href="<?php echo URLROOT; ?>/posts/show/<?php echo $post->postId; ?>" class="btn btn-dark test-light"style="background-color:#7B241C;font-size: 15px;">More</a>
    </div>
  <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>