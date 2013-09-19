<div class="span12"><a href="/id<?=$curr_uid?>/session/setting/<?=$sid?>">Меню</a>->Список предметов
    </div>

<center> <select class="item"  name="item">
        <option disabled selected="select">Выберите Предмет</option>  
    <? foreach ($items as $item) {
print '<option value="'.$item->id.'">'.$item->title.'</option>';
 }?>
</select>
    
    <select class="quest"  name="quest">
        <option disabled selected="select">Вопросы</option> 
        </select>
    
    </center>


<script>
   $(document).ready(function(){
   
    $(".item").change(function(){
                    $(".quest").empty();
                    $(".quest").append( "<option disabled selected='select'>Вопросы</option>");  
       var item = $(this).val();
        $.ajax({
               type : "POST",
                data : ({item:item}),
                
                url : "/ajax/GetQuests",
                dataType : "json",
               
                success: function(data)
                {
          
             
            
                        // $(".item").empty();
                      
                         var len = data.length;  
                         
                         
                        for (var i = 0; i <= len; i++)
                         {  
                            $(".quest").append( "<option value='"+(data[i].id)+"'>"+(data[i].text)+"</option>");     
                          
                         }                          
                
                }
                
         });   
        
        
        
        
        
    });
        });
        </script>>