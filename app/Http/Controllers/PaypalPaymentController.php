<?php

namespace App\Http\Controllers;

use App\Models\PaymentModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Paypalpayment;
use DB;
class PaypalPaymentController extends Controller
{
    //
    /*
    * Process payment using credit card
    */
    public function paywithCreditCard()
    {
        // ### Address
        // Base Address object used as shipping or billing
        // address in a payment. [Optional]
        $shippingAddress = Paypalpayment::shippingAddress();
        $shippingAddress->setLine1("3909 Witmer Road")
            ->setLine2("Niagara Falls")
            ->setCity("Niagara Falls")
            ->setState("NY")
            ->setPostalCode("14305")
            ->setCountryCode("US")
            ->setPhone("716-298-1822")
            ->setRecipientName("Jhone");

        // ### CreditCard
        $card = Paypalpayment::creditCard();
        $card->setType("visa")
            ->setNumber("4758411877817150")
            ->setExpireMonth("05")
            ->setExpireYear("2019")
            ->setCvv2("456")
            ->setFirstName("Joe")
            ->setLastName("Shopper");

        // ### FundingInstrument
        // A resource representing a Payer's funding instrument.
        // Use a Payer ID (A unique identifier of the payer generated
        // and provided by the facilitator. This is required when
        // creating or using a tokenized funding instrument)
        // and the `CreditCardDetails`
        $fi = Paypalpayment::fundingInstrument();
        $fi->setCreditCard($card);

        // ### Payer
        // A resource representing a Payer that funds a payment
        // Use the List of `FundingInstrument` and the Payment Method
        // as 'credit_card'
        $payer = Paypalpayment::payer();
        $payer->setPaymentMethod("credit_card")
            ->setFundingInstruments([$fi]);

        $item1 = Paypalpayment::item();
        $item1->setName('Ground Coffee 40 oz')
            ->setDescription('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setTax(0.3)
            ->setPrice(7.50);

        $item2 = Paypalpayment::item();
        $item2->setName('Granola bars')
            ->setDescription('Granola Bars with Peanuts')
            ->setCurrency('USD')
            ->setQuantity(5)
            ->setTax(0.2)
            ->setPrice(2);


        $itemList = Paypalpayment::itemList();
        $itemList->setItems([$item1,$item2])
            ->setShippingAddress($shippingAddress);


        $details = Paypalpayment::details();
        $details->setShipping("1.2")
            ->setTax("1.3")
            //total of items prices
            ->setSubtotal("17.5");

        //Payment Amount
        $amount = Paypalpayment::amount();
        $amount->setCurrency("USD")
            // the total is $17.8 = (16 + 0.6) * 1 ( of quantity) + 1.2 ( of Shipping).
            ->setTotal("20")
            ->setDetails($details);

        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it. Transaction is created with
        // a `Payee` and `Amount` types

        $transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent as 'sale'

        $payment = Paypalpayment::payment();

        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setTransactions([$transaction]);

        try {
            // ### Create Payment
            // Create a payment by posting to the APIService
            // using a valid ApiContext
            // The return object contains the status;
            $payment->create(Paypalpayment::apiContext());
        } catch (\PPConnectionException $ex) {
            return response()->json(["error" => $ex->getMessage()], 400);
        }

        return response()->json([$payment->toArray()], 200);
    }
    /*
       * Process payment with express checkout
       */
    public function paywithPaypal()
    {
        // ### Address
        // Base Address object used as shipping or billing
        // address in a payment. [Optional]
//        $shippingAddress= Paypalpayment::shippingAddress();
//        $shippingAddress->setLine1("3909 Witmer Road")
//            ->setLine2("Niagara Falls")
//            ->setCity("Niagara Falls")
//            ->setState("NY")
//            ->setPostalCode("14305")
//            ->setCountryCode("US")
//            ->setPhone("716-298-1822")
//            ->setRecipientName("Jhone");

        // ### Payer
        // A resource representing a Payer that funds a payment
        // Use the List of `FundingInstrument` and the Payment Method
        // as 'credit_card'
        $payer = Paypalpayment::payer();
        $payer->setPaymentMethod("paypal");

        $item1 = Paypalpayment::item();
        $item1->setName('报名费')
            ->setDescription('Ground Coffee 40 oz')
            ->setCurrency('USD')
            ->setQuantity(1)
            ->setTax(0)
            ->setPrice(100);



        $itemList = Paypalpayment::itemList();
        $itemList->setItems([$item1]);


        $details = Paypalpayment::details();
        $details->setShipping("0")
            ->setTax("0")
            //total of items prices
            ->setSubtotal("100");

        //Payment Amount
        $amount = Paypalpayment::amount();
        $amount->setCurrency("USD")
            // the total is $17.8 = (16 + 0.6) * 1 ( of quantity) + 1.2 ( of Shipping).
            ->setTotal("100")
            ->setDetails($details);

        // ### Transaction
        // A transaction defines the contract of a
        // payment - what is the payment for and who
        // is fulfilling it. Transaction is created with
        // a `Payee` and `Amount` types

        $transaction = Paypalpayment::transaction();
        $transaction->setAmount($amount)
            ->setItemList($itemList)
            ->setDescription("Payment description")
            ->setInvoiceNumber(uniqid());

        // ### Payment
        // A Payment Resource; create one using
        // the above types and intent as 'sale'

        $redirectUrls = Paypalpayment::redirectUrls();
        $redirectUrls->setReturnUrl(url("/payments/success"))
            ->setCancelUrl(url("/payments/fails"));

        $payment = Paypalpayment::payment();

        $payment->setIntent("sale")
            ->setPayer($payer)
            ->setRedirectUrls($redirectUrls)
            ->setTransactions([$transaction]);

        try {
            // ### Create Payment
            // Create a payment by posting to the APIService
            // using a valid ApiContext
            // The return object contains the status;
            $payment->create(Paypalpayment::apiContext());
        } catch (\PPConnectionException $ex) {
            return response()->json(["error" => $ex->getMessage()], 400);
        }
        return redirect($payment->getApprovalLink());
//        return response()->json([$payment->toArray(), 'approval_url' => $payment->getApprovalLink()], 200);
    }
    function ActionSuccess(Request $request)
    {
        if (Auth::check()) {
            // 用户已登录...
            dd('登录了');
            $user = Auth::user();
            $user_id = DB::table('users_password_records')->where('email', $user['email'])->value('user_id');
            $Payment = new PaymentModel();
            $Payment->user_id = $user_id;
            $Payment->type = 'paypal';
            $Payment->paymentId = $request['paymentId'];
            $Payment->PayerID = $request['PayerID'];
            $Payment->save();

            $tip = '支付成功';
            $url =url()->route('apply.basicInformation');
            $data['tip']=$tip;
            $data['url']=$url;
            return view('jump')->with('data',$data);

        }
        else
        {
            $tip = '您还未登录';
            $url =url()->route('apply.basicInformation');
            $data['tip']=$tip;
            $data['url']=$url;
            return view('jump')->with('data',$data);
        }
    }


}
