<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Mix-music</title>
   <link rel="shortcut icon" href="folder/img/music.svg" type="image/x-icon">
   <link rel="stylesheet" href="css/index.css">
   <link rel="stylesheet" href="css/all.css">
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
      
            <form class="form-inline ">
               <input class="form-control " required minlength="5" type="text" placeholder="login">
               <input class="form-control " required minlength="6" type="password" placeholder="password">
               <button class="btn-sign" type="submit">Sign in</button>
               <a style="color: red;" href="admin.php">ADMIN PANEL</a>
            </form>
         </div>
      </nav>
   </div>
   <div class="container">
      <div class="search-con">
         <h1>Royalty free music downloads</h1>
         <p>Thousands of music and audio tracks, free for commercial and non-commercial use</p>
         <div class="serch-in">
            <span><i class="fal fa-search"></i></span>
            <form action="">
               <input class="serchmus"  type="search" placeholder="Search for artists, songs, genres, moods and more">
            </form>
         </div>
         <div class="janr-con">
            <a href="#!"><div class="jandr-box">Podcast Music</div></a>
            <a href="#!"><div class="jandr-box">Cinematic Music</div></a>
            <a href="#!"><div class="jandr-box">Background Music</div></a>
            <a href="#!"><div class="jandr-box">Vlog Music</div></a>
            <a href="#!"><div class="jandr-box">Music For Videos</div></a>
            <a href="#!"><div class="jandr-box">Film Music</div></a>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="music-box">
         
         <div class="music-img">
            <img src="folder/img/music.svg" alt="massiv[]">
         </div>
         
         <div class="playerm">
            <audio id="player"src="folder/musics/treck1.mp3"></audio>
            <div class="btn-box">
               <button class="volume-down-btn" onclick="document.getElementById('player').volume-=0.1"><i class="far fa-minus"></i></button>
               
               <button class="pause-btn" onclick="document.getElementById('player').pause()"><i class="far fa-pause"></i></button>
               <button class="play-btn" onclick="document.getElementById('player').play()"><i class="far fa-play"></i></button>
               <button class="load-btn" onclick="document.getElementById('player').load()"><i class="far fa-undo-alt"></i></button>
               <button class="volume-up-btn" onclick="document.getElementById('player').volume+=0.1"><i class="far fa-plus"></i></button>
               
               
            </div>
         </div>
         
         <div class="music-text">
            <h1 class="music-name">massiv[]</h1>
            <p class="autor">massiv[]</p>
            <p class="date">massiv[]</p>
         </div>
         
         <div class="music-btn">
            <a href="folder/musics/massiv[]" download>Download <i class="fal fa-download"></i></a>
         </div>

      </div>
      
   </div>
</body>
</html>