<?php 

    class Info
    {
        public static function getInfoItemById($id)
        {
            $id = intval($id);

            if($id){
                $db = Db::getConnection();      

                $result = $db->query('SELECT * from info WHERE id=' . $id);

                $result->setFetchMode(PDO::FETCH_ASSOC);

                $infoItem = $result->fetch();

                return $infoItem;
            }
        }

        public static function getInfoList()
        {
            $db = Db::getConnection();

            $infoList = array();

            $result = $db->query('SELECT id, title, text_short FROM info');    
            // print_r('fdfd'.$result);       

            $i = 0;
            while($row = $result->fetch()){
                $infoList[$i]['id'] = $row['id'];
                $infoList[$i]['title'] = $row['title'];
                $infoList[$i]['text_short'] = $row['text_short'];
                $i++;
            }

            return $infoList;
        }
        public static function getImage($id){
            $noImage = '/img/page/no-image.jpg';

            $path = '/img/info/';
            $pathToInfoItem = $path . $id . '.jpg';
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathToInfoItem)){
                return $pathToInfoItem;
            }

            return $noImage;
        }
    }

?>