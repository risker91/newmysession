<?php

defined('SYSPATH') or die('No direct script access.');

class Model_Item extends Kohana_ORM {

    public function add_item($title, $session_id) {
        $this->title = $title;
        $this->session_id = $session_id;
        $this->save();

        return mysql_insert_id();
    }

    public function getItems($session_id) {
        $res = ORM::factory('item')->where("session_id", "=", $session_id)->find_all();
        return $res;
    }

    function getQuestions($item_id) {
        $item = ORM::factory('question')->where("item_id", "=", $item_id)->find_all();
        return $item;
    }

    public function addQuestions($item_id, $text) {
        $quest = new Model_Question();

        $quest->item_id = $item_id;
        $quest->descr = $text;
        $quest->save();
    }

    function show_answers($quest_id) {
        $ans = ORM::factory('answer')->where("quest_id", "=", $quest_id)->find_all();
        return $ans;
    }

    function addAnswer($quest_id, $answer, $author_id) {
        $ans = new Model_Answer();


        $ans->answer = $answer;
        $ans->mini = substr($answer, 0, 150);
        $ans->quest_id = $quest_id;
        $ans->author_id = $author_id;
        $ans->save();
    }

}