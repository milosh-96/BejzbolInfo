@extends('layouts.app')

@section('content')
<div class="container">
        <div class="ui stackable grid">
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

                    @if(auth()->user())
                      <div class="ui segment">
                 <div class="ui form">
                 <div class="ui checkbox">
                        <input type="checkbox" id="titleFieldCheckbox" onclick="Library.toggleTitleField()" /><label>Toggle Title</label>
                    </div>
                    <div class="field" id="postTitleField" style="display:none">
                        <input id="postTitle" />
                    </div>
                    <div class="field">
                    
                    <textarea id="postContent" rows="2"></textarea>
                    </div>
                    <div>
                        <button class="ui button" onclick="Library.post('{{auth()->user()->token()}}')">Post!</button>
                    </div>
                </div>
                </div>
                @endif
                   <div id="feed">

                    <div class="ui fluid placeholder">
  <div class="image header">
    <div class="line"></div>
    <div class="line"></div>
  </div>
  <div class="paragraph">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
</div>
<div class="ui fluid placeholder">
  <div class="image header">
    <div class="line"></div>
    <div class="line"></div>
  </div>
  <div class="paragraph">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
</div>

                   </div>
            </div>

        </div>
    </div>
@endsection
