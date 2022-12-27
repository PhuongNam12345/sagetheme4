
<html>
<body>
    <section class=" flex justify-center w-full ">
        <div class=" w-4/5 flex flex-col xl:w-4/5 xl:flex-row 2xl:w-3/5  ">
            <div class="w-full lg:mb-[51px] lg:mr-[102px] xl:mr-[87px] xl:flex flex-col xl:w-2/5">
                <div class="Line-4 mb-[9px]"></div>
                <h2>
                   {!!$data->module['contentleft']!!}
                </h2>
            </div>
            <div class="flex-col flex w-full lg:flex-row xl:w-full ">
                <div class=" lg:mr-[55px] ">
                    @foreach($data->module['contentcenter'] as $test) 
                    <div class="lg:mb-[55px]">
                       {!!$test->centercol!!}                    
                    </div>
                    @endforeach
                </div>
                <div class="text-left ">
                    @foreach($data->module['contentright'] as $test) 
                    <div class="lg:mb-[55px]">
                       {!!$test->rightcol!!}                    
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</body>
</html>