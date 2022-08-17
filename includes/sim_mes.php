<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action=".?action=do_simi_mes">
  <p>You can check the Similarity with the other measures,Choose any one...</p>
  
  <font size="+1" color="#990000">
  <p><span id="spryradio1">
    <label>
      <input type="radio" name="measure" value="dice" id="measure_0" />
      Dice</label>
    <br />
    <br />
    <label>
      <input type="radio" name="measure" value="cosine" id="measure_1" />
      Cosine</label>
    <br />
    <br />
    <label>
      <input type="radio" name="measure" value="jaccard" id="measure_2" />
      Jaccard</label>
    <br />
    <br />
    <label>
      <input type="radio" name="measure" value="overlap" id="measure_3" />
      Overlap</label>
    <br />
  <span class="radioRequiredMsg">Please make a selection.</span></span></p>
  
  </font>
  <p>
    &nbsp;&nbsp;<input type="submit" name="click" id="click" value="Select" />
  </p>
</form>
<script type="text/javascript">
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1", {validateOn:["change"]});
</script>
</body>
</html>