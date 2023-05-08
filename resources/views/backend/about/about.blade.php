@extends('backend.layouts.app')

@section('content')
@seoTitle('About page')
    <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="fw-bold py-3 mb-4">{{ $title }}</h4>
                    <p>
                        <Link href="{{ route('backend.dashboard') }}">Visit contact page</Link>
                        This is About page.<br />For more layout options refer
                        <a href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation//layouts.html"
                            target="_blank" class="fw-bold">Layout docs</a>.
                    </p>
    </div>
@endsection