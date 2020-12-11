<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      User::truncate();
      DB::table('role_user')->truncate();

      $adminRole = Role::where('name', 'admin')->first();
      $customerRole = Role::where('name', 'customer')->first();
      $sellerRole = Role::where('name', 'seller')->first();

      $admin = User::create([
        'nama' => 'admin',
        'tempat_lahir' => 'Jakarta',
        'tanggal_lahir' => '1998/01/01',
        'jenis_kelamin' => 'laki-laki',
        'noHp' => '081234567890',
        'email' => 'adminClothin@gmail.com',
        'password' => bcrypt('admin12345')
      ]);
      $customer = User::create([
        'nama' => 'customer',
        'tempat_lahir' => 'Badung',
        'tanggal_lahir' => '1999/01/01',
        'jenis_kelamin' => 'laki-laki',
        'noHp' => '081234566543',
        'email' => 'custClothin@gmail.com',
        'password' => bcrypt ('cust12345')
      ]);
      $seller = User::create([
        'nama' => 'seller',
        'tempat_lahir' => 'Bandung',
        'tanggal_lahir' => '1997/01/01',
        'jenis_kelamin' => 'perempuan',
        'noHp' => '081234564321',
        'email' => 'sellerClothin@gmail.com',
        'password' => bcrypt ('seller12345')
      ]);

      $admin->roles()->attach($adminRole);
      $customer->roles()->attach($customerRole);
      $seller->roles()->attach($sellerRole);
    }
}
