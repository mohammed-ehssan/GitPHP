<?php include 'header.php';?>


<div class="container">

  <!-- Portfolio Item Heading -->
  <h4 class="my-4">username
    <small><a href="<?= $result->html_url?>">[<?= $result->login?>]</a></small>
  </h4>

  <!-- Portfolio Item Row -->
  <div class="row">

    <div class="col-md-5">
      <img class="img-fluid" src="<?= $result->avatar_url?>" alt="">
    </div>

    <div class="col-md-4">
      <h3 class="my-4">About</h3>
      <p>Bio :<?= $result->bio;?></p>
      <h3 class="my-3">more Details</h3>
      <ul>
        <li>Type : <?= $result->type?></li>
        <li>name : <?= $result->name?></li>
        <li>company : <?= $result->company?></li>
        <li>blog : <a href="<?= $result->blog?>"><?= $result->blog?></a></li>
        <li>location : <?= $result->location?></li>
        <li>email : <?= $result->email?></li>
        <li>hireable : <?= $result->hireable?></li>
        <li>public_repos : <?= $result->public_repos?></li>
        <li>public_gists : <?= $result->public_gists?></li>
        <li>followers : <?= $result->followers?></li>
        <li>following : <?= $result->following?></li>
        <li>created_at : <?= $result->created_at?></li>
        <li>updated_at : <?= $result->updated_at?></li>
      </ul>
    </div>

  </div>
  <!-- /.row -->

  <!-- Related Projects Row -->
  <h3 class="my-4">Some Followers</h3>

  <div class="row">

<?php
if(sizeof($followers) > 0){
  foreach ($followers as $value)
   {
}
?>

<div class="col-md-3 col-sm-6 mb-4">
  <a href="<?= $value->html_url?>">
        <img class="img-fluid" src="<?= $value->avatar_url?>" alt="">
      </a>
</div>

<?php }else{
  echo "<h4>That User Don't Have followers ! </h4>";
}?>


    <!-- <h3 class="my-4">Some Following</h3>

    <div class="row">

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>

      <div class="col-md-3 col-sm-6 mb-4">
        <a href="#">
              <img class="img-fluid" src="http://placehold.it/500x300" alt="">
            </a>
      </div>
  </div> -->
  <!-- /.row -->

</div>
<!-- /.container -->

<?php include 'footer.php'; ?>
