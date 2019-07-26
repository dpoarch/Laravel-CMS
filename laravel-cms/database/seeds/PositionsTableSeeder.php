<?php
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	['name' => 'Airi Satou', 'position' => 'Accountant', 'office' => 'Tokyo', 'startdate' => '2008/11/28', 'age' => '33', 'salary' => '162,700'],
        	['name' => 'Angelica Ramos', 'position' => 'Chief Executive Officer (CEO)', 'office' => 'London', 'startdate' => '2009/10/09', 'age' => '46', 'salary' => '1,200,000'],
        	['name' => 'Ashton Cox', 'position' => 'Junior Technical Author', 'office' => 'San Francisco', 'startdate' => '2009/01/12', 'age' => '66', 'salary' => '86,000'],
        	['name' => 'Bradley Greer', 'position' => 'Software Engineer', 'office' => 'London', 'startdate' => '2012/10/13', 'age' => '41', 'salary' => '132,000'],
        	['name' => 'Brenden Wagner', 'position' => 'Software Engineer', 'office' => 'San Francisco', 'startdate' => '2011/06/07', 'age' => '28', 'salary' => '206,850'],
        	['name' => 'Brielle Williamson', 'position' => 'Integration Specialist', 'office' => 'New York', 'startdate' => '2012/12/02', 'age' => '61', 'salary' => '372,000'],
        	['name' => 'Bruno Nash', 'position' => 'Software Engineer', 'office' => 'London', 'startdate' => '2012/12/02', 'age' => '38', 'salary' => '163,500'],
        	['name' => 'Caesar Vance', 'position' => 'Pre-Sales Support', 'office' => 'New York', 'startdate' => '2011/12/12', 'age' => '21', 'salary' => '106,450'],
        	['name' => 'Cara Stevens', 'position' => 'Sales Assistant', 'office' => 'New York', 'startdate' => '2011/12/12', 'age' => '46', 'salary' => '145,600'],
        	['name' => 'Cedric Kelly', 'position' => 'Senior Javascript Developer', 'office' => 'Edinburgh', 'startdate' => '2012/03/29', 'age' => '22', 'salary' => '433,060'],
        	['name' => 'Charde Marshall', 'position' => 'Regional Director', 'office' => 'San Francisco', 'startdate' => '2008/10/16', 'age' => '36', 'salary' => '470,600']
        ];

        DB::table('positions')->insert($users);
    }
}
