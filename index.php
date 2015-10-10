<?php
 
// ==== Control Vars =======
$strFromNumber = "+15125964532 ";
$strToNumber = "+2348074230259";
$strMsg = "Did you catch Olivier's nip slip last night? OMG right?"; //Olivier accidentally pulled up a porn site on a projector 
$aryResponse = array();
 

    // include the Twilio PHP library - download from 
    // http://www.twilio.com/docs/libraries/
    require_once ("inc/Services/Twilio.php");
 
    // set our AccountSid and AuthToken - from www.twilio.com/user/account
    $AccountSid = "AC70cfd63769455028aafa713212ccdb25";
    $AuthToken = "3ec985956dd1c0c972f9133e7ea8a935";
 
    // ini a new Twilio Rest Client
    $objConnection = new Services_Twilio($AccountSid, $AuthToken);


    // Send a new outgoinging SMS by POSTing to the SMS resource */
    $bSuccess = $objConnection->account->sms_messages->create(
        
        $strFromNumber, 	// number we are sending From 
        $strToNumber,           // number we are sending To
        $strMsg			// the sms body
    );

		
    $aryResponse["SentMsg"] = $strMsg;
    $aryResponse["Success"] = true;
    
    
    echo json_encode($aryResponse);
