//         foreach ($data['awards'] as $key => $url) {
//                   $data['award       s']['award']=[];
//                    array_push($data['awards'][key],$url);
////                    dump($a);
//                }


//                $data['awards'] = [1,2,3,3];
//                $data['do']=array(1,2,3,4);

//                foreach ($data[''] as $key => $url) {
//                    array_push($data['post']['more']['do'],$data['do'] );

            //数组化回馈的数据
//            $a=explode("&amp;",$data['post']['more']['do']);
//
//            {$data['post']['more']['do']=[];
//
//                    array_push($data['post']['more']['do'],$a );
//            }


//永远都有错误的转化
    if (!empty($data['awards']) ) {
                dump($data['awards']);
                $ye=[];
               $ye=explode("&amp;",$data['awards']);
               $data['awards']=implode($ye);
dump($data['awards']);
            }
