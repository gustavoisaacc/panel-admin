@extends('layouts.app-panel')

@section('content')
    <div class="panel">

        <div class="container menu">
            <div class="section-dashboard border-bottom">
                <a class="flex" href="#">
                    <i class="fas fa-tachometer-alt"></i>    
                    <span>Dashboard</span>
                </a>
            </div>
            
            <div class="section-pages">
                <a class="flex" href="#">
                    <i class="fas fa-folder"></i>    
                    <span>Pages</span>
                </a>
            </div>

            <div class="section-blog">
                <a class="flex" href="#">
                    <i class="fas fa-folder"></i>
                    <span>Blog</span>
                </a>
            </div>
        </div>
    </div>
@endsection