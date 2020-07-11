<?php

class mainModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function getContractList($params = null)
    {

        $client_name = null;
        $page = 0;
        if (isset($params)) {
            $client_name = $params[0];
            $page = $params[1];
        }

        $medoo = $this->db->connect();
        if (isset($medoo)) {
            $resultSet =  $medoo->select(
                'contract',
                ["[><]client" => ["client_id" => "client_id"]],
                [
                    "contract.contract_sap_id",
                    "contract.contract_description",
                    "contract.contract_start_date",
                    "contract.contract_end_date",
                    "client.client_name"
                ],
                [
                    "client.client_name[~]" => (isset($client_name) && $client_name != -1) ? $client_name : "%",
                    "ORDER" => "contract.contract_sap_id",
                    "LIMIT" => [$page * 10, 10]

                ]
            );

            $contracts = [];

            foreach ($resultSet as $data) {

                $contract = new Contract();
                $contract->contract_sap_id = $data["contract_sap_id"];
                $contract->client_name = $data["client_name"];
                $contract->contract_description = $data["contract_description"];
                $contract->contract_start_date = $data["contract_start_date"];
                $contract->contract_end_date = $data["contract_end_date"];

                array_push($contracts, $contract);
            }
            $_SESSION['LAST_ACTIVITY'] = time();
            return $contracts;
        }
    }
}
