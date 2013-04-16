<script>
        

$(document).ready(function(){
    
           
    //   $('textarea').click(function(){
      //     if (!$(".btn").is(':visible')) 
      //         {
     ///           $(this).attr("rows","3");
      //          $(".btn").show();              
     //           }
     //           else{
     //           $(this).attr("rows","1");
     //           $(".btn").hide();  
     //           }
            // });
           
             $('.btn').click(function() {
           var msg = $(".msg_wall").val();
            
            if (msg==''){alert('пусто')}
            else{
                        $.ajax({
                         type : "POST",
                         data : ({msg:msg}),                
                         url : "/ajax/sendmsgwall",
                         dataType : "json",
                         success: function(data)
                         {   

         $('.wall').prepend('<table><tr><td width="70"><img width="70" src="'+data.avatar+'"></td><td  style="padding-left:10px;padding-right:10px;background-color:white;"><a>'+data.name+'</a><br> '+data.msg+'</td></tr></table><br>')
         $('textarea').val(' ');

                         }
                  }); 
         }
             });
            
    
    
});
    
</script>
      <center>  <div style="width:800px;"> <h1><?=$name_modul?></h1>
      
     
     <div  style="position: relative;width:70%"> 
         
         <div style="display: block;width: 100%;text-align: left">
         <textarea rows="3" class="msg_wall"  style="float:left;width:100%"></textarea>
       <a style="margin-left: 0px;margin-left: 15px;" class="btn" href="#send"><span class="btn-label">Send</span></a> 
       </div>
        
         
         
          <br><div class="wall" style="display: block;text-align: left;">
          
<?

//print_r($wall);die;
error_reporting(7);
for ($i=0;$i<=$count_wall;$i++){
 //   print '<div><div ><img width="70" src="'.$wall[$i]['avatar_url'].'"></div><p style="float:left;">'.$wall[$i]['msg'].'</p></div><hr>';
    echo '<table><tr><td width="70"><img height="70" width="70" src="'.$wall[$i]['avatar_url'].'"></td><td
          style="padding-left:10px;padding-right:10px;background-color:white;"><a>'.$wall[$i]['name'].'</a>
          <br>'.$wall[$i]['msg'].'</td></tr></table><br>';

}


?>
        </div></div>
      </center>
 
