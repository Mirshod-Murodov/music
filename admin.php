<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="css/all.css  ">
   <title>ADMIN PANEL</title>
   <link rel="shortcut icon" href="folder/img/music.svg" type="image/x-icon">
</head>
<body>
   <div class="containerr">
      <nav class="navbar ">
         <div class="log">
            <img src="folder/img/music.svg" alt="">
            <a class="log-tex" href="#"> Mix-music</a>
         </div>
   
         <div class="collapse ">
            <ul class="navbar-nav ">
               <li class="nav-item">
                  <a class="nav-a" href="index.php">
                     <i class="fa fa-home"></i>
                     Home
   
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-a" href="#">
                     <i class="fas fa-waveform"></i>
                     Sound Effects
                  </a>
               </li>
               <li class="nav-item">
                  <a class="nav-a" href="#">
                     <i class="fas fa-music-alt"></i>
                     Ringtones
                  </a>
               </li>
               
            </ul>
            <h1 style="color: yellow;">ADMIN PANEL</h1>
            <!-- <form class="form-inline ">
               <input class="form-control " required minlength="5" type="text" placeholder="login">
               <input class="form-control " required minlength="6" type="password" placeholder="password">
               <button class="btn-sign" type="submit">Sign in</button>
               <a style="color: red;" href="admin.html">ADMIN PANEL</a>
            </form> -->
         </div>
      </nav>
   </div>
   <div class="container-admin">
      <form method="post" enctype="multipart/form-data">
         <div class="mt-5">
            <div class="form-group">
               <label for="exampleInputEmail1">Music name</label>
               <input id="exampleInputEmail1" required name="title" type="text" class="form-control"
                  placeholder="Music name">
            </div>
            <div class="form-group">
               <label for="exampleInputPassword1">Music Autor</label>
               <input id="exampleInputEmail1" required name="avtor" type="text" class="form-control" placeholder="Music Autor">
            </div>
            <div class="form-group dat">
               <label for="exampleInputPassword1">Music Added date</label>
               <input id="exampleInputEmail1" required name="vaqt" type="date" class="form-control">
            </div>
            <div class="form-group">
               <label id="exampleInputEmail3" for="exampleInputEmail2"><img src="folder/img/add-music-file-502719.png" alt=""> Upload music file</label>
               <input  id="exampleInputEmail2" required name="musics" type="file" class="form-control">
            
               <label id="exampleInputEmail3" for="exampleInputEmail2"><img src="folder/img/gallery.png" alt=""> Upload image file</label>
               <input  id="exampleInputEmail2" required name="img" type="file" class="form-control">

            </div>
            <button name="press" type="submit" class="btn-primary">Add music to site</button>
         </div>
      </form>
   </div>
</body>
</html>

<?php

if(isset($_POST['press'])){
    $musicTitle = $_POST['title'];
    $musicAutor = $_POST['avtor'];
    $musicDate = $_POST['vaqt'];
    $musicFileName = $_FILES['musics']['name'];
    $imgFileName = $_FILES['img']['name'];

    move_uploaded_file($_FILES['musics']['tmp_name'], "folder/musics/".$_FILES['musics']['name']);
    move_uploaded_file($_FILES['img']['tmp_name'], "folder/img/".$_FILES['img']['name']);

    $allDatas = $musicTitle."**".$musicAutor."**".$musicDate."**".$musicFileName."**".$imgFileName;

    $activeFile = fopen('folder/baza.txt', 'a');
    fwrite($activeFile, $allDatas."\n");

}

?>