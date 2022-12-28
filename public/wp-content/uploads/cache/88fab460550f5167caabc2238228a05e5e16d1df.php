<section class="container flex flex-col justify-center w-full lg:4/5 2xl:w-3/5">
    <div class=" flex flex-col mx-auto lg:w-full md:w-4/5  ">
        <span>THE LATEST</span>
        <div class="flex  flex-col  w-full  xl:flex-row">
            <div class="shadow-2xl  rounded-b-4xl mb-15 xl:row">
                <img class="w-full" src="<?php echo App::getLogo()['lap']; ?>" alt="<?php echo App::getLogo()['alt']; ?>">
                <?php $__currentLoopData = $data->module['post']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                <div class="flex flex-col 2xl:justify-center  ">
                    <div class=" shadow-2xl rounded-4xl col mb-15 2xl:mb-2 ">                     
                    <h2><?php echo $test->post_content; ?></h2>
                    <p><?php echo $test->post_title; ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
        <div class="relative">
            <img  class="absolute right-0 bottom-0"src="<?php echo App::getLogo()['bg']; ?>" alt="<?php echo App::getLogo()['alt']; ?>">
        </div>   
</section>