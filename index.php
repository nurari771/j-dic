<!DOCTYPE html><html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
<meta charset="utf-8" />
<link href="style-763c0a89d7c8b9e39b28.css" rel="stylesheet" />
<script type="text/javascript" src="jquery-1.11.2.min.js"></script>

        <style>
		table, th, td {
  border-collapse: collapse;
  border: 1px solid #ccc;
  line-height: 1.5;
}

table.type06 th {
  width: 150px;
  padding: 10px;
  font-weight: bold;
  vertical-align: top;
}
table.type06 td {
  width: 350px;
  padding: 10px;
  vertical-align: top;
 }

tr:nth-child(even) {
  background: #d9d9d9;
 }
		</style>
</head>

<body>
<div id="App">


	<!-- Header Menu-->
  <header id="Header">
    <div id="HeaderWrap"><a id="Logo" href="#"><svg class="icon" role="img" alt="" width="1em" height="1em" viewBox="0 0 50 50">
      <use xlink:href="#icon-tangorin"></use>
      </svg>

      <ruby class="LogoLabel">
      ni<rt>日</rt>
        hon<rt>本</rt>
        go<rt>語</rt>
      </ruby>
      </a>

      <nav id="HeaderNav"><a class="HeaderMenu-link" href="#">
      Dictionary</a> <a class="HeaderMenu-link" href="#">Vocabulary</a></nav>


      <div id="UserMenu">
        <div id="LogInBtnWrap">
          <button type="button" id="LogInBtn" class="btn btn-link "><svg class="icon" role="img" alt="" width="1em" height="1em" viewBox="0 0 50 50">
            <use xlink:href="#icon-sign-in"></use>
            </svg><span class="label">Log in</span></button>
        </div>
        <a id="SignUpLink" class="" href="signup.html">Sign up</a><span class="spinner spinner-hidden"></span></div>


      <div id="SettingsMenu">
        <button type="button" id="SettingsBtn" class="btn "><span class="label">TH</span></button>
      </div>
    </div>
  </header> <!-- End Header Menu -->


  <main>
    <header id="DictHeader">
      <div id="DictNavWrap">
        <nav id="DictNav"><a class="dict-nav-link" data-dict="words" href="words.html">Words</a>
        <a class="dict-nav-link" data-dict="kanji" href="kanji.html">Kanji</a></nav>

      </div>

          <tr> <td width="561">
          <div class="container">
          <div class="row">
          <div class="col-md-12">



      <form id="DictForm" name="frmMain">

        <input type="text" name="kanji" id="DictFormInput"  placeholder="Search with Kanji and/or Romanji" lang="" autoComplete="off" autoCapitalize="none" spellcheck="false" autoCorrect="off" value=""/>


        <button id="DictFormSubmit" type="button" class="btn btn-primary" id="DictFormSubmit" OnClick="JavaScript:doCallAjax(document.getElementById('DictFormInput').value,$('input:radio[name=cond]:checked').val(),'1');">
          <svg class="icon" aria-label="Search" role="img" alt="" width="1em" height="1em" viewBox="0 0 50 50">
          <use xlink:href="#icon-search"></use>
          </svg></button>

                </div>
              </div>
        </td>

          </tr>


          <tr>
            <td><table width="592" border="0">
              <tr>
                <td width="72"><div align="center">Option:</div></td>

                <td><div align="center"><INPUT TYPE="radio" name="cond" id="cond" value="3" required="required" checked>ค้นหาจากระหว่างคำ</div></td>

                <td><div align="center"><INPUT TYPE="radio" name="cond" id="cond" value="1" required="required">ค้นหาจากคำขึ้นต้น</div></td>

                <td><div align="center"><INPUT TYPE="radio" name="cond" id="cond" value="2" required="required">ค้นหาจากคำลงท้าย</div></td>

                <td><div align="center"><INPUT TYPE="radio" name="cond" id="cond" value="4" required="required">ค้นหาเฉพาะตรงตัว</div></td>

              </tr>
                  </form>
            </table></td>

          </tr>
          <tr>


            <td width="561"><div class="container">
              <div id="loading"></div>
              <div class="row" id="list-data" style="margin-top: 10px;">
