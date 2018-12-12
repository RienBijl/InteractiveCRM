@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            Report a malfunction
        </div>
        <div class="card-body">
            Thanks for helping to continue development on iCRM. Please read the text with the title appropriate for you. <hr>
            <b>I am a normal user</b> <br>
            Because we need constructive and informative feedback on the issue you are experiencing, we'd like you to contact your
            systems administrator to address any issues with iCRM. <br><br>
            <b>I am a software engineer or sysadmin with Laravel experience</b> <br>
            We can use your help! Start an issue on our <a href="https://github.com/RienBijl/InteractiveCRM/issues">GitHub page</a> telling us about
            your problem in detail and your idea's to what might be causing them. Our community will address the issue as quickly as possible.
        </div>
    </div>
</div>
@endsection
