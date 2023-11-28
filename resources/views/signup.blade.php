<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>
        <title>Sign up</title>
        <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap"><link rel="stylesheet" href="assets/css/aos.min.css"><link rel="stylesheet" href="assets/css/animate.min.css">
    
    </head>
    <body>
       
      <div
            class="page-holder bg-cover"
            style="
            background-image: url('https://images.unsplash.com/photo-1587019158091-1a103c5dd17f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80');
            height: 900px; ">
        <section class="py-5">
            <div class="container py-5">
                <div class="row bounce animated mb-4 mb-lg-5">
                    <div class="col-md-8 col-xl-6 text-center mx-auto">
                        <p class="fw-bold text-success mb-2" data-aos="fade-up" style="font-size: 23px;">Sign up</p>
                        <h2 class="fw-bold" data-aos="fade-up">Welcome</h2>
                    </div>
                </div>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-6 col-xl-4">
                        <div class="card" style="background-color: rgba(208, 194, 194, 0.258)">
                            <div class="card-body text-center d-flex flex-column align-items-center">
                                <div class="bs-icon-xl bs-icon-circle bs-icon-primary shadow bs-icon my-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" data-bss-hover-animate="swing">
                                        <!--! Font Awesome Free 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free (Icons: CC BY 4.0, Fonts: SIL OFL 1.1, Code: MIT License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M192 93.68C192 59.53 221 0 256 0C292 0 320 59.53 320 93.68V160L497.8 278.5C506.7 284.4 512 294.4 512 305.1V361.8C512 372.7 501.3 380.4 490.9 376.1L320 319.1V400L377.6 443.2C381.6 446.2 384 450.1 384 456V497.1C384 505.7 377.7 512 369.1 512C368.7 512 367.4 511.8 366.1 511.5L256 480L145.9 511.5C144.6 511.8 143.3 512 142 512C134.3 512 128 505.7 128 497.1V456C128 450.1 130.4 446.2 134.4 443.2L192 400V319.1L21.06 376.1C10.7 380.4 0 372.7 0 361.8V305.1C0 294.4 5.347 284.4 14.25 278.5L192 160L192 93.68z">
                                            </path>
                                        </svg>
                                    </div>

                                <form action="{{ route('register') }}" method="post">
                                    
                                     @if ($errors->any())
                                        <div class="alert alert-danger" role="alert">
                                           
                                                @foreach ($errors->all() as $error)
                                                    {{ $error }}
                                                 @endforeach
                                            
                                        </div>
                                    @endif
                                 @csrf
                                    <div class="mb-3">
                                        <input class="form-control" type="email" name="email" id="email" placeholder="Email" value="{{ old('email')}}" required>
                         
                                            {{-- <span class="text-danger">
                                                 @error('email')
                                                    <div>{{ $message }}</div>
                                                @enderror
                                            </span> --}}

                                        </div>

                                    <div class="mb-3">
                                            <input class="form-control" type="text" name="password" id="password" placeholder="Password" required >
                                
                                            {{-- <span class="text-danger">
                                                    @error('password')
                                                        <div>{{ $message }}</div>
                                                    @enderror
                                            </span> --}}
                                            
                                        </div>
                                    <div class="mb-3">
                                    <input class="form-control" type="text" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" required >
        
                                    
                                </div>
                                    <div class="mb-3">
                                            <button class="btn btn-primary shadow d-block w-100" type="submit">Sign up</button>
                                        </div>
                                        <p class="text" style="text-color: rgb(18, 17, 17)">Already have an account?&nbsp;<a href="/login" style="color: rgb(30, 27, 27)">Log in</a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <script src="assets/bootstrap/js/bootstrap.min.js">
            <script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>
            </script><script src="assets/js/aos.min.js">
            </script><script src="assets/js/bs-init.js">
            </script><script src="assets/js/bold-and-dark.js">
            </script>
      </div>
            </body>

            </html>