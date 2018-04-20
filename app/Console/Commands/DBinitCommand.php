<?php

	namespace App\Console\Commands;

	use Illuminate\Console\Command;
	use Illuminate\Database\Console\Migrations\RefreshCommand;

	class DBinitCommand extends RefreshCommand
	{

		protected $signature = 'db:init';


		protected $description = '数据库表建立和数据填充';
		protected $composer;

		public function __construct()
		{
			parent::__construct();
			$this->composer = app()['composer'];
		}

		public function handle()
		{
			$this->composer->dumpAutoloads();

			$this->call('migrate:reset');

			$this->call('migrate', ['--force' => true]);

			$this->call('db:seed', ['--force' => true]);
		}
	}
