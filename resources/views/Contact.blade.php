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

    <div  class='flex  md:flex-nowrap flex-wrap  justify-center items-center mt-12 '>
        <div class='h-[524px]   w-[600px] bg- selection:bg-red-400  flex  flex-col  justify-start items-start  px-3  '> 
            <div class=' text-5xl my-5 font-semibold text-gray-600 '> Say Hello</div>
            <div class=' text-sm text-gray-500 font-serif  ' >  
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
            </div>

            <div class=' my-5  h-[1px] w-[100px] bg-red-500  '> </div>

            <div class='  h-[30px] w-full my-2   text-sm text-gray-500 font-serif   flex    '>  <span   class='text-red-400   justify-start items-center text-xl    '  >  <i class="fa fa-address-book" ></i>  </span> 
            <span class=' ml-4'  >  
212 7th St SE, Washington, DC 20003, USA   </span>  </div>

        <div class='  h-[30px] w-full my-2   text-sm text-gray-500 font-serif  flex  justify-start items-center  '>  
            <span  class='text-red-400  text-xl   '   > 
                <i class="fa fa-envelope"></i> 
            </span>
            <span class=' ml-4'  >  info@example.com </span>  </div>

        
        <div class='  h-[30px] w-full my-2   text-sm text-gray-500 font-serif flex  justify-start items-center    '>  <i   class= 'fa fa-phone-square   text-red-400 text-xl      '  >  </i> <span class=' ml-4'  >  123-456-7890/91   </span>  </div>





        </div>


            <div id="Alert"> array happy birthday </div>


        <form method = 'post'  action="{{url('contact_detail')}}"  class='h-fit   w-[600px]  selection:bg-red-400 px-4  border-2  border-gray-200  mr-4 rounded-md shadow-lg '> 
            @csrf 

        <div class = 'h-[82px] w-full flex justify-start items-center text-3xl font-semibold text-gray-700  pl-4     '> Ask Your Queries</div>
        

        <div>
        <label htmlFor='email'  class=' sr-only' >email address </label>
        <input class= 'h-[40px] w-full pl-5 bg-gray-100  border-[1px] boreder-slate-100 text-gray-500 text-md outline-2 outline-gray-800  rounded-sm my-3 shadow-none  ' 

        type='email' 
        autoComplete='email'
        name='email' 
        id='email' 
        placeholder='Your Email'
        value="{{ old('email') }}"
        />
        <div  class=" text-red-600 font-semibold text-lg ml-3   ">


            @error('email')
            {{$message}}
            @enderror

        </div>

        </div>

        <div>

        <label htmlFor='email'  class=' sr-only' > Subject </label>

        <input class=  'h-[40px] w-full pl-5 bg-gray-100  border-[1px] boreder-slate-100 text-gray-500 text-md outline-2 outline-gray-800 shadow-none rounded-sm '

        type='text' 
        autoComplete='subject'
        name='subject'
        id='subject' 
        placeholder='Subject'
        value="{{ old('subject') }}"
        />
        <div  class=" text-red-600 font-semibold text-lg ml-3   ">
            
            
            @error('subject')
            {{$message}}
            @enderror
            
        </div>
    </div>
    
    
    <label htmlFor='email'  class=' sr-only' > Message  </label>
    <textarea 
    class=' h-[120px] w-full pl-5 bg-gray-100  border-[1px] boreder-slate-300 text-gray-500 text-md outline-2 outline-gray-800  pt-2  my-4     '
    autoComplete='message'
    name='message' 
    id='message' 
    placeholder='Message'
    value="{{ old('message') }}"
        ></textarea>
        <div  class=" text-red-600 font-semibold text-lg ml-3   ">


            @error('message')
            {{$message}}
            @enderror

        </div>
        

        <div class=' h-hit w-full  mb-7'>
            <button type='submit' class='text-md text-white  h-[41px] w-[190px] flex justify-center items-center  bg-red-500 hover:bg-red-600 shadow-md hover:shadow-xl rounded-md '>  SEND MESSAGE </button>
        </div>


        </form>

    </div>



        <x-footer />
    </body>


</html>