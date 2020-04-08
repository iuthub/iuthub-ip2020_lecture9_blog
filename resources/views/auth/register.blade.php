@extends('layouts.master')

@section('content')

<div class="article">
        <div class="article-header">
            <h2>Register</h2>
        </div>
        <div class="article-body">
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                         <input id="name" type="text"
                          name="name" form="registerForm"
                          value="{{ old('name') }}" 
                          required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td>
                        <input id="email" type="email"  form="registerForm"
                        name="email" value="{{ old('email') }}"
                        required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td>
                        <input form="registerForm" id="password" type="password"  
                        name="password" required 
                        autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>
                          <input id="password-confirm" form="registerForm" type="password" name="password_confirmation" required autocomplete="new-password">
                    </td>
                </tr>
            </table>
        </div>
        <div class="article-footer">
            <div class="article-meta">
            
            </div>
            <div class="article-actions">
                <form id="registerForm" action="{{route('register')}}" method="post">
                    @csrf
                    <input type="submit" value="Register">
                </form>
            </div>
        </div>
    </div>

@endsection
