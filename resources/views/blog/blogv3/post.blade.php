
@foreach($posts as $item)
<div class="col-lg-3 col-sm-6">

    <a href="" class="blogCard -type-2 d-block bg-white rounded-4 shadow-4">
        <div class="blogCard__image">
            <div class="ratio ratio-1:1 rounded-4">
                <img class="img-ratio js-lazy" src="#" data-src="{{$item['img']}}" alt="image">
            </div>
        </div>

        <div class="px-20 py-20">
            <h4 class="text-dark-1 text-16 lh-18 fw-500">{{$item['title']}}</h4>
            <div class="text-light-1 text-15 lh-14 mt-10">{{$item['date']}}</div>
        </div>
    </a>

</div>
@endforeach
