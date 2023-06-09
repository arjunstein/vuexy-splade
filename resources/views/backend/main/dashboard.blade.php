@extends('backend.layouts.app')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">{{ $title }}</h4>
                    <p>
                        <Link href="{{ route('backend.about') }}">Visit contact page</Link>
                        This is Dashboard page.<br />For more layout options refer
                        <a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation//layouts.html"
                            target="_blank" class="fw-bold">Layout docs</a>.
                    </p>
    </div>
@endsection