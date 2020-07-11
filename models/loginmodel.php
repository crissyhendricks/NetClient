<?php

class loginModel extends Model
{

    public function __construct()
    {
        parent::__construct();
    }


    public function signin($user_name, $user_pwd)
    {

        $medoo = $this->db->connect();
        if (isset($medoo)) {
            $resultSet =  $medoo->select(
                'user',
                "*",
                [
                    "user_name" => $user_name
                ]
            );


            if (empty($resultSet)) {
                return false;
            } else {

                if ($user_pwd == openssl_decrypt($resultSet[0]["user_pwd"], "AES-128-ECB", SECRETKEY)) {
                    $_SESSION['USERSID'] = $resultSet[0]["user_name"];
                    $_SESSION['LAST_ACTIVITY'] = time();
                    return true;
                } else {
                    return false;
                }
            }
        }
    }
}
