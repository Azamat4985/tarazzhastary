<?php 

    class Sport
    {
        public static function getSportItemById($id)
        {
            $id = intval($id);

            if($id){
                $db = Db::getConnection();      

                $result = $db->query('SELECT * from sport WHERE id=' . $id);

                $result->setFetchMode(PDO::FETCH_ASSOC);

                $sportItem = $result->fetch();

                return $sportItem;
            }
        }

        public static function getSportList()
        {
            $db = Db::getConnection();

            $sportList = array();

            $result = $db->query('SELECT id, name_kz, address FROM sport');    
            // print_r('fdfd'.$result);       

            $i = 0;
            while($row = $result->fetch()){
                $sportList[$i]['id'] = $row['id'];
                $sportList[$i]['name_kz'] = $row['name_kz'];
                $sportList[$i]['address'] = $row['address'];
                $i++;
            }

            return $sportList;
        }
        public static function getImage($id){
            $noImage = '/img/page/no-image.jpg';

            $path = '/img/sport/';
            $pathToInfoItem = $path . $id . '.jpg';
            if(file_exists($_SERVER['DOCUMENT_ROOT'].$pathToInfoItem)){
                return $pathToInfoItem;
            }

            return $noImage;
        }
    }

?>