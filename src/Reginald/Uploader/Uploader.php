<?php namespace Reginald\Uploader;
 
class Uploader {
 
    public static function upload($input){

        $files = $input;
        $path = \Config::get('uploader::config.path');
        // $results = array();

        foreach ($files as $file) {
            $name = strtolower(str_replace(' ', '-', $file->getClientOriginalName()));
            $file->move(public_path($path), $name);
            $results[] = array(
                'name' => \URL::to('/') . "/" . $path . '/' . $name,
            );
        }
        return \Response::json(array('files' => $results));
    }

    /**
    * $name : HTML Script Name
    * $url  : POST Route URL with JSON
    * $name @param string
    * $url  @param string
    */

    public static function render($name, $url) {
        return \View::make('uploader::' . $name)->withUrl($url);
    }

    public static function script($name) {
        return \View::make('uploader::' . $name . '-script');
    }
 
}