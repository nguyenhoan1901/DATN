@extends('back.layout.master')

@php
$title = "Quản lý lịch trực";
@endphp

@section('web_title')
	{{$title}}
@endsection

@section('content')
<div class="content">

	<!-- Basic responsive table -->
	<div class="card">
		<div class="card-header header-elements-inline">
			<h5 class="card-title">{{$title}}</h5>
            <div class="header-elements">
                <div class="list-icons">
{{--                    <input type="submit" class="btn btn-success text-white" name="confirm" value="Lưu">--}}
                </div>
            </div>
		</div>
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <table class="table">
                <tbody>
                    <tr>
                        <td style="width: 7%;text-align: right;">Tháng :</td>
                        <td style="width: 15%;">
                            <select class="chzn-select" name="month" style="width: 200px">
                                @foreach(range(1, 12) as $iMonth)
                                <option value="{{$iMonth}}"
                                @php if($currentMonth == $iMonth){ @endphp selected @php }@endphp
                                >
                                Tháng {{$iMonth}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td style="width: 7%;text-align: right;">Năm :</td>
                        <td style="width: 15%;">
                            <select class="chzn-select" name="year" style="width: 200px">
                                    <option value="2021" @php if($currentYear == 2021){ @endphp selected @php }@endphp>Năm 2021</option>
                                    <option value="2022" @php if($currentYear == 2022){ @endphp selected @php }@endphp>Năm 2022</option>
                                    <option value="2023" @php if($currentYear == 2023){ @endphp selected @php }@endphp>Năm 2023</option>
                            </select>
                        </td>
                        <td style="text-align: right;">
                            <button type="submit" class="btn btn-success text-white">Lưu</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <div class="table-responsive">
                <table class="table" id="datatable">
                    <thead>
                        <tr>
                            <th>Ngày trực</th>
                            <th>Học viên</th>
                            <th>Chỉ huy</th>
                            <th style="width: 30%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($lichTrucTable as $ngayTruc => $lichTrucTableData)
                            <tr>
                                <td>{{$ngayTruc}}</td>
                                <td>
                                    <select class="chzn-select" name="lichTruc[{{$ngayTruc}}][hocvien]" style="width: 200px">
                                        <option value="">Chọn học viên</option>
                                        @foreach($listHocvien as $hocvien)
                                            <option value="{{$hocvien->id}}"
                                                    @php if($lichTrucTableData['hoc_vien'] == $hocvien->id){ @endphp selected @php }@endphp
                                            >
                                                {{$hocvien->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <select class="chzn-select" name="lichTruc[{{$ngayTruc}}][chihuy]" style="width: 200px">
                                        <option value="">Chọn chỉ huy</option>
                                        @foreach($listChiHuy as $chihuy)
                                            <option value="{{$chihuy->id}}"
                                                    @php if($lichTrucTableData['chi_huy'] == $chihuy->id){ @endphp selected @php }@endphp
                                            >
                                                {{$chihuy->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td style="width: 30%"></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </form>
	</div>
	<!-- /basic responsive table -->

</div>
@endsection
@section('js')
    <script>
        $('[name="month"],[name="year"]').on('change',function (e){
            debugger
            var month = $('[name="month"]').val();
            var year = $('[name="year"]').val();
            $.ajax({
                url: "{{ route('lichtruc.change') }}",
                type: "get",
                data: {
                    month: month,
                    year: year,
                },
                success: function (data) {
                    $('#datatable tbody').html(data)
                    $('.chzn-select').select2();
                },
                error: function (e) {
                    console.log(e)
                }
            })
        });
    </script>
@endsection

