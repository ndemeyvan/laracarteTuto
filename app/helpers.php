<?php 


if(!function_exists('page_title')){
     function page_title($title){
      
           if($title=""){
            return 'Larcarte';
           }else{

            return $title;

           }
        
    }


}

if(!function_exists('set_active')){
    function set_active($route){
     
      return Route::is($route) ?'active':"";
       
   }


}



