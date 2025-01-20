<!-- TinyMCE Component -->
<textarea id="{{ $id }}" name="{{ $name }}" rows="{{ $rows }}" {{ $attributes }}></textarea>

<script src="https://cdn.tiny.cloud/1/79i02k76rfb92e7kv9gooens0z1hiqtv8gelol2u5nus8wz2/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#{{ $id }}',
        plugins: 'advlist autolink link image lists charmap print preview hr anchor pagebreak',
        toolbar: 'undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent | link image',
        menubar: false
    });
</script>
