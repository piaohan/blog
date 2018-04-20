<?php

	use Illuminate\Database\Seeder;
	use App\Model\Manual;

	class ManualSeeder extends Seeder
	{

		public function run()
		{
			Manual::truncate();
			Manual::create(array(
				'aname' => "\$table->bigIncrements('id');",
				'tid'=>1,
				'description' => '自增ID，类型为bigint',
			));
			Manual::create(array(
				'aname' => "\$table->bigInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中的 BIGINT 类型',
			));
			Manual::create(array(
				'aname' => "\$table->binary('data');",
				'tid'=>1,
				'description' => '等同于数据库中的 BOOLEAN 类型',

			));
			Manual::create(array(
				'aname' => "\$table->char('name', 4);",
				'tid'=>1,
				'description' => '等同于数据库中的 CHAR 类型',

			));
			Manual::create(array(
				'aname' => "\$table->date('created_at');",
				'tid'=>1,
				'description' => '等同于数据库中的 DATE 类型',

			));
			Manual::create(array(
				'aname' => "\$table->dateTime('created_at');",
				'tid'=>1,
				'description' => '等同于数据库中的 DATETIME 类型',


			));
			Manual::create(array(
				'aname' => "\$table->dateTimeTz('created_at');",
				'tid'=>1,
				'description' => '等同于数据库中的 DATETIME 类型（带时区）',


			));
			Manual::create(array(
				'aname' => "\$table->decimal('amount', 5, 2);",
				'tid'=>1,
				'description' => '等同于数据库中的 DECIMAL 类型，带一个精度和范围',


			));
			Manual::create(array(
				'aname' => "\$table->double('column', 15, 8);",
				'tid'=>1,
				'description' => '等同于数据库中的 DOUBLE 类型，带精度, 总共15位数字，小数点后8位',


			));
			Manual::create(array(
				'aname' => "\$table->enum('choices', ['foo', 'bar']);",
				'tid'=>1,
				'description' => '等同于数据库中的 ENUM 类型',
			));
			Manual::create(array(
				'aname' => "\$table->increments('id');",
				'tid'=>1,
				'description' => '数据库主键自增ID',
			));
			Manual::create(array(
				'aname' => "\$table->float('amount');",
				'tid'=>1,
				'description' => '等同于数据库中的 FLOAT 类型',
			));
			Manual::create(array(
				'aname' => "\$table->integer('votes');",
				'tid'=>1,
				'description' => '等同于数据库中的 INTEGER 类型',

			));
			Manual::create(array(
				'aname' => "\$table->ipAddress('visitor');",
				'tid'=>1,
				'description' => '等同于数据库中的 IP 地址',
			));
			Manual::create(array(
				'aname' => "\$table->json('options');",
				'tid'=>1,
				'description' => '等同于数据库中的 JSON 类型',
			));
			Manual::create(array(
				'aname' => "\$table->jsonb('options');",
				'tid'=>1,
				'description' => '等同于数据库中的 JSONB 类型',

			));
			Manual::create(array(
				'aname' => "\$table->longText('description');",
				'tid'=>1,
				'description' => '等同于数据库中的 LONGTEXT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->macAddress('device');",
				'tid'=>1,
				'description' => '等同于数据库中的 MAC 地址',

			));
			Manual::create(array(
				'aname' => "\$table->mediumIncrements('id');",
				'tid'=>1,
				'description' => '自增ID，类型为无符号的 mediumint',

			));
			Manual::create(array(
				'aname' => "\$table->mediumInteger('numbers');",
				'tid'=>1,
				'description' => '等同于数据库中的 MEDIUMINT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->mediumText('description');",
				'tid'=>1,
				'description' => '等同于数据库中的 MEDIUMTEXT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->morphs('taggable');",
				'tid'=>1,
				'description' => '添加一个 INTEGER 类型的 taggable_id 列和一个 STRING 类型的 taggable_type 列',

			));
			Manual::create(array(
				'aname' => "\$table->nullableTimestamps();",
				'tid'=>1,
				'description' => '和 timestamps() 一样但允许 NULL 值',

			));
			Manual::create(array(
				'aname' => "\$table->rememberToken();",
				'tid'=>1,
				'description' => '添加一个 remember_token 列： VARCHAR(100) NULL',

			));
			Manual::create(array(
				'aname' => "\$table->smallIncrements('id');",
				'tid'=>1,
				'description' => '自增ID，类型为无符号的 smallint',

			));
			Manual::create(array(
				'aname' => "\$table->smallInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中的 SMALLINT 类型',

			));

			Manual::create(array(
				'aname' => "\$table->softDeletes();",
				'tid'=>1,
				'description' => '新增一个 deleted_at 列用于软删除',

			));
			Manual::create(array(
				'aname' => "\$table->string('email');",
				'tid'=>1,
				'description' => '等同于数据库中的 VARCHAR 列',

			));
			Manual::create(array(
				'aname' => "\$table->string('name', 100);",
				'tid'=>1,
				'description' => '等同于数据库中的 VARCHAR，带一个长度',

			));
			Manual::create(array(
				'aname' => "\$table->text('description');",
				'tid'=>1,
				'description' => '等同于数据库中的 TEXT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->time('sunrise');",
				'tid'=>1,
				'description' => '等同于数据库中的 TIME 类型',

			));
			Manual::create(array(
				'aname' => "\$table->timeTz('sunrise');",
				'tid'=>1,
				'description' => '等同于数据库中的 TIME 类型（带时区）',

			));
			Manual::create(array(
				'aname' => "\$table->tinyInteger('numbers');",
				'tid'=>1,
				'description' => '等同于数据库中的 TINYINT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->timeTz('sunrise');",
				'tid'=>1,
				'description' => '等同于数据库中的 TIME 类型（带时区）',

			));
			Manual::create(array(
				'aname' => "\$table->timestamp('added_on');",
				'tid'=>1,
				'description' => '等同于数据库中的 TIMESTAMP 类型',

			));
			Manual::create(array(
				'aname' => "\$table->timestampTz('added_on');",
				'tid'=>1,
				'description' => '等同于数据库中的 TIMESTAMP 类型（带时区）',

			));
			Manual::create(array(
				'aname' => "\$table->timestamps();",
				'tid'=>1,
				'description' => '添加 created_at 和 updated_at 列',

			));
			Manual::create(array(
				'aname' => "\$table->timestampsTz();",
				'tid'=>1,
				'description' => '添加 created_at 和 updated_at 列（带时区）',

			));
			Manual::create(array(
				'aname' => "\$table->unsignedBigInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中无符号的 BIGINT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->unsignedInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中无符号的 INT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->unsignedMediumInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中无符号的 MEDIUMINT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->unsignedSmallInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中无符号的 SMALLINT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->unsignedTinyInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中无符号的 TINYINT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->unsignedMediumInteger('votes');",
				'tid'=>1,
				'description' => '等同于数据库中无符号的 MEDIUMINT 类型',

			));
			Manual::create(array(
				'aname' => "\$table->uuid('id');",
				'tid'=>1,
				'description' => '等同于数据库的UUID',

			));

		}
	}
