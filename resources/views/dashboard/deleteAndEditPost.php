<?php 

require_once "{$configurations->path()}/model/editPost.php";
$editPost = new editPost;

if(isset($_GET['editPost'])){
    $post_id = $_GET['editPost'];
    header("Refresh:0; url=/$configurations->rootFolder/view/editPost.php?id=$post_id");
  }

  if(isset($_GET['deletePost'])){
    $post_id = $_GET['deletePost'];
    $postTitle = $editPost->getPostTitle($post_id);

    echo "
      <script>
        swal({
          title: 'Realmente deseja apagar a postagem: `$postTitle`?',
          icon: 'warning',
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            setTimeout(function() {
              window.location.href = '?confirmDelete=$post_id';
            }, 1000);
            swal('Prontinho! A postagem foi excluída com sucesso!', {
              icon: 'success',
            });
          }
        });
    </script>";
  }
  
  if(isset($_GET['confirmDelete'])){
    $post_id = $_GET['confirmDelete'];
    $editPost->deletePost($post_id);
    header("Refresh:0; url=/$configurations->rootFolder/view/dashboard/dashboard.php");
  }
?>