<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Add_user extends Model
{
    protected $fillable = ['file_no','member_name','father_name', 'mother_name','mailing_address', 'permanent_address','phone_no_1','phone_no_2','date_of_birth','email','national_id','profession','office_address','designation','nominee_name','relation_with_member','building_no','total_amount','no_of_installment','installment_start_from', 'description','member_image', 'nominee_image', 'email_verified_at', 'booking_money', 'down_payment', 'car_parking', 'land_filling_1', 'land_filling_2', 'building_pilling', 'first_roof_casting','finishing_work', 'after_handover_money', 'password'];
}
