
<div class="tabs__content pt-30 js-tabs-content">

    <div class="tabs__pane -tab-item-1 is-tab-el-active">
        <div class="row y-gap-30">

            @foreach($content as $item)
                <div class="col-lg-4 col-sm-6">

                    <a href="" class="blogCard -type-1 d-block ">
                        <div class="blogCard__image">
                            <div class="ratio ratio-4:3 rounded-8">
                                <img class="img-ratio js-lazy" src="#" data-src="{{$item['img']}}" alt="image">
                            </div>
                        </div>

                        <div class="pt-20">
                            <h4 class="text-dark-1 text-18 fw-500">{{$item['title']}}</h4>
                            <div class="text-light-1 text-15 lh-14 mt-5">{{$item['date']}}</div>
                        </div>
                    </a>

                </div>
            @endforeach

        </div>

        <div class="border-top-light mt-30 pt-30">
            <div class="row x-gap-10 y-gap-20 justify-between md:justify-center">
                <div class="col-auto md:order-1">
                    <button class="button -blue-1 size-40 rounded-full border-light">
                        <i class="icon-chevron-left text-12"></i>
                    </button>
                </div>

                <div class="col-md-auto md:order-3">
                    <div class="row x-gap-20 y-gap-20 items-center md:d-none">

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">1</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">3</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full bg-light-2">4</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">5</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">...</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">20</div>

                        </div>

                    </div>

                    <div class="row x-gap-10 y-gap-20 justify-center items-center d-none md:d-flex">

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">1</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full bg-dark-1 text-white">2</div>

                        </div>

                        <div class="col-auto">

                            <div class="size-40 flex-center rounded-full">3</div>

                        </div>

                    </div>

                    <div class="text-center mt-30 md:mt-10">
                        <div class="text-14 text-light-1">1 – 20 of 300+ properties found</div>
                    </div>
                </div>

                <div class="col-auto md:order-2">
                    <button class="button -blue-1 size-40 rounded-full border-light">
                        <i class="icon-chevron-right text-12"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

</div>
