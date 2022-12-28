<footer id="footer" class="module footer w-full">
    <div class="w-full relative">
        <div class="absolute  w-full top-70 lg:top-135  ">
            <img class="w-full" src="{!! App::getBanner()['footer'] !!}" alt="{!! App::getBanner()['footer'] !!}" class="w-full">
        </div>
        <div class="relative w-full justify-center top-0 lg:top-100  ">
            <div class="flex flex-col absolute top-100 xl:top-135 lg:top-290 lg:ml-37 xl:w-4/5 md:w-full justify-between mx-auto lg:items-start md:items-center 2xl:mb-50">
                <div class=" absolute 2xl:relative xl:  2xl:mb-22">
                    <img src="{!! App::getLogo()['logoft'] !!}" alt="{!! App::getLogo()['alt'] !!}" class="w-full">
                </div>
                <div class="flex w-full 2xl:items-start lg:items-end md:items-center lg:flex-row md:flex-col">
                    <div class="flex xl:mr-25 justify-between lg:items-end lg:w-1/4 md:w-2/5 2xl:p-0 lg:py-9">
                        <div>
                            <span
                                class="icomoon icon-youtube text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-instagram text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-twitter text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-facebook text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                        <div>
                            <span
                                class="icomoon icon-linkedin2 text-brown-400 2xl:text-2xl xl:text-base md:text-2xl 2xl:pr-10 xl:pr-5"></span>
                        </div>
                    </div>
                    <div
                        class="flex xl:w-[70%] md:w-full justify-around 2xl:items-start xl:items-end md:items-center 2xl:flex-row md:flex-col">
                        {{-- <div class="flex w-full xl:justify-between md:justify-around 2xl:mr-25 order list-none"> --}}
                            {{-- <div class="py-5 xl:px-0 md:px-6">
                                <p>ORCHESTRA SITE</p>
                            </div>
                            <div class="py-5 xl:px-0 md:px-6">
                                <p>ENCOMPASS WEBSITE</p>
                            </div>
                            <div class="py-5 xl:px-0 md:px-6">
                                <p>HANDOFF WEBSITE</p>
                            </div> --}}
                            {!! App::getFooterNav() !!}

                            <div class=" border-2 rounded-3xl ">
                                <a href="" class="text-white font-bold">CONTACT</a>
                            </div>
                        {{-- </div> --}}
                    </div>
                </div>
                <p>© Encompass Technologies 2021</p>
            </div>
        </div>
    </div>
</footer>

<!-- endblock -->
<noscript>
    <div id="mod-noscript" class="mod-noscript bg-black text-white fixed inset-0 z-200">
        <div class="table w-full h-full">
            <div class="table-cell align-middle text-center">
                <div class="container last-mb-none">
                    <h3>To use web better, please enable Javascript.</h3>
                </div>
            </div>
        </div>
    </div>
</noscript>
