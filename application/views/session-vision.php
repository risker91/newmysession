<div  class="span10"  style="margin-left: 0px;margin-right: 0px;margin-bottom: 5px;width:950px;">    
    <button onclick="location.href='/id<?=$curr_uid?>/session/vision/<?=$curr_sess?>'"  style="width:100%;height:40px;margin-left: 5px;background-color: #fde910;border: 0px;" 
            style=""  class="btn btn-large btn-block " type="button"><?=$info['descr']?></button>
</div>
<head>

    <script>
    
   

        $(document).ready(function(){
    

  
           
         
         
         
            $(".btn").click(function(){
                if($(this).attr('id')=='item')
                {
                      $("#quest").empty();
                      $("#ans").empty();
       
                    var item = $(this).attr("item"); 
      
                    $(window.prev).css("border","none");
                    //$(this).attr('class','btn btn-large btn-block btn-primary');  
                    $(this).css("border","solid black 1px");
                    window.prev = $(this);
      
                    getQuest(item);
                }
            });
       
            $('a').live("click", function(){
                if($(this).attr('class')=='vote')
                {
                    var answer = $(this).attr('id');
                    var ball = $(this).attr('vote');
                    voteUp(answer, ball);
                }
            });
       
            $('pre').live("click", function(){
                
                if($(this).attr('class')=='quest') {
               
                var id_quest = $(this).attr('id');    
                
                $(window.ans).css("border", "none");
                $(this).css("border", "solid black 1px")
                window.ans = $(this);
                var str1 = '.otvet'+id_quest; 
                close(window.last,str1);     
          
               // item_id = $(this).attr('id');        
        
         
                $.ajax({
                    type : "POST",
                    data : ({item:id_quest}),
                
                    url : "/ajax/GetAns",
                    dataType : "json",
                    success: function(data)
                    {
                        $("#ans").empty();
                        if(data=='none') {$("#ans").append("<pre>Вопросы отсутствуют</pre>");return; }
                        $("#ans").append(data.select);                             
                        $("#ans").show();             
                          
                    }
                });          
                }
            });
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
                    data : ({quest_id:id, ans:text}),
                
                    url : "/ajax/SendAns",
                    dataType : "json",
                    success: function(data)
                    {          
                        alert(data)        
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
                        if(data=='none') {$("#quest").append("<pre>Вопросы отсутствуют</pre>");return; }
                     
                        
                        var len = data.length;
                        
                        if (len>0){
                            for (var i = 0; i <= len; i++)
                            {                             
                                $("#quest").append( "<pre class='quest' id='"+(data[i].id)+"'><p>"+(data[i].text)+"<div class='otvet"+data[i].id+"' id='"+data[i].id+"' style='display:none'><textarea id='"+data[i].id+"' class='otvet"+data[i].id+"'>ответ</textarea><a id='"+data[i].id+"'href='#send'>отослать</a></div></p></pre>");                           
                            } 
                                    } 
                       
                                                    
                                                    
                    }   });  
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
                                           if(data=='none') {$("#quest").append("<pre>Вопросы отсутствуют</pre>");return; }
                                            var len = data.length;  
                                            for (var i = 0; i <= len; i++)
                                            {  
                                                $("#it"+(data[i].sem%2)).append( "<p><a href='#"+course+"#"+data[i].id+"' class='item' id='"+(data[i].id)+"'>"+(data[i].item)+"</a></p>");
                                            }                          
                                        }   });    }
          
                                function clear(){                                  
                                    $(".quest").empty();
                                    $(".ans").empty();          
                                }

                            });
        
    </script></head>

<div  class="span12" style="margin-left: 5px;width: 55%;">
    <div class="span4">
       <? if($is_sub) {?>
        <button onclick="location.href='/id<?=$curr_uid?>/session/unsubbsess/<?=$curr_sess?>'"  style="height:40px;background-color: #34c924;border: 0px;"  class="btn btn-large btn-block " type="button">Отписаться</button>
          <? }
          else { ?> 
        <button onclick="location.href='/id<?=$curr_uid?>/session/subbsess/<?=$curr_sess?>'"  style="height:40px;background-color: #34c924;border: 0px;"  class="btn btn-large btn-block " type="button">Подписаться</button>
        <?}?>
    </div>
    <div class="span4"  >
         <? if($is_follow) {?>
             <? if($is_admin) {?>
               <button  style="width:100%;height:40px;margin-left: 5px;background-color: #42aaff;border: 0px;"
                        onclick="location.href='/id<?=$curr_uid?>/session/setting/<?=$curr_sess?>'"  class="btn btn-large btn-block " type="button">Настройка</button>
                           <? } else {?>
                               <button  style="width:100%;height:40px;margin-left: 5px;background-color: #42aaff;border: 0px;" onclick="location.href='/id<?=$curr_id?>/session/enter/<?=$curr_sess?>'"  class="btn btn-large btn-block " type="button">Покинуть</button>
                                  <? }?>
               
        <? } else {?>
        <button  style="width:100%;height:40px;margin-left: 5px;background-color: #42aaff;border: 0px;" onclick="location.href='/id<?=$curr_uid?>/session/enter/<?=$curr_sess?>'"  class="btn btn-large btn-block " type="button">Войти</button>    
        <? } ?>
    </div>
    <div class="span4" >
        <button onclick="location.href='/id<?=$curr_uid?>/session/followers/<?=$curr_sess?>'"  style="width:100%;height:40px;margin-left: 5px;
                background-color: #ea8df7;border: 0px;" style=""  class="btn btn-large btn-block " type="button">Участники</button>
    </div> 
</div>
<div  style="float:left;margin-left: 7px;width:310px;position: relative">
      <button  style="width:100%;height:40px;margin-left: 5px;background-color: #ea7500;border:0px;"   class="btn btn-large btn-block " type="button">Карма: +100500</button>
    
</div>

<div  class="span11" style="margin-left: 5px;">
<div style="margin-left: 0px;padding-left: 0px;" class="span3">
    <br>
    <?
    foreach ($items as $item) {
        print ' <p style="text-align:left;"><button id="item" item="' . $item->id . '" class="btn btn-large btn-block " type="button">' . $item->title . '</button></p>';
    }
    ?>

</div>


<br>
<div id="quest" class="span5">


</div>




<div id="ans" class="span3">

</div>

</div>

