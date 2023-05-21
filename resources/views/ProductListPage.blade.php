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
    <x-header />

    <div id="request_data"> 

    </div>

    <div>

        <div class='selection:bg-red-300
        '> 
        
            <div class='flex  flex-col justify-start  items-center bg-gray-100 p-0  md:px-10 sm:px-5 sm:pt-5 pt-10'>
    
    
                <div class='sm:max-w-[1200px] w-full bg-white  h-fit sm:p-[25px] lg:p-[80px]  sm:m-11 shadow-lg '>
    
                    <div class='ml-3 my-7 mb-10 flex flex-col justify-center items-center cursor-pointer sm:items-start'> 
                    
                        <div class='flex justify-start items-center '>
                        <a href='/' class=' underline underline-offset-4 text-sm font-semibold text-gray-600 hover:text-red-300 '>Home</a>
                        <span class='mx-2'> /</span>
                        <div class='text-sm font-semibold text-gray-600'>Shop</div>
                        </div>
    
                        <div class='text-3xl mt-3 text-red-400'>SHOP</div>
                        <div class=' w-[98%] flex sm:justify-between sm:flex-row
                        sm:items-startjustify-center items-center flex-col'>
    
                            <div  class='text-sm font-semibold text-gray-600 flex sm:block mt-3 sm:mt-0 '>
                                Showing 1–9 of 11 results Default sorting 
                                </div >

                                <div class='mt-5 sm:mt-1 flex flex-col ' >
                                    <form action="{{url('/SaveProduct')}}" method='post' >
                                        @csrf
                                        <input id="searchbox" type='text' class=' border-2  border-slate-500 rounded-md mb-2 h-[35px ] w-[200px]  ' placeholder=' Search here...'     />
                                        <button type="submit" class=" h-7 aspect-square pointer relative left-[-34px]" > <i class="fa fa-search"></i></button>
                                    </form>
 
                                    <select
                                class="h-[35px] w-[200px]  rounded-md border-2 border-slate-500  px-[10px] text-sm font-semibold text-gray-500  "
                                onChange={handleSelect}
                                    >

                        <option  defaultValue="default"> Default Sorting </option>
                        <option value="high"> High To Low </option>
                        <option value="low"> Low To High </option>
                        <option value="tite"> Sort By Name </option>
                    </select>
                    </div>
                        </div>
                    </div>
                    
    
                <div class=' w-full flex flex-col justify-center items-center sm:grid grid-cols-3 pb-[30px] '> 

                    <x-product />
    
    
            {{-- { 
    
    
    
            data &&   data.map((val :valtype )=>{
    
                return ( <Link to= {'/products/'+ val.id } key={val.id}    >  
                        <Product 
                        photo ={val.thumbnail}   
                        title ={val.title}  
                        id ={val.id} 
                        price={val.price} 
                        rating ={val.rating} /></Link>
                )
        --}}
    
                {{-- })
                
                } --}}
    
                    </div>
    
                <div class='h-[55px]  w-full flex  '>
    {{-- {/* <Pagination /> */} --}}
    
                    {{-- [...Array(ProductData.meta.last_page)].map( (val:any , index :number)=>{
                        
                    const pageNo = index + 1;
                        return  ( --}}
                            
                        {{-- <a
                        to={"?" + new URLSearchParams({ ...params, page:String( pageNo) })}
                        key={pageNo}
                        class={
                        "  h-8 w-9  flex  justify-center items-center  text-lg  font-semibold hover:text-white  hover:bg-red-400  shadow-md shadow-slate-300  border-2 border-red-400  m-2  " +
                        (pageNo == page
                            ? " bg-red-400  text-white"
                            : "   text-red-400  bg-white")
                        }
                        >
                        <div>{index + 1}</div>
                        </a> --}}

    
                    </div>
                    </div>
                </div>
            </div>
    </div>


    <x-footer />
</body>
{{-- <script type="text/javascript" >; 



    $(document).ready( function () {
        console.log('working')
        $("#searchbox").bind("change paste keyup", function() {
            let searched_Item = $(this).val() ;
            console.log(searched_Item); 
            // $.get('https://dummyjson.com/products', 
        $.ajax({ 
            url:   "/SaveProduct",
            type: 'POST',
            data:  {data: searched_Item },
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function (request) {
                return request.setRequestHeader('X-CSRF-Token', $("meta[name='csrf-token']").attr('content'));
            },

            success:function(data)
            {
                console.log('resp = ',data) ;
                $('#request_data').append(data);
            },
            error: function(data, textStatus, errorThrown) {
                console.log('resp error = ',data, textStatus, errorThrown)
            }
        });


            // $.post('SaveProduct',{data:searched_Item },function(data){
            //     console.log(data);
            // })

        });
    });

// fetch('https://dummyjson.com/products')
// .then(res => res.json())
// .then(console.log);

</script> --}}
</html>