<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Attendance;
use Illuminate\Support\Facades\Auth;

class AttendanceController extends Controller
{
    public function index()
    {
        // $data = Schedule::join('users','schedules.user_id','=','users.id')->select('users.name','schedules.day','schedules.start','schedules.finish','schedules.land','schedules.id')->where('schedules.user_id', Auth::user()->id)->get();
        
        $data = Schedule::orderByDesc('created_at')->get();
        return view ('index-schedule')->with('data', $data);
    }

    public function create($id)
    {
        $user = User::select('id')->where('id', Auth::user()->id)->first();
        $schedule = Schedule::select('id')->where('id', $id)->first();
        return view ('petani_absen', compact('schedule', 'user'));
    }

    public function store(Request $request)
    {
        $data = Schedule::join('users','schedules.user_id','=','users.id')->select('users.name','schedules.day','schedules.start','schedules.finish','schedules.land','schedules.id')->where('schedules.user_id', Auth::user()->id)->get();

        $user_id                = $request->user_id;
        $schedule_id            = $request->schedule_id;
        $report                 = $request->report;
        $image                  = $request->image;
        
        $imageName = 'images/'.time().'.'.$image->extension();

        Attendance::create([
                    'user_id'               => $user_id,
                    'schedule_id'           => $schedule_id,
                    'report'                => $report,
                    'image'                 => $imageName,
                ]);

        $image->move(public_path('images'), $imageName);

        return redirect()->route('history-attendance')->with( ['data' => $data]);
    }

    public function history()
    {
        $data = Attendance::join('schedules','attendances.schedule_id','=','schedules.id')->join('users','schedules.user_id','=','users.id')->select('attendances.user_id','attendances.schedule_id','attendances.report','attendances.image','attendances.created_at','schedules.user_id','users.name')->where('attendances.user_id', Auth::user()->id)->get();
        return view ('index-history', compact('data'));
    }

    public function detail($id)
    {
        $nama = User::select('name')->where('id', $id)->first();
        $nama = $nama['name'];
        $data = Attendance::join('schedules','attendances.schedule_id','=','schedules.id')->join('users','schedules.user_id','=','users.id')->select('attendances.user_id','attendances.schedule_id','attendances.report','attendances.image','attendances.created_at','schedules.user_id','users.name')->where('attendances.user_id', $id)->get();
        return view('owner.detail-attendances', compact('nama','data'));
    }

    public function user_history()
    {
        $data = Attendance::join('schedules','attendances.schedule_id','=','schedules.id')->join('users','schedules.user_id','=','users.id')->select('attendances.user_id','attendances.schedule_id','attendances.report','attendances.image','attendances.created_at','schedules.user_id','users.name')->get();
        return view ('owner.user_history_report', compact('data'));
    }
}
