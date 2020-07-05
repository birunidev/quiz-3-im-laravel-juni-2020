const tags = document.querySelector(".tag-post").innerText;
let arrTags = tags.split(",");
let tagHTML = "";
arrTags.forEach((tag) => {
    tagHTML += tag;
});
tags.innerHTML = tagHTML;
