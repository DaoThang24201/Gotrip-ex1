
<div class="sidebar__item">
    <h5 class="text-18 fw-500 mb-10">Recent Posts</h5>

    <div class="row y-gap-20 pt-10">

        @foreach($posts as $item)
        <div class="col-12">
            <div class="d-flex items-center">
                <img class="size-65 rounded-8" src="{{$item['img']}}" alt="image">
                <div class="ml-15">
                    <h5 class="text-15 lh-15 fw-500">{{$item['title']}}</h5>
                    <div class="text-13 lh-1 mt-5">{{$item['date']}}</div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
