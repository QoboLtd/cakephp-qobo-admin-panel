var files;
var uploadFieldName;

$(document).ready(function () {
    'use strict';

    var FileInput = function(url, name, field, existing) {
        this.html = this.staticHtml();
        this.preview = '';
        this.deleteUrl = null;
        if (!existing) {
            this.setInitialPreview(url);
            this.setDeleteUrl(name);
            this.createFromExisting(field);
        } else {
            this.createNew(field);
        }
        field.on('change', function(e) {
            uploadFieldName = $(this).attr('name');
            files = e.target.files;
        });
    };

    /**
     * Static HTML
     *
     * @return object
     */
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

    /**
     * Preview initial preview of the upload field.
     *
     * @param string url
     */
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

    /**
     * Builds the delete URL
     * @param string name of the field.
     */
    FileInput.prototype.setDeleteUrl = function (name) {
        var matches = name.match(/\[(\w+)\]\[(\w+)\]/);
        var fieldName = matches[2];
        this.deleteUrl = window.location.href.replace('edit', 'unlinkUpload') + '/' + fieldName;
    };

    /**
     * Creates new instance of fileinput.
     *
     * @param  jQueryObject inputField to build the library on
     */
    FileInput.prototype.createNew = function(inputField) {
        inputField.fileinput({
            uploadUrl: "http://localhost:8765/crm-re/documents/add.json",
            uploadAsync: true,
            maxFileCount: 5
        });
    };

    /**
     * Creates file input from existings files.
     *
     * @param  jQueryObject inputField to build the library on
     */
    FileInput.prototype.createFromExisting = function(inputField) {
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

    $("input[type=file]").each(function() {
        var url = $(this).data('upload-url');
        var name = $(this).attr('name');
        var existing = false;
        if (typeof url == 'undefined') {
            existing = true;
        }
        var fi = new FileInput(url, name, $(this), existing);
    });
});