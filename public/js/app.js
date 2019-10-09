
var Library = Library || (function () {

    return {

        post: function (token) {
            var title = document.getElementById("postTitle").value;
            var content = document.getElementById("postContent").value;
            var data = {
                title: title,
                content: content
            };
            axios.post("/api/posts?api_token=" + token, data).then(function (response) {
                title = "";
                content = "";
                getFeed();
            }).catch(function (error) {
                alert("error!")
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


        edit: function (el) {
            var contentDiv = $(el).parent().parent().parent().siblings(".content").find(".feed-item-content");
            var content = contentDiv[0].innerText;
            contentDiv.css("display", "none");
            contentDiv.parent().append('<div class="edit"></div>');
            contentDiv.parent().find(".edit").append('<div class="ui form"><div class="field"><textarea rows="2">' + content + '</textarea></div></div>');
            contentDiv.parent().find(".edit").append('<button class="button" onclick="Library.cancelEdit(this)">Cancel</button>');

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
