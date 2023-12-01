<?php

namespace App\Http\Controllers;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ExcelImport;
use App\Exports\ExcelExport;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use App\Mail\ContatcMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    public function show()
    {
        return view('contact');
    }
    public function gui($contact_id)
    {
        $contact = Contact::find($contact_id);
        dd($contact);
        Mail::to('tranquangthang3160@gmail.com')->send(new ContactMail($contact[0]));
        return redirect()->back()->with('success', 'Chúng tôi đã gửi mail .');
    }
    public function listcontact()
    {
        $contact = DB::table('contacts')->paginate(5);
        return view('admin.content.listcontact', ['contacts' => $contact]);
        // $contact = Contact::orderBy('id', 'asc')->paginate(5);
        // return view('admin.content.listcontact', ['contacts' => $contact]);
    }
    public function sapxepZ_A()
    {
        $contact = Contact::orderBy('name', 'desc')->paginate(5);
        return view('admin.content.listcontact', ['contacts' => $contact]);
    }
    public function sapxepA_Z()
    {
        $contact = Contact::orderBy('name', 'asc')->paginate(5);
        return view('admin.content.listcontact', ['contacts' => $contact]);
    }
    public function sapxepIDA_Z()
    {
        $contact = Contact::orderBy('id', 'asc')->paginate(5);
        return view('admin.content.listcontact', ['contacts' => $contact]);
    }
    public function sapxepIDZ_A()
    {
        $contact = Contact::orderBy('id', 'desc')->paginate(5);
        return view('admin.content.listcontact', ['contacts' => $contact]);
    }
    public function test()
    {
        $data = request()->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'phone' => 'required|min:10|max:10',
            'subject' => 'required|min:3|max:50',
            'message' => 'required|min:3|max:255'
        ]);
        //dd($data['message']);
        $contact = new Contact();
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->phone = $data['phone'];
        $contact->subject = $data['subject'];
        $contact->message = $data['message'];
        $contact->save();

        return redirect('/contact')->with('success', 'Chúng tôi đã Nhận được thông tin liên hệ của bạn.');
        // return view('home');
    }
    public function searchContact(Request $request)
    {
        $search = $request->search;
        $contact = Contact::where('name', 'like', '%' . htmlspecialchars($search) . '%')
            ->orWhere('email', 'like', '%' . htmlspecialchars($search) . '%')->orWhere('phone', 'like',  htmlspecialchars($search) . '%')
            ->paginate(5);
        return view('admin.content.listcontact', ['contacts' => $contact]);
    }


    public function detroy($contact_id)
    {

        $contact = Contact::find($contact_id);
        if (isset($contact)) {
            $contact->delete();
            return redirect()->back()->with('success', 'đã xoá thành công');
        } else {
            return redirect()->back();
        }
    }

    public function export_csv()
    {
        return Excel::download(new ExcelExport, 'contact.xlsx');
    }
    public function import_csv(Request $request)
    {
        $path = $request->file('file')->getRealPath();
        Excel::import(new ExcelImport, $path);
        return back();
    }
}