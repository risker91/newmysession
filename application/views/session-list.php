<div style="margin-left:0px;" class="span10">
		
<table  class="table table-condensed">
     
     <thead>
       <tr>
         <th>№</th>
         <th>Название</th>
		 <th>Создатель</th>
		 <th>Участников</th>
		 <th>Предметов</th>
       </tr>
     </thead>
     <tbody>
      <?
   
    foreach ($list as $i=>$val)
    {
     $btn_admin = '(<a style="font-weight: bold;color:green;" href="/id'.$curr_uid.'/session/setting/'.$val['id'].'">настроить</a>)'; 
     print'    <tr>
                   <td>'.++$i.'</td>
                   <td><a href="/id'.$curr_uid.'/session/vision/'.$val['id'].'">'.$val['descr'];if($val['create_user']==$self) print $btn_admin.'</td>
                   <td><a href="/id'.$val['create_user'].'">'.$val['name_create_user']['last_name'].' '.$val['name_create_user']['first_name'].'</a></td>
                   <td>'.$val['count_followers'].'</td>
		   <td>'.$val['count_items'].'</td>
              </tr>
	    ';}?>
      
     </tbody>
   </table>
            </div>
	<div class="span2">
		</div>	


