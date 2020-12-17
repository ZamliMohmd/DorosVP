<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function pays(){
        return view('payment');
    }

//    public function tranzillaNormalPayment(Request $request)
//    {
//        dd($request->all());
//        $tranzila_api_host = 'secure5.tranzila.com';
//        $tranzila_api_path = '/cgi-bin/tranzila71u.cgi';
//
//        // Prepare transaction parameters
//        $query_parameters['supplier'] = 'dorosvip';
//        $query_parameters['TranzilaPW']= 'dorosvip';
//
//        $query_parameters['tranmode'] = 'A';
//// 'terminal_name' should be replaced by actual terminal name
//        $query_parameters['sum'] = '5';
//        $query_parameters['currency'] = '1'; // ILS
//        $query_parameters['contact'] = 'test';
//        $query_parameters['ccno'] = '12312312'; // '12312312'; // Test card number
//        $query_parameters['mycvv'] = '123';//$request->cvv; // Test card number
//        $query_parameters['expdate'] = '0226'; // '0221';// Card expiry date: mmyy
//        $query_parameters['myid'] = '123456789'; // $request->national_id; // Card expiry date: mmyy
//        $query_parameters['pdesc'] = 'subscripe month 1'; // $request->national_id; // Card expiry date: mmyy
//        $query_parameters['email'] = 'test@gmail.com'; // $request->national_id; // Card expiry date: mmyy
//
//        parse_str("supplier=dorosvip&TranzilaPW=dorosvip&tranmode=A&sum=7&currency=1&ccno=12312312&expdate=0226&mycvv=123&myid=123456789&contact=test&pdesc=subscripe month 1&email=test@gmail.com" , $result );
//        //dd($result);
//
//// Prepare query string
//        $query_string = '';
//        foreach ($query_parameters as $name => $value) {
//            $query_string .= $name . '=' . $value . '&';
//        }
//
//        $query_string = substr($query_string, 0, -1); // Remove trailing '&'
//        $query_string=  $result;
//// Initiate CURL
//        $cr = curl_init();
//
//        curl_setopt($cr, CURLOPT_URL, "https://$tranzila_api_host$tranzila_api_path");
//        curl_setopt($cr, CURLOPT_POST, 1);
//        curl_setopt($cr, CURLOPT_FAILONERROR, true);
//        curl_setopt($cr, CURLOPT_POSTFIELDS, $query_string);
//        curl_setopt($cr, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($cr, CURLOPT_SSL_VERIFYPEER, 0);
//
//// Execute request
//
//        $result = curl_exec($cr);
//        $error = curl_error($cr);
//        $pieces = explode("&", $result);
//        // dd($pieces);
//        if (!empty($error)) {
//            dd(die ($error));
//        }
//
//        curl_close($cr);
//
//        // Preparing associative array with response data
//        $response_array = explode('&', $result);
//        $response_assoc = array();
//        if (count($response_array) > 1) {
//            foreach ($response_array as $value) {
//                $tmp = explode('=', $value);
//                if (count($tmp) > 1) {
//                    $response_assoc[$tmp[0]] = $tmp[1];
//                }
//            }
//        }
//// Analyze the result string
//        if (!isset($response_assoc['Response'])) {
//            die ($result . "\n");
//            /**
//             * When there is no 'Response' parameter it either means
//             * that some pre-transaction error happened (like authentication
//             * problems), in which case the result string will be in HTML format,
//             * explaining the error, or the request was made for generate token only
//             * (in this case the response string will contain only 'TranzilaTK'
//             * parameter)
//             */
//        } else if ($response_assoc['Response'] !== '000') {
//            die ($response_assoc['Response'] . "\n");
//            // Any other than '000' code means transaction failure
//            // (bad card, expiry, etc..)
//        } else {
//            die ("Success\n");
//        }
//
//    }

    public function tranzillaNormalPayment(Request $request)
    {
       // dd($request->all());
        $tranzila_api_host = 'secure5.tranzila.com';
        $tranzila_api_path = '/cgi-bin/tranzila71u.cgi';

        // Prepare transaction parameters
        $query_parameters['supplier'] = 'dorosvip';
        $query_parameters['TranzilaPW']= 'dorosvip';

        $query_parameters['tranmode'] = 'A';
// 'terminal_name' should be replaced by actual terminal name
        $query_parameters['sum'] = $request->price;
        $query_parameters['currency'] = '1'; // ILS
        $query_parameters['contact'] = $request->card_holder_name;
        $query_parameters['ccno'] = $request->card_number; // '12312312'; // Test card number
       $query_parameters['mycvv'] = $request->cvv;//$request->cvv; // Test card number
        $query_parameters['expdate'] = $request->card_exp; // '0221';// Card expiry date: mmyy
        $query_parameters['myid'] = $request->national_id; // $request->national_id; // Card expiry date: mmyy
        $query_parameters['pdesc'] = 'subscripe one month plane'; // $request->national_id; // Card expiry date: mmyy
        $query_parameters['email'] = Auth::user()->email; // $request->national_id; // Card expiry date: mmyy

       // parse_str("supplier=dorosvip&TranzilaPW=dorosvip&tranmode=A&sum=7&currency=1&ccno=12312312&expdate=0226&mycvv=123&myid=123456789&contact=test&pdesc=subscripe month 1&email=test@gmail.com" , $result );
        //dd($result);

// Prepare query string
        $query_string = '';
        foreach ($query_parameters as $name => $value) {
            $query_string .= $name . '=' . $value . '&';
        }

        $query_string = substr($query_string, 0, -1); // Remove trailing '&'
       // dd($query_string);
      //  $query_string=  $result;
// Initiate CURL
        $cr = curl_init();

        curl_setopt($cr, CURLOPT_URL, "https://$tranzila_api_host$tranzila_api_path");
        curl_setopt($cr, CURLOPT_POST, 1);
        curl_setopt($cr, CURLOPT_FAILONERROR, true);
        curl_setopt($cr, CURLOPT_POSTFIELDS, $query_string);
        curl_setopt($cr, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cr, CURLOPT_SSL_VERIFYPEER, 0);

// Execute request

        $result = curl_exec($cr);
        $error = curl_error($cr);
        $pieces = explode("&", $result);
        dd($pieces);
        if (!empty($error)) {
            dd(die ($error));
        }

        curl_close($cr);

        // Preparing associative array with response data
        $response_array = explode('&', $result);

        $response_assoc = array();

        if (count($response_array) > 1) {
            foreach ($response_array as $value) {
                $tmp = explode('=', $value);
                if (count($tmp) > 1) {
                    $response_assoc[$tmp[0]] = $tmp[1];
                }
            }
        }
// Analyze the result string
        if (!isset($response_assoc['Response'])) {
            die ($result . "\n");
            /**
             * When there is no 'Response' parameter it either means
             * that some pre-transaction error happened (like authentication
             * problems), in which case the result string will be in HTML format,
             * explaining the error, or the request was made for generate token only
             * (in this case the response string will contain only 'TranzilaTK'
             * parameter)
             */
        } else if ($response_assoc['Response'] !== '000') {
            die ($response_assoc['Response'] . "\n");
            // Any other than '000' code means transaction failure
            // (bad card, expiry, etc..)
        } else {
            die ("Success\n");
        }

    }

    /*
    public function tranzillaInstallmentsPayment(Request $request)
    {
      //  dd($request->all());
        $tranzila_api_host = 'secure5.tranzila.com';
        $tranzila_api_path = '/cgi-bin/tranzila71u.cgi';

        // Prepare transaction parameters
        $query_parameters['supplier'] = 'dorosvip';
        $query_parameters['TranzilaPW']= 'dorosvip';

// 'terminal_name' should be replaced by actual terminal name
        $query_parameters['sum'] = '10'; //$request->total_money;
        $query_parameters['currency'] = '1'; // ILS
        $query_parameters['ccno'] = '12312312'; // Test card number
        $query_parameters['mycvv'] = '123'; // Test card number
        $query_parameters['expdate'] = '0523'; // Card expiry date: mmyy
        $query_parameters['myid'] = '123456789'; // Card expiry date: mmyy
        $query_parameters['cred_type'] = '8-installments'; // Card expiry date: mmyy
        $query_parameters['fpay'] = '2'; // first Payment
        $query_parameters['spay'] = '2'; // value of others payments
        $query_parameters['npay'] = '4'; // no . of payment

        parse_str("supplier=dorosvip&TranzilaPW=dorosvip&currency=1&ccno=12312312&expdate=0226&mycvv=123&myid=123456789&contact=test&pdesc=subscripe month 1&email=test@gmail.com&sum=10&fpay=2&spay=2&npay=4&cred_type=8-installments" , $result );


// Prepare query string
        $query_string = '';
        foreach ($query_parameters as $name => $value) {
            $query_string .= $name . '=' . $value . '&';
        }

       // dd($query_string);
       // $query_string = substr($query_string, 0, -1); // Remove trailing '&'
      //  $query_string=  $result;
// Initiate CURL
        $cr = curl_init();

        curl_setopt($cr, CURLOPT_URL, "https://$tranzila_api_host$tranzila_api_path");
        curl_setopt($cr, CURLOPT_POST, 1);
        curl_setopt($cr, CURLOPT_FAILONERROR, true);
        curl_setopt($cr, CURLOPT_POSTFIELDS, $query_string);
        curl_setopt($cr, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cr, CURLOPT_SSL_VERIFYPEER, 0);

// Execute request

        $result = curl_exec($cr);
        $error = curl_error($cr);
        $pieces = explode("&", $result);
        dd($pieces);
        if (!empty($error)) {
            die ($error);
        }
    }
*/

    public function tranzillaInstallmentsPayment(Request $request)
    {
        //  dd($request->all());
        $tranzila_api_host = 'secure5.tranzila.com';
        $tranzila_api_path = '/cgi-bin/tranzila71u.cgi';

        // Prepare transaction parameters
        $query_parameters['supplier'] = 'dorosvip';
        $query_parameters['TranzilaPW']= 'dorosvip';

// 'terminal_name' should be replaced by actual terminal name
        $query_parameters['sum'] = '10'; //$request->total_money;
        $query_parameters['currency'] = '1'; // ILS
        $query_parameters['ccno'] = '12312312'; // Test card number
        $query_parameters['mycvv'] = '123'; // Test card number
        $query_parameters['expdate'] = '0523'; // Card expiry date: mmyy
        $query_parameters['myid'] = '123456789'; // Card expiry date: mmyy
        $query_parameters['cred_type'] = '8-installments'; // Card expiry date: mmyy
        $query_parameters['fpay'] = '2'; // first Payment
        $query_parameters['spay'] = '2'; // value of others payments
        $query_parameters['npay'] = '4'; // no . of payment

        parse_str("supplier=dorosvip&TranzilaPW=dorosvip&currency=1&ccno=12312312&expdate=0226&mycvv=123&myid=123456789&contact=test&pdesc=subscripe month 1&email=test@gmail.com&sum=10&fpay=2&spay=2&npay=4&cred_type=8-installments" , $result );


// Prepare query string
        $query_string = '';
        foreach ($query_parameters as $name => $value) {
            $query_string .= $name . '=' . $value . '&';
        }

        // dd($query_string);
        // $query_string = substr($query_string, 0, -1); // Remove trailing '&'
        //  $query_string=  $result;
// Initiate CURL
        $cr = curl_init();

        curl_setopt($cr, CURLOPT_URL, "https://$tranzila_api_host$tranzila_api_path");
        curl_setopt($cr, CURLOPT_POST, 1);
        curl_setopt($cr, CURLOPT_FAILONERROR, true);
        curl_setopt($cr, CURLOPT_POSTFIELDS, $query_string);
        curl_setopt($cr, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($cr, CURLOPT_SSL_VERIFYPEER, 0);

// Execute request

        $result = curl_exec($cr);
        $error = curl_error($cr);
        $pieces = explode("&", $result);

dd($pieces);
        dd(strpos($pieces[0], "="));
        if (!empty($error)) {
            die ($error);
        }
    }
}
