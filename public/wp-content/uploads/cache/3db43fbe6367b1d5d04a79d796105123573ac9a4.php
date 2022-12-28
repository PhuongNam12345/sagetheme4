
    <section class="slick-slider">
        <div class="container relative carousel py-60 w-4/5 max-w-1000 shadow-2xl rounded-37 min-h-642 justify-center items-center">
            <?php $__currentLoopData = $data->module['testimonial']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>          
            <div class="w-full flex justify-center md:block">
                <div class="quote md:ml-14% ml-19 max-w-660">
                    <h2><?php echo $test->post_content; ?></h2>
                    <p><?php echo e($test->post_title); ?></p>
                    <p> <?php echo e($pos); ?></p>
                </div>
            </div>    
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>
    <?php
    $pos=get_field('postion',$data->module['testimonial']->ID);
 ?>  
