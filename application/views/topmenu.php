
<script>
$(document).ready(function()
{

	//Обработка события клика по элементу с классом account
	$(".menu").click(function()
	{
		//Получаем значение атрибута data-active текущего элемента
		//(data-active - флаг, отвечающий за отображение выпадающего списка)
		var active = $(this).attr('data-active');

	
		//Если меню было активно, сворачиваем
		if(active == 1)
		{
			$(".submenu").hide();
			$(this).attr('data-active', '0'); 
		}
		//Если было свернуто, разварачиваем
		else
		{
			$(".submenu").show();
			$(this).attr('data-active', '1');
		}
	});

	//Возвращение кнопки мыши в ненажатое состояние:

	//для выпадающего списка
	$(".submenu").mouseup(function()
	{
		return false
	});

	//для кнопки
	$(".menu").mouseup(function()
	{
		return false
	});

	//для всей страницы
	$(document).mouseup(function()
	{
		$(".submenu").hide();
		$(".account").attr('data-active', '');
	});

		
});

</script>


    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          
            
            <div class="dropdown">
	
        
        <div  class="navbar-content">
            <ul class="nav ">
            
                
                <li><a class="menu">MySession</a> </li>
                <li ><a href="/">Home</a></li>
                <li><a href="/id<?=$self?>/session/">Session</a></li>
		<li><a href="/">Group</a></li>
                <li><a href="#">Schedule</a></li>
                <li><a href="/">Files</a></li>
              
              
              
            </ul>
          </div>

	<div class="submenu">
			 <ul class="root ">
         
            
                   <li><a href="#">My Profile</a></li>
                   <li><a href="#">Updates</a></li>
		   <li><a href="/settings">Settings</a></li>
		   <li> <a href="/auth/out">Logout</a></li>
            </ul>
	</div>
        

</div>
            
            
        
        </div>
      </div>
    </div>