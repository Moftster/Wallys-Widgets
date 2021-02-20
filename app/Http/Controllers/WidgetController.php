<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WidgetController extends Controller
{
    
    /**
     * Calculate the required number of packs for widgets.
     *
     * @param  \Illuminate\Http\Request  $request
     */
    public function calculateWidgets(Request $request)
    {
        
        $request->validate([
            'numberOfWidgets' => 'required|numeric'
            ]);
            
        $widgetsOrdered = $request->get('numberOfWidgets');

        $packets = [250, 500, 1000, 2000, 5000];
    
        sort($packets);
    
        $largestToSmallestPackets = array_reverse($packets);
    
        $requiredPackets = [];
    
        $remainingWidgets = $widgetsOrdered;
        
        $pickedValue = 0;
    
        while($remainingWidgets > 0){
    
            if($remainingWidgets < $packets[1] && $remainingWidgets > 0) {
    
                if($remainingWidgets <= $packets[0]) {
    
                    array_push($requiredPackets, $packets[0]);
                    $remainingWidgets = $remainingWidgets - $packets[0];
                
                } else {
                    array_push($requiredPackets, $packets[1]);
                    $remainingWidgets = $remainingWidgets - $packets[1];
    
                }
    
            } else {
    
                $maxAmountDeducted = 0;
    
                foreach($largestToSmallestPackets as $packet) {
    
                    $valueLeft = $remainingWidgets - $packet;
    
                    if($valueLeft > 0){ 
    
                        if($packet >= $maxAmountDeducted){
                            $maxAmountDeducted = $packet;
                            $pickedValue = $packet;
                        }
                    
                    } else if($valueLeft === 0) {
    
                        $maxAmountDeducted = $packet;
                        $pickedValue = $packet;
    
                    } else {
    
                        $pickedValue = $packets[0];
                    }
                }
    
            $remainingWidgets = $remainingWidgets - $pickedValue;
    
            $requiredPackets[]=$pickedValue;
        
            $pickedValue = 0;
    
            }
        }
          
        $numberOfPacks = count($requiredPackets);
        $countedNumberOfPacks = array_count_values($requiredPackets);

        return redirect('result')->with([ 'widgetsOrdered' => $widgetsOrdered, 'numberOfPacks' => $numberOfPacks, 'countedNumberOfPacks' => $countedNumberOfPacks ]) ;

    }
}
