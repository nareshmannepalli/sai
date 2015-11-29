<!DOCTYPE html>
<html>
<body>

<h1>JavaScript Can Change Images</h1>

<img id="myImage" onclick="changeImage()" src"C:\Users\Naresh\Desktop\javascript\IMG_20151012_105920.jpg" width="100" height="180">

<p>Click the light bulb to turn on/off the light.</p>

<script>
function changeImage() {
    var image = document.getElementById('myImage');
    if (image.src.match("bulbon")) {
        image.src = "C:\Users\Naresh\Desktop\javascript\IMG_20151012_105920.jpg";
    } else {
        image.src = "C:\Users\Naresh\Desktop\javascript\IMG_20151014_115247.jpg";
    }
}
</script>

</body>
</html>
