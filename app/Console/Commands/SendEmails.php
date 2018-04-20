<?php

	namespace App\Console\Commands;

	use App\User;
	use App\DripEmailer;
	use Illuminate\Console\Command;

	class SendEmails extends Command
	{
		/**
		 * The name and signature of the console command.
		 *
		 * @var string
		 * @translator laravelacademy.org
		 */
		protected $signature = 'email:send';

		/**
		 * The console command description.
		 *
		 * @var string
		 */
		protected $description = 'hello，我是飘寒';

		/**
		 * The drip e-mail service.
		 *
		 * @var DripEmailer
		 */
		protected $drip;

		/**
		 * Create a new command instance.
		 *
		 * @param  DripEmailer  $drip
		 * @return void
		 */
		public function __construct()
		{
			parent::__construct();


		}

		/**
		 * Execute the console command.
		 *
		 * @return mixed
		 */
		public function handle()
		{
			echo "hi";
		}
	}