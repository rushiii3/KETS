    <style>
        .title{
            text-align: center !important;
            
        }
        .tabs{
            margin: auto !important;
            width: 100vw !important;
            justify-content: center !important;
        }
       
    </style>
    <nav class="fixed z-10 w-full bg-white dark:bg-transparent md:absolute md:bg-white">
        <div class="container m-auto px-2 md:px-12 lg:px-auto">
            <div class="flex flex-wrap md:inline md:text-center md:justify-center md:w-screen  items-center justify-between py-3 gap-6 md:py-4 md:gap-0">
                <input type="checkbox" name="toggle_nav" id="toggle_nav" class="peer hidden">
                <div class="w-full px-6 flex md:flex-auto justify-between lg:w-full  md:px-0 z-30">
                    
                        
                        <span class=" title text-2xl font-bold text-blue-500  dark:text-white md:w-screen md:mb-4 md:mt-2">Research <span class="text-blue-500 dark:text-blue-500 ">and</span> Innovation</span>
                    

                    <div class="flex items-center lg:hidden max-h-10">
                        <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative w-10 h-auto p-2">
                            <div id="line" class="m-auto h-0.5 w-6 rounded bg-blue-500 dark:bg-white transition duration-300"></div>
                            <div id="line2" class="m-auto mt-2 h-0.5 w-6 rounded bg-blue-500 dark:bg-white transition duration-300">
                            </div>
                        </label>
                    </div>
                </div>

                <label role="button" for="toggle_nav" class="hidden peer-checked:block fixed w-full h-full left-0 top-0 z-10 bg-blue-200 dark:bg-black dark:bg-opacity-80 bg-opacity-30 backdrop-blur items-center justify-center mx-auto backdrop-filter"></label>
                <div class="tabs hidden peer-checked:flex w-full flex-col lg:flex lg:flex-row justify-center  z-30 items-center gap-y-6 p-6 rounded-xl bg-white dark:bg-gray-900 lg:gap-y-0 lg:p-0 md:flex-nowrap lg:bg-transparent ">
                    <div class=" text-gray-600  w-full mx-auto">
                        <ul class="tracking-wide font-medium  text-sm 
                        flex flex-col gap-y-6 lg:gap-x-4   lg:flex-row lg:text-center md:justify-center md:w-screen ">
                            <li>
                                <a href="#" class="block md:pr-  transition dark:text-gray-300 dark:hover:text-blue-300 hover:text-blue-700 ">
                                    <span>Research Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-4 transition dark:text-gray-300 dark:hover:text-blue-300 hover:text-blue-700 ">
                                    <span>Advanced Research Laboratory</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-4 transition dark:text-gray-300 dark:hover:text-blue-300 hover:text-blue-700">
                                    <span>Academic Research</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-4 transition dark:text-gray-300 dark:hover:text-blue-300 hover:text-blue-700">
                                    <span>Sponsored Research</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-4 transition dark:text-gray-300 dark:hover:text-blue-300 hover:text-blue-700">
                                    <span>Achievements</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="block md:px-4 transition dark:text-gray-300 dark:hover:text-blue-300 hover:text-blue-700 ">
                                    <span>Aviskar</span>
                                </a>
                            </li>
                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </nav>
    