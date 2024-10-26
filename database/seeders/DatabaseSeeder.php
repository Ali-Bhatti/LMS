<?php
namespace Database\Seeders;

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
        $this->call(SettingsTableSeeder::class);
        $this->call(SettingTranslationsSeeder::class);
        $this->call(SectionsTableSeeder::class);

        $this->call(PaymentChannelsTableSeeder::class);
        
        $this->call(makeFakeData::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
    }
}
