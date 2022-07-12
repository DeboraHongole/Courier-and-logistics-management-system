<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
use App\Models\Country;
use App\Models\Region;
use App\Models\User;
use App\Models\ShippingNumber;
use Carbon\Carbon;
//use App\Models\state;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $country = [           
            ['name' => 'Afghanistan'],['name' => 'Albania'],['name' => 'Algeria'],
            ['name' => 'Andorra'],['name' => 'Angola'],['name' => 'Antarctica'],
            ['name' => 'Antigua and Barbuda'],['name' => 'Argentina'],['name' => 'Armenia'],
            ['name' => 'Australia'],['name' => 'Austria'],['name' => 'Azerbaijan'],
            ['name' => 'Bahamas'],['name' => 'Bahrain'],['name' => 'Bangladesh'],
            ['name' => 'Barbados'],
            ['name' => 'Belarus'],['name' => 'Belgium'],['name' => 'Belize'],
            ['name' => 'Benin'],['name' => 'Bermuda'],['name' => 'Bhutan'],
            ['name' => 'Bolivia'],['name' => 'Bosnia and Herzegovina'],['name' => 'Botswana'],
            ['name' => 'Brazil'],['name' => 'Brunei'],['name' => 'Bulgaria'],
            ['name' => 'Burkina Faso'],['name' => 'Burma'],['name' => 'Burundi'],

            ['name' => 'Cambodia'],['name' => 'Cameroon'],
            ['name' => 'Canada'],['name' => 'Cape Verde'],['name' => 'Central African Republic'],
            ['name' => 'Chad'],['name' => 'Chile'],['name' => 'China'],
            ['name' => 'Colombia'],['name' => 'Comoros'],['name' => 'Congo, Democratic Republic'], 
            ['name' => 'Congo, Republic of the'],['name' => 'Costa Rica'],['name' => 'Cote d Ivoire'], 
            ['name' => 'Croatia'],['name' => 'Cuba'],['name' => 'Cyprus'], 
            ['name' => 'Czech Republic'], 
            ['name' => 'Denmark'], 
            ['name' => 'Djibouti'], 
            ['name' => 'Dominica'], 
            ['name' => 'Dominican Republic'], 
            ['name' => 'East Timor'], 
            ['name' => 'Ecuador'], 
            ['name' => 'Egypt'], 
            ['name' => 'El Salvador'], 
            ['name' => 'Equatorial Guinea'], 
            ['name' => 'Eritrea'], 
            ['name' => 'Estonia'], 
            ['name' => 'Ethiopia'], 
            ['name' => 'Fiji'], 
            ['name' => 'Finland'],
            ['name' => 'France'], 
            ['name' => 'Gabon'], 
            ['name' => 'Gambia'], 
            ['name' => 'Georgia'], 
            ['name' => 'Germany'], 
            ['name' => 'Ghana'], 
            ['name' => 'Greece'], 
            ['name' => 'Greenland'], 
            ['name' => 'Grenada'], 
            ['name' => 'Guatemala'], 
            ['name' => 'Guinea'], 
            ['name' => 'Guinea-Bissau'], 
            ['name' => 'Guyana'], 
            ['name' => 'Haiti'], 
            ['name' => 'Honduras'], 
            ['name' => 'Hong Kong'], 
            ['name' => 'Hungary'], 
            ['name' => 'Iceland'], 
            ['name' => 'India'], 
            ['name' => 'Indonesia'],
            ['name' => 'Iran'], 
            ['name' => 'Iraq'], 
            ['name' => 'Ireland'], 
            ['name' => 'Israel'], 
            ['name' => 'Italy'],['name' => 'Jamaica'], 
            ['name' => 'Japan'], 
            ['name' => 'Jordan'],['name' => 'Kazakhstan'], 
            ['name' => 'Kenya'], 
            ['name' => 'Kiribati'], 
            ['name' => 'Korea'],['name' => 'North'], 
            ['name' => 'Korea, South'], 
            ['name' => 'Kuwait'], 
            ['name' => 'Kyrgyzstan'], 
            ['name' => 'Laos'], 
            ['name' => 'Latvia'],['name' => 'Lebanon'], 
            ['name' => 'Lesotho'],['name' => 'Liberia'], 
            ['name' => 'Libya'],['name' => 'Liechtenstein'], 
            ['name' => 'Lithuania'],['name' => 'Luxembourg'], 
            ['name' => 'Macedonia'],['name' => 'Madagascar'], 
            ['name' => 'Malawi'],['name' => 'Malaysia'], 
            ['name' => 'Maldives'],['name' => 'Mali'], 
            ['name' => 'Malta'],['name' => 'Marshall Islands'], 
            ['name' => 'Mauritania'],['name' => 'Mauritius'], 
            ['name' => 'Mexico'], 
            ['name' => 'Micronesia'], 
            ['name' => 'Moldova'], 
            ['name' => 'Mongolia'], 
            ['name' => 'Morocco'], 
            ['name' => 'Monaco'], 
            ['name' => 'Mozambique'], 
            ['name' => 'Namibia'], 
            ['name' => 'Nauru'], 
            ['name' => 'Nepal'], 
            ['name' => 'Netherlands'], 
            ['name' => 'New Zealand'], 
            ['name' => 'Nicaragua'], 
            ['name' => 'Niger'], 
            ['name' => 'Nigeria'], 
            ['name' => 'Norway'], 
            ['name' => 'Oman'],['name' => 'Pakistan'], 
            ['name' => 'Panama'],['name' => 'Papua New Guinea'], 
            ['name' => 'Paraguay'],['name' => 'Peru'], 
            ['name' => 'Philippines'],['name' => 'Poland'], 
            ['name' => 'Portugal'],['name' => 'Qatar'], 
            ['name' => 'Romania'],['name' => 'Russia'], 
            ['name' => 'Rwanda'],['name' => 'Samoa'], 
            ['name' => 'San Marino'],['name' => ' Sao Tome'], 
            ['name' => 'Saudi Arabia'],['name' => 'Senegal'], 
            ['name' => 'Serbia and Montenegro'],['name' => 'Seychelles'], 
            ['name' => 'Sierra Leone'],['name' => 'Singapore'], 
            ['name' => 'Slovakia'],['name' => 'Slovenia'], 
            ['name' => 'Solomon Islands'],['name' => 'Somalia'], 
            ['name' => 'South Africa'],['name' => 'Spain'], 
            ['name' => 'Sri Lanka'],['name' => 'Sudan'], 
            ['name' => 'Suriname'],['name' => 'Swaziland'], 
            ['name' => 'Sweden'],['name' => 'Switzerland'], 
            ['name' => 'Syria'],['name' => 'Taiwan'], 
            ['name' => 'Tajikistan'],['name' => 'Tanzania'], 
            ['name' => 'Thailand'],['name' => 'Togo'], 
            ['name' => 'Tonga'],['name' => 'Trinidad and Tobago'], 
            ['name' => 'Tunisia'],['name' => 'Turkey'], 
            ['name' => 'Turkmenistan'],['name' => 'Uganda'],['name' => 'Ukraine'], 
            ['name' => 'United Arab Emirates'],['name' => 'United Kingdom'], 
            ['name' => 'United States'],['name' => 'Uruguay'],['name' => 'Uzbekistan'], 
            ['name' => 'Vanuatu'],['name' => 'Venezuela'],['name' => 'Vietnam'],  
            ['name' => 'Yemen'],['name' => 'Zambia'],['name' => 'Zimbabwe'],
        ];

        $region = [

    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kabul'], 
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kandahār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Herāt'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mazār-e Sharīf'], 
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kunduz'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Jalālābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Lashkar Gāh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Maīmanah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shibirghān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khōst'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ghaznī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pul-e Khumrī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tāluqān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Balkh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Farāh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Baghlān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Gardēz'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Faīẕābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bāmyān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chārīkār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sar-e Pul'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zaranj'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Asadābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Maīdān Shahr'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kōṯah-ye ‘As̲h̲rō'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khulm'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khānābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Barakī Barak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Karukh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mehtar Lām'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Fayrōz Kōh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Andkhōy'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qalāt'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tarīn Kōṯ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Maḩmūd-e Rāqī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qal‘ah-ye Now'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Aībak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pul-e ‘Alam'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sharan'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nīlī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bāzārak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pārūn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Injīl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ibrāhīm Khān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mīr Bachah Kōṯ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Jabal us Sarāj'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nādir Shāh Kōṯ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kalakān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Āqchah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qarah Bāgh Bāzār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nādir Shāh Kōṯ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chandal Bā ī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sulţānpūr-e ‘Ulyā'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sangar Sarāy'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Istālif'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Deh-e Now'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ghulām Alī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḩāfiz ān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zargarān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Surkh Bilandī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dehdādī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Maīdān Khūlah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kā ī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bāsawul'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bagrāmī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kaz̲h̲ah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khulbisāt'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'S̲h̲ēwah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shērwānī-ye Bālā'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khwājah Ghār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tsamkanī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qal‘ah-ye Shāhī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Charkh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Narang'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shahrān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḩājī Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tsowkêy'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qal‘ah-ye Na īm'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Gōshtah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Wulêswālī Sayyid Karam'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Stêr Giyān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mīray'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Māmā Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pāshmūl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Imām  Şāḩib'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alah Sāy'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sar Kāṉī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Wuluswālī  Alīngār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dasht-e Qal ah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pul-e Sangī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alī Shēr ‘Alāqahdārī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sangīn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Darāyim'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tsapêraī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mashhad'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Urgūn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bābā Şāḩib'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Wuṯahpūr'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zōr Kōṯ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Markaz-e Sayyidābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chāh Āb'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qarghah ī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Unābah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nūrgal'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kōṯowāl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Siyāhgird'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alī Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Darzāb'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Māṉōgay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shaykh Amīr Kêlay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nīkêh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bahārak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sōzmah Qal ah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pachīr wa Āgām'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tukzār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chahār Qal ah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dwah Manḏay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khānaqāh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Rustāq'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zīṟūk Alāqahdārī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḩāfiz Moghul'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khānaqāh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kalān Deh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'March'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Āsmār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zurmat'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kalafgān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Gereshk'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Muḩammad Āghah Wuluswālī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tōrmay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qarah Bāgh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Darqad'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nahrīn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dāngām'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Deh-e Şalāḩ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Karbōṟī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sang-e Māshah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Salām Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Āfāqī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Būrkah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khayr Kōṯ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dowlatābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qurghān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Guz̄arah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mutā Khān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qaīşār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khinj'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khōshī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Rāmak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qāshqāl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dowr-e Rabāţ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Spērah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kanḏay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mardīān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḏanḏar'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Yaḩyá Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chimtāl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Jalrēz'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī-ye Almār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bāgh-e Maīdān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shwāk'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nāṟay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dowlat Shāh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Muqêr'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Rabāţ-e Sangī-ye Pā’īn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sarōbī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bal Chirāgh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Āb-e Kamarī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Fayẕābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Şayād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī Gēlān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sar Chakān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dehī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī Saṟōbī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Farkhār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mingajik'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bāzār-e Tashkān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḩukūmatī Dahanah-ye Ghōrī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Āq Kupruk'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Wulêswālī Bihsūd'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Panjāb'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Quchanghī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mūsá Qal ah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dōshī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Faīẕābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kirāmān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zīrakī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī Shāh Jōy'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mīrān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Jurm'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Āq Tapah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pul-e Ḩişār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ōbêh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'La l'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kushk-e Kuhnah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khadīr'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pas Pul'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shīnḏanḏ'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khinjān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḩukūmatī Azrah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Rū-ye Sang'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kuhsān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chahār Bāgh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Taywarah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ōmnah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dahan-e Jarf'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḩukūmat-e Nād Alī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chākarān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī Yōsuf Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Lāsh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chakaray'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Jānī Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zindah Jān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Deh Khwāhān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Banū'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nāyak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bālā Murghāb'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bulōlah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sar-e Tayghān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qaranghū Tōghaī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sarfirāz Kalā'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khākirān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ţāqchah Khānah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pasāband'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Sāyagaz'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kishk-e Nakhūd'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Māymay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dowlatyār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qarqīn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Spīn Bōldak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tūlak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qaram Qōl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dūāb'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qal‘ah-ye Kūf'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Langar'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dowlatābād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chowṉêy'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kajrān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī Aṯghar'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zamtō Kêlay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qarah Bāgh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qal‘ah-ye Fārsī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khōshāmand'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ghurayd Gharamē'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nūsay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khamyāb'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Markaz-e Ḩukūmat-e Sulţān-e Bakwāh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ōkak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zīārat-e Shāh Maqşūd'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shahrak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khudāydād Khēl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Tītān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Nayak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ghōriyān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Pasnay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mīzān Alāqahdārī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Now Zād'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Jowand'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khwājah Dū Kōh'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Shahr-e Şafā'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dê Nārkhēl Kêlay'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Bāzār-e Tālah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Ḩukūmat-e Shīnkaī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Now Dahānak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Mandōl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chisht-e Sharīf'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dū Qal‘ah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khūgyāṉī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Barg-e Matāl'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Kushkak'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dasht-e Qal‘ah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Dū Laīnah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Chinār'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Qal‘ah-ye Kuhnah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Adraskan'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Zaybāk'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Lāsh-e Juwayn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Wāshēr'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Anār Darah'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Amānzī'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī Dīshū'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Alāqahdārī Kirān wa Munjān'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khān Neshīn'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Khandūd'],
    ['country_id' => '1',  'created_at' => now() , 'updated_at' => now(), 'name' => 'Gōmal Kêlay'],

            ['name' => 'Arusha',  'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Dar es Salaam',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Dodoma', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Geita',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Iringa',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Kagera', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Katavi', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Kigoma',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Kilimanjaro', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Lindi',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Manyara',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Mara',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Mbeya',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],           
            ['name' => 'Morogoro', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Mtwara', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Mwanza', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Njombe',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Pemba North', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Pemba South', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Pwani', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Rukwa', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Ruvuma', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Shinyanga', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Simiyu', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Singida', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Songwe', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Tabora', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Tanga', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Unguja Magharibi City',  'country_id' => '172', 'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Unguja North', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
            ['name' => 'Unguja South', 'country_id' => '172',  'created_at' => now() , 'updated_at' => now()],
        ];

        $ShippingNo = [           
            ['shipping_id' => '5','inc_shipping_id' => '168908dd3227b8358eababa07fcaf091'],  
        ];

        //DB::table('countries')->insert($country);
        //DB::table('regions')->insert($region);
        DB::table('shipping_numbers')->insert($ShippingNo);
        
        User::create([
            'name' => "Hemed Gharibu",
            'role_id' => "1",
            'email' => "bingharibu89@gmail.com",
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),  
        ]);


    }
}
