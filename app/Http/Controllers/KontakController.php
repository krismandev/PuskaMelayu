<?php

namespace App\Http\Controllers;
use App\Inbox;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function kontak()
    {
        return view('frontend.kontak');
    }

    public function postKontak(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email'=> 'required',
            'hp' => 'required',
            'subject' => 'required',
            'pesan' => 'required'
        ]);

        $to = "sdgscenter@uinjambi.ac.id";

        $message = $this->getMessage($request->nama,$request->subject,$request->email, $request->hp, $request->pesan);

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: <".$request->email."> \r\n";
        $headers .= "CC: faillah.arif@gmail.com \r\n";



        @mail($to,$request->subject,$message,$headers);


        Inbox::create([
            'nama' => $request->nama,
            'email'=> $request->email,
            'hp' => $request->hp,
            'subject' => $request->subject,
            'pesan' => $request->pesan
        ]);


        return back();
    }

    public function getMessage($nama,$subject,$email,$hp,$pesan)
    {
        $message = "
         <html>
            <head>
                <title>".$subject."</title>
            </head>
            <body>
                <h1>
                    ".$subject."
                </h1>
                <h2>
                    Nama : ".$nama."
                </h2>
                <h2>
                    Email : ".$email."
                </h2>
                <h2>
                    HP: ".$hp."
                <h2>

                <p>".$pesan."<p>
            </body>

         </html>
        ";

        return $message;
    }
}
