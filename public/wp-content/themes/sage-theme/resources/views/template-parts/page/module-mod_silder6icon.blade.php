
<section class="  flex justify-center w-full">
    <div class="w-4/5 flex flex-col lg:flex-row 2xl:w-3/5">
        <div class="w-full ">
            {!!$data->content!!}
        </div>
        <div class="  carousel2 absolute md:w-full lg:w-1/2" >
            @for($i=1;$i<=3;$i++)
            <div class="grid-col2">
                <div class="grid-col2">
                    @foreach ($data->module['icon'] as $item)
                        <div class="">
                            <img src="{{ $item->img->url }}" alt="{{ $item->img->alt }}"
                                class="w-135 2xl:h-60 mb-10 my-10">
                        </div>
                    @endforeach
                </div>
            </div>
        @endfor
            
        </div>

    </div>


</section>
