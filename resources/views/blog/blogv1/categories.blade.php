

<div class="tabs__controls row x-gap-10 justify-center js-tabs-controls">

    @foreach($categories as $item)
        <div class="col-auto">
            <button class="tabs__button text-14 fw-500 px-20 py-10 rounded-4 bg-light-2 js-tabs-button is-tab-el-active" data-tab-target=".-tab-item-1">
                {{$item['name']}}</button>
        </div>
    @endforeach
</div>
