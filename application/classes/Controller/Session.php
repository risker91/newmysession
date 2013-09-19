<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Session extends All {

    public function before() {
        $sess = new Model_Session();
        $this->curr_sess = $this->request->param('pr');
        $this->sess_info=  $sess->getSession($this->curr_sess);
        parent::before();
        if ($this->auto_render) {
            
        }
    }

    public function action_index() {
        $sess = new Model_Session();
        // var_dump($sess->loadSess($this->curr_uid));
        $data['list'] = $sess->loadSess($this->curr_uid);
        $data['curr_uid'] = $this->curr_uid;
        $data['curr_sess'] = $this->curr_sess;
        $data['self'] = $this->uid;
       
        $this->template->modul = View::factory('session-list', $data);
    }
    
    public function action_followers() {
        $sess = new Model_Session();
        
        $data['followers'] = $sess->getFollowers($this->curr_sess);
        $data['curr_uid'] = $this->curr_uid;
        $data['curr_sess'] = $this->curr_sess;
        
        $this->template->modul = View::factory('session-followers', $data);
    }

    public function action_create() {
        
        $sess = new Model_Session();
        if (isset($_POST['create'])) {
            $title = Arr::get($_POST, 'session', '');     //Добавить валидацию!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!             
            $sess->createSess($this->uid, $title);
            $this->redirect('/id' . $this->curr_uid . '/session/');
        }
        // $session->createSess($this->uid);  

        $this->template->modul = View::factory('session-create');
    }

    public function action_learning() {
        $data['group_id'] = $this->request->param('group');
        //  print $this->request->param('group');die;
        $data['student_id'] = Session::instance()->get('classid');

        $this->template->modul = View::factory('session-choose-semestr', $data);
    }

    public function action_answer() {

        $sess = new Model_Msession();
        $ans_id = $this->request->param('id');
        //      $data['quest']= $sess->loadQuestion($ans_id);
        $data['ans'] = $sess->getOneAns($ans_id);
        $data['quest'] = $sess->getQuest($ans_id);
        $this->template->modul = View::factory('session-answer', $data);
    }

    public function action_question() {

        $sess = new Model_Msession();

        $quest_id = $this->request->param('id');
        $data['quest'] = $sess->loadQuestion($quest_id);
        $data['ans'] = $sess->loadAns($quest_id);
        $data['group_id'] = $this->id_group;

        $this->template->modul = View::factory('session-question', $data);
    }

    public function action_setting() {
        $data = array();
        
       
        $data['curr_uid'] = $this->curr_uid;
        $data['curr_sess'] = $this->curr_sess;
        $data['sess'] = $this->curr_sess;
        $data['info'] = $this->sess_info;
        


        $this->template->modul = View::factory('session-settings', $data);
    }

    public function action_listitem() {
        $item = new Model_Item();

        $data['items'] = $item->getItems($this->curr_sess);
        $data['sid'] = $this->curr_sess;
        $data['curr_uid'] = $this->curr_uid;

        $this->template->modul = View::factory('session-listitem', $data);
    }

    public function action_addquest() {
        $count_quest = 0;
        $item = new Model_Item();

        if (isset($_POST['ok'])) {
            $item_id = Arr::get($_POST, 'item', '');

            if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {
                $count_quest = $this->quest_import($_FILES["filename"]["tmp_name"], $item_id);
                $data['quest'] = $count_quest;
            }
        }

        $data['items'] = $item->getItems($this->curr_sess);
        $data['sid'] = $this->curr_sess;
        $data['curr_uid'] = $this->curr_uid;

        $this->template->modul = View::factory('session-addquest', $data);
    }

    public function action_enter() {

        $sess = new Model_Session();
        $sess->enter_in($this->uid, $this->curr_sess);

        $this->redirect($_SERVER['HTTP_REFERER']);
    }
    
    public function action_unsubbsess() {
        $sess = new Model_Session();  
        $subId = $sess->getSub($this->uid, 'session', $this->curr_sess);
        $sess->deleteSub($subId);
        
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_subbsess() {
        
        $sess = new Model_Session();  
        $type   = 'session';
        $target = $this->curr_sess;
        $sess->addSub($this->uid, $type, $target);

        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_vision() {

        $item = new Model_Item();
        $sess = new Model_Session();

        $session_id = $this->request->param('pr'); //id123/session/vision/1

        $data['items'] = $item->getItems($session_id);
        $data['curr_uid'] = $this->curr_uid;
        $data['info'] = $this->sess_info;
        $data['curr_sess'] = $this->curr_sess;
        $data['is_follow'] = $sess->is_follow($this->uid, $this->curr_sess);
        $data['is_admin'] = $sess->is_admin($this->uid, $this->curr_sess);
        $data['is_sub'] = $sess->is_sub($this->uid, 'session', $this->curr_sess);
        

        $this->template->modul = View::factory('session-vision', $data);
    }

    public function action_additem() {

        if (isset($_POST['additem'])) {
            $item = new Model_Item();
            
        $f = fopen($_FILES["filename"]["tmp_name"], 'rb');        
        $contents = fread($f, sizeof($f));
        fclose($f);

            $sess_id = $this->request->param('pr');

            $title = Arr::get($_POST, 'item', ''); //ВАЛИДАЦИЯ!!!!!!!!!!!!!!!!!!!!!!!!!!!
            $item_id = $item->add_item($title, $sess_id);

            if (is_uploaded_file($_FILES["filename"]["tmp_name"])) {
                $count_quest = $this->quest_import($_FILES["filename"]["tmp_name"], $item_id);
                $data['quest'] = $count_quest;
            }
            $this->redirect($_SERVER['HTTP_REFERER']);

            // $action ='Добавлен предмет '.$title.' в '.$semestr.' семестр';                
            // $this->goLog($action, $this-> time, $this->id_group); ДОБАВИТЬ ФУНКЦИЮ ЛОГИРОВАНИЯ !!!!!!!!!!!!!!!!!!
        }
        $data['sid'] = $this->curr_sess;
        $data['curr_uid'] = $this->curr_uid;
        $this->template->modul = View::factory('session-additem', $data);
    }

    private function quest_import($path, $item_id) {
        $lol = 0;
        $item = new Model_Item();
        $fp = fopen($path, 'rt');

        if ($fp) {
            while (!feof($fp)) {
                $mytext = fgets($fp, 999);
                $word = trim($mytext);

                try {
                    $word = iconv("windows-1251", "utf-8", $word);
                } catch (Exception $e) {
                    $e->getMessage();
                }
                // print $word.'('.strlen($word).')<br>';
                //  echo mb_detect_encoding($word).'<br>';
                if ($word != '') {
                    $item->addQuestions($item_id, $word);
                    $lol++;
                }
            }
        }
        else
            echo "Ошибка при открытии файла";
        fclose($fp);
        return $lol;
    }

}