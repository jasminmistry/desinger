import "./bootstrap";
import Dropzone from "dropzone";

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import sort from '@alpinejs/sort'
 
Alpine.plugin(sort);
Livewire.start();

const previewNode = document.querySelector("#template");
if (previewNode) {
    previewNode.id = "";
    const previewTemplate = previewNode.parentNode.innerHTML;
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
}
