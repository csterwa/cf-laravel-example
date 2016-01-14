<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use DB;

class NoteController extends BaseController
{
    /**
     * Show all notes.
     *
     * @return Response
     */
    public function listNotes()
    {
	DB::table('notes')->insert(
    		['content' => 'one note']
	);

        $notes = DB::table('notes')->get();

        return view('notes', ['notes' => $notes]);
    }
}
