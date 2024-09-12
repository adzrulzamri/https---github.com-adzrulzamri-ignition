<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\TaskModel;

class TaskController extends BaseController
{
    public function index(){
        $taskModel = new TaskModel();
        $data['task'] = $taskModel->findAll();

        #$ktrgn_status = [
           # '0' => 'Pending',
          #  '1' => 'Completed',
         #   '2' => 'In Progress',
        #];

        #$data['status'] = $ktrgn_status;

        return view('login/header')
        .view('dashboard')
        .view('login/footer');
    }
    public function task(){
        return view('login/header')
        .view('task',)
        .view('login/footer');
    }
    public function task_process()
    {
        $taskModel = new TaskModel();
        $title = $this->request->getPost('title');
        $description = $this->request->getPost('description');
        $duedate = $this->request->getPost('duedate');

        $data=[
            'title' => $title,
            "description" => $description,
            "due_date" => $duedate,


        ];

        $taskModel->insert($data);
        session()->setFlashdata('success','Taskupdatesuccessfully');
        return redirect()->to("dashboard");                        
    }
}