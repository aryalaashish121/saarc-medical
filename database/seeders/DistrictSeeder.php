<?php

namespace Database\Seeders;

use App\Models\District;
use Illuminate\Database\Seeder;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            $districts = [
                ['name' => 'Mugu'],
                ['name' => 'Achham'],
                ['name' => 'Arghakhanchi'],
                ['name' => 'Humla'],
                ['name' => 'Gulmi'],
                ['name' => 'Kalikot'],
                ['name' => 'Jajarkot'],
                ['name' => 'Dailekh'],
                ['name' => 'Taplejung'],
                ['name' => 'Panchthar'],
                ['name' => 'Ilam'],
                ['name' => 'Sankhuwasabha'],
                ['name' => 'Terhathum'],
                ['name' => 'Dhankuta'],
                ['name' => 'Bhojpur'],
                ['name' => 'Khotang'],
                ['name' => 'Solukhumbu'],
                ['name' => 'Okhaldhunga'],
                ['name' => 'Udayapur'],
                ['name' => 'Jhapa'],
                ['name' => 'Morang'],
                ['name' => 'Sunsari'],
                ['name' => 'Saptari'],
                ['name' => 'Siraha'],
                ['name' => 'Dhanusha'],
                ['name' => 'Mahottari'],
                ['name' => 'Sarlahi'],
                ['name' => 'Rautahat'],
                ['name' => 'Bara'],
                ['name' => 'Parsa'],
                ['name' => 'Dolakha'],
                ['name' => 'Ramechhap'],
                ['name' => 'Sindhuli'],
                ['name' => 'Kavrepalanchok'],
                ['name' => 'Sindhupalchok'],
                ['name' => 'Rasuwa'],
                ['name' => 'Nuwakot'],
                ['name' => 'Dhading'],
                ['name' => 'Chitwan'],
                ['name' => 'Makawanpur'],
                ['name' => 'Bhaktapur'],
                ['name' => 'Lalitpur'],
                ['name' => 'Gorkha'],
                ['name' => 'Lamjung'],
                ['name' => 'Tanahun'],
                ['name' => 'Kaski'],
                ['name' => 'Manang'],
                ['name' => 'Mustang'],
                ['name' => 'Parbat'],
                ['name' => 'Syangja'],
                ['name' => 'Myagdi'],
                ['name' => 'Baglung'],
                ['name' => 'Nawalparasi (Eastern Part from Bardaghat Susta)'],
                ['name' => 'Nawalparasi (Western Part from Bardaghat Susta)'],
                ['name' => 'Rupandehi'],
                ['name' => 'Kapilvastu'],
                ['name' => 'Palpa'],
                ['name' => 'Rukum (Eastern Part)'],
                ['name' => 'Rolpa'],
                ['name' => 'Pyuthan'],
                ['name' => 'Dang'],
                ['name' => 'Banke'],
                ['name' => 'Bardiya'],
                ['name' => 'Rukum (Western Part)'],
                ['name' => 'Salyan'],
                ['name' => 'Dolpa'],
                ['name' => 'Jumla'],
                ['name' => 'Surkhet'],
                ['name' => 'Bajura'],
                ['name' => 'Bajhang'],
                ['name' => 'Doti'],
                ['name' => 'Darchula'],
                ['name' => 'Baitadi'],
                ['name' => 'Dadeldhura'],
                ['name' => 'Kanchanpur'],
                ['name' => 'Kailali'],
                ['name' => 'Kathmandu']
            ];
    
            foreach ($districts as $district) {
                District::create($district);
            }
        }
    }
}
