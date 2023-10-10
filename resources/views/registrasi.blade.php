<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi Page</title>
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-4 text-uppercase">CREATE AN ACCOUNT</h2>
                                <form action="/registrasi" method="post">
                                @csrf
                                <div class="form-outline mb-4">
                                    <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Username">
                                    <label for="name">Username</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="name@example.com">
                                    <label for="email">Your Email</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Password">
                                    <label for="password">Password</label>
                                </div>

                                <div class="form-outline mb-4">
                                    <input type="password" name="password_confirmation" class="form-control form-control-lg" id="password_confirmation" placeholder="Confirm Password">
                                    <label for="password_confirmation">Confirm Password</label>
                                </div>

                                <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>

                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            </div>

                            <div>
                                <p class="mb-0">Have already an account?<a href="/login" class="text-white-50 fw-bold">Sign In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
