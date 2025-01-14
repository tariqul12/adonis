<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderDetail;
use DB;
use Illuminate\Http\Request;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Models\Product;
use Session;
use Cart;
use App\Models\ShippingAddress;

class SslCommerzPaymentController extends Controller
{

    public function exampleEasyCheckout()
    {
        return view('website.checkout.exampleEasycheckout');
    }

    public function exampleHostedCheckout()
    {
        return view('website.checkout.exampleHosted');
    }
    //Data inserted into orders table and order_details table through this function
    public function index($request, $customer)
    {
        //        return $request;
        # Here you have to receive all the order data to initate the payment.
        # Let's say, your oder transaction informations are saving in a table called "orders"
        # In "orders" table, order unique identity is "transaction_id". "status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = $request->total; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $customer->name;
        $post_data['cus_email'] = $customer->email;
        $post_data['cus_add1'] = $request->address;
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = $request->city;
        $post_data['cus_state'] = $request->state;
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = $request->country;
        $post_data['cus_phone'] = $customer->mobile;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = $request->first_name . " " . $request->last_name;
        $post_data['ship_add1'] = $request->address;
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = $request->city;
        $post_data['ship_state'] = $request->state;
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = $request->mobile;
        $post_data['ship_country'] = $request->country;

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = $customer->id;
        $post_data['value_b'] = $customer->name;
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";

        #Before  going to initiate the payment order status need to insert or update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'customer_id' => $customer->id,
                'order_total' => $request->total,
                'tax_amount' => $request->tax,
                'shipping_amount' => $request->shipping_amount, // Session::get('shipping_amount'),
                'order_date' => date('Y-m-d'),
                'order_timestamp' => strtotime(date('Y-m-d')),
                'delivery_address' => $request->address,
                'note' => $request->note,
                'payment_method' => $request->payment_method,
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency'],
                'payment_amount' =>  $post_data['total_amount'],
                'payment_date' => date('Y-m-d'),
                'created_at' =>  date('Y-m-d H:i:s'),
            ]);

        $orderId = Order::orderBy('id', 'desc')->first()->id;
        foreach (Cart::content() as $item) {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = $orderId;
            $orderDetail->product_id = $item->id;
            $orderDetail->product_name = $item->name;
            $orderDetail->product_price = $item->price;
            $orderDetail->product_qty = $item->qty;
            $orderDetail->product_color_id = $item->options->color;
            $orderDetail->product_size_id  = $item->options->size;
            $orderDetail->save();

            $product = Product::where('id', $item->id)->first();
            $product->stock_amount = $product->stock_amount - $item->qty;
            $product->sales_count = $product->sales_count + $item->qty;
            $product->save();

            Cart::remove($item->rowId);
        }

        $shippingAddress = new ShippingAddress();
        $shippingAddress->order_id   = $orderId;
        $shippingAddress->customer_id = Session::get('customer_id');
        $shippingAddress->first_name = $request->first_name;
        $shippingAddress->last_name  = $request->last_name;
        $shippingAddress->email      = $request->email;
        $shippingAddress->mobile     = $request->mobile;
        $shippingAddress->address    = $request->address;
        $shippingAddress->city       = $request->city;
        $shippingAddress->country    = $request->country;
        $shippingAddress->state      = $request->state;
        $shippingAddress->note       = $request->note;
        $shippingAddress->save();



        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function payViaAjax(Request $request)
    {

        # Here you have to receive all the order data to initate the payment.
        # Lets your oder trnsaction informations are saving in a table called "orders"
        # In orders table order uniq identity is "transaction_id","status" field contain status of the transaction, "amount" is the order amount to be paid and "currency" is for storing Site Currency which will be checked with paid currency.

        $post_data = array();
        $post_data['total_amount'] = '10'; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = uniqid(); // tran_id must be unique

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = 'Customer Name';
        $post_data['cus_email'] = 'customer@mail.com';
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = '8801XXXXXXXXX';
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Store Test";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = "ref001";
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        #Before  going to initiate the payment order status need to update as Pending.
        $update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'customer_id' => 123,
                'order_total' => 12312,
                'tax_amount' => 123,
                'shipping_amount' => 121,
                'order_date' => '12-12-12',
                'order_timestamp' => '3434344',
                'delivery_address' => 'aasdfds',
                'payment_method' => 'asdfds',
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'checkout', 'json');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }
    //when online submission successful this function is called
    public function success(Request $request)
    {
        //return $request;
        Session::put('customer_id', $request->value_a);
        Session::put('customer_name', $request->value_b);

        echo "Transaction is Successful";

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        #Check order status in order tabel against the transaction id or order id.
        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'order_status', 'currency', 'order_total')->first(); //change as per orders table

        if ($order_details->order_status == 'Pending') {
            $validation = $sslc->orderValidate($request->all(), $tran_id, $amount, $currency);

            if ($validation) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */
                $update_product = DB::table('orders')
                    ->where('transaction_id', $tran_id)
                    ->update(['order_status' => 'Processing']);

                echo "<br >Transaction is successfully Completed";
                return redirect('/checkout/complete-order')->with('message', 'Your order is completed!');
            }
        } else if ($order_details->order_status == 'Processing' || $order_details->order_status == 'Complete') {
            /*
             That means through IPN Order status already updated. Now you can just show the customer that transaction is completed. No need to udate database.
             */
            echo "Transaction is successfully Completed";
            return redirect('/checkout/complete-order')->with('message', 'Your order is completed!');
        } else {
            #That means something wrong happened. You can redirect customer to your product page.
            echo "Invalid Transaction";
        }
    }

    public function fail(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'order_status', 'currency', 'order_total')->first();

        if ($order_details->order_status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['order_status' => 'Failed']);
            echo "Transaction is Falied";
            return redirect('/checkout/complete-order')->with('message', 'Transaction is Falied');
        } else if ($order_details->order_status == 'Processing' || $order_details->order_status == 'Complete') {
            echo "Transaction is already Successful";
            return redirect('/checkout/complete-order')->with('message', 'Transaction is already Successful');
        } else {
            echo "Transaction is Invalid";
            return redirect('/checkout/complete-order')->with('message', 'Transaction is Invalid');
        }
    }

    public function cancel(Request $request)
    {
        $tran_id = $request->input('tran_id');

        $order_details = DB::table('orders')
            ->where('transaction_id', $tran_id)
            ->select('transaction_id', 'order_status', 'currency', 'order_total')->first();

        if ($order_details->order_status == 'Pending') {
            $update_product = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->update(['order_status' => 'Canceled']);
            echo "Transaction is Cancel";
            return redirect('/checkout/complete-order')->with('message', 'Transaction is Cancel');
        } else if ($order_details->order_status == 'Processing' || $order_details->order_status == 'Complete') {
            echo "Transaction is already Successful";
            return redirect('/checkout/complete-order')->with('message', 'Transaction is already Successful');
        } else {
            echo "Transaction is Invalid";
            return redirect('/checkout/complete-order')->with('message', 'Transaction is Invalid');
        }
    }

    public function ipn(Request $request)
    {
        #Received all the payement information from the gateway
        if ($request->input('tran_id')) #Check transation id is posted or not.
        {

            $tran_id = $request->input('tran_id');

            #Check order status in order tabel against the transaction id or order id.
            $order_details = DB::table('orders')
                ->where('transaction_id', $tran_id)
                ->select('transaction_id', 'status', 'currency', 'amount')->first();

            if ($order_details->status == 'Pending') {
                $sslc = new SslCommerzNotification();
                $validation = $sslc->orderValidate($request->all(), $tran_id, $order_details->amount, $order_details->currency);
                if ($validation == TRUE) {
                    /*
                    That means IPN worked. Here you need to update order status
                    in order table as Processing or Complete.
                    Here you can also sent sms or email for successful transaction to customer
                    */
                    $update_product = DB::table('orders')
                        ->where('transaction_id', $tran_id)
                        ->update(['status' => 'Processing']);

                    echo "Transaction is successfully Completed";
                }
            } else if ($order_details->status == 'Processing' || $order_details->status == 'Complete') {

                #That means Order status already updated. No need to udate database.

                echo "Transaction is already successfully Completed";
            } else {
                #That means something wrong happened. You can redirect customer to your product page.

                echo "Invalid Transaction";
            }
        } else {
            echo "Invalid Data";
        }
    }
}
