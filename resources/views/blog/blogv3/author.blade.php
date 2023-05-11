

@foreach($author as $item)
<div class="row y-gap-30">
    <div class="col-auto">
        <img src="{{$item['img']}}" alt="image" class="size-70 rounded-full">
    </div>

    <div class="col-md">
        <h3 class="text-18 fw-500">{{$item['name']}}</h3>
        <div class="text-14 text-light-1">{{$item['job']}}</div>

        <div class="text-15 mt-10">{{$item['desc']}}</div>
    </div>
</div>
@endforeach
