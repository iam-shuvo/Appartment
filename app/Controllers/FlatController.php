<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\FlatModel;

class FlatController extends BaseController
{
    public function index()
    {
        $flat  = new FlatModel();
        $data=[
            "page_title"=> "Welcome to Haque Residence",
            "page_heading"=> " All Flat",
            'users' => $flat->orderBy('user_id',)->paginate(4, 'group'),
            'pager' => $flat->pager,
        ];
        return view("dashboard/page/flat/all-flat", $data);
    }
    public function  addflat(){

        
        $flat = new FlatModel();
        $data=[
            'page_title'=>'Add Flat',
            'page_heading'=>'Add Flat',
        ];

        if($this->request->getMethod()== 'post'){
            $flat_id = $this->request->getPost('flat_id');
            $flat_size = $this->request->getPost('flat_size');
            $rent = $this->request->getPost('rent');
            $status = $this->request->getPost('status');
            

            $formData = [
                'flat_id' => $flat_id,
                'flat_size' => $flat_size,
                'rent' => $rent,
                'status' => $status,
            ];
           
            $flat->insert($formData);
        }
        return View("dashboard\page\flat\addflat", $data);
    }
}
