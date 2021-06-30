<?php

namespace App\Http\Controllers;

use App\Models\Add_user;
use Illuminate\Http\Request;

class UserAddController extends Controller
{
    public function store(Request $request)
    {
        $add_user = new Add_user;
        $add_user->file_no=$request->get('file-no');
        $add_user->member_name=$request->get('member-name');
        $add_user->father_name=$request->get('father-or-husband-name');
        $add_user->mother_name=$request->get('mother-name');
        $add_user->mailing_address=$request->get('mailing-address');
        $add_user->permanent_address=$request->get('permanent-address');
        $add_user->phone_no_1=$request->get('mobile-no-1');
        $add_user->phone_no_2=$request->get('mobile-no-2');
        $add_user->date_of_birth=$request->get('birth-date');
        $add_user->email=$request->get('email');
        $add_user->national_id=$request->get('NID');
        $add_user->profession=$request->get('profession');
        $add_user->office_address=$request->get('office-address');
        $add_user->designation=$request->get('designation');
        $add_user->nominee_name=$request->get('nominee-name');
        $add_user->relation_with_member=$request->get('relation');
        $add_user->building_no=$request->get('building-number');
        $add_user->total_amount=$request->get('amount');
        $add_user->no_of_installment=$request->get('installment-number');
        $add_user->installment_start_from=$request->get('installment-start');
        $add_user->description=$request->get('description');
        if($request->hasfile('member_img'))
            {
                $file = $request->file('member_img');
                $extension = $file->getClientOriginalExtension();
                $filename = time().".".$extension;
                $file->move("Upload_image/", $filename);
                $add_user->member_image = $filename;
            }
        if($request->hasfile('nominee_img'))
            {
                $file = $request->file('nominee_img');
                $extension = $file->getClientOriginalExtension();
                $filename = strtotime("+1 minutes").".".$extension;
                $file->move('Upload_image/', $filename);
                $add_user->nominee_image = $filename;
            }
        $add_user->booking_money=$request->get('booking-money');
        $add_user->down_payment=$request->get('down-payment');
        $add_user->car_parking=$request->get('car-parking');
        $add_user->land_filling_1=$request->get('land-filling-1');
        $add_user->land_filling_2=$request->get('land-filling-2');
        $add_user->building_pilling=$request->get('building-pilling');
        $add_user->first_roof_casting=$request->get('roof-casting');
        $add_user->finishing_work=$request->get('finishing-work');
        $add_user->after_handover_money=$request->get('after-handover-money');
        $add_user->password=$request->get('password');
        $add_user->save();
        echo "<h1>Data Inserted Successfully<h1>";
        
    }

    public function show(Add_user $add_user)   //show all members 
    {
        $user = Add_user::all();
        return view('show', ['users'=>$user]);
    }

    public function destroy(Add_user $add_user, $id) //delete
    {
       $user=Add_user::find($id);
       $user->delete();
       return redirect('show');
    }
    public function edit(Add_user $add_user, $id)
    {
        $users=Add_user::find($id);
        return view('edit', ['users'=>$users]);
    }
    public function update(Request $request, Add_user $add_user, $id)
    {
        $users=Add_user::find($id);
        $users->file_no=$request->get('file-no');
        $users->member_name=$request->get('member-name');
        $users->save();

        return redirect('show');
    }
}
