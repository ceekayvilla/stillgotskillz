@php
    $errors = Session::get('error');
    $messages = Session::get('success');
    $info = Session::get('info');
    $warnings = Session::get('warning');
@endphp
<div class="alert-area">
    <div class="row">
        <div class="col-lg-12">

            @if ($errors) @foreach($errors as $key => $value)
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>Error!</strong> {{ $value }}
                </div>
            @endforeach @endif

            @if ($messages) @foreach($messages as $key => $value)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>Success!</strong> {{ $value }}
                </div>
            @endforeach @endif

            @if ($info) @foreach($info as $key => $value)
                <div class="alert alert-info alert-dismissible fade show" role="alert">
                    <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>Info!</strong> {{ $value }}
                </div>
            @endforeach @endif

            @if ($warnings) @foreach($warnings as $key => $value)
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <button class="close" type="button" data-dismiss="alert">×</button>
                    <strong>Warning!</strong> {{ $value }}
                </div>
            @endforeach @endif

        </div>
    </div>
</div>