<?php

function uploadImage($request, $object, $fileName) {
    if($request->hasFile($fileName)){

        $file = $request->$fileName;
        $newName = uniqid().".".$file->getClientOriginalExtension();

        $file->move("images", $newName);
        $object->$fileName="images/$newName";
    }
}