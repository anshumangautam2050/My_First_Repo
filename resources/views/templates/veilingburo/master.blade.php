<!DOCTYPE html>
<html lang="en">
    <head>  
          @include('templates.veilingburo.head')
     
    </head>
          
    <body>
      
          @include('partials.body')
          @include('templates.veilingburo.header')
          
          @yield('content')

          @include('templates.veilingburo.footer')
      
          @include('templates.veilingburo.end')
</body>
</html>
