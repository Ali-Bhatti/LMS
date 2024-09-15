<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('settings')->insert([
            [
                'id' => 1,
                'page' => 'seo',
                'name' => 'seo_metas',
                'updated_at' => 1709806236,
            ],
            [
                'id' => 2,
                'page' => 'general',
                'name' => 'socials',
                'updated_at' => 1632121340,
            ],
            [
                'id' => 4,
                'page' => 'other',
                'name' => 'footer',
                'updated_at' => 1632071275,
            ],
            [
                'id' => 5,
                'page' => 'general',
                'name' => 'general',
                'updated_at' => 1725881520,
            ],
            [
                'id' => 6,
                'page' => 'financial',
                'name' => 'financial',
                'updated_at' => 1725857240,
            ],
            [
                'id' => 8,
                'page' => 'personalization',
                'name' => 'home_hero',
                'updated_at' => 1725858532,
            ],
            [
                'id' => 12,
                'page' => 'customization',
                'name' => 'custom_css_js',
                'updated_at' => 1636119881,
            ],
            [
                'id' => 14,
                'page' => 'personalization',
                'name' => 'page_background',
                'updated_at' => 1725858591,
            ],
            [
                'id' => 15,
                'page' => 'personalization',
                'name' => 'home_hero2',
                'updated_at' => 1724343259,
            ],
            [
                'id' => 20,
                'page' => 'other',
                'name' => 'report_reasons',
                'updated_at' => 1632235945,
            ],
            [
                'id' => 22,
                'page' => 'notifications',
                'name' => 'notifications',
                'updated_at' => 1694993271,
            ],
            [
                'id' => 23,
                'page' => 'financial',
                'name' => 'site_bank_accounts',
                'updated_at' => 1617002426,
            ],
            [
                'id' => 24,
                'page' => 'other',
                'name' => 'contact_us',
                'updated_at' => 1724368519,
            ],
            [
                'id' => 25,
                'page' => 'personalization',
                'name' => 'home_sections',
                'updated_at' => 1653226117,
            ],
            [
                'id' => 26,
                'page' => 'other',
                'name' => 'navbar_links',
                'updated_at' => 1724369015,
            ],
            [
                'id' => 27,
                'page' => 'personalization',
                'name' => 'home_video_or_image_box',
                'updated_at' => 1724343246,
            ],
            [
                'id' => 28,
                'page' => 'other',
                'name' => '404',
                'updated_at' => 1678950792,
            ],
            [
                'id' => 29,
                'page' => 'personalization',
                'name' => 'panel_sidebar',
                'updated_at' => 1725890982,
            ],
            [
                'id' => 30,
                'page' => 'financial',
                'name' => 'referral',
                'updated_at' => 1724367271,
            ],
            [
                'id' => 31,
                'page' => 'general',
                'name' => 'features',
                'updated_at' => 1725860862,
            ],
            [
                'id' => 32,
                'page' => 'personalization',
                'name' => 'find_instructors',
                'updated_at' => 1642530710,
            ],
            [
                'id' => 33,
                'page' => 'personalization',
                'name' => 'reward_program',
                'updated_at' => 1724343303,
            ],
            [
                'id' => 34,
                'page' => 'general',
                'name' => 'rewards_settings',
                'updated_at' => 1647616804,
            ],
            [
                'id' => 37,
                'page' => 'financial',
                'name' => 'registration_packages_general',
                'updated_at' => 1679091345,
            ],
            [
                'id' => 38,
                'page' => 'financial',
                'name' => 'registration_packages_instructors',
                'updated_at' => 1679091363,
            ],
        ]);
    }
}
