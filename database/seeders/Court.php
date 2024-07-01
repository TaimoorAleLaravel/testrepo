<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  
class Court extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courts = [
            "Alaska" => ["Alaska Bankruptcy Court"],
            "Alabama" => ["Alabama Middle Bankruptcy Court", "Alabama Northern Bankruptcy Court", "Alabama South Bankruptcy Court"],
            "Arkansas" => ["Arkansas Eastern Bankruptcy Court", "Arkansas Western Bankruptcy Court"],
            "Arizona" => ["Arizona Bankruptcy Court"],
            "American Samoa" => [],
            "California" => ["California Central Bankruptcy Court", "California Eastern Bankruptcy Court", "California Northern Bankruptcy Court", "California Southern Bankruptcy Court"],
            "Colorado" => ["Colorado Bankruptcy Court"],
            "Connecticut" => ["Connecticut Bankruptcy Court"],
            "District of Columbia" => ["District of Columbia Bankruptcy Court"],
            "Delaware" => ["Delaware Bankruptcy Court"],
            "Federated States of Micronesia" => [],
            "Florida" => ["Florida Middle Bankruptcy Court", "Florida Northern Bankruptcy Court", "Florida Southern Bankruptcy Court"],
            "Georgia" => ["Georgia Middle Bankruptcy Court", "Georgia Northern Bankruptcy Court", "Georgia Southern Bankruptcy Court"],
            "Guam" => ["Guam Bankruptcy Court"],
            "Hawaii" => ["Hawaii Bankruptcy Court"],
            "Iowa" => ["Iowa Northern Bankruptcy Court", "Iowa Southern Bankruptcy Court"],
            "Idaho" => ["Idaho Bankruptcy Court"],
            "Illinois" => ["Illinois Central Bankruptcy Court", "Illinois Northern Bankruptcy Court", "Illinois Southern Bankruptcy Court"],
            "Indiana" => ["Indiana Northern Bankruptcy Court", "Indiana Southern Bankruptcy Court"],
            "Kansas" => ["Kansas Bankruptcy Court"],
            "Kentucky" => ["Kentucky Eastern Bankruptcy Court", "Kentucky Western Bankruptcy Court"],
            "Louisiana" => ["Louisiana Eastern Bankruptcy Court", "Louisiana Middle Bankruptcy Court", "Louisiana Western Bankruptcy Court"],
            "Massachusetts" => ["Massachusetts Bankruptcy Court"],
            "Maryland" => ["Maryland Bankruptcy Court"],
            "Maine" => ["Maine Bankruptcy Court"],
            "Marshall Islands" => [],
            "Michigan" => ["Michigan Eastern Bankruptcy Court", "Michigan Western Bankruptcy Court"],
            "Minnesota" => ["Minnesota Bankruptcy Court"],
            "Missouri" => ["Missouri Eastern Bankruptcy Court", "Missouri Western Bankruptcy Court"],
            "Mississippi" => ["Mississippi Northern Bankruptcy", "Mississippi Southern Bankruptcy"],
            "Montana" => ["Montana Bankruptcy Court"],
            "North Carolina" => ["North Carolina Eastern Bankruptcy Court", "North Carolina Middle Bankruptcy Court", "North Carolina Western Bankruptcy Court"],
            "Northern Mariana Islands" => ["Northern Mariana Islands Bankruptcy Court"],
            "North Dakota" => ["North Dakota Bankruptcy Court"],
            "Nebraska" => ["Nebraska Bankruptcy Court"],
            "New Hampshire" => ["New Hampshire Bankruptcy Court"],
            "New Jersey" => ["New Jersey Bankruptcy Court"],
            "New Mexico" => ["New Mexico Bankruptcy Court"],
            "Nevada" => ["Nevada Bankruptcy Court"],
            "New York" => ["New York Eastern Bankruptcy Court", "New York Northern Bankruptcy Court", "New York Southern Bankruptcy Court", "New York Western Bankruptcy Court"],
            "Ohio" => ["Ohio Northern Bankruptcy Court", "Ohio Southern Bankruptcy Court"],
            "Oklahoma" => ["Oklahoma Eastern Bankruptcy Court", "Oklahoma Northern Bankruptcy Court", "Oklahoma Western Bankruptcy Court"],
            "Oregon" => ["Oregon Bankruptcy Court"],
            "Pennsylvania" => ["Pennsylvania Eastern Bankruptcy Court", "Pennsylvania Middle Bankruptcy Court", "Pennsylvania Western Bankruptcy Court"],
            "Palau" => [],
            "Puerto Rico" => ["Puerto Rico Bankruptcy Court"],
            "Rhode Island" => ["Rhode Island Bankruptcy Court"],
            "South Carolina" => ["South Carolina Bankruptcy Court"],
            "South Dakota" => ["South Dakota Bankruptcy Court"],
            "Tennessee" => ["Tennessee Eastern Bankruptcy Court", "Tennessee Middle Bankruptcy Court", "Tennessee Western Bankruptcy Court"],
            "Texas" => ["Texas Eastern Bankruptcy Court", "Texas Northern Bankruptcy Court", "Texas Southern Bankruptcy Court", "Texas Western Bankruptcy Court"],
            "Utah" => ["Utah Bankruptcy Court"],
            "Virginia" => ["Virginia Eastern Bankruptcy Court", "Virginia Western Bankruptcy Court"],
            "Virgin Islands" => ["Virgin Islands Bankruptcy Court"],
            "Vermont" => ["Vermont Bankruptcy Court"],
            "Washington" => ["Washington Eastern Bankruptcy Court", "Washington Western Bankruptcy Court"],
            "Wisconsin" => ["Wisconsin Eastern Bankruptcy Court", "Wisconsin Western Bankruptcy Court"],
            "West Virginia" => ["West Virginia Northern Bankruptcy Court", "West Virginia Southern Bankruptcy Court"],
            "Wyoming" => ["Wyoming Bankruptcy Court"],
        ];
ksort($courts);
        foreach ($courts as $state => $courtList) {
            $stateRecord = DB::table('states')->where('name', $state)->first(['id']);
            
            if ($stateRecord) {
                $state_id = $stateRecord->id;
                foreach ($courtList as $courtName) {
                    DB::table('courts')->insert([
                        'state_id' => $state_id,
                        'name' => $courtName
                    ]);
                }
            } else {
                echo "State '$state' not found in the 'states' table.\n";
            }
        }


    }
}
