@include('layouts.header')


@include('layouts.navigation')


<section id="content">

    <div class="container">
        <div class="row">



        @yield('content')



        </div>
    </div>
</section>

@include('layouts.footer')