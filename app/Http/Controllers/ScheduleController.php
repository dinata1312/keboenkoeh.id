<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Schedule;
use App\Models\Attendance;

class ScheduleController extends Controller
{
    public function index()
    {
        $data = Schedule::join('users','schedules.user_id','=','users.id')->select('schedules.id','users.name','schedules.land','schedules.day','schedules.start','schedules.finish','schedules.user_id')->get();
        return view ('owner.index-schedule', compact('data'));
    }

    public function create()
    {
        $data = User::select('id','name')->where('role_id','=','3')->get();
        return view ('owner.add-schedule', compact('data'));
    }

    public function store(Request $request)
    {
        $data = Schedule::join('users','schedules.user_id','=','users.id')->select('users.name','schedules.day','schedules.start','schedules.finish')->get();
        //
        $user_id            = $request->user_id;
        $land               = $request->land;
        $day                = $request->day;
        $start              = $request->start;
        $finish             = $request->finish;

        Schedule::create([
                    'user_id'           => $user_id,
                    'land'              => $land,
                    'day'               => $day,
                    'start'             => $start,
                    'finish'            => $finish,
                ]);

        return redirect('jadwal')->with( ['data' => $data]);
    }

    public function detail_edit($id)
    {
        $data = Schedule::join('users', 'schedules.user_id','=','users.id')->select('users.name','users.id','schedules.start','schedules.land','schedules.finish','schedules.day','schedules.id')->where('schedules.id', $id)->first();
        return view ('owner.edit-schedule', compact('data'));
    }

    public function detail_update(Request $request, $id)
    {
        $data = Attendance::join('schedules','attendances.schedule_id','=','schedules.id')->join('users','schedules.user_id','=','users.id')->select('attendances.user_id','attendances.schedule_id','attendances.report','attendances.image','attendances.created_at','schedules.user_id','users.name','schedules.day','schedules.start','schedules.finish','schedules.land')->get();
        
        $land          = $request->land;
        $day         = $request->day;
        $start     = $request->start;
        $finish  = $request->finish;

        Schedule::where('id', $id)
                      ->update([
                            'land'          => $land,
                            'day'         => $day,
                            'start'     => $start,
                            'finish'  => $finish,
                      ]);

        return redirect()->route('jadwal')->with( ['data' => $data]);
    }

    public function detail_delete($id)
    {
        $data = Attendance::join('schedules','attendances.schedule_id','=','schedules.id')->join('users','schedules.user_id','=','users.id')->select('attendances.user_id','attendances.schedule_id','attendances.report','attendances.image','attendances.created_at','schedules.user_id','users.name','schedules.day','schedules.start','schedules.finish','schedules.land')->get();
        $schedulesdelete = Schedule::where('id', $id);
        $schedulesdelete->delete();
        return redirect('jadwal')->with( ['data' => $data]);
    }
}
