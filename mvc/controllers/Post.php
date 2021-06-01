<?php 
class Post extends Controller {
    private $postModel;
    function __construct(){
        $this->model('PostModel');
        $this->postModel = new PostModel();
    }

    function addPost()
    {
       
       //echo $_SESSION['user'];
      if(isset($_POST["content"]))
      {
     
        $flag = $this->postModel->add($_POST["content"],$_SESSION['user']['id'],$_SESSION['user']['name']);
      }
       
      
     
    }
}

?>