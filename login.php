<?php include_once "template/header.php"; ?>

<section class="main container">
    <div class="row min-vh-100 justify-content-center align-items-center">
        <div class="col-12 col-mg-6 col-lg-5">
            <div class="my-5">
                <div class="d-flex align-items-center justify-content-center mb-4">
                    <span class="bg-primary p-2 rounded d-flex justify-content-center align-items-center mr-2">
                        <i class="feather-shopping-bag text-white h4 mb-0"></i>
                    </span>
                    <span class="font-weight-bolder h4 mb-0 text-uppercase text-primary">My Shop</span>
                </div>
                <div class="border bg-white rounded-lg shadow-sm">
                    <div class="p-4">
                        <h2 class="text-center font-weight-normal">Sign In</h2>
                        <p class="text-center text-black-50 mb-4">
                            Don't have an account yet?
                            <a href="#">Sign up here</a>
                        </p>
                        <a href="#" class="btn btn-lg btn-outline-secondary w-100">
                            <i class="feather-log-in"></i>
                            Sign in with Google
                        </a>
                        <hr class="mb-5">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label>User Name</label>
                                <input type="text" name="username" class="form-control form-control-lg">
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" name="username" class="form-control form-control-lg">
                            </div>
                            <div class="mb-3 mb-5">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox">
                                    <label class="custom-control-label text-muted" for="termsCheckbox"> Remember me</label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-lg w-100 btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include_once "template/footer.php"; ?>
