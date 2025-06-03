@extends('layouts.master')

@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Contact</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Contact us</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Contact form
                    </div>
                    <div class="card-body">
                        <form action="">
                            <input type="text" name="message" id="" placeholder="Write your message">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</main>
@endsection