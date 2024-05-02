<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>Login Form - Afrizals Blog</title>
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js"
            crossorigin="anonymous"></script>
    </head>
    <body class="bg-pink">
        <div id="layoutAuthentication">
            <style>
                .bg-pink {
    background-color: pink;
}

            </style>
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    {{-- Error Alert --}}
                                    @if(session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        {{session('error')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    <div class="card-header">
                                        <style>
                                            .centered-link {
                                                display: flex;
                                                justify-content: center;
                                            }
                                        
                                            .centered-link a {
                                                text-decoration: none;
                                                color: inherit;
                                            }
                                        </style>
                                        
                                        <div class="centered-link">
                                            <a href="{{ url('/') }}">ASHOPX</a>
                                        </div>

                                    </div>
                                    <div class="card-body">
                                        <form action="{{route('simpanregister')}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="username" placeholder="Username">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-user"></span>
                                                    </div>
                                                </div>
                                            </div><div class="input-group mb-3">
                                                <input type="text" class="form-control" name="name" placeholder="Nama Anda">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-user"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="email" class="form-control" name="email" placeholder="Email">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-envelope"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="input-group mb-3">
                                                <input type="password" class="form-control" name="password" placeholder="Password">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        <span class="fas fa-lock"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-8">
                                                </div>
                                                <!-- /.col -->
                                                <div class="col-4">
                                                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-8">
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small">
                                            <a href="{{route('login')}}" class="text-center">Sudah punya akun</a>
                                            {{-- <a href="{{url('register')}}">Belum Punya Akun? Daftar!</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
 
        </div>
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"
            crossorigin="anonymous"></script>
        <script src="{{url('assets/js/scripts.js')}}"></script>
    </body>
</html>