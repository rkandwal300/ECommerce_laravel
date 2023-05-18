<div>
    <div class='selection:bg-red-300 shadow-lg border-b-2 border-gray-300 flex justify-start items-center md:h-[70px] '
    {{-- + (subMenuClass == true ? '  h-[305px]  ' : '  h-[70px] '  )  + (menu == true ? '  h-[245px]  ' : '  h-[60px] '  ) } --}}
    
    >


        <div class='   w-full h-full mt-[15px]     ' >

        <div class='flex  justify-between f-full items-center '>

            <div class='w-[180px] md:ml-[30px] mb-12 md:mb-0  md-[80px] lg:ml-[100px] xl:[120px] 2xl:ml-[140px] '>   
                <div class=' mt-2  w-[120px]  mx-3'> 
                <a  href='/' >  <img  src='https://trycasuals.com/wp-content/uploads/2019/06/print-1-1.svg'  width='100%'  />
                </a></div> 
            </div>
            
            <div class='flex  md:h-[50px]  '>
            {{-- menu starts  --}}
            
            
            <nav id="menu" class='  ml-0  md:ml-9 mt-2 md:mt-0 md:flex md:sticky  md:flex-row absolute top-[75px] left-0  h-fit  flex flex-col w-full  md:w-fit md:bg-transparent bg-slate-100 transition-all   '    
            {{-- + (menu == true ? '' :'hidden md:flex'  )  } --}}
            >

                  <a id="Home" href='/' 
                  class='py-2 
                  px-4 
                  tracking-wider
                  text-[12px]
                  font-[500] 
                  font-sans
                text-gray-500 
                  flex
                  justify-start 
                  items-center  
                  md:border-0
                  border-y-[1px] 
                  border-gray-200 
                  hover:text-red-400   ' >
                    HOME 
                  
                  </a>
                  <a href = '/products' class='py-2 px-2 tracking-wider
                  text-[12px] w-[110px] 
                  font-[500]  text-xs font-sans text-gray-500 flex justify-start items-center  md:border-0 border-b-[1px] border-gray-200 hover:text-red-400   ' >  ALL PRODUCTS </a>
  
                  <a href = '/about' class='py-2 px-4 text-xs font-sans text-gray-500 tracking-wider
                  text-[12px] 
                  font-[500]  flex justify-start items-center md:border-0 border-b-[1px] border-gray-200 hover:text-red-400   ' >  ABOUT </a>
  
                  <a href= '/contact' class='py-2 px-4 text-xs font-sans
                  tracking-wider
                  text-[12px]
                  font-[500]  text-gray-500 flex justify-start items-center md:border-0  border-b-[1px] border-gray-200 hover:text-red-400   ' > CONTACT </a>
                  <li class='flex  '  >  
  
  
                    <div class='py-2 w-full px-4 text-xs font-sans 
                  tracking-wider
                  text-[12px]
                  font-[500] text-gray-500 flex justify-between items-center md:border-0 border-b-[1px] border-gray-200 hover:text-red-400    '  onclick="handleAccount()">
  
                      <div class='mr-8 cursor-pointer md:mr-3'>ACCOUNT  </div>
                      <div  > 
                        <i id="arrowDown" class="fa fa-angle-down"></i>    
                        <i id="arrowUp" class="fa fa-angle-up hidden"></i>   </div> 

  
                      </div> 
                      </li>
  
                      {{-- { subMenuClass ?( --}}
                      <li  id="Submenu" class='   md:absolute md:top-[42px] md:left-[330px] md:shadow-lg md:w-36     text-xs bg-white font-sans w-full font-[500]  text-gray-500 flex justify-start items-center  border-b-[1px] border-gray-200 hover:text-red-400   '    >
                      <ul class= 'w-full  flex flex-col '>

                        <li class='py-2 px-4 text-xs font-sans
                  tracking-wider
                  text-[12px]
                  font-[500]  text-gray-500 flex flex-col justify-start items-center  border-b-[1px] border-gray-200 hover:text-red-400   '> 

                      <div onClick={handleLogOut}> Log Out  </div>

                      <div>    MY ACCOUNT  </div>

                  </li>
                      
                      </ul>
                      </li>
              </nav>
            
  
  
              {{-- //cart logo  --}}
              <a href= '/carts' class='  cursor-pointer h-[50px] aspect-square    hover:text-red-400 ml-[100px] mb-5 relative left-[-60px] top-[-20px] md:left-[-60px]   md:top-[-10px] flex flex-col justify-center items-center p-[0px] mt-3'>
  
  
                              <div class=' rotate-180  text-lg text-red-500 font-semibold  rounded-full mb-[-10px] '> U</div>
  
                              <div class=  'text-red-500 font-semibold   hover:text-black hover:bg-red-500 rounded-b-[17%]  px-2 py-0 border-[3px]  cart border-red-500  text-sm   min-w[60px]  mb-[10px]   '     >  {total} </div>
  
                              </a>
  
                              {{-- <i class="fa fa-bars"></i> --}}
  
  
  
                <div onclick="MenuClick()"  class=' h-9 aspect-square relative left-[-40px] flex justify-center items-center cursor-pointer md:hidden bg-red-500 text-white'
                onClick={handleMenu}
                >
                    <i class="fa fa-bars"></i>
                </div>
  
              </div>
            
  
              <div class=' hidden md:block'></div>
          </div>
  
          </div>
        
          
          </div>
</div>



<script >
    let nav = document.getElementById('menu') ; 
    let AccountHide  = document.getElementById('arrowUp') ; 
    let Submenu  = document.getElementById('Submenu') ; 
    let Account_Show = document.getElementById('arrowDown') ; 
    let  menuShow = false ;
    let  Account_List = false ;
  
  
    let MenuClick = () => {
      console.log('Hllo Clicked ') ;
      // document.getElementById("Home").style.color = "blue";
      
      if(menuShow == true){
  
        menuShow = false ;
        nav.classList.add("top-[-775px]");
        nav.classList.remove("top-[75px]");
      }else{
        menuShow = true ;
        nav.classList.add("top-[75px]");
        nav.classList.remove("top-[-775px]");
  
      }
      
      console.log('\n Hide',menuShow) ;
    }
  
    let handleAccount= () =>{
      if(Account_List == true){
        Account_List = false ;
        Submenu.classList.add("hidden");
        Account_Show.classList.remove("hidden");
        AccountHide.classList.add("hidden");
      }else{
        Account_List = true ;
        Submenu.classList.remove("hidden");
        AccountHide.classList.remove("hidden");
        Account_Show.classList.add("hidden");
  
      }
    }
  
    
  </script>