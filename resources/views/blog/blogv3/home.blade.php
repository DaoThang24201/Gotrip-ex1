
@extends('blog.layout')

@section('content')

    {{--Title--}}
    @include('blog.blogv3.title')

    <section data-anim="slide-up" class="layout-pt-md layout-pb-md">
        <div class="container">
            <div class="row y-gap-30 justify-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="">
                        {{--Content--}}
                        @include('blog.blogv3.content')


                        <div class="row y-gap-20 justify-between pt-30">
                            {{--Link--}}
                            @include('blog.blogv3.link')

                            {{--Tag--}}
                            @include('blog.blogv3.tag')
                        </div>
                    </div>

                    <div class="border-top-light border-bottom-light py-30 mt-30">
                        {{--Author--}}
                        @include('blog.blogv3.author')
                    </div>

                    <div class="border-bottom-light py-30">
                        {{--Redirect--}}
                        @include('blog.blogv3.redirect')
                    </div>

                    <div class="">
                        <h2 class="text-22 fw-500 mb-15 pt-30">Guest reviews</h2>

                        <div class="row y-gap-40">
                            {{--Comment--}}
                            @include('blog.blogv3.comment')
                        </div>
                    </div>

                    <div class="border-top-light pt-40 mt-40"></div>

                    <div class="row">
                        <div class="col-auto">
                            <h3 class="text-22 fw-500">Leave a Reply</h3>
                            <p class="text-15 text-dark-1 mt-5">Your email address will not be published.</p>
                        </div>
                    </div>

                    <div class="row y-gap-30 pt-40">
                        <div class="col-xl-6">

                            <div class="form-input ">
                                <input type="text" required>
                                <label class="lh-1 text-16 text-light-1">Text</label>
                            </div>

                        </div>
                        <div class="col-xl-6">

                            <div class="form-input ">
                                <input type="text" required>
                                <label class="lh-1 text-16 text-light-1">Email</label>
                            </div>

                        </div>
                        <div class="col-12">

                            <div class="form-input ">
                                <textarea required rows="6"></textarea>
                                <label class="lh-1 text-16 text-light-1">Write Your Comment</label>
                            </div>

                        </div>
                        <div class="col-auto">

                            <a href="#" class="button -md -dark-1 bg-blue-1 text-white">
                                Post Comment <div class="icon-arrow-top-right ml-15"></div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="layout-pt-md layout-pb-lg">
        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-auto">
                    <div class="sectionTitle -md">
                        <h2 class="sectionTitle__title">Related content</h2>
                        <p class=" sectionTitle__text mt-5 sm:mt-0">Interdum et malesuada fames</p>
                    </div>
                </div>
            </div>

            <div class="row y-gap-30 pt-40">

                {{--Post--}}
                @include('blog.blogv3.post')

            </div>
        </div>
    </section>

@endsection
