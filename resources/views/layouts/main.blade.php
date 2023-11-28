<!Doctype html>
<html lang="en">
<body>
    @include('components.header')
    <div class="container mt-5 py-5">   
    @yield('content')
    </div>

    @include('components.footer')
    </body>
    
</html>