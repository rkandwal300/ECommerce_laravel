<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <x-header />
    <div class=' selection:bg-red-500 selection:text-white   '>

        {{-- {/* slider  */} --}}
        <div style="background-color: 'rgb(249,249,250)"  class='sm:max-h-[520px] h-fit w-full  sm:aspect-video   flex justify-center sm:flex-row flex-col items-center  sm:items-end '>
        <div class='max-w-[551px] h-fit flex flex-col  justify-start items-start   mb-10  mx-2    '>
            <div class='h-1 w-24 bg-red-500  mb-5 ' ></div>


            <div class=' text-xl font-semibold text-gray-700 mt-3   '>Best Quality Products </div>

            <div class=' text-5xl  font-semibold text-gray-700 my-3   '>
                <div> We Print What </div>
                <div> You Want! </div>
            </div>
            <div class=' text-sm text-gray-500 my-6 ' > Click edit button to change this text. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sapien.</div>
            <div>
                <a href= '/products'  
                class=' px-5 py-2  bg-red-500 hover:bg-red-700 text-white  text-sm shadow:md rounded-md mt-[20px] mb-16 '
                >
                GET STARTED  
                
                </a>
            </div>
        </div>



        <div class='max-w-[551px] h-fit flex flex-col  justify-start items-center   ml-2      ' > 
        <img src='https://trycasuals.com/wp-content/uploads/2019/06/image26-free-1.png' alt='product_showoff' width='100%' />
        </div> 

        </div>

        {{-- {/* showoff */} --}}
        <div class=' h-fit w-full  flex justify-center items-center  px-2 '> 


            <div class=' h-fit max-w-[1200px]   flex flex-col sm:flex-row   justify-center  items-center mb-10 mt-5 '>
            

                {{-- {/* item 1 */} --}}
        <div class = ' h-fit max-w-[550px]   flex flex-col justify-center items-center my-3 mx-2 '>

            <div   class='max-h-[604px] w-full  '>
            <img src = 'https://trycasuals.com/wp-content/uploads/2020/01/image-01-1.jpg ' 
            alt='Most Loved Designs'
            width='100%'
            /> </div>
            <div class='my-3 flex justify-center items-center flex-col '>
                <div class='text-xs text-gray-500 m   '> Most Loved Designs  </div>

                <div class=' text-xl font-semibold text-gray-700  '> Customize Your T-Shirts </div>
            </div>

        </div>

            {{-- {/* item2 */} --}}

            <div class = ' h-fit max-w-[550px]   flex flex-col justify-center items-center my-3mx-2 '>

            <div   class='max-h-[604px] w-full  '>

            <div class='my-3 flex justify-center items-center flex-col '>
            <div class='text-xs text-gray-500 m   '> Design of the Week</div>

            <div class=' text-xl font-semibold text-gray-700  '> Rubber Print Your T-Shirt </div>
                </div>


            <img src = 'https://trycasuals.com/wp-content/uploads/2020/01/image-03-1.jpg ' 
            alt='Most Loved Designs'
            width='100%' /> </div>


            </div>


            {{-- {/* item 3 */} --}}
            
            <div class = ' h-fit max-w-[550px]   flex flex-col justify-center items-center my-3 mx-2 '>

            <div   class='max-h-[604px] w-full  '>
            <img src = ' https://trycasuals.com/wp-content/uploads/2020/01/image-02-1.jpg ' 
            alt='Most Loved Designs'
            width='100%' /> </div>
            <div class='my-3 flex justify-center items-center flex-col '>
            <div class='text-xs text-gray-500 m   '> New T-shirt Edition  </div>

            <div class=' text-xl font-semibold text-gray-700  '> Customize Plain Colors </div>
                </div>

            </div>


            </div>



        {{-- {/* our products  */} --}}
        <div  class=' h-fit max-w-[1200px]   flex flex-col sm:flex-row   justify-center  items-center mb-10 mt-5 '>


        </div>




            
        </div>


        <div class='h-fit w-full flex justify-center items-center  mb-[50px] '>
            <div class=' h-hit max-w-[1220px]  flex sm:flex-row   flex-col flex-wrap  justify-center items-center  '> 

            <div class=' flex flex-col  justify-center items-center'>
            <div class='  text-2xl font-semibold  text-gray-700 my-2  mb-3   '> Our Featured Products  </div>
            <div class='h-1 w-28 mb-[60px] bg-red-500'></div>
            </div>


            <div  class=' flex sm:flex-row   flex-col flex-wrap  justify-center items-center ' >

                                RelatedData.map((val :valtype)=>{
                            return (    <Product 
                                key={val.id}  
                                photo ={val.thumbnail}   
                                title ={val.title}  
                                id ={val.id} 
                                price={val.price} 
                                rating ={val.rating} />
                                )
                                }) }
                                </div>
                            </div>
                        </div>




    </div>
    <x-footer />
</body>
</html>