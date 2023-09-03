<!-- Log In Modal Start -->
<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-dialog-centered modal-login">

        <!-- Modal Wrapper Start -->
        <div class="modal-wrapper">
            <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

            <!-- Modal Content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Login</h5>
                    <p class="modal-description">Don't have an account yet? <button data-bs-toggle="modal"
                          data-bs-target="#registerModal">Sign up for free</button></p>
                </div>
                <div class="modal-body">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="modal-form">
                            <label class="form-label">User email</label>
                            <input type="text" class="form-control" name="email" placeholder="Your user email">
                        </div>
                        <div class="modal-form">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="modal-form d-flex justify-content-between flex-wrap gap-2">
                            <div class="form-check">
                                <input type="checkbox" id="rememberme">
                                <label for="rememberme">Remember me</label>
                            </div>
                            <div class="text-end">
                                <a class="modal-form__link" href="#">Forgot your password?</a>
                            </div>
                        </div>
                        <div class="modal-form">
                            <button type="submit" class="btn btn-primary btn-hover-secondary w-100">Log In</button>
                        </div>
                    </form>

                    <div class="modal-social-option">
                        <p>or Log-in with</p>

                        <ul class="modal-social-btn">
                            <li><a href="#" class="btn facebook"><i class="fab fa-facebook-square"></i>
                                    Gacebook</a></li>
                            <li><a href="#" class="btn google"><i class="fab fa-google"></i> Google</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
</div>
<!-- Log In Modal End -->

<!-- Log In Modal Start -->
<div class="modal fade" id="registerModal">
    <div class="modal-dialog modal-dialog-centered modal-register">

        <!-- Modal Wrapper Start -->
        <div class="modal-wrapper">
            <button class="modal-close" data-bs-dismiss="modal"><i class="fas fa-times"></i></button>

            <!-- Modal Content Start -->
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Sign Up</h5>
                    <p class="modal-description">Already have an account? <button data-bs-toggle="modal"
                          data-bs-target="#loginModal">Log in</button></p>
                </div>
                <div class="modal-body">

                    <form action="#">
                        <div class="row gy-5">
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Username</label>
                                    <input type="text" class="form-control" placeholder="username">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" placeholder="Your Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Password</label>
                                    <input type="password" class="form-control" placeholder="Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="modal-form">
                                    <label class="form-label">Re-Enter Password</label>
                                    <input type="password" class="form-control" placeholder="Re-Enter Password">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form form-check">
                                    <input type="checkbox" id="privacy">
                                    <label for="privacy">Accept the Terms and Privacy Policy</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="modal-form">
                                    <button class="btn btn-primary btn-hover-secondary w-100">Register</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <!-- Modal Content End -->

        </div>
        <!-- Modal Wrapper End -->

    </div>
</div>
<!-- Log In Modal End -->