<?php

namespace Chungu\Controllers;

use Chungu\Controllers\Controller;
use Chungu\Models\Subscriber;

class SubscribersController extends Controller {


    public function __construct() {
        //
    }


    public function create() {

        $subscriber = request('subscriber');

        if (!filter_var($subscriber, FILTER_VALIDATE_EMAIL)) {
            return $this->json("0Oops, you can't subscribe with a temporary email address", 422);
        }

        if($this->checkDisposableEmail($subscriber) !== ""){
            return $this->json($this->checkDisposableEmail($subscriber), 422);
        }

        Subscriber::create([
            'email' => $subscriber
        ]);

        Subscriber::subscribe($subscriber);

        return $this->json("Successfully subscribed to our mailing list", 200);
    }

    public function viewMail() {

        return view('mail');
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
        } elseif (preg_match("/(ThrowAwayMail|DeadAddress|10MinuteMail|20MinuteMail|AirMail|Dispostable|Email Sensei|EmailThe|FilzMail|Guerrillamail|IncognitoEmail|Koszmail|Mailcatch|Mailinator|Mailnesia|MintEmail|MyTrashMail|NoClickEmail|SpamSpot|Spamavert|Spamfree24|TempEmail|Thrashmail.ws|Yopmail|EasyTrashMail|Jetable|MailExpire|MeltMail|Spambox|empomail|33Mail|E4ward|GishPuppy|InboxAlias|MailNull|Spamex|Spamgourmet|BloodyVikings|SpamControl|MailCatch|Tempomail|EmailSensei|Yopmail|Trasmail|Guerrillamail|Yopmail|boximail|ghacks|Maildrop|MintEmail|fixmail|gelitik.in|ag.us.to|mobi.web.id|fansworldwide.de|privymail.de|gishpuppy|spamevader|uroid|tempmail|soodo|deadaddress|trbvm)/i", $domain)) {
            $msg = "Oops, you can't subscribe with a temporary email address";
        }elseif(in_array(Subscriber::all(), $email)){
            $msg = "Oops, seems like you have already subscribed";
        }
        return $msg;
    }
}
