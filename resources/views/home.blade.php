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
                                Alex Smith
                            </h2>
                            <small>Founder of Groupeq</small>
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
                        <h4 class="media-heading">Alex Smith</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                    <i class="fa fa-wrench"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li><a href="#">Config option 1</a>
                                    </li>
                                    <li><a href="#">Config option 2</a>
                                    </li>
                                </ul>
                                <a class="close-link">
                                    <i class="fa fa-times"></i>
                                </a>
                            </div>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Email</label>
                                    <div class="col-lg-10"><input type="email" placeholder="Email" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Name</label>
                                    <div class="col-lg-10"><input type="email" placeholder="Name" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Github</label>
                                    <div class="col-lg-10"><input type="email" placeholder="Github" class="form-control"></div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-2 control-label">Bio</label>
                                    <div class="col-lg-10"><textarea placeholder="Bio" class="form-control" style="margin: 0px -3.67188px 0px 0px; height: 146px; width: 606px;"></textarea></div>
                                </div>

                                <div class="form-group">
                                    <div class="col-lg-offset-2 col-lg-10">
                                        <button class="btn btn-primary" type="submit">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection