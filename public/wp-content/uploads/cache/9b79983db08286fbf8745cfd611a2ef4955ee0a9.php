<section class="container flex flex-col justify-center w-4/5 2xl:w-3/5 ">
    <div class=" flex flex-col mb-25 items-start w-1/2 mx-auto lg:flex-row lg:w-full lg:mx-auto lg:justify-between ">
        <?php $__currentLoopData = $data->module['content']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="flex flex-col mb-25 lg:ml-3 ">
            <img class="w-65"
            src="<?php echo e($item->picture->url); ?>" alt="<?php echo e($item->picture->alt); ?>">
          <div class="text-left "> <?php echo $item->contentbot; ?>

          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>