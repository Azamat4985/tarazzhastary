<?php 

    class Culture
    {
        public static function getCultureItemById($id)
        {
            $id = intval($id);

            if($id){
                $db = Db::getConnection();      

                $result = $db->query('SELECT * from culture WHERE id=' . $id);

                $result->setFetchMode(PDO::FETCH_ASSOC);

                $cultureItem = $result->fetch();

                return $cultureItem;
            }
        }

        public static function getCultureList()
        {
            $db = Db::getConnection();

            $cultureList = array();

            $result = $db->query('SELECT id, name_kz, address FROM culture');     

            $i = 0;
            while($row = $result->fetch()){
                $cultureList[$i]['id'] = $row['id'];
                $cultureList[$i]['name_kz'] = $row['name_kz'];
                $cultureList[$i]['address'] = $row['address'];
                $i++;
            }

            return $cultureList;
        }
        public static function getImage($id){
            $noImage = '/img/page/no-image.jpg';

            $path = '/img/culture/';
            $pathToInfoItem = $path . $id . '.jpg';
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathToInfoItem)){
                return $pathToInfoItem;
            }

            return $noImage;
        }
    }

?>