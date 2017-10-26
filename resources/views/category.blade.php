@include('layouts.header')

<div id="breadcrumb-container">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('home')}}">Home</a></li>
            <li class="active">{{$category->name}}</li>
        </ul>
    </div>
</div>





@include('layouts.footer')

