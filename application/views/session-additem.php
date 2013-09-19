<!--<center><form method="POST" >
<input type="text" name="title" value="Название"><br>
 <input type="submit" value="Создать" name="additem">
 </form>
    </center>

!-->


<div class="span12"><a href="/id<?=$curr_uid?>/session/setting/<?=$sid?>">Меню</a>->Мастер Добавления предмета    </div><br>
<center>
		<div id="demoWrapper">
			<h3>Мастер добавления предмета</h3>
						<hr />
			<h5 id="status"></h5>
			<form id="demoForm" method="post" enctype="multipart/form-data" class="bbq">
				<div id="fieldWrapper">
				<div class="step" id="first">
					<span class="font_normal_07em_black">Шаг 1 - Предмет</span><br />
					<br>
					<label>Укажите название предмета  </label>
					<input type="text" name="item">
					
					<br />
				</div>
				<div id="sweden" class="step submit_step">
					<span class="font_normal_07em_black">Шаг 2 - Вопросы</span><br />
								<br>
								<label>Выберите файл с вопросами</label><br>
								<input type="file" name="filename"><br> 
				</div>
				
				
				</div>
				<div id="demoNavigation"> 							
					<input class="navigation_button" id="back" value="Back" type="reset" />
					<input class="navigation_button" id="next" value="Next" name="additem" type="submit" />
				</div>
			</form>
			<hr />
			
			<p id="data"></p>
		</div>

	
 <script type="text/javascript" src="/assets/step/js/jquery.form.js"></script>
 <script type="text/javascript" src="/assets/step/js/jquery-ui-1.8.5.custom.min.js"></script>
 <script type="text/javascript" src="/assets/step/js/jquery.form.wizard.js"></script>
    
    <script type="text/javascript">
$(document).ready(function(){
    var $j = jQuery.noConflict();
			$(function(){
				$("#demoForm").formwizard({ 
				 	formPluginEnabled: true,
				 	validationEnabled: true,
				 	focusFirstInput : true,
				 	formOptions :{
						
				 	}	
				 }
				);
  		});
});
    </script>
    </center>