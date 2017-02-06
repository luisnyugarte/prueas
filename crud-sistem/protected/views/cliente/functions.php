<?php
class Functions extends CApplicationComponent {
 
 
    public function returnSomething($filePath,$image){
 
        $path=Yii::app()->getBaseUrl(true);
        $folder=$path. $filePath.'/images/'.$image;
        if ($image!='' && file_exists(YiiBase::getPathOfAlias('webroot') . $filePath)) {
            $filePath= "<img src='".$folder."'>";
        } else {
             $filePath="<img height='150px' width='150px' src='http://www.pa-legion.com/wp-content/themes/streamline_20/images/NoPhotoAvailable.jpg'>";
 
        }
        return $filePath;
 
    }
}
?>