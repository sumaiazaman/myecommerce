<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>
      @yield('title', 'Laravel Ecommerce Project')
    </title>
    @include('frontend.partials.style')
   <body>
    <div class="wrapper">

    @include('frontend.partials.nav')

    @include('frontend.partials.messages')

    @yield('content')

    @include('frontend.partials.footer')

</div>
@include('frontend.partials.scripts')
</html>
