<section class="container flex flex-col justify-center w-full lg:4/5 2xl:w-3/5">
    <div class=" flex flex-col mx-auto lg:w-full md:w-4/5  ">
        <span>THE LATEST</span>
        <div class="flex  flex-col  w-full  xl:flex-row">
            <div class="shadow-2xl  rounded-b-4xl mb-15 xl:row">
                <img class="w-full" src="{!! App::getLogo()['lap'] !!}" alt="{!! App::getLogo()['alt'] !!}">
                @foreach ($data->module['post'] as $test)  
                <div class="flex flex-col 2xl:justify-center  ">
                    <div class=" shadow-2xl rounded-4xl col mb-15 2xl:mb-2 ">                     
                    <h2>{!!$test->post_content !!}</h2>
                    <p>{!! $test->post_title !!}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        <div class="relative">
            <img  class="absolute right-0 bottom-0"src="{!! App::getLogo()['bg'] !!}" alt="{!! App::getLogo()['alt'] !!}">
        </div>   
</section>