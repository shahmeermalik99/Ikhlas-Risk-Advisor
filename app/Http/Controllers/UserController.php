<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $useremail = DB::table('users')->select('email')->where('email', '=', $request->email)->first();
        
            

            $user = new User();
            $user->name = $request->name;
            $user->passport_no = $request->passport_no;
            $user->agent_code = $request->agent_code;
             $user->agency_name = $request->agency_name;
            $user->phone_no = $request->phone_no;
            $user->email = $request->email;
            $user->dropdown_menu = $request->dropdown_menu;
            $user->save();

            if ($user) {
                $string = url('/scanGuestQrCode/'. $user->id);
                // add the string in the Google Chart API URL
                $google_chart_api_url = "https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=".$string."&choe=UTF-8";
                $user_update = User::where('id' , $user->id)->first();
                $user_update->qr_link = $google_chart_api_url;
                $user_update->save();
                
            // $data = [
            //     'email' => 'zubis5508@gmail.com',
            // ];
            // $user['to'] = $user->email;

            // Mail::send('mails.registeration_mail', $data, function ($messages) use ($user) {
            //     $messages->to($user['to'], 'email');
            //     $messages->subject('Thank you for registering your interest for Ikhlas Risk Advisor.', $user['to']);
            // });
            
            return response()->json([
                    'status' => 200,
                ]);
            }

            
   
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function useremail(Request $request){
         //
        $useremail = DB::table('users')->select('id', 'email', 'name', 'qr_link')->where('id', '=', $request->user_id)->first();
        
      
        if ($useremail) {
            
              // Send Mail to Customers
                $data = [
                    'email' => $useremail->email,
                    'name' => $useremail->name,
                    'qr_code' => $useremail->qr_link,
                ];
                $user['to'] = $useremail->email;
                Mail::send('user_email', $data, function ($messages) use ($user) {
                    $messages->to($user['to'], 'email');
                    $messages->subject('Congratulations! You are Invited to the Launch of IKHLAS Risk Advisor Program', $user['to']);
                });
                
                $user_data = User::where('id' , $useremail->id)->first();
                $user_data->last_mail_time = Carbon::now();
                $user_data->save();
                return redirect()->back()->with('success' , 'Email Send Successfully!');
        }
         return redirect()->back();
        
       
    }
}
