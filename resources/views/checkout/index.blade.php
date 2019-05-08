@extends('layouts/base')

@section('title', 'Checkout')
@section('show-header', true)

@section('content')
    <example-component title="Checkout">
        <checkout stripe-key="{{ config('services.stripe.key') }}" stripe-session-id="{{ $stripe_session_id }}"></checkout>
    </example-component>
@endsection

@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>
@endsection
