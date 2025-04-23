{{--


 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no" />
     <link rel="shortcut icon" href="/backend/images/app-logo.png" height="10" width="20"
         type="image/x-icon" />
     <title>The Real World University Platform - Register Form</title>
     <meta name="description" content="Register Form " />
     <meta name="author" content="harnishdesign.net" />

     <!-- Web Fonts
========================= -->
     <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900"
         type="text/css" />

     <!-- Stylesheet
========================= -->
     <link rel="stylesheet" type="text/css" href="/fe/css/bootstrap.min.css" />
     <link rel="stylesheet" type="text/css" href="/fe/css/all.min.css" />
     <link rel="stylesheet" type="text/css" href="/fe/css/stylesheet.css" />
     <!-- Colors Css -->
     <link id="color-switcher" type="/style/text/css" rel="stylesheet" href="#" />
 </head>

 <body>


     <div id="main-wrapper" class="oxyy-login-register">
         <div class="container-fluid px-0">
             <div class="row g-0 min-vh-100">
                 <!-- Welcome Text
      ========================= -->
                 <div class="col-md-4">
                     <div class="hero-wrap h-100">
                         <div class="hero-mask opacity-5 bg-dark"></div>
                         <div class="hero-bg hero-bg-scroll"
                             style="background-image: url('/fe/images/login-bg-6.jpg')">
                         </div>
                         <div class="hero-content mx-auto w-100 h-100">
                             <div class="container d-flex flex-column h-100">
                                 <div class="row g-0">
                                     <div class="col-11 col-lg-9 mx-auto">
                                         <div class="logo mt-5 mb-5">
                                             <a href="#"><img src="/backend/images/app-logo.png" height="70"
                                                     width="120" alt="150x50" /></a>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="row g-0 mt-3">
                                     <div class="col-11 col-lg-9 mx-auto">
                                         <h1 class="text-9 text-white fw-300 mb-5">
                                             <span class="fw-500">Welcome</span>, Looks like you're
                                             new here!
                                         </h1>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Welcome Text End -->

                 <!-- Register Form
      ========================= -->
                 <div class="col-md-8 d-flex flex-column align-items-center bg-dark">
                     <div class="container my-auto py-5">
                         <div class="row g-0">
                             <div class="col-11 col-md-8 col-lg-7 col-xl-6 mx-auto">
                                 <p class="text-2 text-light">
                                     Already a member?
                                     <a class="fw-500" href="{{ route('login') }}">Login</a>
                                 </p>
                                 <h3 class="text-white mb-4">Register Your Account</h3>

                                 <div class="d-flex align-items-center my-4">
                                     <hr class="col-1 border-secondary" />
                                     <span class="mx-3 text-2 text-white-50"></span>
                                     <hr class="flex-grow-1 border-secondary" />
                                 </div>
                                 <form method="POST" action="{{ route('register') }}">
                                     @csrf
                                     <div class="mb-3">
                                         <label class="form-label text-light" for="fullName">Full Name</label>
                                         <input class="form-control" id="fullName" placeholder="Enter Your Name"
                                             type="text" name="name" :value="old('name')" required autofocus
                                             autocomplete="name" />
                                     </div>
                                     <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                     <div class="mb-3">
                                         <label class="form-label text-light" for="emailAddress">Email Address</label>
                                         <input class="form-control" id="emailAddress" required=""
                                             placeholder="Enter Your Email" type="email" name="email"
                                             :value="old('email')" required autocomplete="username" />
                                     </div>
                                     <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                     <div class="mb-3">
                                         <label class="form-label text-light" for="loginPassword">Password</label>
                                         <input class="form-control" id="loginPassword" placeholder="Enter Password"
                                             type="password" name="password" required autocomplete="new-password" />
                                     </div>
                                     <x-input-error :messages="$errors->get('password')" class="mt-2" />

                                     <div class="mb-3">
                                         <label class="form-label text-light" for="loginPassword"> Confirm
                                             Password</label>
                                         <input class="form-control" id="loginPassword" placeholder="Enter Password"
                                             type="password" name="password_confirmation" required
                                             autocomplete="new-password" />
                                     </div>
                                     <x-input-error :messages="$errors->get('confirm_password')" class="mt-2" />

                                     <div class="form-check text-light my-4">
                                         <input id="agree" name="agree" class="form-check-input"
                                             type="checkbox"  />
                                         <label class="form-check-label" for="agree">I agree to the <a
                                                 href="#">Terms</a> and
                                             <a href="#">Privacy Policy</a>.</label>
                                     </div>
                                     <button class="btn btn-primary shadow-none my-2" type="submit">
                                         Register
                                     </button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Register Form End -->
             </div>
         </div>
     </div>

     <!-- Styles Switcher -->
     <div id="styles-switcher" class="right">
         <h5>Color Switcher</h5>
         <hr />
         <ul class="mb-0">
             <li class="blue" data-bs-toggle="tooltip" title="Blue" data-path="#"></li>
             <li class="indigo" data-bs-toggle="tooltip" title="Indigo" data-path="css/color-indigo.css"></li>
             <li class="purple" data-bs-toggle="tooltip" title="Purple" data-path="css/color-purple.css"></li>
             <li class="pink" data-bs-toggle="tooltip" title="Pink" data-path="css/color-pink.css"></li>
             <li class="red" data-bs-toggle="tooltip" title="Red" data-path="css/color-red.css"></li>
             <li class="orange" data-bs-toggle="tooltip" title="Orange" data-path="css/color-orange.css"></li>
             <li class="yellow" data-bs-toggle="tooltip" title="Yellow" data-path="css/color-yellow.css"></li>
             <li class="teal" data-bs-toggle="tooltip" title="Teal" data-path="css/color-teal.css"></li>
             <li class="green" data-bs-toggle="tooltip" title="Green" data-path="css/color-green.css"></li>
             <li class="cyan" data-bs-toggle="tooltip" title="Cyan" data-path="css/color-cyan.css"></li>
             <li class="brown" data-bs-toggle="tooltip" title="Brown" data-path="css/color-brown.css"></li>
         </ul>
         <button class="btn switcher-toggle"><i class="fas fa-cog"></i></button>
     </div>
     <!-- Styles Switcher End -->

     <!-- Script -->
     <script src="/fe/js/jquery.min.js"></script>
     <script src="/fe/js/bootstrap.bundle.min.js"></script>
     <!-- Style Switcher -->
     <script src="/fe/js/switcher.min.js"></script>
     <script src="/fe/js/theme.js"></script>
 </body>

 </html> --}}

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />

    <link rel="shortcut icon" href="/backend/images/app-logo.png" height="10" width="20" type="image/x-icon" />
    <title> Vallfield - Regisgter Form </title>

    <!-- CSS Assets -->
    <link rel="stylesheet" href="/backend/css/app.css" />

    <!-- Javascript Assets -->
    <script src="/backend/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
        rel="stylesheet" />

