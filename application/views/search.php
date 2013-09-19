<center>SEARCH</center>
<div style="margin-left: 5px;width:950px;">
 
 <div>
 <input class="search" type="text" style="width: 85%">
 <button onclick="search();" style="margin-left: 15px;padding: 0px;height: 27px;position:absolute">search</button>
    </div>
    <div style="">
     <select class="type" name="type">
         <option value="quest">вопросы</option>
         <option value="session">session</option>
         <option value="people">people</option>
         </select>
    
    </div>
<div class="find">  
     </div>
  
     
        
 
      
</div>

<script>
  
    
    function search(){
        $(".find").empty();
        var type = $(".type").val();
        var sql  = $(".search").val();
        
        $.ajax({
                    type : "POST",
                    data : ({type:type,sql:sql}),
                
                    url : "/ajax/search",
                    dataType : "json",
                    success: function(data)
                    {
                        $(".find").append(data.inf);
                     
                    }
                });
        
    }
    
  

</script>