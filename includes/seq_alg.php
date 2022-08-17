<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<style>
.ab{
	border:dotted;
	border-color::#69F;
	font-size:14px;
}
</style>
<form id="form1" name="form1" method="post" action="">
  <table width="766" border="0">
    <tr>
      <td><b>Sequence Alignment</b></td>
    </tr>
    <tr>
      <td align="justify"><p>&nbsp;</p>
        <p>When two symbolic representations of DNA or protein sequences are arranged next to one another so that their most similar elements are juxtaposed they are said to be aligned. Many bioinformatics tasks depend upon successful alignments. Alignments are conventionally shown as a traces. </p>
        <p>In a symbolic sequence each base or residue monomer in each sequence is represented by a letter. The convention is to print the single-letter codes for the constituent monomers in order in a fixed font (from the N-most to C-most end of the protein sequence in question or from 5' to 3' of a nucleic acid molecule). This is based on the assumption that the combined monomers evenly spaced along the single dimension of the molecule's primary structure. From now on we will refer to an alignment of two protein sequences. </p>
        <p>Every element in a trace is either a match or a gap. Where a residue in one of two aligned sequences is identical to its counterpart in the other the corresponding amino-acid letter codes in the two sequences are vertically aligned in the trace: a match. When a residue in one sequence seems to have been deleted since the assumed divergence of the sequence from its counterpart, its &quot;absence&quot; is labelled by a dash in the derived sequence. When a residue appears to have been inserted to produce a longer sequence a dash appears opposite in the unaugmented sequence. Since these dashes represent &quot;gaps&quot; in one or other sequence, the action of inserting such spacers is known as gapping. </p>
      <p>A deletion in one sequence is symmetric with an insertion in the other. When one sequence is gapped relative to another a deletion in sequence a can be seen as an insertion in sequence b. Indeed, the two types of mutation are referred to together as indels. If we imagine that at some point one of the sequences was identical to its primitive homologue, then a trace can represent the three ways divergence could occur (at that point).</p>
      <p>Biological interpretation of an alignment</p>
      <p>A trace can represent a substitution: <br />
      
       <div class="ab">
        AKVAIL<br />
        AKIAIL</div>
        </p>
      <p>A trace can represent a deletion: <br />
      <div class="ab">  VCGMD<br />
        VCG-D</div></p>
      <p>A trace can represent a insertion: <br />
        <div class="ab">GS-K<br />
        GSGK</div></p>
      <p>For obvious reasons we do not represent a silent mutation. </p>
      <p>Traces may represent recent genetic changes which obscure older changes. Here we have only represented point mutations for simplicity. Actual mutations often insert or delete several residues.</p></td>
    </tr>
  </table>
  <p><a title="Back" onclick="goBack()"><img src="./proimg/arrow_left.png" width="60"  height="60" /></a></p>
  
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>