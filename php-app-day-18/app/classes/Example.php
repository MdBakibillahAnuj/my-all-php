<?php


namespace App\classes;


class Example
{
    public $name;
    public $data = [];
    public function index()
    {
//       $this->data = [10, 20, 30, 'BITM', 'BASIS', 100.200, true];
////       echo $this->data[5];
//       foreach ($this->data as $key => $item)
//       {
//           echo $key.' '.$item.'<br/> ';
//       }
        $this->data = [
            0 =>[
                'name' => 'Sagor',
                'email' => 'sagor@gmail.com',
                'mobile' => [
                    'personal' => '123456',
                    'parent' => '234567'
                ],
            ],
            1 =>[
                'name' => 'Faisal',
                'email' => 'faisal@gmail.com',
                'mobile' => [
                    'personal' => '345678',
                    'parent' => '456789'
                ],
            ],
            2 => 'BITM',
            3 => [
                'name' => 'Sojib',
                'email' => 'sojib@gmail.com',
                'mobile' => '56465456'
            ]
        ];
//       foreach ($this->data as $item)
//       {
//           if (is_array($item))
//           {
//               foreach ($item as $value)
//               {
//                   if (is_array($value))
//                   {
//                       foreach ($value as $v_value)
//                       {
//                           echo $v_value.'<br/>';
//                       }
//                   }
//                   else
//                   {
//                       echo $value.'<br/>';
//                   }
//               }
//           }
//           else
//           {
//               echo $item;
//           }
//            echo '<br/>';
//       }
//        echo '<pre>';
////        print_r($this->data);
//        var_dump($this->data);
    }
}