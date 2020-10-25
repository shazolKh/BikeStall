<?php

namespace App\Http\Controllers;

use App\Bike;
use App\FullSpac;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FullSpacController extends Controller
{
    public function addSpec(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();
            $specs = new FullSpac();

            $specs->bike_id = $data['bike_id'];
            $specs->engine_type = $data['engine_type'];
            $specs->displacement = $data['displacement'];
            $specs->max_power = $data['max_power'];
            $specs->max_torque = $data['max_torque'];
            $specs->top_speed = $data['top_speed'];
            $specs->bore = $data['bore'];
            $specs->stroke = $data['stroke'];
            $specs->carburetor = $data['carburetor'];
            $specs->compression_ratio = $data['compression_ratio'];
            $specs->cooling = $data['cooling'];
            $specs->start_method = $data['start_method'];
            $specs->ignition = $data['ignition'];
            $specs->start_method = $data['start_method'];
            $specs->ignition = $data['ignition'];
            $specs->gears = $data['gears'];
            $specs->clutch = $data['clutch'];
            $specs->overall_length = $data['overall_length'];
            $specs->overall_width = $data['overall_width'];
            $specs->overall_height = $data['overall_height'];
            $specs->saddle_height = $data['saddle_height'];
            $specs->wheel_base = $data['wheel_base'];
            $specs->ground_clearance = $data['ground_clearance'];
            $specs->fuel_tank_cap = $data['fuel_tank_cap'];
            $specs->kerb_weight = $data['kerb_weight'];
            $specs->front_suspension = $data['front_suspension'];
            $specs->back_suspension = $data['back_suspension'];
            $specs->front_break = $data['front_break'];
            $specs->rear_break = $data['rear_break'];
            $specs->abs = $data['abs'];
            $specs->front_tyre = $data['front_tyre'];
            $specs->back_tyre = $data['back_tyre'];
            $specs->front_wheel = $data['front_wheel'];
            $specs->rear_wheel = $data['rear_wheel'];
            $specs->battery = $data['battery'];
            $specs->head_lamp = $data['head_lamp'];
            $specs->tail_lamp = $data['tail_lamp'];
            $specs->turn_signal_lamp = $data['turn_signal_lamp'];
            $specs->pilot_lamp = $data['pilot_lamp'];
            $specs->pass_light = $data['pass_light'];
            $specs->odometer = $data['odometer'];
            $specs->speedometer = $data['speedometer'];
            $specs->signal_light = $data['signal_light'];
            $specs->status = $data['status'];
            $specs->disclaimer = $data['disclaimer'];

            $specs->save();
            return redirect('/admin/view-bike')->with('flash_message_success', 'Specs added successfully');

        }

        //FullSpac::create(array_merge($request->all()));

        $bike_name = Bike::where(['id'=>$id])->first();
        return view('admin.specs.add_specs')->with(compact('bike_name'));
    }

    public function view_editSpec(Request $request, $id=null)
    {
        if ($request->isMethod('post')){
            $data = $request->all();

            FullSpac::where(['id'=>$id])->update(['bike_id'=>$data['bike_id'], 'engine_type'=>$data['engine_type'],
                'displacement'=>$data['displacement'], 'max_power' => $data['max_power'], 'max_torque' => $data['max_torque'],
                'top_speed' => $data['top_speed'], 'bore' => $data['bore'], 'stroke' => $data['stroke'],
                'carburetor' => $data['carburetor'], 'compression_ratio' => $data['compression_ratio'], 'cooling' => $data['cooling'],
                'start_method' => $data['start_method'], 'ignition' => $data['ignition'], 'gears' => $data['gears'],
                'clutch' => $data['clutch'], 'overall_length' => $data['overall_length'], 'overall_width' => $data['overall_width'],
                'overall_height' => $data['overall_height'], 'saddle_height' => $data['saddle_height'], 'wheel_base' => $data['wheel_base'],
                'ground_clearance' => $data['ground_clearance'], 'fuel_tank_cap' => $data['fuel_tank_cap'], 'kerb_weight' => $data['kerb_weight'],
                'front_suspension' => $data['front_suspension'], 'back_suspension' => $data['back_suspension'],
                'front_break' => $data['front_break'], 'rear_break' => $data['rear_break'], 'abs' => $data['abs'],
                'front_tyre' => $data['front_tyre'], 'back_tyre' => $data['back_tyre'], 'front_wheel' => $data['front_wheel'],
                'rear_wheel' => $data['rear_wheel'], 'battery' => $data['battery'], 'head_lamp' => $data['head_lamp'],
                'tail_lamp' => $data['tail_lamp'], 'turn_signal_lamp' => $data['turn_signal_lamp'], 'pilot_lamp' => $data['pilot_lamp'],
                'pass_light' => $data['pass_light'], 'odometer' => $data['odometer'], 'speedometer' => $data['speedometer'],
                'signal_light' => $data['signal_light'], 'status' => $data['disclaimer']]);

            return redirect()->back()->with('flash_message_success', 'Specs Updated successfully');
        }


        $bk_name = Bike::where(['id'=>$id])->first();

        //get Full Specs
        $fullSpecs = FullSpac::where(['bike_id'=>$id])->first();
        //$fullSpecs = DB::table('full_spacs')->where('id', $id)->get();
        return view('admin.specs.view_specs')->with(compact('fullSpecs', 'bk_name'));
    }

    public function delSpecsp()
    {
        //$fullSpec = FullSpac::get();

        /*foreach ($fullSpec as $bike=>$val){
            $bike_name = Bike::where(['id'=>$val->id])->get();
            $fullSpec[$bike]->bk_name = $bike_name->bike_name;
        }*/

        $fullSpec = DB::table('full_spacs')
            ->join('bikes', 'full_spacs.bike_id', '=', 'bikes.id')
            ->select('full_spacs.*','bikes.bike_name')
            ->get();
        return view('admin.specs.delete_specs')->with(compact('fullSpec'));
    }

    public function delSpecs($id=null)
    {
        FullSpac::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_error', 'Specs has been Deleted');
    }
}
