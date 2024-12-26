<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Wallet;
use App\Models\WalletType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        User::truncate();
        Wallet::truncate();
        WalletType::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        $this->call(UserSeeder::class);
        $this->call(WalletSeeder::class);
        $this->call(WalletTypeSeeder::class);
    }
}
