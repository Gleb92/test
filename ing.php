<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?
    $info = getimagesize(__DIR__ . './img/11.png');
    $image = $info[2];
    print_r($info);
    echo $image;
    $info1 = imagecreatefromjpeg(__DIR__ . './img/01.jpg');
    var_dump($info1);
    class NewImage
    {
        var $image;
        var $image_type;

        function load($filename)
        {
            $info = getimagesize($filename);
            $this->image_type = $info[2];
            if ($this->image_type == IMAGETYPE_BMP) {
                $this->image = imagecreatefrombmp($filename);
            } elseif ($this->image_type == IMAGETYPE_PNG) {
                $this->image = imagecreatefrompng($filename);
            } elseif ($this->image_type == IMAGETYPE_JPEG) {
                $this->image = imagecreatefromjpeg($filename);
            }
        }
        function save($filename, $image_type = IMAGETYPE_JPEG)
        {
            if ($image_type == IMAGETYPE_BMP) {
                imagebmp($this->image, $filename);
            } elseif ($image_type == IMAGETYPE_PNG) {
                imagepng($this->image, $filename);
            } elseif ($image_type == IMAGETYPE_JPEG) {
                imagejpeg($this->image, $filename);
            }
        }
        function getWidth()
        {
            return imagesx($this->image);
        }
        function getHeight()
        {
            return imagesy($this->image);
        }
        function resize($width, $height)
        {
            $new_image = imagecreatetruecolor($width, $height);

            imagecolortransparent($new_image, imagecolorallocate($new_image, 0, 0, 0));
            imagealphablending($new_image, false);
            imagesavealpha($new_image, true);

            imagecopyresampled($new_image, $this->image, 0, 0, 0, 0, $width, $height, $this->getWidth(), $this->getHeight());
            $this->image = $new_image;
        }
        function resizeToHeight($height)
        {
            $ratio = $height / $this->getHeight();
            $width = $this->getWidth() * $ratio;
            $this->resize($width, $height);
        }
        function resizeToWidth($width)
        {
            $ratio = $width / $this->getWidth();
            $height = $this->getheight() * $ratio;
            $this->resize($width, $height);
        }
        function output($image_type = IMAGETYPE_JPEG, $quality = 80)
        {
            if ($image_type == IMAGETYPE_JPEG) {
                header("Content-type: image/jpeg");
                imagejpeg($this->image, null, $quality);
            } elseif ($image_type == IMAGETYPE_BMP) {
                header("Content-type: image/bmp");
                imagegif($this->image);
            } elseif ($image_type == IMAGETYPE_PNG) {
                header("Content-type: image/png");
                imagepng($this->image);
            }
        }
    }







    $image = new NewImage();
    $image->load(__DIR__ . '/img/img.jpg');
    $image->resize(200, 200);
    $image->save(__DIR__ . './img/0222_new.jpg');
    $image->output();



    ?>






</body>

</html>