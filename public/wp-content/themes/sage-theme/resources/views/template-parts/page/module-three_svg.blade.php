<section class="container flex flex-col justify-center w-4/5 2xl:w-3/5 ">
    <div class=" flex flex-col mb-25 items-start w-1/2 mx-auto lg:flex-row lg:w-full lg:mx-auto lg:justify-between ">
        @foreach ($data->module['content'] as $item)
        <div class="flex flex-col mb-25 lg:ml-3 ">
            <img class="w-65"
            src="{{ $item->picture->url }}" alt="{{ $item->picture->alt }}">
          <div class="text-left "> {!!$item->contentbot!!}
          </div>
        </div>
        @endforeach
    </div>
</section>