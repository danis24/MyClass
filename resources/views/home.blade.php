@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="ibox float-e-margins">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-head-color-box navy-bg p-lg text-center">
                        <div class="m-b-md">
                            <h2 class="font-bold no-margins">
                                {{ auth()->user()->name }}
                            </h2>
                            <small>Mahasiswa</small>
                        </div>
                        <img src="http://webapplayers.com/inspinia_admin-v2.7.1/img/a4.jpg" class="img-circle circle-border m-b-md"
                            alt="profile">
                        <div>
                            <span>100 Tweets</span> |
                            <span>350 Following</span> |
                            <span>610 Followers</span>
                        </div>
                    </div>
                    <div class="widget-text-box">
                        <h4 class="media-heading">{{auth()->user()->name}}</h4>
                        <p>{{ auth()->user()->profile->bio}}</p>
                        <div class="text-right">
                            <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                            <a class="btn btn-xs btn-primary"><i class="fa fa-heart"></i> Love</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Profile</h5>
                            <div class="ibox-tools">
                                <a class="collapse-link">
                                    <i class="fa fa-chevron-up"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            {!! Form::open(['class' => 'form-horizontal', 'id' => 'formUpdateProfile']) !!}
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">NIM</label>
                                    <div class="col-lg-10"><input type="text" placeholder="NIM" class="form-control" value="{{$profiles->profile->nim}}" disabled></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10"><input type="text" name="name" placeholder="Name" class="form-control" value="{{$profiles->name}}"></div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-lg-2 control-label">Kelas</label>
                                    <div class="col-lg-10">
                                        <select name="class" class="form-control">
                                            @if(count($class) > 0)
                                            @foreach($class as $key => $value)
                                                @if(!empty($profiles->profile->class_id))
                                                    @if($value->id == $profiles->profile->myClass->id)
                                                    <option value="{{$value->id}}" selected>{{$value->name}}</option>
                                                    @else
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                    @endif
                                                @else
                                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                                @endif
                                            @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10"><input type="email" placeholder="Email" class="form-control" value="{{$profiles->email}}" disabled></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Github</label>
                                    <div class="col-lg-10"><input type="text" name="github" placeholder="https://github.com/user"
                                            class="form-control" value="{{$profiles->profile->github}}"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Alamat</label>
                                    <div class="col-lg-10"><textarea placeholder="Alamat" name="address" class="form-control" style="margin: 0px -3.67188px 0px 0px; height: 146px; width: 606px;">{{$profiles->profile->address}}</textarea></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Bio</label>
                                    <div class="col-lg-10"><textarea placeholder="Bio" name="bio" class="form-control" style="margin: 0px -3.67188px 0px 0px; height: 146px; width: 606px;">{{$profiles->profile->bio}}</textarea></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="ladda-button ladda-button-demo btn btn-primary" data-style="zoom-in" id="updateButton">Update</button>
                                    </div>
                                </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('user-scripts')
<!-- Ladda -->
<script src="http://webapplayers.com/inspinia_admin-v2.4/js/jquery-2.1.1.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.4/js/plugins/ladda/spin.min.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.4/js/plugins/ladda/ladda.min.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.4/js/plugins/ladda/ladda.jquery.min.js"></script>
<script src="http://webapplayers.com/inspinia_admin-v2.4/js/plugins/toastr/toastr.min.js"></script>

<script>
$(document).ready(function () {

    let l = $('#updateButton').ladda();
      l.click(function() {
        l.ladda('start');
        $.ajax({
            type: 'PATCH',
            url: '{{ route("profiles.update") }}',
            data: $('#formUpdateProfile').serialize(),
            success: function (data) {
                setTimeout(function() {
                    l.ladda('stop');
                    toastr.options = {
                        closeButton: true,
                        progressBar: true,
                        showMethod: 'slideDown',
                        timeOut: 4000
                    };
                    toastr.success('Success', 'Data Berhasil di Perbaharui');
                }, 1300);
            },
            error: function(data) {
                console.log(data);
            }
        });
      });
});
</script>
@endsection