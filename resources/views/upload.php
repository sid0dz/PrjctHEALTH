<html>
   <body>
	  
	  <form action='/upload' method="post">
                @csrf
	  <label> Select : </label>
	  <input type="file">
	  <button type="submit">submit </button>
   </body>
</html>