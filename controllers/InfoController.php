<?php 

    include_once ROOT. '/models/Info.php';

    class InfoController
    {
        public function actionInfo()
        {
            $infoList = array();
            $infoList = Info::getInfoList();
            // print_r($infoList)  ;

            require_once(ROOT.'/views/info/index.php');
            
            return true;
        }

        public function actionView($number)
        {
            if($number){
                $infoItem = Info::getInfoItemById($number);
                require_once(ROOT.'/views/info/content.php');
            }
            return true;
        }
    }
?>