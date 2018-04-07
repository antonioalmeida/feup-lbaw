@extends('layouts.master')

@section('title')
    Presto
@endsection

@section('content')

    <body class="grey-background">
    <main class="mt-5" role="main">

        <section class="jumbotron">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 align-self-center my-3 text-shadow">
                        <h1>Be a part of the knowledge community.</h1>
                        <h3><small>Join <strong>Presto</strong> and help grow the world's knowledge.</small></32>
                    </div>
                    <div class="col-sm-5 align-self-center">
                        <div class="card sign-up-card">
                            <div class="card-body">
                                <div class="d-flex align-items-center flex-column">
                                    <div class="m-2 g-signin2" data-width="254" data-height="40" data-longtitle="true"></div>

                                    <div class="fb-login-button m-2" data-max-rows="1" data-size="large" data-button-type="continue_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"></div>
                                </div>

                                <div class="d-flex justify-content-center">
                                    <h6 class="text-muted"><small>OR</small></h6>
                                </div>

                                <form method="post" action="loggedindex.html">
                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-user"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Your Name">
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-at"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="your@email.com">
                                    </div>

                                    <div class="input-group mb-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="far fa-key"></i></div>
                                        </div>
                                        <input type="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button class="btn btn-primary">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- content -->
        <section class="container">
            <div class="row">
                <div class="col-md-2 text-right text-collapse side-menu">
                    <h6 class="">Trending Topics</h6>
                    <ul class="no-bullets">
                        <li><a href="" class="text-muted">Science</a></li>
                        <li><a href="" class="text-muted">Education</a></li>
                        <li><a href="" class="text-muted">Sports</a></li>
                        <li><a href="" class="text-muted">Design</a></li>
                        <li><a href="" class="text-muted">Entertainment</a></li>
                        <li><a href="" class="text-muted">Bodybuilding</a></li>
                    </ul>
                </div>
                <div class="col-md-7">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Top</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">New</a>
                        </div>
                    </nav>
                    <div class="tab-content mb-5" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <!-- Questions go here -->

                            <div class="list-group">

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-wrap-reverse">
                                        <h4 class="mb-1">How is Maths taught?</h4>
                                        <small class="pb-1"><a href="profile.html" class="btn-link"><img class="user-preview rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man2.jpeg">João Damas</a> <span class="text-muted">asked</span></small>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-column mb-1">
                                        <h4 class="mb-3">Where has Math been invented?</h4>
                                        <div class="d-flex">
                                            <div>
                                                <img class="rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man.jpeg">
                                            </div>
                                            <div>
                                                <h6 class="mb-0"><a href="profile.html" class="btn-link">António Almeida</a></h6>
                                                <small class="text-muted">answered 23h ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row answer-preview">
                                        <div class="answer-text-preview col-sm mb-1">
                                            <p class="mb-1">The history of mathematics can be seen as an ever-increasing series of abstractions. The first abstraction, which is shared by many animals, was probably the realization that a collection of two apples and a collection of two oranges (for example) have something in common, namely quantity of their members. <span class="btn-link text-primary">(read more)</span></p>
                                        </div>
                                        <div class="answer-image-preview col-sm-4">
                                            <img class="rounded" src="https://upload.wikimedia.org/wikipedia/commons/a/af/Abacus_6.png">
                                        </div>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>


                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-wrap-reverse">
                                        <h4 class="mb-1">How is Maths taught?</h4>
                                        <small class="pb-1"><a href="profile.html" class="btn-link"><img class="user-preview rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man2.jpeg">João Damas</a> <span class="text-muted">asked</span></small>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-wrap-reverse">
                                        <h4 class="mb-1">How is Maths taught?</h4>
                                        <small class="pb-1"><a href="profile.html" class="btn-link"><img class="user-preview rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man2.jpeg">João Damas</a> <span class="text-muted">asked</span></small>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-column mb-1">
                                        <h4 class="mb-3">Where has Math been invented?</h4>
                                        <div class="d-flex">
                                            <div>
                                                <img class="rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man.jpeg">
                                            </div>
                                            <div>
                                                <h6 class="mb-0"><a href="profile.html" class="btn-link">António Almeida</a></h6>
                                                <small class="text-muted">answered 23h ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-1">The history of mathematics can be seen as an ever-increasing series of abstractions. The first abstraction, which is shared by many animals, was probably that of numbers... <span class="btn-link text-primary">(read more)</span></p>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-wrap-reverse">
                                        <h4 class="mb-1">How is Maths taught?</h4>
                                        <small class="pb-1"><a href="profile.html" class="btn-link"><img class="user-preview rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man2.jpeg">João Damas</a> <span class="text-muted">asked</span></small>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-wrap-reverse">
                                        <h4 class="mb-1">How is Maths taught?</h4>
                                        <small class="pb-1"><a href="profile.html" class="btn-link"><img class="user-preview rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man2.jpeg">João Damas</a> <span class="text-muted">asked</span></small>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                            </div>


                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <!-- answers go here -->
                            <div class="list-group">

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-column mb-1">
                                        <h4 class="mb-3">Where has Math been invented?</h4>
                                        <div class="d-flex">
                                            <div>
                                                <img class="rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man.jpeg">
                                            </div>
                                            <div>
                                                <h6 class="mb-0"><a href="profile.html" class="btn-link">António Almeida</a></h6>
                                                <small class="text-muted">answered 23h ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="mb-1">The history of mathematics can be seen as an ever-increasing series of abstractions. The first abstraction, which is shared by many animals, was probably that of numbers... <span class="btn-link text-primary">(read more)</span></p>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-column mb-1">
                                        <h4 class="mb-3">Where has Math been invented?</h4>
                                        <div class="d-flex">
                                            <div>
                                                <img class="rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man.jpeg">
                                            </div>
                                            <div>
                                                <h6 class="mb-0"><a href="profile.html" class="btn-link">António Almeida</a></h6>
                                                <small class="text-muted">answered 23h ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row answer-preview">
                                        <div class="answer-text-preview col-sm mb-1">
                                            <p class="mb-1">The history of mathematics can be seen as an ever-increasing series of abstractions. The first abstraction, which is shared by many animals, was probably the realization that a collection of two apples and a collection of two oranges (for example) have something in common, namely quantity of their members. <span class="btn-link text-primary">(read more)</span></p>
                                        </div>
                                        <div class="answer-image-preview col-sm-4">
                                            <img class="rounded" src="https://upload.wikimedia.org/wikipedia/commons/1/1a/Kapitolinischer_Pythagoras_adjusted.jpg">
                                        </div>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>

                                <div onclick="location.assign('answer.html');" class="list-group-item list-group-item-action flex-column align-items-start">
                                    <div class="d-flex w-100 justify-content-between flex-column mb-1">
                                        <h4 class="mb-3">Where has Math been invented?</h4>
                                        <div class="d-flex">
                                            <div>
                                                <img class="rounded-circle mr-2" width="36px" heigth="36px" src="assets/img/portrait-man.jpeg">
                                            </div>
                                            <div>
                                                <h6 class="mb-0"><a href="profile.html" class="btn-link">António Almeida</a></h6>
                                                <small class="text-muted">answered 23h ago</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row answer-preview">
                                        <div class="answer-text-preview col-sm mb-1">
                                            <p class="mb-1">The history of mathematics can be seen as an ever-increasing series of abstractions. The first abstraction, which is shared by many animals, was probably the realization that a collection of two apples and a collection of two oranges (for example) have something in common, namely quantity of their members. <span class="btn-link text-primary">(read more)</span></p>
                                        </div>
                                        <div class="answer-image-preview col-sm-4">
                                            <img class="rounded" src="https://upload.wikimedia.org/wikipedia/commons/a/af/Abacus_6.png">
                                        </div>
                                    </div>
                                    <small class="text-muted"><i class="far fa-tags"></i> <a href="topic.html" class="btn-link">Science</a>, <a href="topic.html" class="btn-link">Education</a></small>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-md-3 side-menu text-collapse">
                    <div class="card">
                        <div class="card-body">
                            <h6>Top Users</h6>
                            <div class="list-group list-group-flush short-padding">
                                <div class="list-group-item d-flex justify-content-begin">
                                    <div class="align-self-center">
                                        <img class="user-preview rounded-circle mr-2" width="50px" heigth="50px" src="assets/img/portrait-man.jpeg">
                                    </div>
                                    <div>
                                        <a href="" class="text-dark">João Damas</a><br>
                                        <span class="text-muted"><i class="fas fa-gem text-primary"></i> 1.2k points</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-begin">
                                    <div class="align-self-center">
                                        <img class="user-preview rounded-circle mr-2" width="50px" heigth="50px" src="assets/img/portrait-man2.jpeg">
                                    </div>
                                    <div>
                                        <a href="" class="text-dark">João Damas</a><br>
                                        <span class="text-muted"><i class="fas fa-gem text-primary"></i> 345 points</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-begin">
                                    <div class="align-self-center">
                                        <img class="user-preview rounded-circle mr-2" width="50px" heigth="50px" src="assets/img/portrait-man.jpeg">
                                    </div>
                                    <div>
                                        <a href="" class="text-dark">João Damas</a><br>
                                        <span class="text-muted"><i class="fas fa-gem text-primary"></i> 234 points</span>
                                    </div>
                                </div>
                                <div class="list-group-item d-flex justify-content-begin"> <div class="align-self-center">
                                        <img class="user-preview rounded-circle mr-2" width="50px" heigth="50px" src="assets/img/portrait-man2.jpeg">
                                    </div>
                                    <div>
                                        <a href="" class="text-dark">João Damas</a><br>
                                        <span class="text-muted"><i class="fas fa-gem text-primary"></i> 200 points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

        </section>

    </main><!-- /.container -->

    <!-- /.container -->
    </body>

@endsection