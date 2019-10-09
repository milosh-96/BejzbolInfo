@foreach($posts as $post)
<div class="ui card" style="width:100%;">
                                    <div class="content">
                                      <div class="header">
                                        {{$post->title}}
                                      </div>
                                      <div class="meta">
                                        <span class="right floated time">2 days ago</span>
                                        <span class="category"><a href="Astros">Astros</a> <a href="#">Rays</a></span>
                                      </div>
                                      <div class="description">
                                        <p>
                                            {{$post->content}}
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
                                  @endforeach
