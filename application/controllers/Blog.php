<?php
class Blog extends CI_Controller {

    public function index()
    {
        echo 'Hello World!';
    }
    public function hbook()
    {
        $db=$this->load->database();
        $query = $this->db->query("SELECT user FROM test");
        foreach ($query->result() as $row)
        {
            echo $row->user;
        }
        if ($this->db->simple_query('SELECT user FROM dote'))
        {
            echo "Success!";
        }
        else
        {
            echo "Query failed!";
        }
//        exit;
        $data['title'] = "My Real Title";
        $data['heading'] = "My Real Heading";
        $this->load->view('index',$data);
//        echo 1;
    }
}
