<section class="  flex justify-center w-full">
    <div class="w-4/5 flex flex-col ">
     
        <div class="text-center">
            <?php echo $data->module['contentrow']; ?>

        </div>

        <div class="w-full text-center items-center flex flex-col lg:flex-row lg:items-start ">
            <?php $__currentLoopData = $data->module['contentcol']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="w-full text-center items-center flex flex-col lg:flex-row lg:items-start ">
                    <div class="my-10 w-full items-center flex-col flex md:mr-5">
                        <img class="mb-8 min-w-600 xl:p-0 min-w-854 lg:min-w-726 2xl:min-w-975"
                            src="<?php echo e($item->icon->url); ?>" alt="<?php echo e($item->icon->alt); ?>">
                        <div>
                            <?php echo $item->content; ?>

                        <?php if($item->link->url): ?>
                            <a class="no-underline text-red-200" href="<?php echo e($item->link->url); ?>"
                                target="<?php echo e($item->link->target); ?>"><?php echo e($item->link->title); ?>

                                <span class="icomoon icon-chevron-right w-3"> </span>
                            </a>
                        <?php endif; ?>
                        </div>

                    </div>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</section>
