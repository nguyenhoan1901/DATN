@php if($currentUser->is_admin == 1){@endphp
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
@php } else { @endphp
    @foreach($lichTrucTable as $ngayTruc => $lichTrucTableData)
        <tr>
            <td>{{$ngayTruc}}</td>
            <td>
                @foreach($listHocvien as $hocvien)
                    @php if($lichTrucTableData['hoc_vien'] == $hocvien->id){ @endphp
                    <p>{{$hocvien->name}}</p>
                    @php } else { @endphp
                    <p style="color: #0d95e8">Chưa có lịch</p>
                    @php }@endphp
                @endforeach
            </td>
            <td>
                @foreach($listChiHuy as $chihuy)
                    @php if($lichTrucTableData['chi_huy'] == $chihuy->id){ @endphp
                    <p>{{$chihuy->name}}</p>
                    @php } else { @endphp
                    <p style="color: #0d95e8">Chưa có lịch</p>
                    @php }@endphp
                @endforeach
            </td>
        </tr>
    @endforeach
@php } @endphp
