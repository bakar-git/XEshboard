<!-- Header -->
<?php include "./common/page_header.php" ?>
<!-- Body -->
<div class="p-4 overflow-auto h-100" id="content-in">
    <div class="mx-auto p-2 shadow border-5 border-top border-white rounded-3 text-black-50" style="max-width: 400px;" id="section-login">
        <!-- Tabs -->
        <ul class="nav nav-pills nav-justified">
            <li class="nav-item">
                <a class="nav-link active" data-bs-toggle="tab" href="#tab-login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-register">Register</a>
            </li>
        </ul>
        <!-- Tabs -->

        <!-- Content -->
        <div class="tab-content bg-light py-3 px-4">
            <form class="tab-pane fade show active" id="tab-login">
                <div class="text-center mb-1">
                    <p>Sign in with:</p>
                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

                <p class="text-center mb-0 fw-bold">OR</p>

                <!-- Email input -->
                <div class="mb-2">
                    <label for="user_email" class="form-label m-0">Email address</label>
                    <input type="email" class="form-control" id="user_email" placeholder="name@example.com">
                </div>

                <!-- Password input -->
                <div class="mb-2">
                    <label for="user_pwd" class="form-label m-0">Password</label>
                    <input type="password" class="form-control" id="user_pwd" placeholder="password">
                </div>

                <!-- 2 column grid layout -->
                <div class="row mb-3">
                    <div class="col-6 d-flex">
                        <a href="#" class="btn-link">Forgot Password</a>
                    </div>

                    <div class="col-6 d-flex align-items-center justify-content-end">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Sign in</button>
            </form>
            <form class="tab-pane fade" id="tab-register">
                <div class="text-center mb-1">
                    <p>Sign up with:</p>
                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-outline-light text-primary rounded-circle mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

                <p class="text-center mb-0 fw-bold">OR</p>

                <!-- Email input -->
                <div class="mb-2">
                    <label for="user_email" class="form-label m-0">Email address</label>
                    <input type="email" class="form-control" id="user_email" placeholder="name@example.com">
                </div>

                <!-- Password input -->
                <div class="mb-3">
                    <label for="user_pwd" class="form-label m-0">Password</label>
                    <input type="password" class="form-control" id="user_pwd" placeholder="password">
                </div>

                <button type="submit" class="btn btn-primary w-100">Register</button>
            </form>
        </div>
        <!-- Content -->
    </div>
</div>