<!DOCTYPE html>
<html lang="en">
    <head>  
          @include('templates.veilingburo-lead.head')
     
    </head>
          
    <body>
          @include('partials.body')
          @include('templates.veilingburo-lead.header')
          @yield('content')

          @include('templates.veilingburo-lead.footer')
      
          @include('templates.veilingburo-lead.end')
</body>
</html>
