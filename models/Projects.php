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
            // print_r('fdfd'.$result);       

            $i = 0;
            while($row = $result->fetch()){
                $projectsList[$i]['id'] = $row['id'];
                $projectsList[$i]['title'] = $row['title'];
                $projectsList[$i]['text_short'] = $row['text_short'];
                $i++;
            }

            return $projectsList;
        }

        
    }

?>