@extends('layouts.master')

@section('content')

<div class="article">
        <div class="article-header">
            <h2>Verify Your Email</h2>
        </div>
        <div class="article-body">
           @if (session('resent'))
            <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif

            {{ __('Before proceeding, please check your email for a verification link.') }}
            {{ __('If you did not receive the email') }}, <button type="submit" form="resendForm" >Resend</button>
            <form id="resendForm" method="POST" action="{{ route('verification.resend') }}">
                @csrf
            </form>
        </div>
    </div>

 @endsection

