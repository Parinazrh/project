<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="/css/styles.css" rel="stylesheet" />
    </head>
    <body dir="rtl" style="margin-top: 56px;">

        <!-- Navigation-->
       <!-- @include('layouts.navbar')-->



        <!-- Header-->

          <header class="bg-dark py-5">
             <div class="container px-4 px-lg-5 my-5">
                 <div class="text-center text-white">
                      <h1 class="display-4 fw-bolder">@yield('subject')</h1>
                      <p class="lead fw-normal text-white-50 mb-0">@yield('subject2')</p>
                 </div>
              </div>
          </header>




        <!-- <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Hello!</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Welcome To My WebSite ♡</p>
                </div>
            </div>
        </header> -->






        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">



           @yield('content')

           @yield('registerr')




            </div>
        </section>
        <!-- Footer-->




        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="/js/scripts.js"></script>
    </body>
</html>
