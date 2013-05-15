<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call('UserTableSeeder');
		$this->call('GroupsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('PhotosTableSeeder');
		$this->call('ProvincesTableSeeder');
		$this->call('LocationsTableSeeder');
	}

}