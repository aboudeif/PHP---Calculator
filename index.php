<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <style>body{text-align:center;}button,input{zoom:1.5;}button{width:66px;margin-left:-3px;}input:nth-of-type(n+10){width:66px}#text{width:198px}</style>
    <script>function add(element){document.getElementById('text').value += element.value;}</script>
    
    <form method='POST' id='form'>
    <input type='text' id='text' name='text'>
    
    </form>
    
    <?php 
      for($r=1,$i=37;$i<58;$i++,$r++){
        if($i == 39 || $i == 44|| $i == 48) continue;
        echo "<input type='button' form='form' onclick='add(this);' value='&#$i'>";
        if($r > 11 && !($r%3) || $r == 11) echo "<br>";
      }

      if(isset($_POST['text']))
        echo "<script>document.getElementById('text').value=".$_POST['text']."</script>";
      
    ?> 
    <input type='button' form='form' onclick='add(this);' value='&#48'>
    <button form='form' type='submit' name='submit' id='submit'>=</button>
    <button form='form' type='reset' name='reset' id='reset'>AC</button>
  </body>
</html>