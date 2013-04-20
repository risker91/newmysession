<center>LIST
<p>
    <?
    foreach ($list as $i=>$val)
    {
        $i++;
        print '<p style="width:300px" align="left"><a href="/'.$val['id'].'">№'.$i.') '.$val['descr'].'</a></p>';
        
    }
    
    ?>
    </p>





</center>
