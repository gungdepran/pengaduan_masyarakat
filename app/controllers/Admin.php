<?php
class Admin extends Controller
{
    public function index()
    {
        $users = $this->model('admin_models')->getAllUsers();
        $data = [
            'title' => 'admin',
            'users' => $users,
        ];

        $this->view('home');
    }
}
