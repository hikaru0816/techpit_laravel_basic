<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'employee_name' => '鈴木一郎',
                'section' => '開発部',
                'salary' => '350000',
            ],
            [
                'employee_name' => '佐藤次郎',
                'section' => '営業部',
                'salary' => '200000',
            ],
            [
                'employee_name' => '山田花子',
                'section' => '人事部',
                'salary' => '400000',
            ],
        ];

        foreach ($employees as $employee) {
            DB::table('employees')->insert([
                'employee_name' => $employee['employee_name'],
                'section' => $employee['section'],
                'salary' => $employee['salary'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
