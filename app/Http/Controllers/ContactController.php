<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = [
            [
                'id' => 'inquiry',
                'title' => 'Inquiry',
                'area' => 'Public Inquiry Desk',
                'phone' => '+94 11 2866631',
                'email' => 'inquiry@landsettledept.gov.lk',
                'address' => 'Mihikatha Medura, Land Secretariat, Rajamalwatta Road, Battaramulla, Sri Lanka.',
                'icon' => 'fa-circle-question',
                'description' => 'General questions about land settlement procedures, notices, and application guidance.',
            ],
            [
                'id' => 'head-office',
                'title' => 'Head Office',
                'area' => 'Department of Land Settlement Head Office',
                'phone' => '+94 11 2866631 / +94 11 2866632',
                'email' => 'info@landsettledept.gov.lk',
                'address' => 'Mihikatha Medura, Land Secretariat, Rajamalwatta Road, Battaramulla, Sri Lanka.',
                'icon' => 'fa-building',
                'description' => 'Administrative contact for the central department, official correspondence, and leadership offices.',
            ],
            [
                'id' => 'regional-office',
                'title' => 'Regional Office',
                'area' => 'Regional Settlement Offices',
                'phone' => '+94 81 2234190',
                'email' => 'regional@landsettledept.gov.lk',
                'address' => 'District Secretariat Complex, Getambe, Kandy. Regional offices operate across all provinces.',
                'icon' => 'fa-map-location-dot',
                'description' => 'Contact your nearest district or divisional settlement office for local case handling and assistance.',
            ],
        ];

        return view('contact.index', compact('contacts'));
    }
}