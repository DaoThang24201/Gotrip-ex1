
@extends('blog.layout')

@section('content')

    {{--Title--}}
    @include('blog.blogv2.title')

    <section data-anim="slide-up delay-2" class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row y-gap-30 justify-between">
                <div class="col-xl-8">
                    {{--Content--}}
                    @include('blog.blogv2.content')
                </div>

                <div class="col-xl-3">
                    <div data="slide-up delay-3" class="sidebar -blog">
                        {{--Search--}}
                        @include('blog.blogv2.search')

                        {{--Category--}}
                        @include('blog.blogv2.categories')

                        {{--Post--}}
                        @include('blog.blogv2.posts')

                        {{--Tag--}}
                        @include('blog.blogv2.tags')
                    </div>

                </div>
            </div>
        </div>
    </section>

@endsection
