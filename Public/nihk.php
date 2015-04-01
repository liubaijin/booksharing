<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <title></title>
    <script type="text/javascript" language="javascript">
        function checkPic() {
            var picPath = document.getElementById("picPath").value;
            var type = picPath.substring(picPath.lastIndexOf(".") + 1, picPath.length).toLowerCase();
            if (type != "jpg" && type != "bmp" && type != "gif" && type != "png") {
                alert("请上传正确的图片格式" + "  *:" + type + "  *:" + picPath);
                return false;
            }
            console.log(picPath);   
            return true;
        }
        //图片预览
        function PreviewImage(divImage, upload, width, height) {
            if (checkPic()) {
                try {
                    
                    var imgPath;      //图片路径

                    var Browser_Agent = navigator.userAgent;
                    //判断浏览器的类型
                    if (Browser_Agent.indexOf("Firefox") != -1) {
                        console.log('if');
                        //火狐浏览器

                        //getAsDataURL在Firefox7.0 无法预览本地图片，这里需要修改
                        imgPath = upload.files[0].getAsDataURL();
                        document.getElementById(divImage).innerHTML = "<img id='imgPreview' src='" + imgPath + "' width='" + width + "' height='" + height + "'/>";
                    } else {
                        console.log('else');
                        //IE浏览器 ie9 必须在兼容模式下才能显示预览图片
                        var Preview = document.getElementById(divImage);
                        console.log('else1');
                        console.log('*' + Preview.filters + '*');
                        Preview.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = upload.value;
                        console.log('else2');
                        Preview.style.width = width;
                        Preview.style.height = height;
                    }
                } catch (e) {
                    alert("请上传正确的图片格式");
                }
            }
        }
    </script>
</head>
<body>
    <input type="file" id="picPath" name="doc" onchange="PreviewImage('Preview',this,120,120);" />
    <div id="Preview" style="filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale);">
    </div>
</body>
</html>
