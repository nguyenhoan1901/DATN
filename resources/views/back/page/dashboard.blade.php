@extends('back.layout.master')


@section('web_title')
    Bảng điều khiển
@endsection
@section('content')
    <style>
        .detailview-table .fieldLabel {
            width: 20%;
            text-align: right;
            border: none;
            color: #6f6f6f;
        }
        .detailview-table .fieldValue {
            width: 30%;
            border: none;
            color: #222;
            font-weight: 500 ;
        }

    </style>
<div class="content">
    <div class="card">
        <div class="card-header header-elements-inline">
{{--            <h5 class="card-title">Account settings</h5>--}}
            <div class="header-elements">
                <div class="list-icons">
{{--                    <a class="list-icons-item" data-action="collapse"></a>--}}
{{--                    <a class="list-icons-item" data-action="reload"></a>--}}
{{--                    <a class="list-icons-item" data-action="remove"></a>--}}
                </div>
            </div>
        </div>

        <div class="card-body">
            <form action="#">
                <div class="block">
                    <div style="color: chocolate;"><h5>THÔNG TIN SINH VIÊN</h5></div>
                    <hr style="border-top: 1px solid #c9cc43;">
                    <div class="blockData">
                        <table class="table detailview-table no-border">
                            <tbody>
                                <tr>
                                    <td class="fieldLabel">
                                        <span class="muted">Họ và tên: </span></td>
                                    <td class="fieldValue">
                                        <span class="value">
                                            {{$currentUser->name}}
                                        </span>
                                    </td>
                                    <td class="fieldLabel">
                                        <span class="muted">Năm vào trường:</span>
                                    </td>
                                    <td class="fieldValue">
                                        <span class="value">
                                             {{$currentUser->nam_vao_truong}}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">
                                        <span class="muted">Bậc đào tạo:</span>
                                    </td>
                                    <td class="fieldValue">
                                        <span class="value">
                                            {{$currentUser->bac_dao_tao}}
                                        </span>
                                    </td>
                                    <td class="fieldLabel">
                                        <span class="muted">Chương trình đào tạo:</span></td>
                                    <td class="fieldValue">
                                        <span class="value">
                                            {{$currentUser->chuong_trinh_dao_tao}}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">
                                        <span class="muted">Khoa/Viện quản lý:</span>
                                    </td>
                                    <td class="fieldValue">
                                        <span class="value">
                                            {{$currentUser->khoa}}
                                        </span>
                                    </td>
                                    <td class="fieldLabel">
                                        <span class="muted">Tình trạng học tập:</span></td>
                                    <td class="fieldValue">
                                        <span class="value">
                                             {{$currentUser->tinh_trang_hoc_tap}}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">
                                        <span class="muted">Giới tính:</span>
                                    </td>
                                    <td class="fieldValue">
                                        <span class="value">
                                             {{$currentUser->gioi_tinh}}
                                        </span>
                                    </td>
                                    <td class="fieldLabel">
                                        <span class="muted">Lớp:</span></td>
                                    <td class="fieldValue">
                                        <span class="value">
                                            {{$currentUser->lop ? $currentUser->lop : ''}}CNTT2-01-2016
                                        </span>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="fieldLabel">
                                        <span class="muted">Khóa học:</span>
                                    </td>
                                    <td class="fieldValue">
                                        <span class="value">
                                            {{$currentUser->khoa_hoc}}
                                        </span>
                                    </td>
                                    <td class="fieldLabel">
                                        <span class="muted">Email:</span></td>
                                    <td class="fieldValue">
                                        <span class="value">
                                            {{$currentUser->email}}
                                        </span>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="block">
                    <div style="color: chocolate;"><h5>THÔNG TIN HỌC TẬP</h5></div>
                    <hr style="border-top: 1px solid #c9cc43;">
                    <div class="blockData">
                        <table class="table detailview-table no-border">
                            <tbody>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Tổng kết kỳ học:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                           {{-- {{$hocKys[$hocTapInfo->ky_hoc] ? $hocKys[$hocTapInfo->ky_hoc] : ''}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Trung bình tích lũy:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$hocTapInfo->gpa ? $hocTapInfo->gpa : ''}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Số TC nợ đăng ký:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$hocTapInfo->mon_no ? $hocTapInfo->mon_no : ''}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Số TC tích lũy:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$hocTapInfo->so_tc_tich_luy ? $hocTapInfo->so_tc_tich_luy : ''}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Trình độ sinh viên:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                             {{-- {{$hocTapInfo->thoi_gian_hoc ? $hocTapInfo->thoi_gian_hoc : ''}} năm --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Mức cảnh cáo:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                             {{-- {{$hocTapInfo->muc_canh_cao ? $hocTapInfo->muc_canh_cao : ''}} --}}
                                        </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="block">
                    <div style="color: chocolate;"><h5>THÔNG TIN CÁ NHÂN</h5></div>
                    <hr style="border-top: 1px solid #c9cc43;">
                    <div class="blockData">
                        <table class="table detailview-table no-border">
                            <tbody>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Dân tộc:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->dan_toc}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Năm thi cấp 3:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->nam_thi_thpt}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Địa chỉ:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->dia_chi}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Số CMTND:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->cmtnd}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Nơi cấp:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->noi_cap}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Hộ khẩu thường trú:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->ho_khau}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Tôn giáo:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->ton_giao}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Trường THPT:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->truong_thpt}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Họ tên bố:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                           {{-- {{$accountInfo->hoten_bo}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Năm sinh:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                             {{-- {{$accountInfo->namsinh_bo}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Nghê nghiệp:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                           {{-- {{$accountInfo->nghenghiep_bo}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">SĐT Bố:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->sdt_bo}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Họ tên mẹ:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                           {{-- {{$accountInfo->hoten_me}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">Năm sinh:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->namsinh_me}} --}}
                                        </span>
                                </td>
                            </tr>
                            <tr>
                                <td class="fieldLabel">
                                    <span class="muted">Nghề nghiệp:</span></td>
                                <td class="fieldValue">
                                        <span class="value">
                                           {{-- {{$accountInfo->nghenghiep_me}} --}}
                                        </span>
                                </td>
                                <td class="fieldLabel">
                                    <span class="muted">SĐT Mẹ:</span>
                                </td>
                                <td class="fieldValue">
                                        <span class="value">
                                            {{-- {{$accountInfo->sdt_me}} --}}
                                        </span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="text-center mb-3 py-2">
        <h4 class="font-weight-semibold mb-1">Thông tin văn bản mới nhất</h4>
        <span class="text-muted d-block">Mời các bạn xem các thông tin văn bản cập nhật mới nhất !</span>
    </div>
    @php $count = 0 @endphp
    <div class="row">
        @foreach($documents as $document)
            @php $count = $count + 1 @endphp
        <div class="col-lg-4">
            <div class="card card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>
                    </div>
                    <div class="media-body">
                        <h6 class="media-title font-weight-semibold"><a href="{{route('documents.show', $document->id)}}" class="text-default">{{$document->title}}</a></h6>
{{--                        Ouch licentiously lackadaisical crud together began gregarious below near darn goodness--}}
                    </div>
                </div>
            </div>
        </div>
            @if($count == 3)
                @php $count = 0 @endphp
            </div><div class="row">
            @endif
        @endforeach
{{--        <div class="col-lg-4">--}}
{{--            <div class="card card-body">--}}
{{--                <div class="media">--}}
{{--                    <div class="mr-3">--}}
{{--                        <a href="#"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="media-body">--}}
{{--                        <h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Walking away fallaciously</a></h6>--}}
{{--                        Ouch licentiously lackadaisical crud together began gregarious below near darn goodness--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="col-lg-4">--}}
{{--            <div class="card card-body">--}}
{{--                <div class="media">--}}
{{--                    <div class="mr-3">--}}
{{--                        <a href="#"><i class="icon-file-text2 text-success-400 icon-2x mt-1"></i></a>--}}
{{--                    </div>--}}
{{--                    <div class="media-body">--}}
{{--                        <h6 class="media-title font-weight-semibold"><a href="#" class="text-default">Walking away fallaciously</a></h6>--}}
{{--                        Ouch licentiously lackadaisical crud together began gregarious below near darn goodness--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>
@endsection
