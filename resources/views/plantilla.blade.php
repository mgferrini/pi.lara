<!DOCTYPE html>
<html lang="es">
  @include('head')
  <body>
  <div class="container-fluid">
    @include('header')  
    @include('navBar')
    @yield("principal")
    @include("footer")
  </div>
    @include('scripts')
  </body>
</html>
</html>
