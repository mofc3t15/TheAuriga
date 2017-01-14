<html>
 <head>
	<title>The Auriga</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&effect=brick-sign">
	<link rel="stylesheet" href="http://w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="http://w3schools.com/lib/w3-theme-black.css">
 </head>

<style>
.w3-lobster {
    font-family: "Lobster", Sans-serif;
}
</style>

<body class="w3-theme-l1">




<div class="w3-theme-d1 w3-container w3-padding-32 w3-margin-bottom w3-center">
   <div class="w3-row-padding"> 
   <div id="w3-third">
  <h1 class="w3-jumbo w3-text-white w3-lobster font-effect-brick-sign">The Auriga</h1>
  <p>So glad to have you Liya! </p>
  
      </div>
      <form>
      <div class="w3-third">enter security code:</div>
      <div class="w3-third"><input class="w3-input w3-input w3-black" id="sec" type="text"></div>
      <div><button class="w3-btn-floating" onclick="auth(); return false;" >#</button></div>
      </form>
  </div>


</div>
<div id="store" class="w3-container  w3-center w3-margin-bottom w3-lobster font-effect-brick-sign">
  <h3 class="w3-lobster font-effect-brick-sign">This is all we've got for now...</h3><br>
  <div class="w3-row-padding w3-large">
    
    <div class="w3-third">
    	
    	<div id="w3-container">
    		
<form class="w3-container w3-card-4 w3-theme-l4" action="http://www.google.com" method="GET">

  <p>      
    <input name="q" class="w3-input w3-border w3-theme-l2" type="text"></p>
    <input type="submit" value="Search" class="w3-btn" />
</form>
<br>

    		
    		
    	</div>
    	
    </div>
    
    <div class="w3-third">
      <div style="width:80%;" onclick="javascript:document.location.href='../mail/mail.php';" class="w3-hover-dark-grey w3-card-2 w3-theme-d2 w3-padding w3-btn w3-round w3-ripple w3-theme-l1 w3-round">
        <p>Mail</p>
      </div>
      <br><br>
      <div style="width:80%;" onclick="javascript:document.location.href='../portfolio/index.html';" class="w3-hover-dark-grey w3-card-2 w3-theme-d2 w3-padding w3-btn w3-round w3-ripple w3-theme-l1 w3-round">
        <p>About</p>
      </div><br><br>
      <div style="width:80%;" onclick="javascript:document.location.href='http://ide.theauri.ga';" class="w3-hover-dark-grey w3-card-2 w3-theme-d2 w3-padding w3-btn w3-round w3-ripple w3-theme-l1 w3-round">
        <p>CODIAD IDE.</p>
      </div><br><br>
    
    </div>
    <div class="w3-third">
      <div style="width:80%;" onclick="javascript:document.location.href='http://facebook.com';" class="w3-hover-dark-grey w3-card-2 w3-theme-d2 w3-padding w3-btn w3-round w3-ripple w3-theme-l1 w3-round">
        <p>Facebook</p>
      </div><br><br>
      <div style="width:80%;" onclick="javascript:document.location.href='index.php';" class="w3-hover-dark-grey w3-card-2 w3-theme-d2 w3-padding w3-btn w3-round w3-ripple w3-theme-l1 w3-round">
        <p>Mail</p>
        
      </div><br><br>
      <div style="width:80%;" onclick="javascript:document.location.href='index.php';" class="w3-hover-dark-grey w3-card-2 w3-theme-d2 w3-padding w3-btn w3-round w3-ripple w3-theme-l1">
        <p>Mail</p>
      </div>
    
    
    </div>
  
  </div>
  <br>
</div>



<script>

    var st = document.getElementById("store");
  
    
    st.style="display:none";
      
    function auth() {
        
    
      
        var se = document.getElementById("sec").value;
      if ( se == 'arm') { st.style="display:none"; }
      if(se == 'unarm') { st.style="display:block"; }
      return false;  
        
    }
    
    
</script>

 
</body>

</html>