<!DOCTYPE html>
<html lang="en">
    <head>
        @include('partials/_head')
    </head>
    <body>
        @include('partials/_nav')
        <div class="container">

            @include('partials/_messages')

            @yield('content')
            <div class="row">
                <div class="col-md-12">
                    @include('partials/_footer')
                </div>
            </div> 
        </div> <!-- End of container -->
        @include('partials/_javascript')
    </body>
</html>