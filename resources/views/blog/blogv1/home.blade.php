
@extends('blog.layout')

@section('content')
    <section data-anim-wrap class="layout-pt-md layout-pb-lg">
        <div class="container">
            {{--Title--}}
            @include('blog.blogv1.title')


            <div data-anim-child="slide-up delay-2" class="tabs -pills-3 pt-30 js-tabs">
                {{--Categories--}}
                @include('blog.blogv1.categories')

                {{--Content--}}
                @include('blog.blogv1.content')
            </div>
        </div>
    </section>
@endsection
