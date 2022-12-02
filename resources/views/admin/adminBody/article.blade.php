@extends('admin.adminLayout')
@section('content')
    <div class="container-fluid">

        <div id="article">
            <div class="row">
                <div class="col-md-12">
                    <div class="article-nav">
                        <ul class="flex-wrap">
                            <li id="articlelink"  class="nav-item activearticle"><a href="#"class="nav-link">General seting</a></li>
                            <li id="loan" class="nav-item"><a href="#" class="nav-link">loan setup</a></li>
                            <li id="download" class="nav-item"><a href="#" class="nav-link">download page setting</a></li>
                            <li id="carousel" class="nav-item"><a href="#" class="nav-link">carousel setting</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="article_page" class="">
                <div class="row mt-3">
                    <div class="col-md-12">
                            <form action="" method="" class="form">

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="sitename">Site name</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="sitename" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="sitetitle">Site title</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="sitetitle" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="officename">Contact Office Serial Name</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="officename" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="certificate">ICP recort certificate NO</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="certificate" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="homename">Home Page name</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="homename" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="icon">App Icon</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="icon" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="address">Customer Service Address</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="address" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="chatapp">Chat App</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="chatapp" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="restript">Restript Register IP</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="restript" class="form-control">
                                    </div>
                                </div>

                                <div class="article-body-input">
                                    <div class="article-title flex-wrap">
                                        <label for="loginip">Allow Login IP</label>
                                    </div>
                                    <div class="article-input">
                                        <input type="text" id="loginip" class="form-control">
                                    </div>
                                </div>

                                <div class="py-5">
                                    <button type="submit" class="btn btn-success">Save Configuration</button>
                                </div>


                            </form>
                    </div>
                </div>
            </div>

            <div id="loan_page" class="hide_blade">
                <div class="row mt-3">
                    <h1>I am loan page</h1>
                </div>
            </div>

            <div id="download_page" class="hide_blade">
                <div class="row mt-3">
                    <h1>I am download page</h1>
                </div>
            </div>


            <div id="carousel_page" class="hide_blade">
                <div class="row mt-3">
                    <h1>I am carousel page</h1>
                </div>
            </div>


        </div>

    </div>
@endsection
