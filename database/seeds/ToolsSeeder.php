<?php

use Illuminate\Database\Seeder;
use App\Model\Tools;

class ToolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tools::truncate();
		Tools::create(array(
			"tname"=>'迁移:可用的数据列类型',
		));
    }
}
