<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login WebGIS</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('login-page/css/styles.css') }}">
    </head>

    <body>
        <div class="form-body">
            <div class="row">
                <div class="form-holder">
                    <div class="form-content">
                        <div class="form-items">
                            <h3>Selamat Datang.</h3>
                            <p>Silahkan masuk</p>
                            <form class="requires-validation" novalidate>

                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                     <div class="valid-feedback">Email field is valid!</div>
                                     <div class="invalid-feedback">Email field cannot be blank!</div>
                                </div>
        
                               <div class="col-md-12">
                                  <input class="form-control" type="password" name="password" placeholder="Password" required>
                                   <div class="valid-feedback">Password field is valid!</div>
                                   <div class="invalid-feedback">Password field cannot be blank!</div>
                               </div>

                                <div class="form-button mt-12">
                                    <button id="submit" type="submit" class="btn btn-primary btn-block">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('landing-page/js/script.js') }}"></script>
    </body>
</html>

