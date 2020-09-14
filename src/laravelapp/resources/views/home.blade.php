@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col col-md-offset-3 col-md-6">
            <nav class="panel panel-default">
                <div class="panel-heading">
                    コーヒー豆
                </div>
                <div class="panel-body">
                    <div class="text-center">
                        <a href="{{ route('beans.index') }}" class="btn btn-primary">
                            コーヒー豆一覧へ
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
@endsection