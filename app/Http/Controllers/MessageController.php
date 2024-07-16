<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    // دالة لعرض النموذج
    public function showSendMessageForm($phone)
    {
        return view('reservations.send_message_form', compact('phone'));
    }

    // دالة لإرسال الرسالة
    public function sendMessage(Request $request)
    {
        // استخراج رقم الهاتف من الطلب المرسل من النموذج
        $phone = $request->input('phone');
        // قم بتغيير 'your_token' إلى المفتاح الخاص بك
        $token = 'your_token';

        // بناء جسم الطلب لإرسال الرسالة
        $requestData = [
            "messaging_product" => "whatsapp",
            "to" => $phone,
            "type" => "template",
            "template" => [
                "name" => "hello_world",
                "language" => [
                    "code" => "en_US"
                ]
            ]
        ];

        // تكوين الطلب باستخدام cURL
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://graph.facebook.com/v15.0/Phone_id/messages',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($requestData), // تحويل البيانات إلى JSON
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $token, // تضمين المفتاح في رأس الطلب
                'Content-Type: application/json'
            ),
        ));

        // إرسال الطلب واستلام الرد
        $response = curl_exec($curl);
        curl_close($curl);

        // إرجاع الرد كنتيجة للطلب
        return $response;
    }
}
