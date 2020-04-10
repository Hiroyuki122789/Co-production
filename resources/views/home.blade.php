@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-4">
           <div class="card">
               <div class="card-title">
                   <h1 class="alert-secondary">User Information</h1>
               </div>
            <img class="w-80 text-center" src="" alt="">
            <div class="card-body">
                <h1 class="text-center">{{ Auth::user()->name}}</h1>
                <div class="text-center">
                    <p>{{ Auth::user()->email}}</p>
                    <a class="btn btn-primary" href="/home/edit">Update Profile</a>
                </div>
            </div>
           </div>
           <div class="justify-content-center">
               <div class="card mt-2">
                    <h1 class="card-title text-center">User Stats</h1>
                    <div class="row card-body text-center">
                        <div class="card col-6 p-4">                    
                            <a  href="/following/{id}">follower</a>
                        </div>
                        <div class="card col-6 p-4">                    
                            <a  href="/users/follow/{id}">follower</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="justify-content-center">
                <div class="card mt-2">
                    <div class="card-body btn btn-primary">
                        <p class="text-center">1</p>
                        <p class="text-center">Learned Words</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="col-8">
            <div class="card">
                <div class="card-title">
                    <h1 class="alert-secondary">Activity Feeds</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection