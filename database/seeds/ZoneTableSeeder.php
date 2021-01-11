<?php

use Illuminate\Database\Seeder;
use App\Models\Zone;
class ZoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $zones = [
        ['name' => 'Det Khi Na Thi Ri', 'name_mm' => 'ဒက္ခိဏသီရိ', 'city_id' => 1,  'is_deliver' => 1],
        ['name' => 'Lewe', 'name_mm' => 'လယ်ဝေး', 'city_id' => 1,  'is_deliver' => 1],
        ['name' => 'Oke Ta Ra Thi Ri', 'name_mm' => 'ဥတ္တရသီရိ', 'city_id' => 1,  'is_deliver' => 1],
        ['name' => 'Poke Ba Thi Ri', 'name_mm' => 'ပုဗ္ဗသီရိ', 'city_id' => 1,  'is_deliver' => 1],
        ['name' => 'Pyinmana', 'name_mm' => 'ပျဉ်းမနား', 'city_id' => 1,  'is_deliver' => 1],
        ['name' => 'Za Bu Thi Ri', 'name_mm' => 'ဇမ္ဗူသီရိ', 'city_id' => 1,  'is_deliver' => 1],
        ['name' => 'Zay Yar Thi Ri', 'name_mm' => 'ဇေယျာသီရိ', 'city_id' => 1,  'is_deliver' => 1],

        ['name' => 'Amarapura Town', 'name_mm' => 'အမရပူရ', 'city_id' => 2,'is_deliver' => 1],
        ['name' => 'Aungmyaythazan Town', 'name_mm' => 'အောင်မြေသာဇံ', 'city_id' => 2,'is_deliver' => 1],
        ['name' => 'Chanayethazan Town', 'name_mm' => 'ချမ်းအေးသာဇံ', 'city_id' => 2,'is_deliver' => 1],
        ['name' => 'Chanmyathazi Town', 'name_mm' => 'ချမ်းမြသာစည်', 'city_id' => 2,'is_deliver' => 1],
        ['name' => 'Mahaaungmyay Town', 'name_mm' => 'မဟာအောင်မြေ', 'city_id' => 2,'is_deliver' => 1],
        ['name' => 'Patheingyi Town', 'name_mm' => 'ပုသိမ်ကြီး', 'city_id' => 2,'is_deliver' => 1],
        ['name' => 'Pyigyitagon Town', 'name_mm' => 'ပြည်ကြီးတံခွန်', 'city_id' => 2,'is_deliver' => 1],

        ['name' => 'Ahlone', 'name_mm' => 'အလုံ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Bahan', 'name_mm' => 'ဗဟန်း', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Botahtaung', 'name_mm' => 'ဗိုလ်တထောင်', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Cocokyun', 'name_mm' => 'ကိုကိုးကျွန်း', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Dagon', 'name_mm' => 'ဒဂုံ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Dagon Myothit (North)', 'name_mm' => 'ဒဂုံမြို့သစ်မြောက်ပိုင်း (၂၇ -  ၅၁ ရက်ကွက်)', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Dagon Myothit (East) (114 - 158 ward)', 'name_mm' => 'ဒဂုံမြို့သစ်အရှေ့ပိုင်း (၁၁၄ - ၁၅၈ ရက်ကွက်)', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Dagon Myothit (East) (1-15 ward)', 'name_mm' => 'ဒဂုံမြို့သစ်အရှေ့ပိုင်း (၁ - ၁၅ ရက်ကွက်)', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Dagon Myothit (East) YarTharGyi', 'name_mm' => 'ဒဂုံမြို့သစ်အရှေ့ပိုင်း (ရွာသာကြီး)', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Dagon Myothit (Seikkan)', 'name_mm' => 'ဒဂုံမြို့သစ်ဆိပ်ကမ်း', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Dagon Myothit (South)', 'name_mm' => 'ဒဂုံမြို့သစ်တောင်ပိုင်း', 'city_id' => 3,'is_deliver' => 1],

        ['name' => 'Dala', 'name_mm' => 'ဒလ', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Dawbon', 'name_mm' => 'ဒေါပုံ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Hlaing', 'name_mm' => 'လှိုင်', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Hlaingtharya', 'name_mm' => 'လှိုင်သာယာ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Hlegu', 'name_mm' => 'လှည်းကူး', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Hmawbi', 'name_mm' => 'မှော်ဘီ', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Htantabin', 'name_mm' => 'ထန်းတပင်', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Insein', 'name_mm' => 'အင်းစိန်', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Kamaryut', 'name_mm' => 'ကမာရွတ်', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Kawhmu', 'name_mm' => 'ကော့မှုး', 'city_id' => 3,'is_deliver' => 0],

        ['name' => 'Kayan', 'name_mm' => 'ခရမ်း', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Kungyangon', 'name_mm' => 'ကွမ်းခြံကုန်း', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Kyauktada', 'name_mm' => 'ကျောက်တံတား', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Kyauktan', 'name_mm' => 'ကျောက်တန်း', 'city_id' => 432,'is_deliver' => 0],
        ['name' => 'Kyeemyindaing', 'name_mm' => 'ကြည့်မြင်တိုင်', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Lanmadaw', 'name_mm' => 'လမ်းမတော်', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Latha', 'name_mm' => 'လသာ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Mayangone', 'name_mm' => 'မရမ်းကုန်း', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Mingaladon', 'name_mm' => 'မင်္ဂလာဒုံ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Mingalartaungnyunt', 'name_mm' => 'မင်္ဂလာတောင်ညွန့်', 'city_id' => 3,'is_deliver' => 1],

        ['name' => 'North Okkalapa', 'name_mm' => 'မြောက်ဥက္ကလာပ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Pabedan', 'name_mm' => 'ပန်းပဲတန်း', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Pazundaung', 'name_mm' => 'ပုဇွန်တောင်', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Sanchaung', 'name_mm' => 'စမ်းချောင်း', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Seikgyikanaungto', 'name_mm' => 'ဆိပ်ကြီးခနောင်တို', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Seikkan', 'name_mm' => 'ဆိပ်ကမ်း', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Shwepyithar', 'name_mm' => 'ရွှေပြည်သာ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'South Okkalapa', 'name_mm' => 'တောင်ဥက္ကလာပ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Taikkyi', 'name_mm' => 'တိုက်ကြီး', 'city_id' => 3,'is_deliver' => 0],
        ['name' => 'Tamwe', 'name_mm' => 'တာမွေ', 'city_id' => 3,'is_deliver' => 1],

        ['name' => 'Thaketa', 'name_mm' => 'သာကေတ', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Thanlyin', 'name_mm' => 'သန်လျှင်', 'city_id' => 67,'is_deliver' => 0],
        ['name' => 'Thingangyun', 'name_mm' => 'သင်္ဃန်းကျွန်း', 'city_id' => 3,'is_deliver' => 1],
        ['name' => 'Thongwa', 'name_mm' => 'သုံးခွ', 'city_id' => 439,'is_deliver' => 0],
        ['name' => 'Twantay', 'name_mm' => 'တွံတေး', 'city_id' => 440,'is_deliver' => 0],
        ['name' => 'Yankin', 'name_mm' => 'ရန်ကင်း', 'city_id' => 3,'is_deliver' => 1],


    ];
    public function run()
    {
        // factory(App\Models\Zone::class, 10)->create();
        Schema::disableForeignKeyConstraints();
        foreach ($this->zones as $zone) {
            factory(Zone::class)->create([
                'name' => $zone["name"],
                'name_mm' => $zone["name_mm"],
                'city_id' => $zone["city_id"],
                'is_deliver' => $zone["is_deliver"]
            ]);
        }
        Schema::enableForeignKeyConstraints();
    }
}
