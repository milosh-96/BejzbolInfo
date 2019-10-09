@foreach($posts as $post)
<div class="ui card" style="width:100%;">
                                    <div class="content">
                                      <div class="header feed-item-title">
                                        {{$post->title}}
                                      </div>
                                      <div class="meta">
                                        <span class="right floated time">2 days ago</span>
                                        <span class="category"><a href="Astros">Astros</a> <a href="#">Rays</a></span>
                                      </div>
                                      <div class="description feed-item-content">
                                            {{$post->content}}
                                      </div>
                                    </div>
                                    <div class="extra content">
                                    <div class="left floated">
                                        @if(auth()->user())
                                        <span>
                                            <a href="#" onclick="Library.edit(this)">
                                                    Edit
                                            </a>
                                        </span>
                                        @endif
                                    </div>
                                      <div class="right floated author">
                                        <img class="ui avatar image" src="{{$post->user->gravatar()}}"> {{$post->user->name}}
                                      </div>
                                    </div>
                                  </div>
                                  @endforeach
