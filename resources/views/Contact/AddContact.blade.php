@extends('Contact.index')
{{-- NOTE BLADE --}}
@section('content')
<div class="">
    <div class="rounded text-center">
        <div class="col-sm-12 col-md-8 shadow p-5 rounded-5  col-lg-5 mx-auto">
            <form action="/register" method="post">
                @csrf
                <h4>SIGN UP</h4>
                <div>https://forms.gle/HQur69NdtGpFAzqV9</div>
                    <input type="text" name="fullName" id="" class="form-control my-3" placeholder="Full Name">
                
                
                    <input type="text" name="email" id="" class="form-control my-3" placeholder="Email">
                    <input type="text" name="password" id="" class="form-control my-3" placeholder="password">

                <div>
                    <button class="btn text-light border-0 w-100" type="submit" style="background-color: brown">Sign Up</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection