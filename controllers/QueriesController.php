<?php
session_start();

class QueriesController{

    /**
     * @return bool
     */
    function actionQueriesView(){

        $queriesList = array();
        $queriesList = Queries::getQueries();

        require_once(ROOT . '\views\queries\queriesList.php');

        return true;
    }

    /**
     * @param $id
     * @return bool
     */
    function actionDeleteQuery($id){

        if($id)
        Queries::deleteQuery($id);

        header('Location: /queries/');

        return true;
    }

    /**
     * @param $id
     * @return bool
     */
    function actionTransferQuery($id){

        $ac_type = $_POST['ac_type'];

        if(Queries::transferQuery($id, $ac_type))
            header('Location: /users/view');
        else
            header('Location: /queries');
        return true;
    }


}