/**
 * Created by 康博 on 2015/04/10.
 */
$(function () {

    // 何かの値をPostしたいなら
    var hogeParam = "hoge";

    // おまじない
    Dropzone.autoDiscover = false;

    Dropzone.options.myAwesomeDropzone = {
        paramName: "file",         // input fileの名前
        parallelUploads: 1,            // 1度に何ファイルずつアップロードするか
        acceptedFiles: 'image/*',   // 画像だけアップロードしたい場合
        maxFiles: 30,                      // 1度にアップロード出来るファイルの数
        maxFilesize: 20,                // 1つのファイルの最大サイズ(1=1M)
        dictFileTooBig: "ファイルが大きすぎます。 ({{filesize}}MiB). 最大サイズ: {{maxFilesize}}MiB.",
        dictInvalidFileType: "mp3ファイル以外ですん",
        dictMaxFilesExceeded: "一度にアップロード出来る数を超えています。"
    };
    // urlは実際に画像をアップロードさせるURLパスを入れる
    var myDropzone = new Dropzone("div#my-awesome-dropzone", {url: "my_api_upload_img.php"});
    // 何か値をpostしたい場合
    myDropzone.on("sending", function (file, xhr, formData) {
        formData.append("hoge", hogeParam);
    });
});