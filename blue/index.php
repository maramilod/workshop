<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
    </head> 
    <body>
        <div class="container">
            <div >
                <h1 class = "header_text">¿ هل ترغب في حضور ورشة العمل</h1>
                
                <br>
                <br>
            </div>
            <div class="gif_container">
            
		<div class="eyes">
			<div class="eye"> </div>
			<div class="eye"> </div>
		
	</div>

	<script type="text/javascript">
		
		document.querySelector('body').addEventListener('mousemove',eyeball);
		function eyeball(){
			var eye = document.querySelectorAll('.eye');
			eye.forEach(function(eye){
				let x = (eye.getBoundingClientRect().left) + (eye.clientWidth / 2);
				let y = (eye.getBoundingClientRect().top) + (eye.clientWidth / 2);
				let radian = Math.atan2(event.pageX - x, event.pageY - y);
				let rot = (radian * (180 / Math.PI) * -1) + 270;
				eye.style.transform = "rotate("+ rot +"deg)";
			})
		}

	</script>
   
            </div>
          <div class = "buttons">
                <form action="yes.php" method="post">  
                <button class="btn" type="submit" name="yes" value="2" id="yesButton" onclick="nextPage()">بطبع</button>
                </form>

                <button class="btn" id="noButton" onmouseover="moveButton()" onclick="moveButton()">ربما</button>

                <script>
                   
                    
                    function moveButton() {
                        var x = Math.random() * (window.innerWidth - document.getElementById('noButton').offsetWidth) - 125;
                        var y = Math.random() * (window.innerHeight - document.getElementById('noButton').offsetHeight) - 48;
                        document.getElementById('noButton').style.left = `${x}px`;
                        document.getElementById('noButton').style.top = `${y}px`;
                    }
                </script> 
            </div>
        </div>




      
    </body> 
</html>