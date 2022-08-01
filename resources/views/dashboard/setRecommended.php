<?php 

function setRecommended($setObjectX, $number){

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
    
    $CTAs->setRecommended($post_id, $number);
    header("Refresh:0; url=/$configurations->rootFolder/view/dashboard/dashboard.php");
  }

}

setRecommended('setRecommended1', 1);
setRecommended('setRecommended2', 2);
setRecommended('setRecommended3', 3);
setRecommended('setRecommended4', 4);
setRecommended('setRecommended5', 5);
?>