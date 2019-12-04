@extends('layouts.app')

@section('content')
<div class="container m-auto">
    <div class="row justify-content-center">
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-center">
            <h1>聯絡表單</h1>
            @if(isset($message))
            <div class="alert alert-success">
              {{ $message }}
            </div>
            @endif
          @include('contact-form::contact_form')
        </div>
    </div>
</div>
@endsection
