$(document).ready(function () {
    'use strict';

    var FileInput = function() {
        this.html = this.staticHtml();
        this.preview = '';
        this.deleteUrl = null;
        var that = this;
        $("input[type=file]").each(function(i, v) {
            var url = $(this).data('upload-url');
            var name = $(this).attr('name');
            //continue for the empty ones.
            if (typeof url == 'undefined') {
                return true;
            }
            that.setInitialPreview(url);
            that.setDeleteUrl(name);
            that.exec($(this));
        });
    };

    FileInput.prototype.staticHtml = function() {
        return {
            previewOtherFile: "<div class='file-preview-text'><h2>" +
                "<i class='glyphicon glyphicon-file'></i></h2>" +
                "<a href='%%url%%' target='_blank'>View file</a></div>",
            img: "<img class='img-responsive' src='%%url%%' alt='img-preview' />",
            trash: "<i class=\"glyphicon glyphicon-trash\"></i>",
            icons: {
                docx: '<i class="fa fa-file-word-o text-primary"></i>',
                xlsx: '<i class="fa fa-file-excel-o text-success"></i>',
                pptx: '<i class="fa fa-file-powerpoint-o text-danger"></i>',
                jpg: '<i class="fa fa-file-photo-o text-warning"></i>',
                pdf: '<i class="fa fa-file-pdf-o text-danger"></i>',
                zip: '<i class="fa fa-file-archive-o text-muted"></i>',
            }
        };
    };

    FileInput.prototype.setInitialPreview = function(url) {
        var initialPreview = '';
        if (this.isImg(url)) {
            initialPreview = this.html.img;
        } else {
            initialPreview = this.html.previewOtherFile;
        }
        this.preview = initialPreview.replace('%%url%%', url);
    };

    /**
     * Check for image on the provided URL.
     *
     * @param string
     * @return bool
     */
    FileInput.prototype.isImg = function (url) {
        return (url.match(/\.(jpeg|jpg|gif|png)$/) != null);
    };

    FileInput.prototype.setDeleteUrl = function (name) {
        var matches = name.match(/\[(\w+)\]\[(\w+)\]/);
        var fieldName = matches[2];
        this.deleteUrl = window.location.href.replace('edit', 'unlinkUpload') + '/' + fieldName;
    };

    FileInput.prototype.exec = function(inputField) {
        inputField.fileinput({
            initialPreview: this.preview,
            initialPreviewConfig: [
                {url: this.deleteUrl}
            ],
            removeClass: "btn btn-danger",
            removeLabel: "Delete",
            removeIcon: this.html.trash,
            previewFileIconSettings: this.html.icons
        });
    };

    new FileInput();
});