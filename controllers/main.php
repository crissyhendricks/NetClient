<?php

include_once 'models/contract.php';

class Main extends Controller
{

    function __construct()
    {
        parent::__construct();

        if (!isset($_SESSION['USERSID'])) {
            header("Location: " . constant("URL") . "login");
            exit;
        } else {
            if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
                session_unset();
                session_destroy();
                header("Location: " . constant("URL") . "login");
                exit;
            }
        }

        $this->view->contracts = [];
        $this->view->clientFilter = [];
    }


    function getView()
    {
        $this->getContractList();
        $this->view->getView('main/index');
    }

    function getContractList($param = null)
    {
        $contracts =  $this->model->getContractList($param);
        $this->view->contracts = $contracts;

        $clientFilter = [];
        if (isset($contracts)) {
            foreach ($contracts as $contract) {
                array_push($clientFilter, $contract->client_name);
            }

            $this->view->clientFilter = array_unique($clientFilter);
        }
    }

    function getFilteredContractList($param = null)
    {
        $contracts =  $this->model->getContractList($param);
        if (isset($contracts)) {
            $this->view->contracts = $contracts;
            echo json_encode($contracts);
        }
    }
}
