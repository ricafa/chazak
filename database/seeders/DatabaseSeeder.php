<?php

namespace Database\Seeders;

use App\Models\Empresa;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $count = User::count();
        if ($count = 0)
        {
            $user = User::create([
                'name'      => 'first',
                'email'     => 'ricke.droid@gmail.com',
                'password'  => md5('chazak123123'),
            ]);
            $user->save();
            echo "Usuário criada com sucesso \n";
        }
        else{
            echo "Usuário já existente \n";
        }

        $count = Empresa::count();
        if ($count = 0)
        {
            Empresa::create([
                'nome'      => 'Chazak Sistemas Práticos',
                'logo'      => 'chazak_logo.png',
                'logo'      => 'admin',
                'users_id'  => $user->id,
            ]);
            echo "Empresa criada com sucesso \n";
        }
        else{
            echo "Empresa já existente \n";
        }
    }
}
