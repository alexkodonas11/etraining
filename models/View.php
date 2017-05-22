<?php

class View
{
    public function render($filename, $data = null)
    {
        if ($data) {
            foreach ($data as $key => $value) {
                $this->{$key} = $value;
            }
        }
        require Config::get('base_dir').'views/header.php';
        require Config::get('base_dir').'views/'.$filename . '.php';
        require Config::get('base_dir').'views/footer.php';
    }
    public function renderJSON($data)
    {
        header("Content-Type: application/json");
        echo json_encode($data);
    }
    public function encodeHTML($str)
    {
        return htmlentities($str, ENT_QUOTES, 'UTF-8');
    }
}