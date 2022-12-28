
    <section class="slick-slider">
        <div class="container relative carousel py-60 w-4/5 max-w-1000 shadow-2xl rounded-37 min-h-642 justify-center items-center">
            @foreach ($data->module['testimonial'] as $test)          
            <div class="w-full flex justify-center md:block">
                <div class="quote md:ml-14% ml-19 max-w-660">
                    <h2>{!! $test->post_content !!}</h2>
                    <p>{{ $test->post_title }}</p>
                    <p> {{ $pos }}</p>
                </div>
            </div>    
            @endforeach
        </div>
    </section>
    <?php
    $pos=get_field('postion',$data->module['testimonial']->ID);
 ?>  
