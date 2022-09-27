@extends('layouts.app')

{{-- <div class="card">
    <div class="card-header bg-success text-white">Registration complete</div>
    <div class="card-body">
        hello <b>{{ request()->name }}</b>, thank you for joining us, soon we will approve your registration. </br>
        When your account approved, you will receive your credentials on <b>{{ request()->email }}</b> </br>
        Thank you </br></br>
        <a href="/" class="btn btn-sm btn-primary">Back to home</a>
    </div> --}}
<div class="container">

   <div class="col-md-8" style="margin-left: 17%">   
             <div class="card " style="margin-top: 8%; ;">
                <div class="card-header bg-success text-white">Submission complete</div>
                <div class="card-body">
                    hello (Name), thank you for submitting your innovation, soon we will approve your submission. </br>
                    When your idea is approved, you will receive our feedback on (Email)</br>
                    Thank you! </br></br>
                    <a href="/" class="btn btn-sm btn-secondary">Back to home</a>
                </div>
            </div>
    </div> 
</div>
    