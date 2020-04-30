<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        $super_admin =  User::create([
            'name' => 'super_admin',
            'email' => 'kirraridibo@gmail.com',

            'password' => Hash::make('rootadmin')

            ]);
           $admin = User::create([
                'name' => 'admin',
                'email' => 'admin@gmail.com ',

                'password' => Hash::make('rootadmin')

                ]);

                $lecteur = User::create([
                    'name' => 'lecteur',
                    'email' => 'lecteur@gmail.com',

                    'password' => Hash::make('rootadmin')

                    ]);
                   $operateur =  User::create([
                        'name' => 'operateur',
                        'email' => 'operateur@gmail.com',

                        'password' => Hash::make('rootadmin')

                        ]);
                       $utilisateur =  User::create([
                            'name' => 'utilisateur',
                            'email' => 'utilisateur@gmail.com',

                            'password' => Hash::make('rootadmin')

                            ]);
                            $super_adminRole = Role::where('name', 'super_admin')->first();
                            $adminRole = Role::where('name', 'admin')->first();
                            $lecteurRole = Role::where('name', 'lecteur')->first();
                            $operateurRole = Role::where('name', 'operateur')->first();
                            $utilisateurRole = Role::where('name', 'utilisateur')->first();

                            $super_admin->roles()->attach($super_adminRole);
                            $admin->roles()->attach($adminRole);
                            $lecteur->roles()->attach($lecteurRole);
                            $operateur->roles()->attach($operateurRole);
                            $utilisateur->roles()->attach($utilisateurRole);


    }
}
