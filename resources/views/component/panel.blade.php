@extends('layouts.app-panel')

@section('content')
    <div class="panel">

        <div class="section-pages border-bottom">
            <a href="#">
                <i class="fas fa-tachometer-alt"></i>    
                <span>Dashboard</span>
            </a>
        </div>

        <div class="container">
            <div class="section-pages">
                <a href="#">
                    <i class="fas fa-folder"></i>    
                    <span>Pages</span>
                </a>
            </div>

            <div class="section-blog">
                <a href="#">
                    <i class="fas fa-folder"></i>
                    <span>blog</span>
                </a>
            </div>
        </div>
    </div>
@endsection