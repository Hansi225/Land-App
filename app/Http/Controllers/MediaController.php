<?php

namespace App\Http\Controllers;

class MediaController extends Controller
{
    public function index()
    {
        $events = [
            [
                'title' => 'District Land Settlement Awareness Camp',
                'date' => '2026-07-21',
                'location' => 'Kaduwela Divisional Secretariat',
                'type' => 'Photo Gallery',
                'description' => 'Community awareness session covering title registration steps, supporting documents, and claim submission guidance.',
                'mediaCount' => '18 photos',
                'icon' => 'fa-camera-retro',
            ],
            [
                'title' => 'Bimsaviya Public Outreach Workshop',
                'date' => '2026-07-12',
                'location' => 'Battaramulla Head Office',
                'type' => 'Video Highlights',
                'description' => 'A recorded workshop with officers explaining the title registration workflow and answering public questions.',
                'mediaCount' => '3 videos',
                'icon' => 'fa-video',
            ],
            [
                'title' => 'Gazette Notice Field Visit',
                'date' => '2026-06-30',
                'location' => 'Gampaha District',
                'type' => 'Photo & Video',
                'description' => 'Field coverage of a settlement notice inspection, including officer interviews and on-site document handling.',
                'mediaCount' => '12 photos, 2 videos',
                'icon' => 'fa-photo-film',
            ],
        ];

        return view('media.index', compact('events'));
    }
}