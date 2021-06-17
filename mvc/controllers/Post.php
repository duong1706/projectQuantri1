<?php 
class Post extends Controller {
    private $postModel;
    function __construct(){
        $this->model('PostModel');
        $this->postModel = new PostModel();
    }

    function addPost($id)
    {
       
     
       //echo $_SESSION['user'];
      if(isset($_POST["content"]))
      {
        $flag = $this->postModel->add($_POST["content"],$id,$_SESSION['user']['name']);
      }
       
      
     
    }
    // function getPosts()
    // {
    //  $posts = $this->postModel->get();
    //  print_r($posts);
    // //  $this->view('detail/index',$posts);
    // }
}

?>