<?php

namespace App\Http\Controllers\Dashboard;
use App\Inbox;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function getInbox()
    {
        $inboxes = Inbox::orderBy('created_at','desc')->paginate(10);
        return view('dashboard.kontak.inbox',compact(['inboxes']));
    }

    public function showMessage($id)
    {
        $inbox = Inbox::find($id);
        return view('dashboard.kontak.message',compact(['inbox']));
    }
}
