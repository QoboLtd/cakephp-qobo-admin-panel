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
    var setDeleteUrl = function () {
        return window.location.href.replace('edit', 'unlinkUpload');
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
            initialPreviewConfig: [
                /**
                 * @todo Needs to be .json link
                 */
                {url: setDeleteUrl()}
            ],
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: "<i class=\"glyphicon glyphicon-trash\"></i> ",
            previewFileIcon: '<i class="fa fa-file"></i>',
            previewFileIconSettings: {
                'docx': '<i class="fa fa-file-word-o text-primary"></i>',
                'xlsx': '<i class="fa fa-file-excel-o text-success"></i>',
                'pptx': '<i class="fa fa-file-powerpoint-o text-danger"></i>',
                'jpg': '<i class="fa fa-file-photo-o text-warning"></i>',
                'pdf': '<i class="fa fa-file-pdf-o text-danger"></i>',
                'zip': '<i class="fa fa-file-archive-o text-muted"></i>',
            }
        });
    }
});