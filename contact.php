
<html>
<head>
<title>Contact Book</title>
<!-- <link rel="stylesheet" href="style.css"> -->
<style>
  <?php include "style.css" ?>

      .column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}


@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  background-color: rgba(240, 136, 136, 0.795);
    transition: 0.3s
}


.container {
  padding: 0 16px;
}


.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
  text-weight:bold;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
  
}
</style>
</head>
<body>
<div id = "main">
  <h1> Contact Book</h1>
  <?php 
  
  include_once 'menu-main.php';
  ?>
  


<div class="column">
  <div class="card">

    <div class="container">
      <br>
      <h2>Tofayel</h2>
      <p class="title">Backend Developer</p>
      <p>I worked to develop backend system of this project</p>
      <p>tofayel15-3053@diu.edu.bd</p>
      <p>ID: 201-15-3053</p>
      <p><button class="button">Contact</button></p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card">

    <div class="container">
      <br>
      <h2>Chonchal Khan</h2>
      <p class="title">Front end Developer</p>
      <p>I worked to develop Front end system of this project</p>
      <p>chonchal15-3071@diu.edu.bd</p>
      <p>ID:201-15-3071</p>
      <p><button class="button">Contact</button></p>
    </div>
  </div>
</div>

<div class="column">
  <div class="card" color ="blue">

    <div class="container">
      <br>
      <h2>Minhajul Hayat Mim</h2>
      <p class="title">Database Designer</p>
      <p>I worked to devevlop Database Schema of this project.</p>
      <p>Minhajul15-3557@diu.edu.bd</p>
      <p>ID:201-15-3557</p>
      <p><button class="button">Contact</button></p>
    </div>
  </div>
</div>
</div>
</body>
</html>
