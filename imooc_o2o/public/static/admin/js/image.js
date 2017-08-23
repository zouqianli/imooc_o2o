$(function() {
    // 上传缩略图
    $("#file_upload").uploadify({
        'swf'             : SCOPE.uploadify_swf,
        'uploader'        : SCOPE.image_upload,
        'buttonText'      : '图片上传',
        'fileTypeDesc'      : 'Image files',
        'fileObjName'       : 'file',
        'fileTypeExts'      : '*.jpg; *.png; *.gif',
        'onUploadSuccess' : function(file, data, response) {
            // alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
            console.log(file); // file 信息
            console.log(data); // 返回的数据:图片地址 字符串
            console.log(response); // bool
            if(response)
            {
                var obj = JSON.parse(data);
                $("#upload_org_code_img").attr("src", obj.data);
                $("#file_upload_image").attr("value", obj.data);
                $("#upload_org_code_img").show();
            }
        }
    });
    // 同理 上传营业执照
    $("#file_upload_other").uploadify({
        'swf'             : SCOPE.uploadify_swf,
        'uploader'        : SCOPE.image_upload,
        'buttonText'      : '图片上传',
        'fileTypeDesc'      : 'Image files',
        'fileObjName'       : 'file',
        'fileTypeExts'      : '*.jpg; *.png; *.gif',
        'onUploadSuccess' : function(file, data, response) {
            // alert('The file ' + file.name + ' was successfully uploaded with a response of ' + response + ':' + data);
            console.log(file); // file 信息
            console.log(data); // 返回的数据:图片地址 字符串
            console.log(response); // bool
            if(response)
            {
                var obj = JSON.parse(data);
                $("#upload_org_code_img_other").attr("src", obj.data);
                $("#file_upload_image_other").attr("value", obj.data);
                $("#upload_org_code_img_other").show();
            }
        }
    });
});
