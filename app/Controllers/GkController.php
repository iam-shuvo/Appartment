<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GkModel;

class GkController extends BaseController
{
    public function index()
    {
        $gk = new  GkModel();
        $data =[
            "page_title" => "Gatekeeper Database",
            "page_heading" => "Gatekeeper",
            'gks' => $gk->orderBy('gk_id')->paginate(4,'group'),
            'pager' => $gk->pager,


        ];
        return view('dashboard/page/gatekeeper/all-gk', $data);
    }

    public function addgk(){

        $gk = new GkModel;
        $data=[
            'page_title'=> 'Add gk',
            'page_heading'=>'Add Gatekeeper',

        ];
        if($this->request->getMethod()=='post'){
            $name = $this->request ->getPost('name');
            $address = $this->request ->getPost('address');
            $phone = $this->request ->getPost('phone');
            $nid = $this->request ->getPost('nid');
            $shift = $this->request ->getPost('shift');
            $status = $this->request ->getPost('status');
            $image = $this->request ->getFile('file');
            $imageName = $image->getRandomName();
            

            $formData =[
                'name' => $name,
                'address' => $address,
                'phone' => $phone,
                'nid' => $nid,
                'shift' => $shift,
                'status' => $status,
                'image' => $imageName,
            ];

            $image->move('uploads/img', $imageName);
            $gk->insert($formData);
        
        }

        return View("dashboard\page\gatekeeper\addgk", $data);
}

public function edit($id){
    $gks= new GkModel();
    $data=[
        "page_title"=> "Add Gk",

        "page_heading"=> "Add gk",

        'gk'=> $gks-> where('gk_id',$id)->first()
    ];

    return View ("dashboard\pages\gatekeeper\update_gk",$data);
}


    public function update($id){
    $gk = new GkModel;
    $data=[
        'page_title'=> 'Add addgk',
        'page_heading'=>'Add Gatekeeper',

    ];
    if($this->request->getMethod()=='post'){
        $name = $this->request ->getPost('name');
        $address = $this->request ->getPost('address');
        $phone = $this->request ->getPost('phone');
        $nid = $this->request ->getPost('nid');
        $shift = $this->request ->getPost('shift');
        $status = $this->request ->getPost('status');
        $image = $this->request ->getFile('file');
        $imageName = $image->getRandomName();
        

        $formData =[
            'name' => $name,
            'address' => $address,
            'phone' => $phone,
            'nid' => $nid,
            'shift' => $shift,
            'status' => $status,
            'image' => $imageName,
        ];

        $image->move('uploads/img', $imageName);
        $gk->update($id,$formData);
        return redirect()->to('/dashboardpage/all_gk');
    
}

    
}

public function delete($id){
    $gk = new GkModel();
    $data['gk'] = $gk->where('gk_id',$id)->delete($id);
    return redirect()->to('/dasboard/all_gk');
}
}
