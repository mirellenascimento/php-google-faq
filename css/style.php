<?php
    header("Content-type: text/css; charset: UTF-8");

    /* Variables */
   $lightColor = "#5f6368";
   $darkColor = "#3c4043";
   $linkColor = "#3367d6";
   $bgColor = "#f5f5f5";
?>


/* General Settings */

body{
  font-family: 'Open Sans', sans-serif;
}

ul{
  padding-inline-start: 0;
  margin-block-start: 0;
  margin-block-end: 0;
}

ul li{
  display: inline-block;
  font-size: 0.9rem;
  font-weight: 600;
  padding-right: 20px;
  padding-bottom: 5px;
}


/* Header */

header{
  width: 90%;
  margin: auto;
  color: <?= $lightColor ?>;
}

header img{
  width: 100px;
}

header .col{
  width: 50%;
  height: 70px;
  float: left;
  display: flex;
  align-items: center
}

header .col:last-child{
  justify-content: flex-end;
}

header .col:last-child img{
  width: 20px;
  padding: 5px;
}

header .col:last-child img:last-child{
  width: 40px;
  padding: 5px;
}

header ul{
  margin-left: 15px;
}

header ul li:last-child{
  color: <?= $linkColor ?>;
  border-bottom: 2px solid <?= $linkColor ?>;
  padding-right: 0;
}

header hr{
  margin: 0;
}


/* Main */

main{
   color: <?= $darkColor ?>;
   width: 60%;
   margin: auto;
}

main h2{
  margin-top: 80px;
}

main p{
  font-size: 0.85rem;
  line-height: 1.4rem;
  padding: 5px 0 5px 0;
}

main a{
    color: <?= $linkColor ?>;
    cursor: pointer;
    text-decoration: none;
}


/* Footer */

footer{
  width: 100vw;
  background: <?= $bgColor ?>;
  color: <?= $lightColor ?>;
  margin-top: 100px;
}

footer .row{
  width: 60%;
  margin: auto;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

footer ul li{
  font-size: 0.65rem;
  font-weight: 400;
  padding-right: 10px;
  padding-bottom: 0;
}
