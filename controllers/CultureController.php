<?php 

    include_once ROOT. '/models/Culture.php';

    class CultureController
    {
        public function actionCulture()
        {
            $cultureList = array();
            $cultureList = Culture::getCultureList();
            // print_r($infoList)  ;

            require_once(ROOT.'/views/culture/index.php');
            
            return true;
        }

        public function actionView($number)
        {
            if($number){
                $cultureItem = Culture::getCultureItemById($number);
                require_once(ROOT.'/views/culture/content.php');
            }
            return true;
        }
    }
?>