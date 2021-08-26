<?php 

    include_once ROOT. '/models/Projects.php';

    class ProjectsController
    {
        public function actionProjects()
        {
            $projectsList = array();
            $projectsList = Projects::getProjectsList();
            // print_r($infoList)  ;

            require_once(ROOT.'/views/projects/index.php');
            
            return true;
        }

        public function actionView($number)
        {
            if($number){
                $projectsItem = Projects::getProjectsItemById($number);
                require_once(ROOT.'/views/projects/content.php');
            }
            return true;
        }
    }
?>