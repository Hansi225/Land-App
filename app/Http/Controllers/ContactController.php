<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $offices = [
            'head' => [
                'office' => 'Department of Land Settlement - Head Office',
                'phone' => '+94 11 234 5678',
                'email' => 'info@landdept.gov.lk',
                'address' => '123 Government Rd, Colombo 01, Sri Lanka',
            ],
            'regional' => [
                [
                    'area' => 'Kandy Regional Office',
                    'phone' => '+94 81 345 6789',
                    'email' => 'kandy@landdept.gov.lk',
                    'address' => '45 Hill St, Kandy',
                ],
                [
                    'area' => 'Galle Regional Office',
                    'phone' => '+94 91 456 7890',
                    'email' => 'galle@landdept.gov.lk',
                    'address' => '78 Sea Rd, Galle',
                ],
            ],
        ];

        return view('contact.index', compact('offices'));
    }
}
