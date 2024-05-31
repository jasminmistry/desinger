import "./bootstrap";
import Dropzone from "dropzone";

import Alpine from "alpinejs";
import persist from '@alpinejs/persist';

window.Alpine = Alpine;

Alpine.plugin(persist)
Alpine.start();
var previewNode = document.querySelector("#template");
previewNode.id = "";
var previewTemplate = previewNode.parentNode.innerHTML;
previewNode.parentNode.removeChild(previewNode);

let myDropzone = new Dropzone("div.dropzone", {
    previewsContainer: "#previews",
    previewTemplate: previewTemplate,
    parallelUploads: 5,
    maxFiles: 5,
    url: "/file/post",
    clickable: ".fileinput-button",
    autoQueue: false,
    autoProcessQueue: false,
});
myDropzone.on("addedfiles", (e) => {
    const dataTransfer = new DataTransfer();
    myDropzone.files.forEach((item) => {
        dataTransfer.items.add(item);
    });
    const fileList = dataTransfer.files;
    document.getElementById("picture").files = fileList;
});
myDropzone.on("removedfile", (e) => {
    const dataTransfer = new DataTransfer();
    myDropzone.files.forEach((item) => {
        dataTransfer.items.add(item);
    });
    const fileList = dataTransfer.files;
    document.getElementById("picture").files = fileList;
});
myDropzone.on("maxfilesexceeded", function (file) {
    myDropzone.removeAllFiles();
    myDropzone.addFile(file);
});
