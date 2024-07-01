<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;  

class States extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = [
            "Alabama" => "AL",
            "Alaska" => "AK",
            "American Samoa" => "AS",
            "Arizona" => "AZ",
            "Arkansas" => "AR",
            "California" => "CA",
            "Colorado" => "CO",
            "Connecticut" => "CT",
            "Delaware" => "DE",
            "District of Columbia" => "DC",
            "Federated States of Micronesia" => "FM",
            "Florida" => "FL",
            "Georgia" => "GA",
            "Guam" => "GU",
            "Hawaii" => "HI",
            "Idaho" => "ID",
            "Illinois" => "IL",
            "Indiana" => "IN",
            "Iowa" => "IA",
            "Kansas" => "KS",
            "Kentucky" => "KY",
            "Louisiana" => "LA",
            "Maine" => "ME",
            "Marshall Islands" => "MH",
            "Maryland" => "MD",
            "Massachusetts" => "MA",
            "Michigan" => "MI",
            "Minnesota" => "MN",
            "Mississippi" => "MS",
            "Missouri" => "MO",
            "Montana" => "MT",
            "Nebraska" => "NE",
            "Nevada" => "NV",
            "New Hampshire" => "NH",
            "New Jersey" => "NJ",
            "New Mexico" => "NM",
            "New York" => "NY",
            "North Carolina" => "NC",
            "North Dakota" => "ND",
            "Northern Mariana Islands" => "MP",
            "Ohio" => "OH",
            "Oklahoma" => "OK",
            "Oregon" => "OR",
            "Palau" => "PW",
            "Pennsylvania" => "PA",
            "Puerto Rico" => "PR",
            "Rhode Island" => "RI",
            "South Carolina" => "SC",
            "South Dakota" => "SD",
            "Tennessee" => "TN",
            "Texas" => "TX",
            "Utah" => "UT",
            "Vermont" => "VT",
            "Virgin Islands" => "VI",
            "Virginia" => "VA",
            "Washington" => "WA",
            "West Virginia" => "WV",
            "Wisconsin" => "WI",
            "Wyoming" => "WY"
        ];
        ksort($states);


        foreach ($states as $state => $abbreviation) {
            DB::table('states')->insert([
                'name' => $state,
                'abbreviation' => $abbreviation,
            ]);
        }
    }
}
