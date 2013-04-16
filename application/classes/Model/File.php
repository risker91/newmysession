<?php defined('SYSPATH') or die('No direct script access.');

class Model_File extends Kohana_ORM
{
    function getFiles($item_id)
    {
        $res = $this->where("item_id", "=",$item_id)->find_all()->as_array();
        
        
    /*  $res =  DB::select('files.title')   
                  ->join('items')->on("files.item_id", "", "items.id")
                    ->where('files.item_id','=',$item_id)   
                      ->execute()
                    ->as_array();    
     * 
     */
        
        return $res;       
        
    }
    

    
    
    function genName()
    {
        return $res = rand(1000000000,9999999999);
        
    }
    
    
    
    
       function addFile($author,$type,$item,$desc,$size,$name)
    {
       $file=$this;
       $file->name=$name;
       $file->descr=$desc;
       $file->type=$type;
       $file->item_id=$item;
       $file->size=round($size/1024);
       $file->uploader=$author;
       $file->public=1;
       
       $file->save();
        
    }
    
    
}

