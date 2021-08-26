<?php 

    class AdminController{
        public function actionInfo(){
            include_once ROOT. '/models/admin/Info.php';
            $infoList = array();
            $infoList = Info::getInfoList();

            require_once(ROOT.'/views/admin/info.php');
            return true;
        }
        public function actionInfoCreate(){  
            if(isset($_POST['submit'])){
                $options['title'] = $_POST['title'];
                $options['text_short'] = $_POST['text'];
                $options['img_label'] = 'test';
                $errors = false;

                if($errors == false){
                    include_once ROOT. '/models/admin/Info.php';
                    $id = Info::createInfo($options);
                    if($id){
                        if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                            move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/info/{$id}.jpg");
                        }
                    };
                    header("Location: /admin/info");
                    
                }
            }

            require_once(ROOT. '/views/admin/createInfo.php');
            return true;
        }
        public function actionInfoEdit($id){  
            include_once ROOT. '/models/admin/Info.php';
            $infoItem = Info::getInfoItemById($id);
            if(isset($_POST['submit'])){
                $options['title'] = $_POST['title'];
                $options['text_short'] = $_POST['text'];
                if(Info::editInfo($id, $options)){
                    if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                        move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/info/{$id}.jpg");
                    }
                };
                header("Location: /admin/info");
                    
            }

            require_once(ROOT. '/views/admin/editInfo.php');
            return true;
        }
        public function actionInfoDelete($id){
            include_once ROOT. '/models/admin/Info.php';
            if(isset($_POST['submit'])){
                Info::deleteInfoById($id);
                header("Location: /admin/info");
            }

            require_once(ROOT. '/views/admin/delete.php');
            return true;
        }


        public function actionCulture(){
            include_once ROOT. '/models/admin/Culture.php';
            $cultureList = array();
            $cultureList = Culture::getCultureList();

            require_once(ROOT.'/views/admin/culture.php');
            return true;
        }
        public function actionCultureCreate(){  
            if(isset($_POST['submit'])){
                $options['name_kz'] = $_POST['name_kz'];
                $options['name_rus'] = $_POST['name_rus'];
                $options['address'] = $_POST['address'];
                $options['square'] = $_POST['square'];
                $options['tel_number'] = $_POST['tel_number'];
                $options['email'] = $_POST['email'];
                $options['instagram'] = $_POST['instagram'];
                $options['facebook'] = $_POST['facebook'];
                $options['shift_start'] = $_POST['shift_start'];
                $options['shift_end'] = $_POST['shift_end'];
                $options['charge_kz'] = $_POST['charge_kz'];
                $options['charge_rus'] = $_POST['charge_rus'];
                $errors = false;

                if($errors == false){
                    include_once ROOT. '/models/admin/Culture.php';
                    $id = Culture::createCulture($options);
                    if($id){
                        if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                            move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/culture/{$id}.jpg");
                        }
                    };
                    header("Location: /admin/culture");
                    
                }
            }

            require_once(ROOT. '/views/admin/createCulture.php');
            return true;
        }
        public function actionCultureEdit($id){  
            include_once ROOT. '/models/admin/Culture.php';
            $cultureItem = Culture::getCultureItemById($id);
            if(isset($_POST['submit'])){
                $options['name_kz'] = $_POST['name_kz'];
                $options['name_rus'] = $_POST['name_rus'];
                $options['address'] = $_POST['address'];
                $options['square'] = $_POST['square'];
                $options['tel_number'] = $_POST['tel_number'];
                $options['email'] = $_POST['email'];
                $options['instagram'] = $_POST['instagram'];
                $options['facebook'] = $_POST['facebook'];
                $options['shift_start'] = $_POST['shift_start'];
                $options['shift_end'] = $_POST['shift_end'];
                $options['charge_kz'] = $_POST['charge_kz'];
                $options['charge_rus'] = $_POST['charge_rus'];

                if(Culture::editCulture($id, $options)){
                    if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                        move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/info/{$id}.jpg");
                    }
                };
                header("Location: /admin/culture");
                    
            }

            require_once(ROOT. '/views/admin/editCulture.php');
            return true;
        }
        public function actionCultureDelete($id){
            include_once ROOT. '/models/admin/Culture.php';
            if(isset($_POST['submit'])){
                Culture::deleteCultureById($id);
                header("Location: /admin/culture");
            }

            require_once(ROOT. '/views/admin/delete.php');
            return true;
        }


        public function actionSport(){
            include_once ROOT. '/models/admin/Sport.php';
            $sportList = array();
            $sportList = Sport::getSportList();

            require_once(ROOT.'/views/admin/sport.php');
            return true;
        }
        public function actionSportCreate(){  
            if(isset($_POST['submit'])){
                $options['name_kz'] = $_POST['name_kz'];
                $options['name_rus'] = $_POST['name_rus'];
                $options['address'] = $_POST['address'];
                $options['square'] = $_POST['square'];
                $options['tel_number'] = $_POST['tel_number'];
                $options['email'] = $_POST['email'];
                $options['instagram'] = $_POST['instagram'];
                $options['facebook'] = $_POST['facebook'];
                $options['shift_start'] = $_POST['shift_start'];
                $options['shift_end'] = $_POST['shift_end'];
                $options['charge_kz'] = $_POST['charge_kz'];
                $options['charge_rus'] = $_POST['charge_rus'];
                $errors = false;

                if($errors == false){
                    include_once ROOT. '/models/admin/Sport.php';
                    $id = Sport::createSport($options);
                    if($id){
                        if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                            move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/sport/{$id}.jpg");
                        }
                    };
                    header("Location: /admin/sport");
                    
                }
            }

            require_once(ROOT. '/views/admin/createSport.php');
            return true;
        }
        public function actionSportEdit($id){  
            include_once ROOT. '/models/admin/Sport.php';
            $sportItem = Sport::getSportItemById($id);
            if(isset($_POST['submit'])){
                $options['name_kz'] = $_POST['name_kz'];
                $options['name_rus'] = $_POST['name_rus'];
                $options['address'] = $_POST['address'];
                $options['square'] = $_POST['square'];
                $options['tel_number'] = $_POST['tel_number'];
                $options['email'] = $_POST['email'];
                $options['instagram'] = $_POST['instagram'];
                $options['facebook'] = $_POST['facebook'];
                $options['shift_start'] = $_POST['shift_start'];
                $options['shift_end'] = $_POST['shift_end'];
                $options['charge_kz'] = $_POST['charge_kz'];
                $options['charge_rus'] = $_POST['charge_rus'];

                if(Sport::editSport($id, $options)){
                    if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                        move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/info/{$id}.jpg");
                    }
                };
                header("Location: /admin/sport");
                    
            }

            require_once(ROOT. '/views/admin/editSport.php');
            return true;
        }
        public function actionSportDelete($id){
            include_once ROOT. '/models/admin/Sport.php';
            if(isset($_POST['submit'])){
                Sport::deleteSportById($id);
                header("Location: /admin/sport");
            }

            require_once(ROOT. '/views/admin/delete.php');
            return true;
        }


        public function actionProjects(){
            include_once ROOT. '/models/admin/Projects.php';
            $projectsList = array();
            $projectsList = Projects::getProjectsList();

            require_once(ROOT.'/views/admin/projects.php');
            return true;
        }
        public function actionProjectsCreate(){  
            if(isset($_POST['submit'])){
                $options['title'] = $_POST['title'];
                $options['text_short'] = $_POST['text'];
                $errors = false;

                if($errors == false){
                    include_once ROOT. '/models/admin/Projects.php';
                    $id = Projects::createProjects($options);
                    if($id){
                        if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                            move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/info/{$id}.jpg");
                        }
                    };
                    header("Location: /admin/projects");
                    
                }
            }

            require_once(ROOT. '/views/admin/createProjects.php');
            return true;
        }
        public function actionProjectsEdit($id){  
            include_once ROOT. '/models/admin/Projects.php';
            $projectsItem = Projects::getProjectsItemById($id);
            if(isset($_POST['submit'])){
                $options['title'] = $_POST['title'];
                $options['text_short'] = $_POST['text'];
                if(Projects::editProjects($id, $options)){
                    if(is_uploaded_file($_FILES["img"]["tmp_name"])){
                        move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/img/info/{$id}.jpg");
                    }
                };
                header("Location: /admin/projects");
                    
            }

            require_once(ROOT. '/views/admin/editProjects.php');
            return true;
        }
        public function actionProjectsDelete($id){
            include_once ROOT. '/models/admin/Projects.php';
            if(isset($_POST['submit'])){
                Projects::deleteProjectsById($id);
                header("Location: /admin/projects");
            }

            require_once(ROOT. '/views/admin/delete.php');
            return true;
        }

        
    }

?>