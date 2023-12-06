<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Country::insert([
            [
                'code_a2' => 'AF',
                'name' => 'Afghanistan',
                'code' => 93,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AL',
                'name' => 'Albania',
                'code' => 355,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'DZ',
                'name' => 'Algeria',
                'code' => 213,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AS',
                'name' => 'American Samoa',
                'code' => 1684,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AD',
                'name' => 'Andorra',
                'code' => 376,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AO',
                'name' => 'Angola',
                'code' => 244,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AI',
                'name' => 'Anguilla',
                'code' => 1264,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AQ',
                'name' => 'Antarctica',
                'code' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AG',
                'name' => 'Antigua And Barbuda',
                'code' => 1268,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AR',
                'name' => 'Argentina',
                'code' => 54,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AM',
                'name' => 'Armenia',
                'code' => 374,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AW',
                'name' => 'Aruba',
                'code' => 297,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AU',
                'name' => 'Australia',
                'code' => 61,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AT',
                'name' => 'Austria',
                'code' => 43,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AZ',
                'name' => 'Azerbaijan',
                'code' => 994,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BS',
                'name' => 'Bahamas The',
                'code' => 1242,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BH',
                'name' => 'Bahrain',
                'code' => 973,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BD',
                'name' => 'Bangladesh',
                'code' => 880,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BB',
                'name' => 'Barbados',
                'code' => 1246,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BY',
                'name' => 'Belarus',
                'code' => 375,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BE',
                'name' => 'Belgium',
                'code' => 32,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BZ',
                'name' => 'Belize',
                'code' => 501,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BJ',
                'name' => 'Benin',
                'code' => 229,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BM',
                'name' => 'Bermuda',
                'code' => 1441,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BT',
                'name' => 'Bhutan',
                'code' => 975,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BO',
                'name' => 'Bolivia',
                'code' => 591,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BA',
                'name' => 'Bosnia and Herzegovina',
                'code' => 387,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BW',
                'name' => 'Botswana',
                'code' => 267,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BV',
                'name' => 'Bouvet Island',
                'code' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BR',
                'name' => 'Brazil',
                'code' => 55,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IO',
                'name' => 'British Indian Ocean Territory',
                'code' => 246,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BN',
                'name' => 'Brunei',
                'code' => 673,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BG',
                'name' => 'Bulgaria',
                'code' => 359,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BF',
                'name' => 'Burkina Faso',
                'code' => 226,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'BI',
                'name' => 'Burundi',
                'code' => 257,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KH',
                'name' => 'Cambodia',
                'code' => 855,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CM',
                'name' => 'Cameroon',
                'code' => 237,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CA',
                'name' => 'Canada',
                'code' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CV',
                'name' => 'Cape Verde',
                'code' => 238,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KY',
                'name' => 'Cayman Islands',
                'code' => 1345,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CF',
                'name' => 'Central African Republic',
                'code' => 236,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TD',
                'name' => 'Chad',
                'code' => 235,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CL',
                'name' => 'Chile',
                'code' => 56,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CN',
                'name' => 'China',
                'code' => 86,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CX',
                'name' => 'Christmas Island',
                'code' => 61,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CC',
                'name' => 'Cocos (Keeling) Islands',
                'code' => 672,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CO',
                'name' => 'Colombia',
                'code' => 57,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KM',
                'name' => 'Comoros',
                'code' => 269,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CG',
                'name' => 'Republic Of The Congo',
                'code' => 242,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CD',
                'name' => 'Democratic Republic Of The Congo',
                'code' => 242,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CK',
                'name' => 'Cook Islands',
                'code' => 682,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CR',
                'name' => 'Costa Rica',
                'code' => 506,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CI',
                'name' => 'Cote D Ivoire (Ivory Coast)',
                'code' => 225,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'HR',
                'name' => 'Croatia (Hrvatska)',
                'code' => 385,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CU',
                'name' => 'Cuba',
                'code' => 53,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CY',
                'name' => 'Cyprus',
                'code' => 357,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CZ',
                'name' => 'Czech Republic',
                'code' => 420,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'DK',
                'name' => 'Denmark',
                'code' => 45,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'DJ',
                'name' => 'Djibouti',
                'code' => 253,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'DM',
                'name' => 'Dominica',
                'code' => 1767,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'DO',
                'name' => 'Dominican Republic',
                'code' => 1809,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TP',
                'name' => 'East Timor',
                'code' => 670,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'EC',
                'name' => 'Ecuador',
                'code' => 593,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'EG',
                'name' => 'Egypt',
                'code' => 20,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SV',
                'name' => 'El Salvador',
                'code' => 503,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GQ',
                'name' => 'Equatorial Guinea',
                'code' => 240,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ER',
                'name' => 'Eritrea',
                'code' => 291,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'EE',
                'name' => 'Estonia',
                'code' => 372,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ET',
                'name' => 'Ethiopia',
                'code' => 251,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'XA',
                'name' => 'External Territories of Australia',
                'code' => 61,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'FK',
                'name' => 'Falkland Islands',
                'code' => 500,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'FO',
                'name' => 'Faroe Islands',
                'code' => 298,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'FJ',
                'name' => 'Fiji Islands',
                'code' => 679,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'FI',
                'name' => 'Finland',
                'code' => 358,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'FR',
                'name' => 'France',
                'code' => 33,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GF',
                'name' => 'French Guiana',
                'code' => 594,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PF',
                'name' => 'French Polynesia',
                'code' => 689,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TF',
                'name' => 'French Southern Territories',
                'code' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GA',
                'name' => 'Gabon',
                'code' => 241,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GM',
                'name' => 'Gambia The',
                'code' => 220,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GE',
                'name' => 'Georgia',
                'code' => 995,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'DE',
                'name' => 'Germany',
                'code' => 49,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GH',
                'name' => 'Ghana',
                'code' => 233,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GI',
                'name' => 'Gibraltar',
                'code' => 350,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GR',
                'name' => 'Greece',
                'code' => 30,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GL',
                'name' => 'Greenland',
                'code' => 299,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GD',
                'name' => 'Grenada',
                'code' => 1473,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GP',
                'name' => 'Guadeloupe',
                'code' => 590,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GU',
                'name' => 'Guam',
                'code' => 1671,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GT',
                'name' => 'Guatemala',
                'code' => 502,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'XU',
                'name' => 'Guernsey and Alderney',
                'code' => 44,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GN',
                'name' => 'Guinea',
                'code' => 224,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GW',
                'name' => 'Guinea-Bissau',
                'code' => 245,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GY',
                'name' => 'Guyana',
                'code' => 592,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'HT',
                'name' => 'Haiti',
                'code' => 509,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'HM',
                'name' => 'Heard and McDonald Islands',
                'code' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'HN',
                'name' => 'Honduras',
                'code' => 504,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'HK',
                'name' => 'Hong Kong S.A.R.',
                'code' => 852,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'HU',
                'name' => 'Hungary',
                'code' => 36,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IS',
                'name' => 'Iceland',
                'code' => 354,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IN',
                'name' => 'India',
                'code' => 91,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ID',
                'name' => 'Indonesia',
                'code' => 62,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IR',
                'name' => 'Iran',
                'code' => 98,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IQ',
                'name' => 'Iraq',
                'code' => 964,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IE',
                'name' => 'Ireland',
                'code' => 353,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IL',
                'name' => 'Israel',
                'code' => 972,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'IT',
                'name' => 'Italy',
                'code' => 39,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'JM',
                'name' => 'Jamaica',
                'code' => 1876,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'JP',
                'name' => 'Japan',
                'code' => 81,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'XJ',
                'name' => 'Jersey',
                'code' => 44,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'JO',
                'name' => 'Jordan',
                'code' => 962,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KZ',
                'name' => 'Kazakhstan',
                'code' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KE',
                'name' => 'Kenya',
                'code' => 254,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KI',
                'name' => 'Kiribati',
                'code' => 686,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KP',
                'name' => 'Korea North',
                'code' => 850,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KR',
                'name' => 'Korea South',
                'code' => 82,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KW',
                'name' => 'Kuwait',
                'code' => 965,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KG',
                'name' => 'Kyrgyzstan',
                'code' => 996,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LA',
                'name' => 'Laos',
                'code' => 856,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LV',
                'name' => 'Latvia',
                'code' => 371,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LB',
                'name' => 'Lebanon',
                'code' => 961,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LS',
                'name' => 'Lesotho',
                'code' => 266,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LR',
                'name' => 'Liberia',
                'code' => 231,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LY',
                'name' => 'Libya',
                'code' => 218,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LI',
                'name' => 'Liechtenstein',
                'code' => 423,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LT',
                'name' => 'Lithuania',
                'code' => 370,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LU',
                'name' => 'Luxembourg',
                'code' => 352,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MO',
                'name' => 'Macau S.A.R.',
                'code' => 853,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MK',
                'name' => 'Macedonia',
                'code' => 389,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MG',
                'name' => 'Madagascar',
                'code' => 261,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MW',
                'name' => 'Malawi',
                'code' => 265,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MY',
                'name' => 'Malaysia',
                'code' => 60,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MV',
                'name' => 'Maldives',
                'code' => 960,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ML',
                'name' => 'Mali',
                'code' => 223,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MT',
                'name' => 'Malta',
                'code' => 356,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'XM',
                'name' => 'Man (Isle of)',
                'code' => 44,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MH',
                'name' => 'Marshall Islands',
                'code' => 692,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MQ',
                'name' => 'Martinique',
                'code' => 596,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MR',
                'name' => 'Mauritania',
                'code' => 222,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MU',
                'name' => 'Mauritius',
                'code' => 230,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'YT',
                'name' => 'Mayotte',
                'code' => 269,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MX',
                'name' => 'Mexico',
                'code' => 52,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'FM',
                'name' => 'Micronesia',
                'code' => 691,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MD',
                'name' => 'Moldova',
                'code' => 373,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MC',
                'name' => 'Monaco',
                'code' => 377,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MN',
                'name' => 'Mongolia',
                'code' => 976,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MS',
                'name' => 'Montserrat',
                'code' => 1664,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MA',
                'name' => 'Morocco',
                'code' => 212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MZ',
                'name' => 'Mozambique',
                'code' => 258,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MM',
                'name' => 'Myanmar',
                'code' => 95,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NA',
                'name' => 'Namibia',
                'code' => 264,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NR',
                'name' => 'Nauru',
                'code' => 674,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NP',
                'name' => 'Nepal',
                'code' => 977,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AN',
                'name' => 'Netherlands Antilles',
                'code' => 599,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NL',
                'name' => 'Netherlands The',
                'code' => 31,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NC',
                'name' => 'New Caledonia',
                'code' => 687,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NZ',
                'name' => 'New Zealand',
                'code' => 64,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NI',
                'name' => 'Nicaragua',
                'code' => 505,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NE',
                'name' => 'Niger',
                'code' => 227,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NG',
                'name' => 'Nigeria',
                'code' => 234,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NU',
                'name' => 'Niue',
                'code' => 683,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NF',
                'name' => 'Norfolk Island',
                'code' => 672,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'MP',
                'name' => 'Northern Mariana Islands',
                'code' => 1670,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'NO',
                'name' => 'Norway',
                'code' => 47,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'OM',
                'name' => 'Oman',
                'code' => 968,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PK',
                'name' => 'Pakistan',
                'code' => 92,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PW',
                'name' => 'Palau',
                'code' => 680,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PS',
                'name' => 'Palestinian Territory Occupied',
                'code' => 970,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PA',
                'name' => 'Panama',
                'code' => 507,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PG',
                'name' => 'Papua new Guinea',
                'code' => 675,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PY',
                'name' => 'Paraguay',
                'code' => 595,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PE',
                'name' => 'Peru',
                'code' => 51,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PH',
                'name' => 'Philippines',
                'code' => 63,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PN',
                'name' => 'Pitcairn Island',
                'code' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PL',
                'name' => 'Poland',
                'code' => 48,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PT',
                'name' => 'Portugal',
                'code' => 351,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PR',
                'name' => 'Puerto Rico',
                'code' => 1787,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'QA',
                'name' => 'Qatar',
                'code' => 974,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'RE',
                'name' => 'Reunion',
                'code' => 262,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'RO',
                'name' => 'Romania',
                'code' => 40,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'RU',
                'name' => 'Russia',
                'code' => 7,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'RW',
                'name' => 'Rwanda',
                'code' => 250,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SH',
                'name' => 'Saint Helena',
                'code' => 290,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'KN',
                'name' => 'Saint Kitts And Nevis',
                'code' => 1869,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LC',
                'name' => 'Saint Lucia',
                'code' => 1758,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'PM',
                'name' => 'Saint Pierre and Miquelon',
                'code' => 508,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'VC',
                'name' => 'Saint Vincent And The Grenadines',
                'code' => 1784,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'WS',
                'name' => 'Samoa',
                'code' => 684,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SM',
                'name' => 'San Marino',
                'code' => 378,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ST',
                'name' => 'Sao Tome and Principe',
                'code' => 239,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SA',
                'name' => 'Saudi Arabia',
                'code' => 966,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SN',
                'name' => 'Senegal',
                'code' => 221,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'RS',
                'name' => 'Serbia',
                'code' => 381,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SC',
                'name' => 'Seychelles',
                'code' => 248,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SL',
                'name' => 'Sierra Leone',
                'code' => 232,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SG',
                'name' => 'Singapore',
                'code' => 65,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SK',
                'name' => 'Slovakia',
                'code' => 421,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SI',
                'name' => 'Slovenia',
                'code' => 386,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'XG',
                'name' => 'Smaller Territories of the UK',
                'code' => 44,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SB',
                'name' => 'Solomon Islands',
                'code' => 677,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SO',
                'name' => 'Somalia',
                'code' => 252,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ZA',
                'name' => 'South Africa',
                'code' => 27,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GS',
                'name' => 'South Georgia',
                'code' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SS',
                'name' => 'South Sudan',
                'code' => 211,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ES',
                'name' => 'Spain',
                'code' => 34,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'LK',
                'name' => 'Sri Lanka',
                'code' => 94,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SD',
                'name' => 'Sudan',
                'code' => 249,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SR',
                'name' => 'Suricountry_name',
                'code' => 597,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SJ',
                'name' => 'Svalbard And Jan Mayen Islands',
                'code' => 47,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SZ',
                'name' => 'Swaziland',
                'code' => 268,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SE',
                'name' => 'Sweden',
                'code' => 46,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'CH',
                'name' => 'Switzerland',
                'code' => 41,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'SY',
                'name' => 'Syria',
                'code' => 963,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TW',
                'name' => 'Taiwan',
                'code' => 886,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TJ',
                'name' => 'Tajikistan',
                'code' => 992,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TZ',
                'name' => 'Tanzania',
                'code' => 255,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TH',
                'name' => 'Thailand',
                'code' => 66,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TG',
                'name' => 'Togo',
                'code' => 228,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TK',
                'name' => 'Tokelau',
                'code' => 690,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TO',
                'name' => 'Tonga',
                'code' => 676,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TT',
                'name' => 'Trincountry_idad And Tobago',
                'code' => 1868,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TN',
                'name' => 'Tunisia',
                'code' => 216,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TR',
                'name' => 'Turkey',
                'code' => 90,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TM',
                'name' => 'Turkmenistan',
                'code' => 7370,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TC',
                'name' => 'Turks And Caicos Islands',
                'code' => 1649,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'TV',
                'name' => 'Tuvalu',
                'code' => 688,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'UG',
                'name' => 'Uganda',
                'code' => 256,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'UA',
                'name' => 'Ukraine',
                'code' => 380,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'AE',
                'name' => 'United Arab Emirates',
                'code' => 971,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'GB',
                'name' => 'United Kingdom',
                'code' => 44,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'US',
                'name' => 'United States',
                'code' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'UM',
                'name' => 'United States Minor Outlying Islands',
                'code' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'UY',
                'name' => 'Uruguay',
                'code' => 598,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'UZ',
                'name' => 'Uzbekistan',
                'code' => 998,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'VU',
                'name' => 'Vanuatu',
                'code' => 678,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'VA',
                'name' => 'Vatican City State (Holy See)',
                'code' => 39,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'VE',
                'name' => 'Venezuela',
                'code' => 58,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'VN',
                'name' => 'Vietnam',
                'code' => 84,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'VG',
                'name' => 'Virgin Islands (British)',
                'code' => 1284,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'VI',
                'name' => 'Virgin Islands (US)',
                'code' => 1340,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'WF',
                'name' => 'Wallis And Futuna Islands',
                'code' => 681,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'EH',
                'name' => 'Western Sahara',
                'code' => 212,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'YE',
                'name' => 'Yemen',
                'code' => 967,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'YU',
                'name' => 'Yugoslavia',
                'code' => 38,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ZM',
                'name' => 'Zambia',
                'code' => 260,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ],
            [
                'code_a2' => 'ZW',
                'name' => 'Zimbabwe',
                'code' => 26,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
