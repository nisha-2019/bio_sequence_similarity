<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div id="templatemo_content_wrapper1">

	<div id="templatemo_content">
    
        <div class="content_section">
        
        <h2>Bio World</h2>
            
            <div class="product_box margin_r10">
            
	            <h3>Deoxyribonucleic acid</h3>
                <img src="images/image_02.jpg" alt="product" /><a href=".?action=dna">Detail</a> |</div>
            
            <div class="product_box margin_r10">
	            <h3>Ribonucleic acid</h3>
                <img src="images/image_03.jpg" alt="product" /><a href=".?action=rna">Detail</a> |</div>
            
            
            <div class="product_box ">
	            <h3>Protein </h3>
                <img src="images/image_04.jpg" alt="product" /><a href=".?action=prot">Detail</a> |</div>
            
            <div class="cleaner"></div>
            
           <!-- <div class="button_01"><a href="#">View All</a></div> -->
        
        </div> 
        
        <div class="cleaner_h40"></div>
        <div class="content_section">
        
        <h2>Bioinformatics</h2>
        
        	<img src="images/image_05.jpg" alt="image" class="fl_image" />
                    
            <p class="em_text">Bioinformatics has become an important part of many areas of biology. The techniques such as image and signal processing allow extraction of useful results from large amounts of raw data. It also plays a role in the analysis of gene and protein expression and regulation.</p>
          <p><span class="em_text">In the field of genetics and genomics, it aids in sequencing and annotating genomes and their observed mutations.In structural biology, it aids in the  modeling of DNA, RNA, and protein structures as well as molecular interactions.</span></p>
        
        </div>
    

    </div> <!-- end of content -->

    
    
    
    
    
    <div id="templatmeo_sidebar">
    
    	<div class="sidebar_section">
       		
            <h2>Categories</h2>
       	
       		<div class="sidebar_section_content">
                <?php
				if (isset($_SESSION['role'])) 
				{
                      if ($_SESSION['role'] == 'user') 
					  {
                               include 'menu_links_user.php';
								
								
                                
						} 
						elseif ($_SESSION['role'] == 'admin')
						 {
                                   include 'menu_links_admin.php';
								   
                          } 
						  elseif ($_SESSION['role'] == 'researcher')
						   {
                                 include 'menu_links_rs.php';
								 
                             }
                   } 
				   else 
				   {
                            include 'menu_links.php';
                    }
				
				?>    
                
            </div>
             
        </div>
        
        <div class="cleaner_h30"></div>
        <div class="sidebar_section">
        
        	<h2>Login</h2>
            
            <div class="sidebar_section_content">
              
                <label>
                <?php
				if(!isset($_SESSION['username']))
				{
				?>
                <form id="form1" name="form1" method="post" action="includes/dologin.php">
  <table width="239" align="center">
    <tr>
      <td width="77">Username</td>
      <td width="276"><span id="sprytextfield1">
        <label for=""></label>
        <span id="uname">
        <label for="uname3"></label>
        <input name="uname" type="text" id="uname3" size="10" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></span></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><span id="sprytextfield2">
        <label for=""></label>
        <span id="sprypassword1">
        <label for="pass"></label>
        <input name="pass" type="password" id="pass" size="10" />
        <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span></span><span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="login" id="login" value="Login" /></td>
    </tr>
    <tr>
      <td colspan="2">New here?<a href=".?action=user_reg">Click to create an account</a><br /><a href=".?action=forgot">  Forgot Password? </a>  </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
      </form>
      <?php
				}
				?>
      
                <div class="cleaner"></div>
            </div>
			        
        </div>

	</div> <!-- end of sidebar -->
    
  	<div class="cleaner"></div>    

</div>
<script type="text/javascript">
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {validateOn:["change"], minChars:6});
var sprytextfield3 = new Spry.Widget.ValidationTextField("uname", "none", {validateOn:["change"]});
</script>
</body>
</html>