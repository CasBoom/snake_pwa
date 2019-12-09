<head>
  <link rel="manifest" href="manifest.json">
  <meta name="viewport" content="width=device-width, initial-scale=2.0, maximum-scale=2.0, user-scalable=no" />
</head>
</body>
<canvas id='myCanvas' width='400' height='400'>Outdated browser detected!</canvas>
<script src="main.js"></script>
<style>
body{
  overflow:hidden;
  margin:0;
  background-color:#000000;
}
canvas#myCanvas {
  background-color:#000000;
  margin-left:calc(50% - 205px);
  margin-right:auto;
  border:5px solid #fff;
  display:inline-block;
}
button{
  display:inline;
  width:50%;
  border:0;
  margin:0;
  padding:0;
  background-color:#0000ff;
  height:1000px;
}
#left{
  background-color:#ff0000;
}
</style>
<br>
<button id="right" type="button"></button><!--
--><button id="left" type="button"></button>
</body>
<script>
  if(navigator.serviceWorker){
    navigator.serviceWorker.register('sw.js');
  }