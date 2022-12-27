<section class="container flex flex-col justify-center w-full lg:4/5 2xl:w-3/5">
    <div class=" flex flex-col mx-auto lg:w-full md:w-4/5  ">
        <span>THE LATEST</span>
        <div class="flex  flex-col  w-full  xl:flex-row">
            <div class="shadow-2xl  rounded-b-4xl mb-15 xl:row">
                <img class="w-full" src="{!! App::getLogo()['lap'] !!}" alt="{!! App::getLogo()['alt'] !!}">
                <div class="w-4/5 ml-20">
                    @foreach ($data->module['post'] as $test)  
               
                    <h2>{!!$test->post_content !!}</h2>
                    <p>{!! $test->post->url !!}</p>

                    @endforeach
                </div>
            </div>
            <div class="flex flex-col xl:ml-30 2xl:justify-center  ">
                <div class=" shadow-2xl rounded-4xl col mb-15 2xl:mb-2 2k:mb-1">
                    <h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
                    <button>
                        <span>READ MORE</span>
                        <span class="icomoon icon-chevron-right"></span>
                    </button>
                </div>
                <div class="shadow-2xl rounded-4xl col my-15 ">
                    <h3>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy</h3>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing el itr, sed diam nonumy eirmod.</p>
                    <button>
                        <span>READ MORE</span>
                        <span class="icomoon icon-chevron-right"></span>
                    </button>
                </div>
            </div>
        </div>
    </div>
        <div class="relative">
            <img  class="absolute right-0 bottom-0"src="{!! App::getLogo()['bg'] !!}" alt="{!! App::getLogo()['alt'] !!}">
        </div>  
  
</section>

<?php 
var_dump($data->module['post']);