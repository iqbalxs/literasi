<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Membuat role admin
		$adminRole = new Role();
		$adminRole->name = "admin";
		$adminRole->display_name = "Admin";
		$adminRole->save();

		// Membuat role guru
		$guruRole = new Role();
		$guruRole->name = "guru";
		$guruRole->display_name = "Guru";
		$guruRole->save();

		// Membuat role siswa
		$siswaRole = new Role();
		$siswaRole->name = "siswa";
		$siswaRole->display_name = "Siswa";
		$siswaRole->save();

		
		// Membuat sample admin
		$admin = new User();
		$admin->name = 'Admin Literasi';
		$admin->email = 'admin@gmail.com';
		$admin->password = bcrypt('rahasia');
		$admin->r_id = '99999999';
		$admin->school = 'admin-admin';
		$admin->is_verified = 1;
		$admin->save();
		$admin->attachRole($adminRole);
		
		// Membuat sample guru
		$guru = new User();
		$guru->name = "Sample Guru";
		$guru->email = 'guru@gmail.com';
		$guru->password = bcrypt('rahasia');
		$guru->r_id = '1234000';
		$guru->school = 'SMK 1 Bandung';
		$guru->is_verified = 1;
		$guru->save();
		$guru->attachRole($guruRole);

		// Membuat sample siswa
		$siswa = new User();
		$siswa->name = "Sample Siswa";
		$siswa->email = 'siswa@gmail.com';
		$siswa->password = bcrypt('rahasia');
		$siswa->r_id = '5432000';
		$siswa->school = 'SMK 2 Bandung';
		$siswa->is_verified = 1;
		$siswa->save();
		$siswa->attachRole($siswaRole);
    }
}
