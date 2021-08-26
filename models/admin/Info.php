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

        public static function deleteInfoById($id){
            $db = Db::getConnection();

            $sql = 'DELETE FROM info where id= :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }

        public static function createInfo($options){
            $db = Db::getConnection();
            try {
                $db = Db::getConnection();
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }

            $sql = "INSERT INTO info (title, text_short) VALUES (:title, :text_short)";
            $result = $db->prepare($sql);
            $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
            $result->bindParam(':text_short', $options['text_short'], PDO::PARAM_STR);
            if($result->execute()){
                return $db->lastInsertId();
            }
            return 0;
        }
        public static function editInfo($id, $options){
            $db = Db::getConnection();
            try {
                $db = Db::getConnection();
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }

            $sql = "UPDATE info SET title = :title, text_short = :text_short WHERE id = :id";
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_STR);
            $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
            $result->bindParam(':text_short', $options['text_short'], PDO::PARAM_STR);
            return $result->execute();
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