<?php
namespace database\seeds;
use App\Restdata;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'message' => 'Google Japan',
            'url' => 'https://www.google.co.jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Yahoo Japan',
            'url' => 'https://www.yahoo.co.jp',
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();

        $param = [
            'message' => 'Line',
            'url' => 'https://line.me/ja/'
        ];
        $restdata = new Restdata();
        $restdata->fill($param)->save();
    }
}
