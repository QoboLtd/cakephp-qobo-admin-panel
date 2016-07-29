$(document).ready(function () {
    'use strict';

    var FileInput = function(files, name, field) {
        this.html = this.staticHtml();
        this.options = {};
        if (typeof files === 'object') {
            this.initialPreview(files);
            this.createFromExisting(field);
        } else {
            this.createNew(field);
        }
        field.on('change', function(e) {
            //Trigger the updateFiles Event and pass all the collected uploads
            $(document).trigger('updateFiles', [e.target.files, $(this).attr('name')]);
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
     * Plugin's default options.
     *
     * @return object Plugin's default options
     */
    FileInput.prototype.defaults = function() {
        return {
            showUpload: false,
            maxFileCount: 30,
            maxFileSize: 2000,
        };
    };

    FileInput.prototype.initialConfigPreview = function(files) {
        var config = {};
        this.options.initialPreviewConfig = new Array;
        for (var i in files) {
            var file = files[i];
            var ipcOptions = $.extend({}, config, {key: i});
            this.options.initialPreviewConfig.push(ipcOptions);
        }
    };

    FileInput.prototype.initialPreview = function(files) {
        this.options.initialPreview = new Array;
        for (var i in files) {
            var file = files[i];
            this.options.initialPreview.push(file.path);
        }
    };

    /**
     * Creates new instance of fileinput.
     *
     * @param  jQueryObject inputField to build the library on
     */
    FileInput.prototype.createNew = function(inputField) {
        var createNew = {};
        var options = $.extend({}, this.defaults(), createNew);
        inputField.fileinput(options);
    };

    /**
     * Creates file input from existings files.
     *
     * @param  jQueryObject inputField to build the library on
     */
    FileInput.prototype.createFromExisting = function(inputField, paths) {
        var existing = {
            initialPreview: this.options.initialPreview,
            initialPreviewAsData: true,
            //Keep existing images on adding new images.
            overwriteInitial: false,
        };
        var options = $.extend({}, this.defaults(), existing);
        inputField.fileinput(options);
    };


    $("input[type=file]").each(function() {
        var files = $(this).data('files');
        var name = $(this).attr('name');
        var fi = new FileInput(files, name, $(this));
    });
});
