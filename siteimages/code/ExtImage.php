<?php

/**
 * In the Template:
 * 
 * $Image.SetWidth(80) // returns a image 80px wide, ratio kept the same
 * $Image.SetHeight(80) // returns a image 80px tall, ration kept the same
 * $Image.SetSize(80,80) // returns a 80x80px padded image
 * $Image.SetRatioSize(80,80) // Returns an image scaled proportional, with its greatest diameter scaled to 80px
 * $Image.CroppedImage(80,80) // Returns an 80x80 image cropped from the center.
 * $Image.PaddedImage(80, 80) // Returns an 80x80 image. Unused space is padded white. No crop. No stretching
 * $Image.Width // returns width of image
 * $Image.Height // returns height of image
 * $Image.Orientation // returns Orientation
 * $Image.Filename // returns filename
 * $Image.URL // returns filename
 */

class ExtImage extends Image
{
    public function generateRotateClockwise(GD $gd) {
        return $gd->rotate(90);
    }
     
    public function generateRotateCounterClockwise(GD $gd) {
        return $gd->rotate(270);
    }
     
    public function clearResampledImages() {
        $files = glob(Director::baseFolder().'/'.$this->Parent()->Filename."_resampled/*-$this->Name");
        foreach($files as $file) {unlink($file);}
    }
     
    public function Landscape() {
        return $this->getWidth() > $this->getHeight();
    }
     
    public function Portrait() {
        return $this->getWidth() < $this->getHeight();
    }
     
    public function generatePaddedImageByWidth(GD $gd,$width=600,$color="fff") {
        return $gd->paddedResize($width, round($gd->getHeight()/($gd->getWidth()/$width),0),$color);
    }
     
    public function Exif() {
        //http://www.v-nessa.net/2010/08/02/using-php-to-extract-image-exif-data
        $image = $this->AbsoluteURL;
        $d=new ArrayList(); 
        $exif = exif_read_data($image, 0, true);
        foreach ($exif as $key => $section) {
            $a=new ArrayList(); 
            foreach ($section as $name => $val)
                $a->push(new ArrayData(array("Title"=>$name,"Content"=>$val)));
            $d->push(new ArrayData(array("Title"=>strtolower($key),"Content"=>$a)));
        }
        return $d;
    }
}