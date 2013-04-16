<head>

<script>
    
    
    

$(document).ready(function(){
    
      var params = location.href.split('#');
      var gr = $("#mygroup1").text(); 
      var student_id = $('.student_id').attr('id'); 
      
      
  if (params[1]>0){
 getItem(gr,params[1]);
  if (params[2]>0){
     getQuest(params[2]);
  }
  }
  
  

     
        $('a').click(function() {
        
         var course = $(this).attr('id');       
        // var gr = $("#mygroup1").text();        
   
         getItem(gr,course);          
          }); 
         
         
         
         $(".item").live("click", function(){
           
       $(".quest").empty();
       $(".ans").empty();
       
        var item = $(this).attr("id"); 
        $(".item").css('text-decoration','none');
        $(this).css('text-decoration','underline');     
          getQuest(item);
 });
       
                        $('a').live("click", function(){
                            if($(this).attr('class')=='vote')
                          {
                              var answer = $(this).attr('id');
                              var ball = $(this).attr('vote');
                              voteUp(answer, ball);
                          }
                        });
       
       $('.quest p').live("click", function(){
           
        
          var item_id= '';          
          var id_quest = '';          
          id_quest = $(this).attr('id');         
          var str1 = '.otvet'+id_quest; 
          close(window.last,str1);     
          
         item_id = $(this).attr('id');        
        
         
          $.ajax({
                type : "POST",
                data : ({item:item_id}),
                
                url : "/ajax/GetAns",
                dataType : "json",
                success: function(data)
                {
           $(".ans").empty();
              $(".ans").append(data.select);                             
                $(".ans").show();             
                          
                }
         });          
         
         })
          function close(last,next){
            // alert(next);
             $(last).hide();
             $(next).show();   
             window.last = next;
         }
               function send(id, text)
         {
             
                  $.ajax({
                type : "POST",
                data : ({quest_id:id, ans:text, author_id:window.student_id}),
                
                url : "/ajax/SendAns",
                dataType : "json",
                success: function(data)
                {          
          alert('Отправлено')        
                }
         }); 
             
         }
         
          $(".quest a").live("click", function(){
              var cls = $(this).attr("id");             
              var ans = $(".otvet"+cls+" textarea ").val();
              send (cls, ans);
              $(".otvet"+cls+" textarea ").val('');            
              });
          
          
          function voteUp(answer, ball)
         {
             
                  $.ajax({
                type : "POST",
                data : ({answer:answer, ball:ball }),                
                url : "/ajax/voteUp",
                dataType : "json",
                success: function(data)
                {          
          alert('Ваш голос учтен')        
                }
         }); 
             
         }
          
          
          
          function getQuest(item){
                   $.ajax({
                type : "POST",
                data : ({item:item}),
                
                url : "/ajax/getquests",
                dataType : "json",
                success: function(data)
                {
                   var len = data.length;  
                   if (len>0){
                      for (var i = 0; i <= len; i++)
                         {                             
                     $(".quest").append( "<div class='well' ><div class='otvets'><p  id='"+data[i].id+"'>"+(data[i].text)+"\<br>\n\
                        <div class='otvet"+data[i].id+"' id='"+data[i].id+"' style='display:none'>\n\
                        <textarea id='"+data[i].id+"' class='otvet"+data[i].id+"'>ответ</textarea><a id='"+data[i].id+"' \n\
                        href='#send'>отослать</a></div></p></div></div>");                           
                         }  }   }   });  
               }
          
          
          function getItem(gr,course) {              
            
               $.ajax({
                type : "POST",
                data : ({course:course,mygroup:gr}),                
                url : "/ajax/getitems2",
                dataType : "json",
                success: function(data)
                {       
              clear();
              var len = data.length;  
                  for (var i = 0; i <= len; i++)
                      {  
                       $("#it"+(data[i].sem%2)).append( "<p><a href='#"+course+"#"+data[i].id+"' class='item' id='"+(data[i].id)+"'>"+(data[i].item)+"</a></p>");
                       }                          
               }   });    }
          
          function clear(){
               $("#it1").empty();
               $("#it0").empty();
               $(".quest").empty();
               $(".ans").empty();          
          }

});
        
</script></head>








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
        
         
     <div style="float:left;width: 45%;" class="quest"></div>
      <div class='otvet' style='display:none'>
<textarea>ответ
</textarea>
    </div>    
      <div style="float:left;width: 45%;margin-left: 15px;" class="ans"></div>
            
        </div>
      </div>
    </div>


















  
   <div tyle='display:none' class="student_id" id="<?=$student_id?>"></div>