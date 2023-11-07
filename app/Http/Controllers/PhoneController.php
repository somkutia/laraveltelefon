<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhoneController extends Controller
{

    public function index()
    {
        return view("phone.index",[
            "title" => "Telefonok",
            "phones" => $this->getPhonesCollection()
        ]);
    }

    public function show(int $id)
    {
        $phone = $this->getPhonesCollection()->firstOrFail("id","=",$id);

        return view("phone.show",[
            "title" => "$phone[manufacturer] $phone[model]",
            "phone" => $phone
        ]);
    }

    private function getPhonesCollection()
    {
        return collect([
            [
                "id" => 1,
                "manufacturer" => "Apple",
                "model" => "iPhone 15 Pro Max",
                "storage" => 512,
                "color" => "Blue Titanium",
                "price" => 699990,
                "description" => "Mobile Phone 6,7\" Super Retina XDR OLED 2796×1290, 120Hz, processor Apple A17 Pro 6-core, internal memory 512 GB, main camera with optical zoom 48 Mpx (f/1,78) + 12 Mpx (f/2,8) + 12 Mpx (f/2,2), selfie camera 12 Mpx, optical stabilization, GPS, NFC, LTE, 5G, USB-C, single SIM + eSIM, water resistant IP68, unlocked, quick charging, wireless charging 15W, iOS 17",
            ],
            [
                "id" => 2,
                "manufacturer" => "Google",
                "model" => "Pixel 7a",
                "storage" => 128,
                "color" => "blue",
                "price" => 198590,
                "description" => "Mobile Phone 6,1\" OLED 2400×1080, 90Hz, processor Google Tensor G2 8-core, RAM 8 GB, internal memory 128 GB, main camera 64 Mpx + 13 Mpx, selfie camera 13 Mpx, optical stabilization, GPS, NFC, LTE, 5G, USB-C, single SIM + eSIM, water resistant IP67, unlocked, quick charging 18W, wireless charging, battery 4385 mAh, Android 13",
            ],
            [
                "id" => 3,
                "manufacturer" => "Nokia",
                "model" => "3310 (2017)",
                "storage" => null,
                "color" => "Dark Blue",
                "price" => 21190,
                "description" => "Mobile Phone 2,4\" TN 320×240, main camera 2 Mpx, Jack (3,5mm) and USB micro, dual SIM + memory card, unlocked, battery 1200 mAh, Nokia Series 30+",
            ],
            [
                "id" => 4,
                "manufacturer" => "Motorola",
                "model" => "Moto G54",
                "storage" => 256,
                "color" => "Blue",
                "price" => 89990,
                "description" => "Mobile Phone 6,5\" LTPS 2400×1080, 120Hz, processor MediaTek Dimensity 7020 8-core, RAM 12 GB, internal memory 256 GB, main camera 50 Mpx (f/1,8) + 8 Mpx (f/2,2), selfie camera 16 Mpx, optical stabilization, GPS, NFC, LTE, 5G, Jack (3,5mm) and USB-C, fingerprint reader, dual SIM + memory card, unlocked, quick charging, battery 6000 mAh, Android 13",
            ],

        ]);
    }
}
