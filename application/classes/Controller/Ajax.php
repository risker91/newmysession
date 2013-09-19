<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller {


     public function action_search() {
         $type   =   Arr::get($_POST, 'type', '');
         $obj    =   Arr::get($_POST, 'sql', '');
         $data = '';
         
         switch ($type) {
             case 'quest': 
                     $res =ORM::factory('question')->where("descr", "Like", "%$obj%")->find_all();
                 foreach ($res as $i => $mas) {
                 $data .= '<p>'.$mas->descr.'</p>';
                   }
                  echo json_encode(array("inf" => $data));
         
                 break;
                 
                 
             case 'people': 
                     $res =ORM::factory('user')->where("first_name", "Like", "%$obj%")->or_where("last_name", "Like", "%$obj%")->limit(5)->find_all();
                 foreach ($res as $i => $mas) {
                 $data .= '<p><a href="/id'.$mas->id.'/"><img width="100" height="100" src="'.$mas->avatar_big.'">'.$mas->last_name.' '.$mas->first_name.'</a></p>';
                   }
                  echo json_encode(array("inf" => $data));
                 break;

             default:
                 break;
         } 
        
         
         
         
         die;
     }
    
    
    public function action_FindGroup() {
        $group = Arr::get($_POST, 'search', '');
        //   print json_encode($group);return;

        $spec = ORM::factory('spec')->where("spec", "Like", "%$group%")->limit(5)->find_all();

        $buf = '';
        foreach ($spec as $i => $mas) {
            $data[$i]['spec'] = $mas->spec;
        }

        echo json_encode($data);
        die;
    }

    public function action_SendMsgWall() {
        
        $sess = Session::instance();
        $wall = new Model_Wall();

        $grid = $sess->get('mygroup');
        $classid = $sess->get('classid');
        $msg = Arr::get($_POST, 'msg', '');
        // print $msg;die;
        if ($msg != '') {
            $arr = $wall->AddPost($msg, $classid, $grid);
            echo json_encode($arr);
        } else {
            echo json_encode('Вы не ввели сообщение');
        }



        die;
    }

    public function action_SendAns() {

        $session = Session::instance();
        //$id_group = $session->get('mygroup');
        $quest_id = Arr::get($_POST, 'quest_id', '');
        $author_id = Session::instance()->get("uid");
        $answer = Arr::get($_POST, 'ans', '');
        
        $ans = htmlspecialchars($answer);
        
        $item = new Model_Item();
        $item->addAnswer($quest_id, $ans, $author_id);

        echo json_encode('ответ добавлен');


      //  $action = 'Добавлен ответ на <a href ="/session/question/' . $quest_id . '">вопрос</a>: ' . $item->idquest($quest_id);
       // $this->goLog1($action, $id_group);

        die;
    }

    public function action_voteUp() {
        $vote = new Model_Vote();
        $user = Session::instance()->get('mygroup');
        $ans_id = Arr::get($_POST, 'answer', '');
        ;
        $ball = Arr::get($_POST, 'ball', '');
        $vote->addVote($ans_id, $user, $ball);
    }

    public function action_GetAns() {
        $session = Session::instance();
        $id_group = $session->get('mygroup');
        $quest_id = Arr::get($_POST, 'item', '');


        $item = new Model_Item();
        $buf_items = '';
$count=0;
        $items = $item->show_answers($quest_id);

        foreach ($items as $mas) {
            $buf_items .= '<pre><p  id="' . $mas->id . '">' . $mas->answer . '...<a href="/session/answer/' . $mas->id . '">=>
                         <p style=""></a><a class="vote" id=' . $mas->id . ' vote="1"  ><img width="50" src="/assets/graph/like.jpg"></a>(12) <a class="vote" id=' . $mas->id . ' vote="-1"   ><img width="50" src="/assets/graph/dislike.png"></a>(1)</p></p></pre>';
            $count++;
        }
      
          if ($count>0)  echo json_encode(array("select" => $buf_items)); else  echo json_encode('none');

        die;
    }

    public function action_GetQuests() {
        $item_id = Arr::get($_POST, 'item', '');
        $item = new Model_Item();
        $quest = $item->getQuestions($item_id);
        $data = null;
$count=0;
        foreach ($quest as $i => $mas) {
            $data[$i]['id']      = $mas->id;
            $data[$i]['text']    = $mas->descr;
            $count++;
        }
      if ($count>0)  echo json_encode($data); else  echo json_encode('none');

        die;
    }

    public function action_getFiles() {
        $file = new Model_File();
        $item_id = Arr::get($_POST, 'item', '');
        $files = $file->getFiles($item_id);
        $data = null;
        foreach ($files as $i => $mas) {
            $data[$i]['id'] = $mas->id;
            $data[$i]['descr'] = $mas->descr;
            $data[$i]['date'] = $mas->date;
            $data[$i]['uploader'] = $mas->uploader;
            $data[$i]['type'] = $mas->type;
            $data[$i]['size'] = $mas->size;
        }

        echo json_encode($data);
        die;
    }

    public function action_getItems2() {
        $group_id = Arr::get($_POST, 'mygroup', '');
        $course = Arr::get($_POST, 'course', '');

        $data = null;
        $item = new Model_Item();


        $items = $item->getItemsCourse($group_id, $course);

        foreach ($items as $i => $mas) {
            $data[$i]['id'] = $mas->id;
            $data[$i]['item'] = $mas->title;
            $data[$i]['sem'] = $mas->semestr;
        }



        echo json_encode($data);

        die;
    }

    public function action_GetItems() {
        $group_id = Session::instance()->get('mygroup');
        $semestr = Arr::get($_POST, 'semestr', '');
        $data = null;
        $item = new Model_Item();

        $items = $item->show_items($semestr, $group_id);

        foreach ($items as $i => $mas) {
            $data[$i]['id'] = $mas->id;
            $data[$i]['item'] = $mas->title;
        }
        if ($data == NULL)
            $data = 'none';
        echo json_encode($data);

        die;
    }

    public function action_Get() {
        //session_start();
        $type = Arr::get($_POST, 'type', '');
        // $id = Arr::get($_POST, 'id', '');
        $year = Arr::get($_POST, 'val', '');
        $buf = '';
        $buf1 = '';

        switch ($type) {

            case 'year':


                $group = new Model_Group();
                $result = $group->only_year($year);
                $spec = $group->GetSpecYear($year);
                $buf = '<option >Выбирите Специальность</option>';



                foreach ($result as $i => $v) {
                    $buf1 = $buf1 . '<p><a href="/group' . $v['id'] . '">' . $v['univer'] . ' ' . $v['spec'] . ' ' . $v['year_in'] . '</a></p>';
                }

                foreach ($spec as $i => $v) {
                    $buf = $buf . '<option value="' . $v->specs->id . '">' . $v->specs->spec . '</option>';
                }








                echo json_encode(array("select" => $buf, "find" => $buf1));
                break;

                die;
        }
    }

}