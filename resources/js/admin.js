$(function () {
    $('#img_change').click(function () {
        let imageEdit = $('.image_edit');
        if (imageEdit.children('#image').length === 0) {
            imageEdit.append('<input type="file" id="image" name="image">');
        }

        $('#image').change(function () {
            let reader = new FileReader();
            reader.addEventListener('load', function (e) {
                $('#img_change img').attr('src', e.target.result);
            });

            reader.readAsDataURL($('#image').prop('files')[0]);
        });
    });
});