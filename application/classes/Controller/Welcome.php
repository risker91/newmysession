<?php defined('SYSPATH') or die('No direct script access.');class Controller_Welcome extends All {          public $template = 'welcome';           	public function action_index()	{                             $this->template->con = View::factory('welcome-index');        }               /* public function action_auth()	{            $this->template->con = View::factory('welcome-auth');        }        *         */                 public function action_app()	{            $this->template->con = View::factory('welcome-app');        }                    public function action_invite()	{            $this->template->con = View::factory('welcome-invite');        }                     public function action_error()	{                                  $prm = $this->request->param('id');                                  if($prm=='invite')                   {                 $data['msg']='Код уже активировали или он не верен' ;                 }                             $this->template->con = View::factory('error',$data);        }                }