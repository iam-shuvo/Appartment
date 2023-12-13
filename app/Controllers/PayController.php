<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PayModel;

class PayController extends BaseController
{
    public function index()
    {
        $pay  = new PayModel();
        $data=[
            "page_title"=> "Welcome to Haque Residence",
            "page_heading"=> " Payment History",
            'pays' => $pay->orderBy('p_id',)->paginate(4, 'group'),
            'pager' => $pay->pager,
        ];
        return view('dashboard/page/payment/all-pay', $data);
    }

    public function addpay()
    {
        $pay = new PayModel;
        $data=[
            'page_title'=>'Add pay',
            'page_heading'=>'Create Payment',
        ];

        if($this->request->getMethod()== 'post'){
            $tanent_name = $this->request->getPost('tanent_name');
            $flat = $this->request->getPost('flat');
            $month = $this->request->getPost('month');
            $rent = $this->request->getPost('rent');
            $cost = $this->request->getPost('cost');
            $total = $this->request->getPost('total');
            $paid = $this->request->getPost('paid');
            $due = $this->request->getPost('due');
            $paymeth = $this->request->getPost('paymeth');
            $tx_id = $this->request->getPost('tx_id');
        
            $formData = [
                'tanent_name' => $tanent_name,
                'flat' => $flat,
                'month' => $month,
                'rent' => $rent,
                'cost' => $cost,
                'total' => $total,
                'paid' => $paid,
                'due' => $due,
                'paymeth' => $paymeth,
                'tx_id' => $tx_id,
                
            ];
            
        }
        return View("dashboard\page\payment\addpay", $data);
    }

    public function edit($id){
        $pay = new PayModel();
        $data=[
            "page_title"=> "Add pay",
            "page_heading"=> " Add pay",
            'pay'=> $pay->where('p_id', $id)->first()
        ];
        
        return View("dashboard\page\pay\update_pay", $data);
  
     }

     public function update($id)
    {
        $pay = new PayModel();
        $data=[
            'page_title'=>'Update addpay',
            'page_heading'=>'Update pay',
        ];

        if($this->request->getMethod()== 'post'){
            $tanent_name = $this->request->getPost('tanent_name');
            $flat = $this->request->getPost('flat');
            $month = $this->request->getPost('month');
            $rent = $this->request->getPost('rent');
            $cost = $this->request->getPost('cost');
            $total = $this->request->getPost('total');
            $paid = $this->request->getPost('paid');
            $due = $this->request->getPost('due');
            $paymeth = $this->request->getPost('paymeth');
            $tx_id = $this->request->getPost('tx_id');

            $formData = [
                'tanent_name' => $tanent_name,
                'flat' => $flat,
                'month' => $month,
                'rent' => $rent,
                'cost' => $cost,
                'total' => $total,
                'paid' => $paid,
                'due' => $due,
                'paymeth' => $paymeth,
                'tx_id' => $tx_id,
            ];
           
           return redirect()->to('/dashboard/all_pay');
        }
    }

    public function delete($id){ 
        $pay = new PayModel();
        $data['pay'] = $pay->where('p_id', $id)->delete($id);
        return redirect()->to('/dashboard/all_pay');
    } 
}
