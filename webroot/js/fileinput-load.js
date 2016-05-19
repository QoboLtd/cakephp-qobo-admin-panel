$(document).ready(function () {
    'use strict';
    var initPreview = '';
    var html = {
        previewOtherFile: "<div class='file-preview-text'><h2>" +
            "<i class='glyphicon glyphicon-file'></i></h2>" +
            "<a href='%%url%%' target='_blank'>View file</a></div>",
        img: "<img class='img-responsive' src='%%url%%' alt='img-preview' />"
    };
    var $inputField = $("input[type=file]");
    var isImg = function (url) {
        return (url.match(/\.(jpeg|jpg|gif|png)$/) != null);
    };
    if ($inputField.length !== 0) {
        var url = $inputField.data('upload-url');
        if (typeof url !== 'undefined' && isImg(url)) {
            initPreview = html.img;
        } else {
            initPreview = html.previewOtherFile;
        }

        $inputField.fileinput({
            initialPreview: initPreview.replace('%%url%%', url),
            showUpload: false,
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
            previewFileIcon: '<i class="fa fa-file"></i>'
        });
    }
});