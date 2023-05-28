

<!-- // namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;
// use App\Models\Contact;

// class ContactTableSeeder extends Seeder
// {
    /**
     * Run the database seeds.
     */
//     public function run(): void
//     {
//         Contact::factory()->count(50)->create();
//     }
// } -->

namespace Database\Seeders;

<?php



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
   

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('contacts')->truncate();

        $contacts = [];
        $faker = Faker::create();

        foreach (range(1, 10) as $index)
        {
            $contacts[] = [
                'name' => $faker->name(),
                'address' => $faker->address(),
                'lastname' =>  $faker->name(),
                'email' => $faker->email(),
                'hobbies' => $faker->name(),
                'company_id'=>Company::factory(),
                'created_at' => now(),
                'updated_at' =>  now(),
            ];
        }

        DB::table('contacts')->insert($contacts);
    }
}
 