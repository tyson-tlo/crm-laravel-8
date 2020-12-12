<?php

namespace App\Http\Controllers\Admin\Prospects\Activities;

use App\Models\Prospect;
use Illuminate\Http\Request;
use App\Models\ProspectActivity;
use App\Models\ProspectDocument;
use App\Http\Controllers\Controller;

class ProspectActivitiesController extends Controller
{
    public function index(Prospect $prospect)
    {
        return view('admin.prospects.activities.index', compact('prospect'));
    }

    public function create(Prospect $prospect)
    {
        return view('admin.prospects.activities.create', compact('prospect'));
    }

    public function store(Request $request, Prospect $prospect)
    {

        $activity = ProspectActivity::create([
            'prospect_id' => $prospect->id,
            'communication_type' => $request->communication_type,
            'type' => $request->type,
            'notes' => $request->notes
        ]);

        if ($request->hasFile('documents')) {
            $files = $request->file('documents');

            foreach($files as $document) {
                $path = $document->store('public/prospects/' . $prospect->id . '/documents');
                $doc = ProspectDocument::create([
                    'prospect_id' => $prospect->id,
                    'activity_id' => $activity->id,
                    'path' => $path
                ]);
            }
        }

        return redirect()->route('admin.prospects.activities.dashboard', $prospect->id)->with('success', 'successfully created activity');
    }
}
