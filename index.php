<?php
session_start();
include('database/dbconnect.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="shortcut icon" href="proimg/icon111.jpeg"/>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bioinformatics Database Mining Tool</title>
<meta name="keywords" content="Greeny Template, free website templates, CSS, HTML" />
<meta name="description" content="Greeny Template - Download free website templates from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link href="jquery/css/south-street/jquery-ui-1.10.4.custom.css" rel="stylesheet" type="text/css" />

<script src="jquery/js/jquery-1.6.2.min.js"></script>
<script src="jquery/js/jquery-ui-1.8.16.custom.min.js"></script>

    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
    <link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
  

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}


function goBack() 
{
    window.history.back();
	
}

function load()
{
	//document.writeln("Hai");
     $("#status").load("includes/user_exist.php", $("#user").serialize());
}

function val()
{
	
	
}


//jquery
 
$(function(){
	
	$("#model_dialog_insert").dialog( 
        {
            autoOpen: false,
            show: "blind",
            hide: "explode",
            modal: true,
            buttons: {
                "Ok": function() {
                    $( this ).dialog( "close" );
                }
            }
        }
		
    );
	
	$(".dt").datepicker({ changeYear: true , changeMonth: true ,dateFormat: 'yy-mm-dd' });
	$(":submit").button();
	$(":reset").button();
	//$(":file").button();
	
	$(".anchor_button").button({icons:{primary:'ui-icon-newwin'},text:false});
	$(".anchor_button").css({'padding-top':'1px','padding-bottom':'1px','padding-left':'1px','padding-right':'1px','height':'15px','width':'20px'});
	
	 $(".new_button").button({icons:{primary:'ui-icon-carat-1-e'},text:false});
     $(".new_button").css({'padding-top':'4px','padding-bottom':'4px','padding-left':'2px','padding-right':'2px'});	
	 
	 
	  var availableTags = [
	<?php
	$sql = "SELECT `oid`,`name`  FROM `organism` WHERE 1";
	$resset = mysql_query($sql, $con);
	while ($res = mysql_fetch_array($resset)) {
    ?>
            			
                    "<?php echo "$res[oid]-$res[name]" ?>",
            			
    <?php
}
?>
			
        ];
        $( ".org" ).autocomplete({
            source: availableTags
        });
		
		
		 var tags = [
	<?php
	$sql1 = "SELECT *  FROM `protein` WHERE type like 'Protein' ";
	$resset1 = mysql_query($sql1, $con);
	while ($res1 = mysql_fetch_array($resset1)) {
    ?>
            			
                    "<?php echo "$res1[pid]-$res1[pname]" ?>",
            			
    <?php
}
?>
			
        ];
        $( ".sq" ).autocomplete({
            source: tags
        });
		
	
});


//end of jquery

</script>



</head>
<body>
<div id="templatemo_header_wrapper">

	<div id="templatemo_header">
    
	  <div id="site_title">
        <h1>Bioinformatics</h1><br />
           <center> <h1>Database</h1></center>
        </div>
        
       
      <div id="templatemo_menu">
         <?php
		   if (isset($_SESSION['role'])) {
                      if ($_SESSION['role'] == 'user') 
					  {
                                include 'user_menu.php';
								
								
                                
						} elseif ($_SESSION['role'] == 'admin') {
                                   include 'admin_ menu.php';
                                } elseif ($_SESSION['role'] == 'researcher') {
                                    include 'rc.php';
                                }
                            } else {
                                include 'menu.php';
                            }
		   ?>	
        </div> <!-- end of templatemo_menu -->
        <div class="cleaner"></div>
    </div> <!-- end of templatemo_header -->

</div> 
<!-- end of templatemo_header_wrapper -->

<div id="templatemo_content_wrapper">

<div id=l1>
<?php
	if(isset($_SESSION['username']))
	{
	echo "<b>Welcome &nbsp".$_SESSION['username']."</b>";
	?>
   <p align="right"> <a href=".?action=logout">Logout</a></p>
    <?php
	}
