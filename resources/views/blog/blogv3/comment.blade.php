
@foreach($comment as $item)
<div class="col-12">
    <div class="row x-gap-20 y-gap-20 items-center">
        <div class="col-auto">
            <img src="{{$item['avatar']}}" alt="image">
        </div>
        <div class="col-auto">
            <div class="fw-500 lh-15">{{$item['name']}}</div>
            <div class="text-14 text-light-1 lh-15">{{$item['time']}}</div>
        </div>
    </div>

    <h5 class="fw-500 text-blue-1 mt-20">{{$item['react']}}</h5>
    <p class="text-15 text-dark-1 mt-10">{{$item['desc']}}</p>


    <div class="row x-gap-30 y-gap-30 pt-20">

        @foreach($img_comment as $item)
        <div class="col-auto">
            <img src="{{$item['img']}}" alt="image" class="rounded-4">
        </div>
        @endforeach

    </div>


    <div class="d-flex x-gap-30 items-center pt-20">
        <button class="d-flex items-center text-blue-1">
            <i class="icon-like text-16 mr-10"></i>
            Helpful
        </button>

        <button class="d-flex items-center text-light-1">
            <i class="icon-dislike text-16 mr-10"></i>
            Not helpful
        </button>
    </div>
</div>
@endforeach


<div class="col-auto">

    <a href="#" class="button -md -outline-blue-1 text-blue-1">
        Show all 116 reviews <div class="icon-arrow-top-right ml-15"></div>
    </a>

</div>
