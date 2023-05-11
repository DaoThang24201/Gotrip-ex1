
<div class="row y-gap-30">

    @foreach($contents as $item)
    <a href="{{$item['href']}}" class="blogCard -type-1 col-12">
        <div class="row y-gap-15 items-center md:justify-center md:text-center">
            <div class="col-auto">
                <div class="blogCard__image rounded-4">

                        <div class="ratio ratio-1:1 w-250">
                            <img src="{{$item['img']}}" alt="image" class="img-ratio rounded-4">
                        </div>


                </div>
            </div>

            <div class="col-md">
                <div class="text-15 text-light-1">{{$item['date']}}</div>

                <h3 class="text-22 text-dark-1 mt-10 md:mt-5">
                    {{$item['title']}}
                </h3>

                <div class="text-15 lh-16 text-light-1 mt-10 md:mt-5">{{$item['desc']}}</div>
            </div>
        </div>
    </a>
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
