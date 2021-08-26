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

            $i = 0;
            while($row = $result->fetch()){
                $sportList[$i]['id'] = $row['id'];
                $sportList[$i]['name_kz'] = $row['name_kz'];
                $sportList[$i]['address'] = $row['address'];
                $i++;
            }

            return $sportList;
        }

        public static function deleteSportById($id){
            $db = Db::getConnection();

            $sql = 'DELETE FROM sport where id= :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }

        public static function createSport($options){
            $db = Db::getConnection();
            try {
                $db = Db::getConnection();
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }

            $sql = "INSERT INTO sport (name_kz, name_rus, address, square, tel_number, email, instagram, facebook, shift_start, shift_end, charge_kz, charge_rus) VALUES (:name_kz, :name_rus, :address, :square, :tel_number, :email, :instagram, :facebook, :shift_start, :shift_end, :charge_kz, :charge_rus)";
            $result = $db->prepare($sql);
            $result->bindParam(':name_kz', $options['name_kz'], PDO::PARAM_STR);
            $result->bindParam(':name_rus', $options['name_rus'], PDO::PARAM_STR);
            $result->bindParam(':address', $options['address'], PDO::PARAM_STR);
            $result->bindParam(':square', $options['square'], PDO::PARAM_STR);
            $result->bindParam(':tel_number', $options['tel_number'], PDO::PARAM_INT);
            $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
            $result->bindParam(':instagram', $options['instagram'], PDO::PARAM_STR);
            $result->bindParam(':facebook', $options['facebook'], PDO::PARAM_STR);
            $result->bindParam(':shift_start', $options['shift_start'], PDO::PARAM_INT);
            $result->bindParam(':shift_end', $options['shift_end'], PDO::PARAM_INT);
            $result->bindParam(':charge_kz', $options['charge_kz'], PDO::PARAM_STR);
            $result->bindParam(':charge_rus', $options['charge_rus'], PDO::PARAM_STR);
            if($result->execute()){
                return $db->lastInsertId();
            }
            return 0;
        }

        public static function editSport($id, $options){
            $db = Db::getConnection();
            try {
                $db = Db::getConnection();
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }

            $sql = "UPDATE sport SET name_kz = :name_kz, name_rus = :name_rus, address = :address, square = :square, tel_number = :tel_number, email = :email, instagram = :instagram, facebook = :facebook, shift_start = :shift_start, shift_end = :shift_end, charge_kz = :charge_kz, charge_rus = :charge_rus WHERE id = :id";
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_STR);
            $result->bindParam(':name_kz', $options['name_kz'], PDO::PARAM_STR);
            $result->bindParam(':name_rus', $options['name_rus'], PDO::PARAM_STR);
            $result->bindParam(':address', $options['address'], PDO::PARAM_STR);
            $result->bindParam(':square', $options['square'], PDO::PARAM_STR);
            $result->bindParam(':tel_number', $options['tel_number'], PDO::PARAM_INT);
            $result->bindParam(':email', $options['email'], PDO::PARAM_STR);
            $result->bindParam(':instagram', $options['instagram'], PDO::PARAM_STR);
            $result->bindParam(':facebook', $options['facebook'], PDO::PARAM_STR);
            $result->bindParam(':shift_start', $options['shift_start'], PDO::PARAM_INT);
            $result->bindParam(':shift_end', $options['shift_end'], PDO::PARAM_INT);
            $result->bindParam(':charge_kz', $options['charge_kz'], PDO::PARAM_STR);
            $result->bindParam(':charge_rus', $options['charge_rus'], PDO::PARAM_STR);
            return $result->execute();
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