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
            <h1>Editar postagem</h1>
        </div>

        <form method="POST" action="/dashboard/editPostSubmit={{ $post->id }}" enctype='multipart/form-data'>
            @csrf

            <label>Título</label><br>
            <input type="text" id="post_title" required name="post_title" value="{{ $post->title }}" maxlength="100"><br><br>

            <label>Metadescrição</label><br>
            <input type="text" id="post_metadescription" required name="post_metadescription" value="{{ $post->metadescription }}" maxlength="168"><br><br>

            <label>Categoria</label><br>
            <select required name="post_category" style="text-transform: capitalize;" >
                <option value="{{ $post->category }}" selected>{{ $post->category }}</option>
                <option value="livros">Livros</option>
                <option value="cinema">Cinema</option>
            </select><br><br>

            <textarea id="post_text" required name="post_text">{!! $post->text !!}</textarea>

            <input type="submit" value="Editar post">
            </form>
        </div>

        @include('dashboard.layouts.smallLayouts.editor')

</body>
</html>
