<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetController extends Controller
{
    
    /**
     * Calculate the required number of packs for widgets.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function calculateWidgets(Request $request)
    {
        $request->validate([
            'numberOfWidgets' => 'required|numeric'
        ]);

        // dd($request->get('numberOfWidgets'));

        // $routine = Routine::find($id);
        // $routine->routineName = $request->get('routineName');
        // $routine->routineDescription = $request->get('routineDescription');
        // $routine->save();

        return redirect('result')->with('success', 'Widgets calculated below!');

    }
}
