<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en-us">

@include('clients.parials.css')

<body>
    <!-- navigation -->
   @include('clients.parials.header')
    <!-- /navigation -->

    <!-- start of banner -->
@yield('content')

    @include('clients.parials.footer')


    <!-- JS Plugins -->
   @include('clients.parials.js')
</body>

</html>
