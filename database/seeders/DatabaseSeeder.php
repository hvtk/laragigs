<?php

namespace Database\Seeders;

use App\Models\Listing;
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
        \App\Models\User::factory(10)->create();

        Listing::factory(6)->create();

        Listing::create([
            'title' => 'Laravel Senior Developer',
            'tags' => 'Laravel, javascript',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email1@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Information from the first listing data'
        ]);

        Listing::create([
            'title' => 'Full-stack Developer',
            'tags' => 'Laravel, backend, api',
            'company' => 'Acme Corp',
            'location' => 'Boston, MA',
            'email' => 'email2@email.com',
            'website' => 'https://www.acme.com',
            'description' => 'Information from the second listing data'
        ]);
    }
}
