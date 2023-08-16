<?php

namespace Chungu\Controllers;

use Chungu\Controllers\Controller;

class SubscribersController extends Controller {


    public function __construct() {
        //
    }


    public function create() {

        $subscriber = request('subscriber');

        if (!filter_var($subscriber, FILTER_VALIDATE_EMAIL)) {
            return $this->json("Oops, you can't subscribe with a temporary email address", 200);
        }

        if($this->checkDisposableEmail($subscriber) !== ""){
            return $this->json($this->checkDisposableEmail($subscriber), 200);
        }

        return $this->json(request()->all());
    }

    private function checkDisposableEmail($email) {
        $msg = "";
        $domain = substr(strrchr($email, "@"), 1);
        $dispose_domain = [];

        $disposable = __DIR__.'/../static/disposable.txt';

        $handle = fopen($disposable, "r");
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            $dispose_domain[$data[0]] = $data[0];
        }
        fclose($handle);

        if (in_array($domain, $dispose_domain)) {
            $msg = "Oops, you can't subscribe with a temporary email address";
        } elseif (!in_array($domain, $dispose_domain) && !fopen("http://$domain", 'r')) {
            $msg = "Oops, you can't subscribe with a temporary email address";
        } elseif (preg_match("/(ThrowAwayMail|DeadAddress|10MinuteMail|20MinuteMail|AirMail|Dispostable|Email Sensei|EmailThe|FilzMail|Guerrillamail|IncognitoEmail|Koszmail|Mailcatch|Mailinator|Mailnesia|MintEmail|MyTrashMail|NoClickEmail|SpamSpot|Spamavert|Spamfree24|TempEmail|Thrashmail.ws|Yopmail|EasyTrashMail|Jetable|MailExpire|MeltMail|Spambox|empomail|33Mail|E4ward|GishPuppy|InboxAlias|MailNull|Spamex|Spamgourmet|BloodyVikings|SpamControl|MailCatch|Tempomail|EmailSensei|Yopmail|Trasmail|Guerrillamail|Yopmail|boximail|ghacks|Maildrop|MintEmail|fixmail|gelitik.in|ag.us.to|mobi.web.id|fansworldwide.de|privymail.de|gishpuppy|spamevader|uroid|tempmail|soodo|deadaddress|trbvm)/i", $domain)) {
            $msg = "Oops, you can't subscribe with a temporary email address";
        } else {
            $msg = "Oops, you can't subscribe with a temporary email address";
        }
        return $msg;
    }
}
