<?php 

    include_once ROOT. '/models/Sport.php';

    class SportController
    {
        public function actionSport()
        {
            $sportList = array();
            $sportList = Sport::getSportList();
            // print_r($infoList)  ;

            require_once(ROOT.'/views/sport/index.php');
            
            return true;
        }

        public function actionView($number)
        {
            if($number){
                $sportItem = Sport::getSportItemById($number);
                require_once(ROOT.'/views/sport/content.php');
            }
            return true;
        }
    }
?>