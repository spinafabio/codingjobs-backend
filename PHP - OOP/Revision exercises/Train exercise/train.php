<?php

class Train
{
    public $id;
    public $dep_time;
    public $arr_time;
    public $delay;

    public function __construct($id, $arr_time, $delay)
    {
        $this->delay = 0;
        $this->dep_time = 6;
    }

    //SET AND GET METHOD

    public function set_id(int $id)
    {
        $this->id = $id;
    }

    public function get_id($id)
    {
        return $this->id = $id;
    }

    public function set_departure($dep_time)
    {
        $this->dep_time = $dep_time;
    }

    public function get_departure($dep_time)
    {
        return $this->dep_time = $dep_time;
    }

    public function set_arrive($arr_time)
    {
        $this->arr_time = $arr_time;
    }

    public function get_arrive($arr_time)
    {
        return $this->arr_time = $arr_time;
    }

    public function set_delay(int $delay)
    {
        $this->delay = $delay;
    }

    public function get_delay($delay)
    {
        return $this->delay = $delay;
    }

    public function getTime()
    {
        $rand = rand(4, 5);
        if ($rand === 4) {
            return "<p style='color:green'>" . $this->dep_time . '<p>';
        } else
            return "<p style='color:red'>" . 'not late' . '<p>';
    }
}