<span id="mySpan"></span>
        </div>
            </div></td>

          </tr>


    </header>
    <section class="dict-intro">
      <h1 id="HomeTitle">
        <ruby>日
          <rt>に</rt>
          本
          <rt>ほん</rt>
          語
          <rt>ご</rt>
          辞
          <rt>じ</rt>
          書
          <rt>しょ</rt>

        </ruby>
      </h1>
      <p>This website is an online Japanese-Thai dictionary with example sentences and many features to help you learn the Japanese language.</p>
      <p>Search with Thai and/or Japanese, katakana, kanji, or rōmaji.</p>
      <p>&nbsp;</p>
</section>
            <section class="dict-intro"></p>
</section>
  </main>


  	<!-- Footer-->
  <footer id="Footer"><span>Japanese Dictionary</span> <span><a title="Japanese Dictionary" href="#">About</a> · <a href="#">Privacy Policy</a></span>  </footer>
</div>  	<!-- End Footer-->




<svg version="1.1" id="SVGSprite" width="0px" height="0px" style="display:none;">
<symbol viewBox="-1 -1 16 16" id="icon-search">
  <title>search</title>
  <path d="M14.7 13.3l-3.81-3.83A5.93 5.93 0 0 0 12 6c0-3.31-2.69-6-6-6S0 2.69 0 6s2.69 6 6 6c1.3 0 2.48-.41 3.47-1.11l3.83 3.81c.19.2.45.3.7.3.25 0 .52-.09.7-.3a.996.996 0 0 0 0-1.41v.01zM6 10.7c-2.59 0-4.7-2.11-4.7-4.7 0-2.59 2.11-4.7 4.7-4.7 2.59 0 4.7 2.11 4.7 4.7 0 2.59-2.11 4.7-4.7 4.7z"/>
</symbol>
</svg>

</body>

</html>
<script language="JavaScript">
	   var HttPRequest = false;
	   function doCallAjax(Search,Cond,Page) {
		   if(Search==""){
document.getElementById("mySpan").innerHTML = "<table class='table table-bordered'><tr><td align='center'>please input kanji, hiragana, katakana, romanji or thaiwords</td></tr></table>";
		   }else{
		  HttPRequest = false;
		  if (window.XMLHttpRequest) { // Mozilla, Safari,...
			 HttPRequest = new XMLHttpRequest();
			 if (HttPRequest.overrideMimeType) {
				HttPRequest.overrideMimeType('text/html');
			 }
		  } else if (window.ActiveXObject) { // IE
			 try {
				HttPRequest = new ActiveXObject("Msxml2.XMLHTTP");
			 } catch (e) {
				try {
				   HttPRequest = new ActiveXObject("Microsoft.XMLHTTP");
				} catch (e) {}
			 }
		  }

		  if (!HttPRequest) {
			 alert('Cannot create XMLHTTP instance');
			 return false;
		  }

			var url = 'search.php';
		  var pmeters = "mySearch=" + Search + "&myCond=" + Cond + "&myPage=" + Page;
			HttPRequest.open('POST',url,true);
			HttPRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			HttPRequest.setRequestHeader("Content-length", pmeters.length);
			HttPRequest.setRequestHeader("Connection", "close");
			HttPRequest.send(pmeters);
			HttPRequest.onreadystatechange = function()
			{

				 if(HttPRequest.readyState == 3)  // Loading Request
				  {
				             $("#loading").show();
				   //document.getElementById("mySpan").innerHTML = "Now is Loading...";
				  }

				 if(HttPRequest.readyState == 4) // Return Request
				  {
                            $("#loading").hide();
				   document.getElementById("mySpan").innerHTML = HttPRequest.responseText;
				  }

			}

	   }
	   }
                $("#DictForm").on("keyup keypress",function(e){
                   var code = e.keycode || e.which;
                   if(code==13){
                       $("#DictFormSubmit").click();
                       return false;
                   }
                });

	</script>s
