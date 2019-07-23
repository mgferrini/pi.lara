<!DOCTYPE html>
<html lang="es">
  @include('partials.head')
  <body>
  <div class="container-fluid">
    @include('partials.header')
    @include('partials.navBar')
    @yield("principal")
    @include("partials.footer")
  </div>
    @include('partials.scripts')
  </body>
</html>
</html>
