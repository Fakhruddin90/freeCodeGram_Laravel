@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://s3.amazonaws.com/freecodecamp/curriculum-diagram-full.jpg" style="height:100px;width:100px"class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div><h1>{{ $user->username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>153</strong> posts</div>
                <div class="pr-5"><strong>23k</strong> followers</div>
                <div class="pr-5"><strong>212</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">freeCodeCamp.org</div>
            <div>We're a global community of millions of people learning to code together. We're an open source, donor-supported, 501(c)(3) nonprofit.</div>
            <div><a href="#">www.freecodecamp.org</a></div>
        </div>
    </div>
    
    <div class="row pt-5">
        <div class="col-4">
            <img src="https://instagram.fszb2-1.fna.fbcdn.net/vp/47f63f6f0888eb2ef96cc92351ed3ced/5DEC4437/t51.2885-15/sh0.08/e35/s640x640/64842736_675454446259763_390781940470065216_n.jpg?_nc_ht=instagram.fszb2-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fszb2-1.fna.fbcdn.net/vp/2c641fb27c51863b90a05c8edbcde940/5DB3C26F/t51.2885-15/e35/57244862_513269102746206_599322833260649013_n.jpg?_nc_ht=instagram.fszb2-1.fna.fbcdn.net" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fszb2-1.fna.fbcdn.net/vp/47f4f83b49ad71336aa2afda5d08fe44/5DB2544C/t51.2885-15/e35/55883502_276964759894127_4802325343098871564_n.jpg?_nc_ht=instagram.fszb2-1.fna.fbcdn.net" class="w-100">
        </div>
    </div>
</div>
@endsection
