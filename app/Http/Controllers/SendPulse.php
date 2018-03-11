<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SendPulse extends Controller
{
    // webhook for changing SendPulse members
  public function confirm(Request $request)
  {
    $lead_id = $request["leads"]["status"][0]["id"];

    Log::info($lead_id);

    $lead = \App\Lead::where('lead_id', $lead_id);

    if($lead->count()){

      $lead = $lead->first();

      $email = array(
        array(
          "email"=> $lead->email,
          "variables"=> array(
            "name"=> $lead->name,
            "phone" => $lead->phone,
          ),
        ),
      );

      // Delete from SendPulse
      $e = \SendPulse::removeEmails(1465050, array($lead->email));

      // Send to SendPulse Members Book
      $e = \SendPulse::addEmails(1465048, $email);

    } else {
      // ask Amo for contact
      // If don't have need to create
    }

    // after we know leadID we should ask about this lead

  }
}