?>
</div>
<div id="templatemo_content">



 
    
      <?php
       
                        if (isset($_GET['action']))
                            $action = $_GET['action'];
                        else {
                            $action = "home";
                        }
                       if ($action == 'home')
                            include 'includes/home.php';	
						else if ($action == 'dna')
                           include 'includes/dna.php';
						   else if ($action == 'rna')
						   {
                           	include 'includes/rna.php';
						   }
						   else if ($action == 'prot')
						   {
                           	include 'includes/prot.php';
						   }
						   else if ($action == 'pst')
						   {
                           	include 'includes/prot_struc.php';
						   }
						   else if ($action == 'about')
						   {
                           	include 'includes/about.php';
						  }
						  else if ($action == 'rc')
						   {
                           	include 'includes/rc.php';
						  }
						  else if ($action == 'app')
						   {
                           	include 'includes/app.php';
						  }
						  else if ($action == 'sr')
						   {
                           	include 'includes/serch_term.php';
						  }
						  else if ($action == 'seq_ana')
						   {
                           	include 'includes/seq_ana.php';
						  }
						   else if ($action == 'hist')
						   {
                           	include 'includes/hist.php';
						  }
						  
						  else if ($action == 'seq_alg')
						  {
                           	include 'includes/seq_alg.php';
						  }
						  else if ($action == 'forgot')
						  {
                           	include 'includes/forgot.php';
						  }
						  else if ($action == 'qst')
						  {
                           	include 'includes/qst.php';
						  }
						  else if ($action == 'amino')
						  {
                           	include 'includes/amino.php';
						  }
						  else if ($action == 'dna_seq')
						  {
                           	include 'includes/dna_seq.php';
						  }
						  else if ($action == 'rna_seq')
						  {
                           	include 'includes/rna_seq.php';
						  }
						  else if ($action == 'Prot_syn')
						  {
                           	include 'includes/Prot_syn.php';
						  }
						  else if ($action == 'prot_id')
						  {
                           	include 'includes/prot_id.php';
						  }
						  else if ($action == 'contact')
						  {
                           	include 'includes/contact.php';
						  }
						  else if ($action == '')
						  {
                           	include 'includes/';
						  }
						 else if($action == 'user_reg')
                           include 'includes/reg.php';
						  else if ($action == 'logout') 
						  {
                            session_unset();
                            echo '<meta http-equiv="Refresh" content="0;URL=." />';
						  }
						  
						  
	/*Resr*/			  else if (isset($_SESSION['role']) &&  $_SESSION['role']== 'researcher') 							                          {
                             if ($action == 'addorg')
							{
								
                                include 'includes/org.php';
                            } 
							 else if ($action == 'seq_add')
							{
								
                                include 'includes/view_org_id.php';
                            } 
							else if ($action == 'addprot')
							{
								
                                include 'includes/addprot.php';
                            } 
							else if ($action == 'prot_sim')
							{
								
                                include 'includes/simi_selct_org.php';
                            } 
							else if ($action == 'find_similarity')
							{
								
                                include 'includes/find_similarity.php';
                            } 
							else if ($action == 'find_simi_dna')
							{
								
                                include 'includes/find_simi_dna.php';
                            } 
							else if ($action == 'find_similarity_rna')
							{
								
                                include 'includes/find_similarity_rna.php';
                            } 
							else if ($action == 'p1')
							{
								
                                include 'includes/p1.php';
                            } 
							else if ($action == '')
							{
								
                                include 'includes/';
                            } 
							
							else if ($action == 'dofind')
							{
								
                                include 'includes/dofind.php';
                            } 
							else if ($action == 'do_ins_prot_per')
							{
								
                                include 'includes/do_ins_prot_per.php';
                            } 
							else if ($action == 'do_find_sim_dna')
							{
								
                                include 'includes/do_find_sim_dna.php';
                            } 
							else if ($action == 'do_find_sim_rna')
							{
								
                                include 'includes/do_find_sim_rna.php';
                            } 
							else if ($action == 'add_term')
							{
								
                                include 'includes/bio_info.php';
                            } 
							else if ($action == 'profile')
							{
								
                                include 'includes/rsprofile.php';
                            } 
							else if ($action == 'change_pass')
							{
								
                                include 'includes/changepass.php';
                            } 
							else if ($action == 'galign')
							{
								
                                include 'includes/global_align.php';
                            } 
							else if ($action == 'do_global_align')
							{
								
                                include 'includes/do_global_align.php';
                            } 
							else if ($action == 'rs_paper')
							{
								
                                include 'includes/rs_paper.php';
                            } 
							else if ($action == 'sim_mes')
							{
								
                                include 'includes/sim_mes.php';
                            } 
							else if ($action == 'do_simi_mes')
							{
								
                                include 'includes/do_sim_measure.php';
                            } 
							else if ($action == 'do_sim-mes_prot')
							{
								
                                include 'includes/do_smms_prot.php';
                            } 
							else if ($action == 'do_sim_mes_res')
							{
								
                                include 'includes/do_sim_mes_res.php';
                            } 
							else if ($action == 'analysis')
							{
								
                                include 'includes/analysis.php';
                            } 
							 else if ($action == 'view_prot')
							{
								
                                include 'includes/view_prot.php';
                           } 
						   else if ($action == 'view_prot_more')
							{
								
                                include 'includes/view_prot_more.php';
                            } 
							else if ($action == 'do_analysis')
							{
								
                                include 'includes/do_analysis.php';
                            } 
							else if ($action == 'seq_analysis')
							{
								
                                include 'includes/seq_analysis.php';
                            } 
							else if ($action == 'do_seq_analysis')
							{
								
                                include 'includes/do_seq_analysis.php';
                            } 
							else if ($action == 'new_findings')
							{
								
                                include 'includes/new_findings.php';
                            } 
							else if ($action == '')
							{
								
                               // include 'includes/';
                            } 
							else if ($action == '')
							{
								
                               // include 'includes/';
                            } 
							
	                    }
		//end reser
		//user
					 else if (isset($_SESSION['role']) &&  $_SESSION['role']== 'user')  {
						  if ($action == 'sr_term')
						  {
								
                                include 'includes/serch_term.php';
                          }
						  else if ($action == 'view_prot')
						  {
								
                                include 'includes/view_prot.php';
                           } 
						   else if ($action == 'view_prot_more')
							{
								
                                include 'includes/view_prot_more.php';
                            } 
							else if ($action == 'change_pass')
							{
								
                                include 'includes/changepass.php';
                            } 
						    else if ($action == 'user_info')
							{
								
                                include 'includes/user_info.php';
                            } 
						 	else if ($action == 'rp')
							{
								
                                include 'includes/rp.php';
                            } 
						 	else if ($action == 'matrix_count')
							{
								
                                include 'includes/matrix_count.php';
                            } 
							else if ($action == 'do_matrix_count')
							{
								
                                include 'includes/do_matrix_count.php';
                            } 
							else if ($action == 'amino_combo')
							{
								
                                include 'includes/amino_combo.php';
                            } 
							else if ($action == 'do_amino_combo')
							{
								
                                include 'includes/do_amino_combo.php';
                            } 
						 	else if ($action == 'discs_forum')
							{
								
                                include 'includes/discs_forum.php';
                            } 
							else if ($action == 'disc_1')
							{
								
                                include 'includes/disc_1.php';
                            } 
							else if ($action == 'view_findings')
							{
								
                                include 'includes/view_findings.php';
                            } 
							else if ($action == '')
							{
								
                               // include 'includes/';
                            } 
							else if ($action == '')
							{
								
                               // include 'includes/';
                            } 
							else if ($action == '')
							{
								
                               // include 'includes/';
                            } 
						 
					 }
	
	
	//Admin
					else if (isset($_SESSION['role']) &&  $_SESSION['role']== 'admin') 							                    {
						if ($action == 'sr_term')
						 {	
                                include 'includes/serch_term.php';
                         }
						 else if ($action == 'add_res')
						 {	
                                include 'includes/reasercher.php';
                         }
						 else if ($action == 'ad_seq')
						 {	
                                include 'includes/view_org_id.php';
                         }
						 else if ($action == 'addprot')
						{
								
                                include 'includes/addprot.php';
                        } 
						else if ($action == 'adm_org')
						{
								
                                 include 'includes/org.php';
                        } 
						else if ($action == 'msgbox')
						{
								
                                 include 'includes/msgbox.php';
                        } 
						else if ($action == 'edit_orgnsm')
						{
								
                                 include 'includes/edit_orgnsm.php';
                        } 
						else if ($action == 'do_edit_org')
						{
								
                                 include 'includes/do_edit_org.php';
                        } 
						else if ($action == 'edit_seq')
						{
								
                                 include 'includes/edit_seq.php';
                        } 
						else if ($action == 'do_edit_seq')
						{
								
                                 include 'includes/do_edit_seq.php';
                        } 
						else if ($action == 'delete_org')
						{
								
                                 include 'includes/delete_org.php';
                        } 
						else if ($action == 'delete_seq')
						{
								
                                 include 'includes/delete_seq.php';
                        } 
						else if ($action == 'revoke_res')
						{
								
                                 include 'includes/revoke_res.php';
                        } 
						else if ($action == 'res_more')
						{
								
                                 include 'includes/res_more.php';
                        } 
						else if ($action == 'view_prot')
						{
								
                                include 'includes/view_prot.php';
                        } 
						 else if ($action == 'view_prot_more')
						{
								
                                include 'includes/view_prot_more.php';
                         } 
						else if ($action == 'change_pass_ad')
						{
								
                                 include 'includes/change_pass_ad.php';
                        } 
						else if ($action == '')
						{
								
                                // include 'includes/';
                        } 
						else if ($action == '')
						{
								
                                // include 'includes/';
                        } 
						else if ($action == '')
						{
								
                                // include 'includes/';
                        } 
						 
					}
        ?>

    </div> <!-- end of content --><!-- end of sidebar -->
    
  <div class="cleaner"></div>    

</div> <div id="templatemo_content_wrapper_bottom"></div> <!-- end of content_wrapper -->

<div id="templatemo_footer">

   			<ul class="footer_menu">
                <li><a href=".?action=home">Home</a></li>
                <li><a href=".?action=about" target="_parent">About</a></li>
                <li><a href=".?action=sr" target="_parent">Search</a></li>
                <li><a href=".?action=prot_id" target="_parent">ProteinID</a></li>
                <li class="last_menu"><a href=".?action=contact">Contact</a></li>
            </ul>
</div> 
<!-- end of templatemo_footer -->

<div align=center></div>
<?php
if (isset($_GET['message'])) {
    ?>
    <div id="model_dialog_insert" style="display:none" title="Message" >
                <div style="margin:10px; color:#06F;font-size:1.2em;">
            <?php echo $_GET['message']; ?>
                </div>
            </div>
    <?php
}
echo '<script>$(function(){$("#model_dialog_insert").dialog( "open" );});</script>';
?>
</body>
</html>