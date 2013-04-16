
<table>
    <tr>
        <td>Город</td>
        <td>Университет</td>
        <td>Факультет</td>
        <td>Специальность</td>
        <td>Год создания</td>
        <td>Емайл старосты</td>
        
            </tr>
    
<?

        function abvr($str) // косяк с кодировкой изза 2 байтов
        {       
                $str = iconv('utf-8', 'windows-1251', $str);
                $buf='';
                $all=substr_count($str,' ');
                for ($i=0;$i<=$all;$i++){
                $buf .=  mb_convert_encoding( $str[0] , 'utf-8', 'windows-1251');
                $space=strpos($str,' ');
               
                    $str=substr($str,$space+1);
               
                    
                    
                    
                  
                    
                        }
                        return  $buf;
        }

foreach ($apps as $v){
    print '<tr>
        <td>'.$v['city'].'</td>
        <td>'.abvr($v['univer']).'</td>
            <td>'.abvr($v['faculty']).'</td>
                <td>'.abvr($v['spec']).'</td>
                    <td>'.$v['year_create'].'</td>
                        <td>'.$v['email_warden'].'</td>
                            <td><a href="/acceptgroup/'.$v['id'].'">подтвердить</a></td>
            </tr>';
 
    
}



?>
