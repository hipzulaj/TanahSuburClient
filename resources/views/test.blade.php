<!DOCTYPE html>
<html>
   <head>
       <title>Javascript: get selected li from ul</title>
       <meta charset="windows-1252">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
       <!-- <input type="text" id="txt"> -->
       <h1 id="test"></h1>
       <ul id="list">
           <li>JS</li>
           <li>PHP</li>
           <li>Java</li>
           <li>C#</li>
           <li>HTML</li>
           <li>CSS</li>
       </ul>

        <script>
          var items = document.querySelectorAll("#list li");
          for(var i = 0; i < items.length; i++)
          {
              items[i].onclick = function(){
                  document.getElementById("test").innerHTML = this.innerHTML;
              };
          }
        </script>
</body>
</html>
