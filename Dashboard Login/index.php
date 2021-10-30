<div class="page">
<?php
require_once 'components/header.php';
require_once 'components/nav_login.php';
require_once 'components/footer.php';
?>
<div class="container">
  <div class="row row-cols-2">
  <div class="col col-6 col-sm-12 col-md-12 col-lg-12 col-xl-6 ">
  <div class="container">
  <div class="card my-5 mx-auto" style="width: 30rem;">
    <div class="card-body">
      <h1 class="card-title display-6 my-3 text-center">Login</h1>
      <div class="form">
          <input type="text" name="text" autocomplete="off" required />
            <label for="text" class="label-name">
              <span class="content-name">
                Account
              </span>
           </label>
      </div>
      <div class="form my-2">
        <input type="password" name="text" autocomplete="off" required />
        <label for="text" class="label-name">
          <span class="content-name">
            Password
          </span>
        </label>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a href="#" class="link-secondary">Forgot your password?</a>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <button class="btn btn-secondary my-5 px-4 py-2" type="button">Log in</button>
      </div>
    </div>
    <div class="card-footer text-light text-center text-mute">Need Help? Click <a class="here-link" href="#">HERE</a></div>
  </div>
      </div>
    </div>
    <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-6">
      <div class="container">
        <div class="my-5 py-5">
        <img class="img-fluid w-50 h-50" src="assets/TOEDEV.png" alt="">
        </div> 
    </div>
    </div>
  </div>
</div>
</div>
<div id="loading"></div>


