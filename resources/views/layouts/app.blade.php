@extends('inspinia::layouts.main')

@if (auth()->check())
@section('user-avatar', 'https://www.gravatar.com/avatar/' . md5(auth()->user()->email) . '?d=mm')
@section('user-name', auth()->user()->name)
@endif

@section('breadcrumbs')
@include('inspinia::layouts.main-panel.breadcrumbs', [
  'breadcrumbs' => [
    (object) [ 'title' => 'Home', 'url' => route('home') ]
  ]
])
@endsection

@section('sidebar-menu')
  <ul class="nav metismenu" id="side-menu" style="padding-left:0px;">
    <li class="active">
      <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span class="nav-label">Home</span></a>
    </li>
    @role('administrator')
    <li>
      <a href="{{ route('home') }}"><i class="fa fa-user"></i> <span class="nav-label">Presensi</span></a>
    </li>
    <li>
      <a href="{{ route('home') }}"><i class="fa fa-users"></i> <span class="nav-label">Mahasiswa</span></a>
    </li>
    <li>
      <a href="{{ route('home') }}"><i class="fa fa-cog"></i> <span class="nav-label">Settings</span></a>
    </li>
    @endrole

    <li>
      <a href="{{ route('home') }}"><i class="fa fa-modx"></i> <span class="nav-label">Task</span></a>
    </li>

    <li>
      <a href="{{ route('home') }}"><i class="fa fa-book"></i> <span class="nav-label">Module</span></a>
    </li>

  </ul>
@endsection
