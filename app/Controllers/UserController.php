<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserController extends BaseController
{
    public function alluser()
    {
        $user  = new UserModel();
        $data=[
            "page_title"=> "Welcome to Haque Residence",
            "page_heading"=> " All User",
            'users' => $user->orderBy('user_id',)->paginate(4, 'group'),
            'pager' => $user->pager,
        ];
        return view('dashboard/page/user/all-user', $data);
    }

    public function adduser()
    {
        $user = new UserModel;
        $data=[
            'page_title'=>'Add user',
            'page_heading'=>'Add User',
        ];

        if($this->request->getMethod()== 'post'){
            $name = $this->request->getPost('name');
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $nid = $this->request->getPost('nid');
            $image = $this->request->getFile('file');
            $imageName = $image->getRandomName();

            $formData = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'nid' => $nid,
                'image' => $imageName,
            ];
            $image->move('uploads/img', $imageName);
            $user->insert($formData);
        }
        return View("dashboard\page\user\adduser", $data);
    }

    public function edit($id){
        $users = new UserModel();
        $data=[
            "page_title"=> "Add User",
            "page_heading"=> " Add user",
            'user'=> $users->where('user_id', $id)->first()
        ];
        
        return View("dashboard\page\user\update_user", $data);
  
     }

     public function update($id)
    {
        $user = new UserModel;
        $data=[
            'page_title'=>'Update adduser',
            'page_heading'=>'Update User',
        ];

        if($this->request->getMethod()== 'post'){
            $name = $this->request->getPost('name');
            $username = $this->request->getPost('username');
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');
            $nid = $this->request->getPost('nid');
            $image = $this->request->getFile('file');
            $imageName = $image->getRandomName();

            $formData = [
                'name' => $name,
                'username' => $username,
                'email' => $email,
                'password' => $password,
                'nid' => $nid,
                'image' => $imageName,
            ];
            $image->move('uploads/img', $imageName);
            $user->update($id,$formData);
           return redirect()->to('/dashboard/all_user');
        }
    }

    public function delete($id){ 
        $user = new UserModel();
        $data['user'] = $user->where('user_id', $id)->delete($id);
        return redirect()->to('/dashboard/all_user');
    } 
}
