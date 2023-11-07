const main = document.getElementById("main");
const content = document.getElementById("content");
if (screen.height <= 820) {
    main.style.setProperty("height", "100%", "important");
    content.style.setProperty("padding", "4rem 0px 4rem 0px", "important");
}
