<?php 

    class MainController
    {
        public function actionindex()
        {
            require_once(ROOT.'/views/main/index.php');
            return true;
        }
    }

?>