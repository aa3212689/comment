//        $abw=$data['awards'];
//        dump($abw);
//数据奖品数据插入
//        $aw=array();
//        $aw=$data["awards"];
//        $data["awards"]['lai']='来吧';
//$data["awards"]['you']="你好";
//        $data["awards"]['me']="我们";

//        $a3[]=explode("&amp;",$data['awards']);
//        $data["awards"][0]=$a3[0];
//        $data["awards"][1]=$a3[1];
//        $data["awards"][2]=$a3[2];
//        if (!empty($data['awards']) ) {
//               $a=explode("&amp;",$data['awards']);
//               $data['awards']=$a;
//        }

//序列化失败
$arrwo=json_encode($arrw,true);

//曾经经历的痛苦
//if(!empty($data['awards'])){
//            $arrw=explode('&amp',$data['awards']);
//foreach($arrw as $key =>$value){
//    $data['awards'][$key]=$value;
//            dump($arrw);}
//}

//        if (!empty($data['awards'])) {
//            $data['post']['awards']['award'] = [];
//            foreach ($data['awards'] as $key => $url) {
////                $photoUrl = cmf_asset_relative_url($url);
//                array_push($data['post']['more']['awards'], [$key => $url]);
//            }
//        }