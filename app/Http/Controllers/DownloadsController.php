<?php

namespace App\Http\Controllers;

class DownloadsController extends Controller
{
    public function index()
    {
        $documents = [
            [
                'title' => 'Land Settlement Ordinance',
                'description' => 'Official ordinance governing land settlement procedures, notices, and claims administration.',
                'type' => 'PDF',
                'size' => '1.2 MB',
                'updated' => '2026-07-18',
                'icon' => 'fa-scroll',
            ],
            [
                'title' => 'Title Registration Act No. 21 of 1998',
                'description' => 'Core legislation for guaranteed title registration under the Bimsaviya program.',
                'type' => 'PDF',
                'size' => '980 KB',
                'updated' => '2026-07-18',
                'icon' => 'fa-file-signature',
            ],
            [
                'title' => 'Application for Title Registration',
                'description' => 'Standard form for citizens submitting a title registration claim or supporting documents.',
                'type' => 'Form',
                'size' => '420 KB',
                'updated' => '2026-07-22',
                'icon' => 'fa-file-lines',
            ],
            [
                'title' => 'Subdivision and Amalgamation Request Form',
                'description' => 'Use this form to request subdivision, amalgamation, or related land plan changes.',
                'type' => 'Form',
                'size' => '360 KB',
                'updated' => '2026-07-22',
                'icon' => 'fa-draw-polygon',
            ],
            [
                'title' => 'Certified Copy Request Form',
                'description' => 'Request certified copies of settlement plans, notices, and title-related records.',
                'type' => 'Form',
                'size' => '280 KB',
                'updated' => '2026-07-22',
                'icon' => 'fa-copy',
            ],
            [
                'title' => 'Public Notice and Claim Checklist',
                'description' => 'A quick checklist of the documents you should bring when attending hearings or filing claims.',
                'type' => 'Guide',
                'size' => '512 KB',
                'updated' => '2026-07-25',
                'icon' => 'fa-clipboard-check',
            ],
        ];

        return view('downloads.index', compact('documents'));
    }
}