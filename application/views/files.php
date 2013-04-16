<script>
    

$(document).ready(function(){
  


     
        $('a').click(function() {
          //  $(".ans").empty();
           
        //   alert();
         var course = $(this).attr('id');       
         var gr = $("#mygroup1").text(); 
        
          
                
             $.ajax({
                type : "POST",
                data : ({course:course,mygroup:gr}),
                
                url : "/ajax/getitems2",
                dataType : "json",
                success: function(data)
                {
          
             
            
              $("#it1").empty();
              $("#it0").empty();
               $(".files").empty();
                $(".files").append(" <tr ><td ><h4>Description</h4></td><td><h4>Size</h4></td> <td><h4>Date</h4></td><td><h4>Uploader</h4></td><td><h4>Type</h4></td> <td><h4>Download</h4></td> </tr>");
                         var len = data.length;  
                         
                        for (var i = 0; i <= len; i++)
                         {  
                           
                              $("#it"+(data[i].sem%2)).append( "<p class='item' id='"+(data[i].id)+"'>"+(data[i].item)+"</p>");
                          //  $(".item").append( "<p id='"+(data[i].id)+"'>"+(data[i].item)+"</p>");     
                         //   $(".item").show();   
                         }                           
                
                }
                
         });       
         }); 
         
         
         
         $(".item").live("click", function(){
       
       
     $(".files").empty();
        var item = $(this).attr("id"); 
        $(".item").css('text-decoration','none');
        $(this).css('text-decoration','underline');
        
      //  alert(item);
         $.ajax({
                type : "POST",
                data : ({item:item}),
                
                url : "/ajax/getfiles",
                dataType : "json",
                success: function(data)
                {
                    
                      
                    var len = data.length;  
                  
                        if (len>0){
                            $(".files").append(" <tr ><td ><h4>Description</h4></td><td><h4>Size</h4></td> <td><h4>Date</h4></td><td><h4>Uploader</h4></td><td><h4>Type</h4></td> <td><h4>Download</h4></td> </tr>");
                            for (var i = 0; i <= len; i++)
                         {                              
                            $(".files").append( "<tr id='file' align='left'><td>"+data[i].descr+"</td><td>"+data[i].size+" Kb</td><td>"+data[i].date+"</td><td>"+data[i].uploader+"</td><td>"+data[i].type+"</td><td><a href='/files/download/"+data[i].id+"'>load</a></td></tr>");
                          //  $(".item").append( "<p id='"+(data[i].id)+"'>"+(data[i].item)+"</p>");     
                          //  $(".files").show();   
                         }  
                         }                        
                
                }
                
         });       
         
     
 });
         
         
         
         
         
         });

    
    
    
    
</script>



    <div class="container">
      <div class="row">
        <div class="span8">
          
           <div style="float:left">   <ul class="nav nav-tabs">
            <li class="active"><a id="1" href="#1">Course 1</a> </li>
            <li class="active"><a id="2" href="#2">Course 2</a></li>
            <li class="active"><a id="3" href="#3">Course 3</a></li>
            <li class="active"><a id="4" href="#4">Course 4</a></li>
            <li class="active"><a id="5" href="#5">Course 5</a></li>
             </ul> 
               </div>
            <div style="float:left; margin-left: 35px;"> <a  href="/files/upload"><h4>Upload</h4></a></div>
         
        </div>
      </div>
      <div class="row">
        <div class="span3">
          <dl>
            <dt><h4>Semester 1</h4></dt>
            <dd id="it1"></dd>
          <!--  <dd>Програмирование на си</dd>
            <dd>Програмирование на делфи</dd>
            <dd>Субд</dd>
          -->
            <dt><h4>Semester 2</h4></dt>
               <dd id="it0"></dd>
            <!--  <dd>Криптография</dd>
            <dd>Администрирование сетей</dd>
            <dd>Моделирование систем</dd>
             -->
          </dl>
        </div>
        <div class="pull-left span9">
            <table class="files" width=80%">
                <tr align="center">
                    <td ><h4>Description</h4></td>
                    <td><h4>Size</h4></td>
                    <td><h4>Date</h4></td>
                    <td><h4>Uploader</h4></td>
                    <td><h4>Type</h4></td>        
                    <td><h4>Download</h4></td>
                </tr>
         
                 <!--   <tr>
                    <td>Информационные технологии.doc</td>
                    <td>386.7 Kb</td>
                    <td>28 April 2013</td>
                    <td>Сабиров Руслан</td>
                    <td>Задания</td>                    
                </tr>
                  <tr>
                    <td>Информационные технологии.doc</td>
                    <td>386.7 Kb</td>
                    <td>28 April 2013</td>
                    <td>Сабиров Руслан</td>
                    <td>Задания</td>                    
                </tr>
                  <tr>
                    <td>Информационные технологии.doc</td>
                    <td>386.7 Kb</td>
                    <td>28 April 2013</td>
                    <td>Сабиров Руслан</td>
                    <td>Задания</td>                    
                </tr>  -->
                   
                </table>
            
            
        </div>
      </div>
    </div>

