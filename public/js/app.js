function post(token) {
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

   
}

document.addEventListener('DOMContentLoaded', function (event) {
    getFeed();
});

function toggleTitleField() {
    var checkbox = document.getElementById("titleFieldCheckbox");
    var title = document.getElementById("postTitleField");
    if (checkbox.checked) {
        title.style.display = "block";
    }
    else {
        document.getElementById("postTitle").value = "";
        title.style.display = "none";
    }
}

function getFeed() {
    axios.get('/feed').then(function (response) {
        return response.data;
    }).then(function (res) {
        document.getElementById("feed").innerHTML = res;
    });
}
