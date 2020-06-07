<?php

namespace App\Core;

class ProcessDeal
{
    public static function sendEmailToPartner(string $email, int $amount, string $whatPartner)
    {

        /* SENDING EMAIL TO PARTNER REGARDING NEW APPLICATION*/
    }

    public static function makeOfferToClient(int $dealId)
    {
        $db = Database::getInstance()->connection();

        //As applications are made at the same time as deal entry, we fetch dealId and then change it's status.
        $db->update('deals', [
            'status' => 'offer',
        ], ['id' => $dealId]);

        //Fetch client email and required email info.
        $email = $db->select('applications', ['email'], ['id' => $dealId]);
        $info = '<-----Email info here---->';

        //Sending email to client regarding status change.
        self::sendEmailToClient($email,$info);
    }

    private static function sendEmailToClient($clientEmail, $info)
    {
            /*......Sending email to client...*/
    }
}