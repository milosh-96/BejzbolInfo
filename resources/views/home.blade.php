@extends('layouts.app')

@section('content')

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
                    <div class="ui grid">
                        <div class="four wide column">
                                <div class="ui mini form">
                                        <div class="field">
                                                <button class="ui button" onclick="Library.post('{{auth()->user()->token()}}')">Post!</button>
                                        </div>
                        </div>
                        </div>
                        <div class="twelve wide column">
                            <div class="ui mini form">
                                    <div class="field">
                                        <input type="text" placeholder="Teams, separate by commas" name="teams" id="teamsField">
                                    </div>
                            </div>
                        </div>


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
