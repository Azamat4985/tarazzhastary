<?php 

    class Projects
    {
        public static function getProjectsItemById($id)
        {
            $id = intval($id);

            if($id){
                $db = Db::getConnection();      

                $result = $db->query('SELECT * from projects WHERE id=' . $id);

                $result->setFetchMode(PDO::FETCH_ASSOC);

                $projectsItem = $result->fetch();

                return $projectsItem;
            }
        }

        public static function getProjectsList()
        {
            $db = Db::getConnection();

            $projectsList = array();

            $result = $db->query('SELECT id, title, text_short FROM projects');     

            $i = 0;
            while($row = $result->fetch()){
                $projectsList[$i]['id'] = $row['id'];
                $projectsList[$i]['title'] = $row['title'];
                $projectsList[$i]['text_short'] = $row['text_short'];
                $i++;
            }

            return $projectsList;
        }
        public static function createProjects($options){
            $db = Db::getConnection();
            try {
                $db = Db::getConnection();
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }

            $sql = "INSERT INTO projects (title, text_short) VALUES (:title, :text_short)";
            $result = $db->prepare($sql);
            $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
            $result->bindParam(':text_short', $options['text_short'], PDO::PARAM_STR);
            if($result->execute()){
                return $db->lastInsertId();
            }
            return 0;
        }
        public static function editProjects($id, $options){
            $db = Db::getConnection();
            try {
                $db = Db::getConnection();
                $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo 'Подключение не удалось: ' . $e->getMessage();
            }

            $sql = "UPDATE projects SET title = :title, text_short = :text_short WHERE id = :id";
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_STR);
            $result->bindParam(':title', $options['title'], PDO::PARAM_STR);
            $result->bindParam(':text_short', $options['text_short'], PDO::PARAM_STR);
            return $result->execute();
        }
        public static function deleteProjectsById($id){
            $db = Db::getConnection();

            $sql = 'DELETE FROM projects where id= :id';

            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            return $result->execute();
        }
    }

?>