<!-- The fileinput-button span is used to style the file input field as button -->
<span class="btn btn-success btn-sm fileinput-button" id='uploadbutton'>
    <i class="glyphicon glyphicon-plus"></i>
    <span>Select files...</span>
    <!-- The file input field used as target for the file upload widget -->
    <input id="fileupload" type="file" name="files[]">
</span>
<span id="spacing"><br><br></span>
<!-- The global progress bar -->
<div id="progress" class="progress">
    <div class="progress-bar progress-bar-success"></div>
</div>
<!-- The container for the uploaded files -->
<div id="files" class="files">

</div>

<script>
$('#progress').hide();

$(document).ready(function(){
	$('#fileupload').change(function(){
		$('#progress').show();
	});
});
	
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
    var url = '{{ $url }}';
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<img/>').attr({
                    src: file.name,
                    class: 'img-thumbnail'
                }).appendTo('#files');
                $('#progress').remove();
                $('#uploadbutton').remove();
                $('#url').val(file.name);
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>