<!DOCTYPE html>

<html>

<head>

      <link rel="shortcut icon" href="assets/images/themetidy-shopify-paira-theme-framework-favicon-boot.png" type="image/png" />
      @yield('title')

      @include('Boot.layouts.css')
      @yield('css')

</head>
<body>

<!--=================== Main Body Content Container ===================-->
      <div class="paira-container">

            @include('Boot.layouts.header')



            <main class="home-page">
                 @yield('body')
            </main>


            @include('Boot.layouts.footer')
      </div>

      @include ('Boot.layouts.javascript')
      @yield('javascript')
</body>

</html>
