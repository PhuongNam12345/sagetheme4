<section class="flex  justify-center w-full ">
    <div class="container w-4/5">
        <div class="flex flex-col  justify-center  text-center  ">
            <div class="   ">
               {!!$data->module['content']!!}
            </div>
            <div class=" carousel6 flex">
                @foreach ($data->module['icon'] as $item)
                <div class="">
                    <div class="flex items-center flex-row justify-around">
                    
                            @foreach ($item->sixicon as $child)
                            <div>
                               <img class="info-icon-ft w-50 h-50" src="{{ $child->img->url }}" alt="{{ $child->img->alt }}">
                            </div>
                               @endforeach 
                        
                        
                    </div>
                </div>
                @endforeach    
               
            </div>

                
        </div>
    </div>
</section>