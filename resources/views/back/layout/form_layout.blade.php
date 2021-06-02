@extends('back.layout.master')

@section('content')
    <div class="content">

        <!-- Form inputs -->
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Thông tin chung</h5>
                    <div class="header-elements">
                        <div class="list-icons">
                            <button type="submit" class="btn btn-success text-white">Lưu</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <fieldset class="mb-3">
                        <legend class="text-uppercase font-size-sm font-weight-bold">Thông tin cơ bản</legend>
                        <div class="row">
                            @yield('form_content')
                        </div>
                    </fieldset>
                </div>
            </div>
        </form>
    </div>

@endsection
