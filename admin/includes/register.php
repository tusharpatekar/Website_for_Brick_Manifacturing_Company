<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index.css">
    <script src="https://kit.fontawesome.com/58d848f840.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background-image: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));    }
</style>
<body>
    <form action="authcode.php" method="POST">
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
              <div class="card  text-black" style="border-radius: 1rem;height: 700px;">
                <div class="card-body p-5 text-center">
      
                  <div class="mb-md-5 mt-md-4 pb-5">
      
                    <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                    <p class="text-black-50 mb-5"></p>
      
                    <div class="form-outline form-black mb-4">
                        <label class="form-label" >Name</label>
                      <input type="text" id="name" name="name" placeholder="Enter your name" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline form-black mb-4">
                        <label class="form-label">email</label>
                      <input type="email" id="email" name="email" placeholder="Enter your email " class="form-control form-control-lg" />
                    </div>
      
                    <div class="form-outline form-black mb-4">
                        <label class="form-label" >password</label>
                      <input type="password" id="password" name="password" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline form-black mb-4">
                        <label class="form-label" >re-enter password</label>
                      <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg" />
                    </div>
                    <div class="form-outline form-black mb-4">
                        <label class="form-label" >moblie number</label>
                      <input type="tel" id="phone" name="phone" placeholder="only 10 digit are allowed" class="form-control form-control-lg" />
                    </div>
      
      
                   <button type="submit" name="register_btn" class="btn btn-outline-dark btn-lg px-5" t>Register</button>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </form>
</body>
</html>