<section class="flex  justify-center w-full ">
    <div class="container w-4/5">
        <div class="flex flex-col  justify-center  text-center  ">
            <div class="   ">
               <?php echo $data->module['content']; ?>

            </div>
            <div class=" carousel6 flex">
                <?php $__currentLoopData = $data->module['icon']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="">
                    <div class="flex items-center flex-row justify-around">
                    
                            <?php $__currentLoopData = $item->sixicon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div>
                               <img class="info-icon-ft w-50 h-50" src="<?php echo e($child->img->url); ?>" alt="<?php echo e($child->img->alt); ?>">
                            </div>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                        
                        
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
               
            </div>

                
        </div>
    </div>
</section>