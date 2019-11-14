
var Library = Library || (function () {

    return {

        post: function (token) {
            var title = document.getElementById("postTitle").value;
            var content = document.getElementById("postContent").value;
            var teams = document.getElementById("teamsField").value;
            var data = {
                title: title,
                content: content,
                teams: teams
            };
            axios.post("/api/posts?api_token=" + token, data).then(function (response) {
                $("#postTitle").attr('value','');
                $("#postContent").attr('value','');
            }).catch(function (error) {
                alert("error!")
            });

            this.getFeed();



        },

        deletePost: function(el,post_id,token) {
            axios.post("/api/posts/"+post_id+"?api_token="+token).then(function(response) {
            //visually delete item//
                $(el).parent().parent().parent().parent().remove();
            });
        },

        updatePost: function(el,post_id,token) {
            var data = {content:$(el).siblings().find(".postEditContent").val()};

             axios.post("/api/posts/update/"+post_id+"?api_token="+token,data).then(function(response) {
            //visually update item//
                 $(el).parent().siblings(".feed-item-content").html(data.content);
                 $(el).parent().siblings(".feed-item-content").css("display", "block");
            $(el).parent().remove();
            });

        },



        toggleTitleField: function () {
            var checkbox = document.getElementById("titleFieldCheckbox");
            var title = document.getElementById("postTitleField");
            if (checkbox.checked) {
                title.style.display = "block";
            }
            else {
                document.getElementById("postTitle").value = "";
                title.style.display = "none";
            }
        },

        getFeed: function () {
            axios.get('/feed').then(function (response) {
                return response.data;
            }).then(function (res) {
                document.getElementById("feed").innerHTML = res;
            });
        },


        edit: function (el,post_id,token) {
            var contentDiv = $(el).parent().parent().parent().siblings(".content").find(".feed-item-content");
            var content = contentDiv[0].innerText;
            contentDiv.css("display", "none");
            contentDiv.parent().append('<div class="edit"></div>');
            contentDiv.parent().find(".edit").append('<div class="ui form"><div class="field"><textarea class="postEditContent" rows="2">' + content + '</textarea></div></div>');
            contentDiv.parent().find(".edit").append('<button class="button" onclick="Library.cancelEdit(this)">Cancel</button>');
            contentDiv.parent().find(".edit").append('<button class="button" onclick="Library.updatePost(this'+`,${post_id},'${token}'`+')">Update</button>');

        },
        cancelEdit: function (el) {
            $(el).parent().siblings(".feed-item-content").css("display", "block");
            $(el).parent().remove();

        }
    };

})();


document.addEventListener('DOMContentLoaded', function (event) {
    Library.getFeed();
});
