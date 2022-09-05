<script>
    tinymce.init({
    selector: 'textarea',
    skin: 'oxide-dark',
    content_css: 'tinymce-5-dark',
    height: 700,
    plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments tinymcespellchecker',
    toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
    toolbar_mode: 'floating',
    tinycomments_mode: 'embedded',
    menubar: 'insert',
    tinycomments_author: 'Author name',
    toolbar: 'undo redo | styles | bold | italic | underline | preview | link | image',
    style_formats: [
            { title: 'Tamanho de texto', items: [
                { title: 'Tópicos', format: 'h2' }
            ]},
            { title: 'Estilos', items: [
                { title: 'Negrito', format: 'bold' },
                { title: 'Itálico', format: 'italic' },
                { title: 'Sublinhado', format: 'underline' },
                { title: 'Riscado', format: 'strikethrough' }
            ]},
            { title: 'Alinhamento', items: [
                { title: 'Centro', format: 'aligncenter' },
            ]}
            ],
    plugins: [
    'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview',
    'searchreplace', 'wordcount', 'media'
    ]
    });
</script>
