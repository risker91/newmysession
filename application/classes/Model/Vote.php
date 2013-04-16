<?php defined('SYSPATH') or die('No direct script access.');

class Model_Vote extends Kohana_ORM
{
    
    public function addVote($id_answer,$id_user,$ball)
    {
        $this->id_answer = $id_answer;
        $this->id_user = $id_user;
        $this->vote = $ball;
        $this->save();        
    }
}