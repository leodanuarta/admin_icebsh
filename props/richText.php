<!-- Place the first <script> tag in your HTML's <head> -->
<script src="https://cdn.tiny.cloud/1/ql21260smeoazk5n3zfmndravdskj48c8u8zjy4537cxwqpv/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<!-- leo danuarta -->
<script>
    tinymce.init({
        selector: 'textarea',
        // plugins: 'anchor autolink charmap codesample emoticons link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        plugins: 'anchor autolink charmap codesample emoticons link lists media searchreplace table visualblocks wordcount linkchecker',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link table | addcomment showcomments | spellcheckdialog typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
    });
</script>


<!-- Include stylesheet -->
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.4/dist/quill.snow.css" rel="stylesheet" />


<!-- Include the Quill library -->
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0-rc.4/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<!-- <script>
    $('.quill-editor').each(function(i, el) {
    var el = $(this), id = 'quilleditor-' + i, val = el.val(), editor_height = 200;
    var div = $('<div/>').attr('id', id).css('height', editor_height + 'px').html(val);
    el.addClass('d-none');
    el.parent().append(div);

    var quill = new Quill('#' + id, {
        modules: { toolbar: true },
        theme: 'snow'
    });
    quill.on('text-change', function() {
        el.html(quill.getContents());
    });
});
</script> -->
