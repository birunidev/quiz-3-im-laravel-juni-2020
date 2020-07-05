console.log("create");

// get input title
const title = document.getElementById("judul");
// get input slug
const slug = document.getElementById("slug");

title.addEventListener("keyup", function (e) {
    let title_value = e.target.value;
    let slugValue = title_value.toLowerCase().split(" ").join("-");
    slug.value = slugValue;
});
