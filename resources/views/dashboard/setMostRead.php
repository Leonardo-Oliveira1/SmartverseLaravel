<?php 


function setMostRead($setObjectX, $number){

  $path = $_SERVER['DOCUMENT_ROOT'];
  
  require_once "$path/SMARTverse/controller/configurations.php";
  $configurations = new Configurations;

  require_once "{$configurations->path()}/model/editPost.php";
  $editPost = new editPost;

  require_once "{$configurations->path()}/model/CTAs.php";
  $CTAs = new CTAs;

  if(isset($_GET[$setObjectX])){
    $post_id = $_GET[$setObjectX];
    $postTitle = $editPost->getPostTitle($post_id);

    echo "
      <script>
        swal({
          title: 'Realmente deseja destacar a postagem: `$postTitle`?',
          icon: 'warning',
          buttons: true,
          dangerMode: false,
        })
        .then((willDelete) => {
          if (willDelete) {
            setTimeout(function() {
              window.location.href = '?confirm$setObjectX=$post_id';
            }, 1000);
            swal('Prontinho! A postagem foi destacada com sucesso!', {
              icon: 'success',
            });
          }
        });
    </script>";
  }

  if(isset($_GET['confirm'.$setObjectX])){
    $post_id = $_GET['confirm'.$setObjectX];

    $value = $setObjectX;
    
    $CTAs->setMostRead($post_id, $number);
    header("Refresh:0; url=/$configurations->rootFolder/view/dashboard/dashboard.php");
  }

}

setMostRead('setMostRead1', 1);
setMostRead('setMostRead2', 2);
setMostRead('setMostRead3', 3);
setMostRead('setMostRead4', 4);
setMostRead('setMostRead5', 5);
?>