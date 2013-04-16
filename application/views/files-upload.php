<script>
   $(document).ready(function(){
   
    $(".semestr").change(function(){
        
        var sem = $(this).val();
        var gr = $("#mygroup1").text(); 
        
          $.ajax({
                type : "POST",
                data : ({idgroup:gr, semestr:sem}),
                
                url : "/ajax/getitems",
                dataType : "json",
               
                success: function(data)
                {
          
             
            
                         $(".item").empty();
                      if(data=='none'){    $(".item").append( "<option disabled selected='select'>Предметов не найдено</option>");} else{
                         var len = data.length;  
                         
                        
                         $(".item").append( "<option disabled selected='select'>Выберите Предмет</option>");  
                        for (var i = 0; i <= len; i++)
                         {  
                            $(".item").append( "<option value='"+(data[i].id)+"'>"+(data[i].item)+"</option>");     
                          
                         }  }                         
                
                }
                
         });   
        
        
        
        
        
    });
        });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </script>

<center><h4>Uploading</h4></center>
<form action="/files/upload" method="post" enctype="multipart/form-data">
     
    
    <center><div class="container">
        <table>
          <tr><td> <input class="btn" type="file" name="filename"></td> </tr>
          
   
 
 
  <tr> <td>   <select  name="type">
               <option disabled selected="select">Выберите тип файла</option>
        <option  value="job">Задания</option>
        <option value="performed">Выполненное</option>
        <option value="lesson">Лекции</option>
        <option value="other">Прочее</option>
        </select></td> </tr>

    <tr> <td>   <select class="semestr"  name="semestr" >
        <option disabled selected="select">Выберите семестр</option>
        <option  value="1">Семестр 1</option>
        <option  value="2">Семестр 2</option>
        <option  value="3">Семестр 3</option>
        <option  value="4">Семестр 4</option>
        <option  value="5">Семестр 5</option>
        <option  value="6">Семестр 6</option>
        <option  value="7">Семестр 7</option>
        <option  value="8">Семестр 8</option>
        <option  value="9">Семестр 9</option>
        <option  value="10">Семестр 10</option>
                
        
        </select></td> </tr>
    
    
    <tr> <td>   <select class="item"  name="item">
               <option disabled selected="select">Выберите Предмет</option>  
       
        </select></td> </tr>
 
    <tr> <td>   <input type="submit" name="upload" value="Загрузить"></td> </tr>
      </form>
</div> </center>