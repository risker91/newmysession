<h1>Настройки профиля</h1>

    


      
   


    <div style="text-align: left;margin-left: 35%;">
        
        
        
           <div style="padding-top: 30px;"> 
        <form method="POST" action="/Settings/changeavatar/">
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;">Изменить аватар:</div></div>
       <input type="FILE">
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;"> &nbsp;</div><div><input type="submit" name="chgavatar" value="Сменить аву"></div></div>    
     
       </form>
             </div>
        
        
        
        
        
        
         <div style="padding-top: 30px;"> 
        <form method="POST" action="/Settings/changelogin/">
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;"> Текущий логин:</div><div> <?=$username?></div></div>
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;"> Новый логин:</div><div>  <input type="text" name="login" ></div></div>
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;"> &nbsp;</div><div><input type="submit" name="chglogin" value="Изменить логин"></div></div>    
       </form>
             </div>
      
        
        
    
     <div style="padding-top: 30px;"> 
        <form method="POST" action="/Settings/changeemail/">
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;">Текущий емайл:</div><div> <?=$email?></div></div>
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;">Новый емайл:</div><div> <input type="text" name="email" value=""></div></div>
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;">&nbsp;</div><div> <input type="submit" name="chgemail" value="Изменить емайл"></div> </div>
        </form>
         </div>
      
        
          <div style="padding-top: 30px;"> 
        <form method="POST" action="/Settings/changesex/">
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;">Пол:</div><div> <?if ($male==1) print 'Мужской'; else print 'Женский'?></div></div>
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;">Сменить:</div><div>
               <select name="sex">
                   <option value="1">Мужской</option>
                    <option value="0">Женкский</option></select>
                    </div></div>
       <div style="padding-top: 8px;"><div style="float: left;width: 150px;">&nbsp;</div><div> <input type="submit" name="chgsex" value="Сменить"></div> </div>
        </form>
         </div>

   
    
       <div style="padding-top: 30px;"> 
        <form method="POST" action="/Settings/ChangePassword/">
        <div style="padding-top: 8px;"><div style="float: left;width: 150px;">Старый пароль:</div> <div style=""><input type="password" name="oldpass" value=""></div></div>
        <div style="padding-top: 8px;"><div style="float: left;width: 150px">Новый пароль: </div><div><input type="password" name="newpass" value=""></div></div>
        <div style="padding-top: 8px;"><div style="float: left;width: 150px">Повторите пароль: </div><div><input type="password" name="repass" value=""></div></div>
        <div style="padding-top: 8px"><div style="float: left;width: 150px">&nbsp;</div><div><input type="submit" name="chgpass" value="Изменить пароль"></div></div>
        </form>
           </div>
        </div>
    
 

    

    
    
