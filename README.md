# Image Uploader

### Description

Laravel 4 Easy Image Uploader based on Blueimp ( [jQuery File Upload Plugin](https://github.com/blueimp/jQuery-File-Upload) )

### Installation

	TODO
### Usage

First Include JQuery & Bootstrap CSS File.

	Uploader::script('basic')


Basic : 'basic'
Basic Plus : 'bplus'

Render Upload Button in where you want to be

	Uploader::render('basic', 'post-upload-url')

#### HTML File Complete

	<!DOCTYPE html>
	<html>
	<head>
		<title>Test</title>
		{{ Uploader::script('basic') }}
	</head>
	<body>
	
		{{ Uploader::render('basic', 'asdf') }}
	</body>
	</html>
	
Then Create two route

#### GET Route

	Route::get('test', function(){
		return View::make('test');
	});

#### POST Route

	Route::post('test', function(){
		return Uploader::upload(Input::file('files'));
	});
	
