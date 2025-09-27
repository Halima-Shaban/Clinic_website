<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.links')
    <title>@yield('title', 'clinic')</title>
</head>

<body>
    <div class="page-wrapper">
        @include('layouts.navebar')
        @yield('front.content')
    </div>


    <footer class="container-fluid bg-blue text-white py-3">
        <div class="row gap-2">

            <div class="col-sm order-sm-1">
                <h1 class="h1">About Us</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                    laborum
                    saepe
                    enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis consequatur
                    cum
                    iure
                    quod facere.</p>
            </div>
            <div class="col-sm order-sm-2">
                <h1 class="h1">Links</h1>
                @include('layouts.footerLinks')
            </div>
        </div>
    </footer>

    @include('layouts.frontScripts')
</body>

</html>
