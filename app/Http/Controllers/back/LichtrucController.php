<?php

namespace App\Http\Controllers\back;

use App\Http\Controllers\Controller;
use App\Models\Lichtruc;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LichtrucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $currentUser = Auth::user();
        $currentDate = date('d-m-Y');
        $currentMonth = date('m', strtotime($currentDate));
        $currentYear = date('Y', strtotime($currentDate));
        $endDateMonth = date('t', strtotime($currentYear . '-' . $currentMonth . '-01'));
        for ($i = 1; $i <= $endDateMonth; $i++) {
            $date = $currentYear . '-' .  $currentMonth . '-' . ($i < 10 ? '0' . $i : $i);
            $lichTrucTable[$date]['hoc_vien'] = -1;
            $lichTrucTable[$date]['chi_huy'] = -1;
        }
        $lichTrucs = Lichtruc::whereMonth('ngay_truc',$currentMonth)->whereYear('ngay_truc',$currentYear)->get();
        foreach ($lichTrucs as $lichTruc) {
            $ngayTruc = $lichTruc->ngay_truc;
            $hocVien = $lichTruc->hoc_vien;
            $chiHuy = $lichTruc->chi_huy;
            $lichTrucTable[$ngayTruc]['hoc_vien'] = $hocVien;
            $lichTrucTable[$ngayTruc]['chi_huy'] = $chiHuy;
        }
        $listHocvien = Users::all()->where('is_admin',0);
        $listChiHuy = Users::all()->where('is_admin',1);

        if($currentUser->is_admin == 0) {
            return view('back.page.lichtruc.list_index', compact('lichTrucs', 'currentUser','currentMonth','currentYear','lichTrucTable','listChiHuy', 'listHocvien'));
        }else {
            return view('back.page.lichtruc.list', compact('lichTrucs', 'currentUser','currentMonth','currentYear','lichTrucTable','listChiHuy', 'listHocvien'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = new Lichhoc();
        $hockys = _hocKy();
        $users = Users::all()->where('is_admin',0);
        $currentUser = Auth::user();
        return view('back.page.lichhoc.form', compact('result','hockys','users', 'currentUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $month = $data['month'];
        $year = $data['year'];
        $lichTrucs = $data['lichTruc'];
        Lichtruc::whereMonth('ngay_truc',$month)->whereYear('ngay_truc',$year)->delete();
        foreach ($lichTrucs as $ngayTruc => $lichTruc) {
            $hocVien = $lichTruc['hocvien'];
            $chiHuy = $lichTruc['chihuy'];
            if($hocVien > 0 || $chiHuy > 0) {
                $dataLichTruc = array(
                    'ngay_truc'=>$ngayTruc,
                    'hoc_vien'=>$hocVien,
                    'chi_huy'=>$chiHuy,
                );
                Lichtruc::create($dataLichTruc);
            }
        }
        return redirect()->route('lichtruc.index')->with('success', 'Đã lưu lịch trực');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = Lichhoc::select('users.name','lichhoc.*')->join('users', 'users.id', '=', 'lichhoc.user_id')->find($id);
        $hockys = _hocKy();
        $currentUser = Auth::user();
        return view('back.page.lichhoc.show', compact('result','hockys', 'currentUser'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $result = Lichhoc::find($id);
        $hockys = _hocKy();
        $users = Users::all()->where('is_admin',0);
        $currentUser = Auth::user();
        return view('back.page.lichhoc.form', compact('result','hockys','users', 'currentUser'));
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(Request $request, $id)
    {
        $post = Lichhoc::find($id);
        $data = $request->all();
        $status = html_entity_decode($data['confirm']);
        if($status == 'Lưu'){
            $data['status'] = 0;
        }elseif($status == 'Gửi duyệt'){
            $data['status'] = 1;
        }else{
            $data['status'] = 2;
        }
        if($post->update($data)){
            return redirect()->route('lichhoc.index')->with('success', 'Đã cập nhật lịch học');
        }
        return redirect()->back()->withInput()->with('error', 'Có lỗi xảy ra, vui lòng thử lại!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeLichTruc(Request $request) {
        $currentUser = Auth::user();
        $data = $request->all();
        $month = $data['month'];
        $year = $data['year'];
        $endDateMonth = date('t', strtotime($year . '-' . $month . '-01'));
        for ($i = 1; $i <= $endDateMonth; $i++) {
            $date = $year . '-' .  ($month < 10 ? '0' . $month : $month) . '-' . ($i < 10 ? '0' . $i : $i);
            $lichTrucTable[$date]['hoc_vien'] = -1;
            $lichTrucTable[$date]['chi_huy'] = -1;
        }
        $lichTrucs = Lichtruc::whereMonth('ngay_truc',$month)->whereYear('ngay_truc',$year)->get();
        foreach ($lichTrucs as $lichTruc) {
            $ngayTruc = $lichTruc->ngay_truc;
            $hocVien = $lichTruc->hoc_vien;
            $chiHuy = $lichTruc->chi_huy;
            $lichTrucTable[$ngayTruc]['hoc_vien'] = $hocVien;
            $lichTrucTable[$ngayTruc]['chi_huy'] = $chiHuy;
        }
        $listHocvien = Users::all()->where('is_admin',0);
        $listChiHuy = Users::all()->where('is_admin',1);

        $view =  view('back.page.lichtruc.list_ajax', compact('lichTrucs', 'currentUser','lichTrucTable','listChiHuy', 'listHocvien'))->render();
        return $view;
    }
}
