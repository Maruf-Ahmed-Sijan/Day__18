<?php


namespace App\Classes;


class Example
{   public $i;
    public $name;
    public $data = [];
    public function index()
    {
//       $this->data = [30, 20.20, 'ak shanto', 'true'];
//      foreach ($this->data as $key => $items)
//      {
//          echo $key.'='. $items.'<br/>';
//      }


        $this->data = [
            0 => [
                'name'  => 'maruf',
                'email' => 'maruf15@gmail.com',
                'phn'   => [
                    'personal' => '01515664932555',
                    ' parents' => '456645856545'
                ],
            ],
            1=>  [
                'name'  => 'xoxo',
                'email' => 'xoxo15@gmail.com',
                'phn'   => [
                    'personal' => '64932555',
                    ' parents' => '46545'
                ],
            ],
            2 => 'bitm',
            3 => [
                'name'  => 'sijan',
                'email' => 'sijan15@gmail.com',
                'phn'   => '0251654654'
            ]
        ];


//        echo $this->data[2]['name'];


    }

}