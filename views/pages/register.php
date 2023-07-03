<?php
use App\services\Page;
?>
<!DOCTYPE html>
<html lang="en" data-bs-theme=<?php echo "dark";?>>

<head>
<?php Page::part('head')?>
</head>

<body>
<?php Page::part('navbar')?>
<div class="container">
  <form class="mt-4">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
</body>

</html>