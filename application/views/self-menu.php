   <div id="charms" class="win-ui-dark">
   
      <div id="theme-charms-section" class="charms-section">
         <div class="charms-header">
            <a href="#" class="close-charms win-command">
               <span class="win-commandimage win-commandring">&#xe05d;</span>
            </a>
            <h2>Settings</h2>
         </div>
          
          
           <div class="span12">
   
               <form class="">
                   <h3 style="color:white">Поиск:</h3>   <br>           
                  <p style="font-size: 15px;"><a href="/id<?=$usr['id']?>/search">Найти что нибудь</a></p>
                   
                  
               </form>
   
            </div>
   
         <div class="row-fluid">
            <div class="span12">
   
               <form class="">
                   <h4 style="color:white">Изменение текущей сессии:</h4>   
                   <br>
                  <input type="text" disabled value="Первая тестовая">
                  <select id="win-theme-select" class="">
                     <option value="lol">Первая тестовая</option>
                     <option value="lol">Вторая тестовая сессия</option>
                   </select>
               </form>
   
            </div>
         </div>
           <div class="row-fluid">
            <div class="span12">
   
               <form class="">
                   <h3 style="color:white">Меню сессий:</h3>   <br>           
                  <p style="font-size: 15px;"><a href="/id<?=$usr['id']?>/session/create">Создать сессию</a></p>
                   <p style="font-size: 15px;"><a href="/id<?=$usr['id']?>/session">Список сессий </a></p>
                  
               </form>
   
            </div>
         </div>
      </div>   
   </div>
   