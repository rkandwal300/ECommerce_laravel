<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-header/>
    <div class=' w-full py-6    '>


        <div class='selection:bg-red-500 selection:text-white '>
            <div class='w-full flex flex-col justify-center items-center  '>
            <div class='  h-[162px] w-[550px]   my-6 flex flex-col justify-center items-center'>
                <div class=' text-5xl font-bold text-gray-600 my-3 ' > About Us</div>
                <div class=' text-xs text-gray-500  '> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.  </div>
            </div>
            </div>
    
            <div class='flex justify-center items-center  px-4 flex-col md:flex-row  '>
                <div class=' w-[550px]  h-fit  mr-3  mb-11'>
                    <div  class=' text-3xl font-bold text-gray-600 my-3  mb-6 '> We Are Your Favourite, Online Store. </div>
                    <p  class='  text-xs text-gray-500 my-2  ' > Dui habitasse provident eu etiam praesent placeat maiores temporibus, accumsan parturient autem, mi animi ipsa. Lobortis maxime quos, pellentesq. </p>
                    <p class='  text-xs text-gray-500   ' > Ee platea animi commodo tincidunt ridiculus tempora, ornare lorem quam sit possimus? Quam cras facilisi officia fusce. Ac, excepteur excepteur fusce? Sunt minim expedita magnis! </p>
                </div>
                <div class=' flex flex-wrap sm:flex-nowrap '>
    
                    <div>
                    <div class='w-full   sm:w-[146px] mx-4  my-5'>
                        <div class='flex flex-col  text-gray-600 font-semibold justify-center items-center text-lg   '>
                            <div class=' text-red-500  ' >  <i class="fa fa-life-ring"></i> </div> 
                            <div> Eros Imperdie</div>
                        <div class=' text-xs text-gray-500  '>We’ll generate a sitemap for your site, submit it to search engine is and track. </div>
    
                        </div>
    
                    </div>
                    <div class='w-full   sm:w-[146px] mx-4 justify-center items-center  '>
                        <div class='flex flex-col text-lg text-gray-600 font-semibold '>
                            <div class=' text-red-500  '> <i class="fa fa-cube"></i> </div> 
                            <div>Proident Congu </div>
                        <div class=' text-xs text-gray-500  '>We’ll generate a sitemap for your site, submit it to search engine is and track. </div>
    
                        </div>
    
                    </div>
                    </div>
    
                    <div>
                    <div class='w-full   sm:w-[146px] mx-4 my-5 '>
                        <div class='flex flex-col text-lg text-gray-600 font-semibold justify-center items-center '>
                            <div class=' text-red-500  ' > <i class="fa fa-snowflake-o"></i> </div> 
                            <div> Proident Congu</div>
                        <div class=' text-xs text-gray-500  '>We’ll generate a sitemap for your site, submit it to search engine is and track. </div>
    
                        </div>
    
                    </div>
                    <div class='w-full   sm:w-[146px] mx-4 my-5 '>
                        <div class='flex flex-col text-lg justify-center items-center text-gray-600 font-semibold '>
                            <div class=' text-red-500  '> <i class="fa fa-hand-paper-o"></i>  </div> 
                            <div> Vero Maecenas </div>
                        <div class=' text-xs text-gray-500  '>We’ll generate a sitemap for your site, submit it to search engine is and track. </div>
    
                        </div>
    
                    </div>
                    </div>
    
    
    
                </div>
            </div>
    
    
    
        </div>
    
    
        </div>

        <x-footer />
    </body>
</html>