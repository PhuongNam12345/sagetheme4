
<section class="  flex justify-center w-full">
    <div class="w-4/5 flex flex-col lg:flex-row 2xl:w-3/5">
        <div class="w-full ">
            <?php echo $data->content; ?>

        </div>
        <div class="  carousel2 absolute md:w-full lg:w-1/2" ">
            <?php for($i=1;$i<=3;$i++): ?>
            <div class="grid-col2">
                <div class="grid-col2">
                    <?php $__currentLoopData = $data->module['icon']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="">
                            <img src="<?php echo e($item->img->url); ?>" alt="<?php echo e($item->img->alt); ?>"
                                class="w-135 2xl:h-60 mb-21 my-21">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        <?php endfor; ?>
            
        </div>

    </div>


</section>
