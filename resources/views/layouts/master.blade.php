<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Shop</title>
         @include('partial/styles')
  </head>
      <body>

          <div class="wrapper">
              <div class="container">
                      @include('partial/nav')
                  <!--end Navbar Part-->
                      @yield('content')
                      @include('partial/footer')
                  </div>
          </div>

        <!-- JS, Popper.js, and jQuery -->
           @include('partial/scripts')
           

      </body>
</html>
