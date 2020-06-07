<?php

namespace App\Controllers;

use App\Core\Database;
use App\Core\View;
use App\Core\ProcessDeal;

class ApplicationsController
{
    public function index()
    {
        View::show('index.php');
    }

    public function addApplication()
    {

        $appEmail = $_POST['email'];
        $appAmount = $_POST['amount'];

        $db = Database::getInstance()->connection();
        $db->insert('applications', [
            'email' => $appEmail,
            'amount' => $appAmount
        ]);

        $whatPartner = $appAmount > 5000 ? 'A' : 'B';

        $db->insert('deals', [
            'partner_name' => $whatPartner,
        ]);

        ProcessDeal::sendEmailToPartner($appEmail, $appAmount, $whatPartner);

        $this->index();
    }


}