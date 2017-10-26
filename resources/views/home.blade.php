@extends('layouts.master')


@section('content')

    <section id="content">

        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="row slider-position">
                        <div class="md-margin"></div><!-- space -->

                        <div class="col-md-3 col-sm-4 col-xs-12 sidebar">
                            @include('layouts.widgets.categories')

                            @include('layouts.widgets.subscribe')

                            @include('layouts.widgets.related')

                        </div>

                        <div class="col-md-9 col-sm-8 col-xs-12 main-content ">


                        @include('layouts.widgets.slider')

                        @include('layouts.widgets.main')

                        </div><!-- End .col-md-9 -->


                </div><!-- End .row -->

            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->


    @endsection
