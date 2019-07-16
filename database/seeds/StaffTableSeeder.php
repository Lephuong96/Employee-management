<?php

use App\Staff;
use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $staff = new Staff();
        $staff->id = 1;
        $staff->employee_id = 1;
        $staff->group_employees = 'Quản trị hệ thống';
        $staff->name = 'Lê Như Phương';
        $staff->gender = 'Nam';
        $staff->phone_number = '0961135130';
        $staff->birthday = '1996-10-08';
        $staff->card_number = '174717688';
        $staff->email = 'bigankroi@gmail.com';
        $staff->address = 'Quảng long, Quảng Xương, Thanh Hóa';
        $staff->save();

    }
}