</head>

<body x-data class="is-header-blur" x-bind="$store.global.documentBody">


    <!-- Page Wrapper -->
    <div id="root" class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900" x-cloak>
        <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
            <a href="#" class="flex items-center space-x-2">
                <img class="size-12" src="/backend/images/app-logo.svg" alt="logo" />
                <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
                    lineone
                </p>
            </a>
        </div>
        <div class="hidden w-full place-items-center lg:grid">
            <div class="w-full max-w-lg p-6">
                <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                    src="/backend/images/illustrations/dashboard-meet.svg" alt="image" />
                <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                    src="/backend/images/illustrations/dashboard-meet-dark.svg" alt="image" />
            </div>
        </div>
        <main class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md">
            <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
                <div class="text-center">
                    <img class="mx-auto size-16 lg:hidden" src="/backend/images/app-logo.svg" alt="logo" />
                    <div class="mt-4">
                        <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                            Welcome To Lineone
                        </h2>
                        <p class="text-slate-400 dark:text-navy-300">
                            Please sign up to continue
                        </p>
                    </div>
                </div>


                <div class="my-7 flex items-center space-x-3">
                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                    <p class="text-tiny+ uppercase">Sign up with email</p>

                    <div class="h-px flex-1 bg-slate-200 dark:bg-navy-500"></div>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mt-4 space-y-4">
                        <label class="relative flex">
                            <input
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Name" type="text" name="name" :value="old('name')" required
                                autofocus autocomplete="name" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                            </span>
                        </label>
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <label class="relative flex">
                            <input
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Email" type="email" name="email" :value="old('email')" required
                                autocomplete="username" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                        </label>
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <label class="relative flex">
                            <input
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Password" type="password" name="password" required
                                autocomplete="new-password" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </label>
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        <label class="relative flex">
                            <input
                                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                                placeholder="Repeat Password" type="password" name="password_confirmation" required
                                autocomplete="new-password" />
                            <span
                                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5 transition-colors duration-200"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                        </label>
                        <x-input-error :messages="$errors->get('confirm_password')" class="mt-2" />
                        <div class="mt-4 flex items-center space-x-2">
                            <input
                                class="form-checkbox is-basic size-5 rounded border-slate-400/70 checked:border-primary checked:bg-primary hover:border-primary focus:border-primary dark:border-navy-400 dark:checked:border-accent dark:checked:bg-accent dark:hover:border-accent dark:focus:border-accent"
                                type="checkbox" name="agree" />
                            <p class="line-clamp-1">
                                I agree with
                                <a href="#" class="text-slate-400 hover:underline dark:text-navy-300">
                                    privacy policy
                                </a>
                            </p>
                        </div>
                    </div>
                    <button
                        class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                        Sign Up
                    </button>
                    <div class="mt-4 text-center text-xs+">
                        <p class="line-clamp-1">
                            <span>Already have an account? </span>
                            <a class="text-primary transition-colors hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                                href="{{ route ('login')}}">Sign In</a>
                        </p>
                    </div>
                </form>
            </div>
        </main>
    </div>
    <div id="x-teleport-target"></div>

    <script>
        window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
</body>

</html>
