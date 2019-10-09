@extends('layouts.app')

@section('content')
<div class="container">
        <div class="ui grid">
            <div class="four wide column">

                    <div class="ui segment">
                        <img src="https://bejzbol.info/wp-content/uploads/2019/02/logo-dark.png" width="100%" alt="">
                    </div>
                    <div class="ui vertical menu" style="width:100%">
                            <a class="active teal item">
                              Inbox
                              <div class="ui teal left pointing label">1</div>
                            </a>
                            <a class="item">
                              Spam
                              <div class="ui label">51</div>
                            </a>
                            <a class="item">
                              Updates
                              <div class="ui label">1</div>
                            </a>
                            <div class="item">
                              <div class="ui transparent icon input">
                                <input type="text" placeholder="Search mail...">
                                <i class="search icon"></i>
                              </div>
                            </div>
                          </div>
            </div>
            <div class="twelve wide column">
                    <?php for($i=0;$i<5;$i++): ?>

                            <div class="ui card" style="width:100%;">
                                    <div class="content">
                                      <div class="header"></div>
                                      <div class="meta">
                                        <span class="right floated time">2 days ago</span>
                                        <span class="category"><a href="Astros">Astros</a> <a href="#">Rays</a></span>
                                      </div>
                                      <div class="description">
                                        <p>
                                            Džastin Verlander u problemima u Tampi. Čak 57 bacanja u prva dva ininga!!
                                        </p>
                                      </div>
                                    </div>
                                    <div class="extra content">
                                    <div class="left floated">
                                        @if(auth()->user())
                                        <span>
                                            <a href="#">
                                                    Edit
                                            </a>
                                        </span>
                                        @endif
                                    </div>
                                      <div class="right floated author">
                                        <img class="ui avatar image" src="https://cdn3.iconfinder.com/data/icons/business-avatar-1/512/7_avatar-512.png"> Miloš
                                      </div>
                                    </div>
                                  </div>



                        <?php endfor;?>
            </div>

        </div>
    </div>
</div>
@endsection
