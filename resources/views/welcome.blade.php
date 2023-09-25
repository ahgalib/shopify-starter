@extends('shopify-app::layouts.default')
@vite('resources/css/app.css')
@include('layouts.navigation')
@section('content')
<h3>Hello World</h3>

<a href="{{URL::tokenRoute('products')}}" class="btn btn-success">view about page</a>
@endsection






