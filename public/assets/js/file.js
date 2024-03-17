import Flmngr from "https://cdn.skypack.dev/flmngr";
Flmngr.load(
    {
        apiKey: "FLMNFLMN",
        urlFileManager: "/file/store",
        urlFiles: "/FeaturedMedia",
    },
    {
        onFlmngrLoaded: () => {
            attachOnClickListenerToButton();
        },
    }
);
function attachOnClickListenerToButton() {
    let elBtn = document.getElementById("btn");
    elBtn.style.opacity = 1;
    elBtn.style.cursor = "pointer";
    let elLoading = document.getElementById("loading");
    elLoading.parentElement.removeChild(elLoading);
    elBtn.addEventListener("click", () => {
        selectFiles();
    });
}
function selectFiles() {
    Flmngr.open({
        isMultiple: false,
        acceptExtensions: ["png", "jpeg", "jpg", "webp", "gif"],
        onFinish: (files) => {
            showSelectedImage(files);
        },
    });
}
function showSelectedImage(files) {
    let elImages = document.getElementById("images");
    elImages.innerHTML = "";
    let file = files[0];
    let el = document.createElement("div");
    el.className = "image";
    elImages.appendChild(el);
    let elImg = document.createElement("img");
    elImg.src = file.url;
    elImg.alt = "Image selected in Flmngr";
    el.appendChild(elImg);
    let elP = document.createElement("p");
    elP.textContent = file.url;
    el.appendChild(elP);
    let url = document.createElement("input");
    url.value = file.url;
    url.name = "url";
    url.type = "hidden";
    el.appendChild(url);
}
// let filter_btn = document.querySelector('li["data-flmngr-element-id="toolbar__find__start"]');
// console.log(filter_btn);

// document.addEventListener('click', function (event) {
//     let btn = document.querySelector('li[data-flmngr-element-id="toolbar__find__start"]');
//     let value = document.querySelector('div[data-flmngr-element-id="toolbar__find_query"] input');
//     if (event.target.offsetParent == btn) {
//         debugger;
//         event.preventDefault();
//         // event.stopPropagation();
//         //document.querySelector(".N1EDPnlGetPremium__dlg").parentNode.style.display = "none";

//         debugger;
//         callback();
//     }
// });
// function callback() {
//     console.log('hi');
// }
// let btn = document.querySelector('li[data-flmngr-element-id="toolbar__find__start"]');
