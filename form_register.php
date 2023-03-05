<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form class="user" action="">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" />
                                                        <label for="inputFirstName">First name</label>
                                                        <div class="input-firstName-message"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Last name</label>
                                                        <div class="input-lastName-message"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                                <div class="input-email-message"></div>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" />
                                                        <label for="inputPassword">Password</label>
                                                        <div class="input-password-message"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                        <div class="input-repassword-message"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button id="btn-login" type="button" class="btn btn-primary btn-block">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2022</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>

    <script src="public/js/sweetalert.min.js"></script>
    <script src="public/js/jquery.min.js"></script>
    <script>
    function generateMessage(text) {
        return `<p>${text}</p>`;
    }

    $('#btn-login').click(function() {
        $(".input-firstName-message,.input-lastName-message,.input-email-message, .input-password-message, .input-repassword-message").empty();
        const _this = $(this);
        const form_data = new FormData();
        const firstName = $('#inputFirstName').val();
        const lastName = $('#inputLastName').val();
        const email = $('#inputEmail').val();
        const password = $('#inputPassword').val();
        const repassword = $('#inputPasswordConfirm').val();
        var emailFomat = /\S+@\S+\.\S+/;
        if (!firstName) {
            $(".input-firstName-message").append(generateMessage('This first name field is required'));
        }
        if (!lastName) {
            $(".input-lastName-message").append(generateMessage('This last name field is required'));
        }
        if (!emailFomat.test(email))
        {
            $(".input-email-message").append(generateMessage('Email is invalid'));
        }
        if (!email) {
            $(".input-email-message").append(generateMessage('This email field is required'));
        }
        if (!password) {
            $(".input-password-message").append(generateMessage('This password field is required'));
        }
        if (!repassword) {
            $(".input-repassword-message").append(generateMessage('This repassword field is required'));
        return;
        }
        if (password != repassword) {
            $(".input-repassword-message").append(generateMessage('This repassword not match'));
        return;
        }
        if (!firstName || !lastName || !email || !password || !repassword) {
            return;
        }
        form_data.append("firstName", firstName.trim());
        form_data.append("lastName", lastName.trim());
        form_data.append("email", email.trim());
        form_data.append("password", password.trim());
        $.ajax({
        type: "POST",
        url: "register.php",
        data: form_data,
        contentType: false,
        processData: false,
        success: function(response) {
            if (response.success) {
            swal({
                title: response.complete,
                text: "Register success",
                icon: "success"
                })
                setTimeout(function () {
                    window.location.href = 'index.php';
                },2000);
            } else {
            swal({
                title: "Fail!",
                text: response.message || "Error",
                icon: "error",
                buttons: false,
                timer: 2000,
            })
            }
        }
        })
    })
    </script>
    
</html>
