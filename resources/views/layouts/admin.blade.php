<!DOCTYPE html>
<html lang="en">
<head>
    @include('include.admin.head')
</head>
<body>

<div class="container-scroller">

        @include('include.admin.header')

    
    
        @yield('content')
    </div>

    <footer class="row">
        @include('include.admin.footer')
    </footer>


</body>
</html>