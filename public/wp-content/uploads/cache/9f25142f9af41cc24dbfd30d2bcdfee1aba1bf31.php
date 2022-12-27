
<html>
<body>
    <section class=" flex justify-center w-full ">
        <div class=" w-4/5 flex flex-col xl:w-4/5 xl:flex-row 2xl:w-3/5  ">
            <div class="w-full lg:mb-[51px] lg:mr-[102px] xl:mr-[87px] xl:flex flex-col xl:w-2/5">
                <div class="Line-4 mb-[9px]"></div>
                <h2>
                   <?php echo $data->module['contentleft']; ?>

                </h2>
            </div>
            <div class="flex-col flex w-full lg:flex-row xl:w-full ">
                <div class=" lg:mr-[55px] ">
                    <?php $__currentLoopData = $data->module['contentcenter']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="lg:mb-[55px]">
                       <?php echo $test->centercol; ?>                    
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="text-left ">
                    <?php $__currentLoopData = $data->module['contentright']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $test): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <div class="lg:mb-[55px]">
                       <?php echo $test->rightcol; ?>                    
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>
</body>
</html>