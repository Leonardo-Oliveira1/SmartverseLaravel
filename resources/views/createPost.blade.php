<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar postagem</title>
    <link rel="icon" href="data:image/svg+xml,<svg
    xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22>
    <text y=%22.9em%22 font-size=%2290%22>🚀</text></svg>">
    <script src="https://cdn.tiny.cloud/1/tdeloi1axklkavgy602lg8cbro0u35iug31aqa4snkvl0iwt/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <link rel="stylesheet" href="{{ asset('css/forms/form_launch_product.css') }}">
</head>
<body>

    <div class="container">
        <div class="message">
            <h1>Criar postagem</h1>
        </div>

        <form method="POST" action="/dashboard/submit" enctype='multipart/form-data'>
            @csrf

            <label>Título</label><br>
            <input type="text" id="post_title" required name="post_title" maxlength="100"><br><br>

            <label>Metadescrição</label><br>
            <input type="text" id="post_metadescription" required name="post_metadescription" maxlength="168"><br><br>

            <label>Categoria</label><br>
            <select required name="post_category">
                    <option value="Livros" selected>Livros</option>
                    <option value="Series">Séries</option>
                    <option value="Filmes">Filmes</option>
                    <option value="Outros">Outros</option>
                </select><br><br>

            <label>Imagem do post</label><br>
            <input type="file" style="padding-top: 20px; padding-bottom: 20px;" id="post_banner" required name="post_banner"><br><br>

            <textarea id="post_text" required name="post_text">Digite o conteúdo da página aqui :)</textarea>

            <input type="submit" value="Publicar post">
            </form>
        </div>



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

    <div style="color: white">
        <h1>title: {{ $data[0] }}</h1>
        <h1>metadescription: {{ $data[1] }}</h1>
        <h1>category: {{ $data[2] }}</h1>
        <h1>text: {{ $data[3] }}</h1>
        <h1>slug: {{ $data[4] }}</h1>
        <h1>author_id: {{ $data[5] }}</h1>
        <h1>author: {{ $data[6] }}</h1>
        <h1>thumb: {{ $data[7] }}</h1>
    </div>

</body>
</html>
