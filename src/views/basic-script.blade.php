<!-- CSS START HERE -->
<!-- Generic page styles -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::to('/') }}/packages/reginald/uploader/file/css/style.css">
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="{{ URL::to('/') }}/packages/reginald/uploader/file/css/jquery.fileupload.css">

<!-- JAVASCRIPT START HERE -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script src="{{ URL::to('/') }}/packages/reginald/uploader/file/js/vendor/jquery.ui.widget.js"></script>
<!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
<script src="{{ URL::to('/') }}/packages/reginald/uploader/file/js/jquery.iframe-transport.js"></script>
<!-- The basic File Upload plugin -->
<script src="{{ URL::to('/') }}/packages/reginald/uploader/file/js/jquery.fileupload.js"></script>