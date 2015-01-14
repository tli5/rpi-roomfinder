
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<HTML lang="en">
<HEAD>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8">
<LINK REL="stylesheet" HREF="/css/web_defaultapp.css" TYPE="text/css">
<LINK REL="stylesheet" HREF="/css/web_defaultprint.css" TYPE="text/css" media="print">
<TITLE>Search Results</TITLE>
<META HTTP-EQUIV="Content-Script-Type" NAME="Default_Script_Language" CONTENT="text/javascript">
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!-- Hide JavaScript from older browsers 
var submitcount=0;
function checkSubmit() {
if (submitcount == 0)
   {
   submitcount++;
   return true;
   }
else
   {
alert("Your changes have already been submitted.");
   return false;
   }
}
//  End script hiding -->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!-- Hide JavaScript from older browsers 
//  Function to open a window
function windowOpen(window_url) {
   helpWin = window.open(window_url,'','toolbar=yes,status=no,scrollbars=yes,menubar=yes,resizable=yes,directories=no,location=no,width=350,height=400');
   if (document.images) { 
       if (helpWin) helpWin.focus()
   }
}
//  End script hiding -->
</SCRIPT>
<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
<!-- Hide JavaScript from older browsers 
function timeout_window() {
   message_text = "WARNING: Your SIS/RSS session will time out in one minute.\nSessions end after 15 minutes of inactivity as a security measure.";
   setTimeout('display_message(message_text)', 840000);
}

function display_message(message_text) {
   window.alert(message_text);
}
//  End script hiding -->
</SCRIPT>
</HEAD>
<BODY  onLoad="timeout_window()">
<DIV class="headerwrapperdiv">
<DIV class="pageheaderdiv1">
<A HREF="#main_content" onMouseover="window.status='Go to Main Content'; return true" onMouseout="window.status=''; return true" OnFocus="window.status='Go to Main Content'; return true" onBlur="window.status=''; return true" class="skiplinks">Go to Main Content</A>
<H1>Rensselaer's Student Information System</H1></DIV><DIV class="headerlinksdiv">
<SPAN class="pageheaderlinks2">
<MAP NAME="Module_Navigation_Links_H" title="Module Navigation Links">
<p>
<A HREF="#skip_Module_Navigation_Links_H" onMouseover="window.status='Skip Module Navigation Links'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Skip Module Navigation Links'; return true" onBlur="window.status=''; return true"  class="skiplinks">Skip Module Navigation Links</A>
<TABLE  CLASS="plaintable" SUMMARY="This is main table for displaying Tab Items."
                          WIDTH="100%" cellSpacing=0 cellPadding=0 border=0>
<TR>
<TD CLASS="pldefault">
<TABLE  CLASS="plaintable" SUMMARY="This table displays Tab Items."
                 cellSpacing=0 cellPadding=0 border=0>
<TR>
<td class="taboff" height=22>
<A HREF="/rss/twbkwbis.P_GenMenu?name=bmenu.P_GenMnu" onMouseover="window.status='Personal Information'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Personal Information'; return true" onBlur="window.status=''; return true" >Personal Information</A>
</TD>
<TD class="bgtaboff" height=22 vAlign="top" align="right">
<IMG SRC="/wtlgifs/web_tab_corner_right.gif" ALT="Tab Corner Right" CLASS="headerImg" TITLE="Tab Corner Right"  NAME="web_tab_corner_right" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=20 WIDTH=8>
</TD>
<td class="tabon"  height=22>
<A HREF="/rss/twbkwbis.P_GenMenu?name=bmenu.P_StuMainMnu" onMouseover="window.status='Student Menu'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Student Menu'; return true" onBlur="window.status=''; return true" >Student Menu</A>
</TD>
<TD class="bgtabon"  height=22 vAlign="top" align="right">
<IMG SRC="/wtlgifs/web_tab_corner_right.gif" ALT="Tab Corner Right" CLASS="headerImg" TITLE="Tab Corner Right"  NAME="web_tab_corner_right" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=20 WIDTH=8>
</TD>
<td class="taboff" height=22>
<A HREF="/rss/twbkwbis.P_GenMenu?name=bmenu.P_FinAidMainMnu" onMouseover="window.status='Financial Aid Menu'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Financial Aid Menu'; return true" onBlur="window.status=''; return true" >Financial Aid Menu</A>
</TD>
<TD class="bgtaboff" height=22 vAlign="top" align="right">
<IMG SRC="/wtlgifs/web_tab_corner_right.gif" ALT="Tab Corner Right" CLASS="headerImg" TITLE="Tab Corner Right"  NAME="web_tab_corner_right" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=20 WIDTH=8>
</TD>
<td class="tabon"  height=22>
<A HREF="/rss/twbkwbis.P_GenMenu?name=amenu.P_AcctInfoMnu" onMouseover="window.status='Student Account Detail'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Student Account Detail'; return true" onBlur="window.status=''; return true" >Student Account Detail</A>
</TD>
<TD class="bgtabon"  height=22 vAlign="top" align="right">
<IMG SRC="/wtlgifs/web_tab_corner_right.gif" ALT="Tab Corner Right" CLASS="headerImg" TITLE="Tab Corner Right"  NAME="web_tab_corner_right" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=20 WIDTH=8>
</TD>
<td class="taboff" height=22>
<A HREF="/rss/twbkwbis.P_GenMenu?name=bmenu.P_MainMnu" onMouseover="window.status='Main Menu'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Main Menu'; return true" onBlur="window.status=''; return true" >Main Menu</A>
</TD>
<TD class="bgtaboff" height=22 vAlign="top" align="right">
<IMG SRC="/wtlgifs/web_tab_corner_right.gif" ALT="Tab Corner Right" CLASS="headerImg" TITLE="Tab Corner Right"  NAME="web_tab_corner_right" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=20 WIDTH=8>
</TD>
<td class="taboff" height=22>
<A HREF="/rss/twbkwbis.P_GenMenu?name=pmenu.P_MainMnu" onMouseover="window.status='HR/Payroll Menu'; return true" onMouseout="window.status=''; return true" onFocus="window.status='HR/Payroll Menu'; return true" onBlur="window.status=''; return true" >HR/Payroll Menu</A>
</TD>
<TD class="bgtaboff" height=22 vAlign="top" align="right">
<IMG SRC="/wtlgifs/web_tab_corner_right.gif" ALT="Tab Corner Right" CLASS="headerImg" TITLE="Tab Corner Right"  NAME="web_tab_corner_right" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=20 WIDTH=8>
</TD>
</TR>
</TABLE>
</TD>
</TR>
<TR>
<TD class="bgtabon" width="100%" colSpan=2><IMG SRC="/wtlgifs/web_transparent.gif" ALT="Transparent Image" CLASS="headerImg" TITLE="Transparent Image"  NAME="web_transparent" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=3 WIDTH=10></TD></TR></TABLE>
</MAP>
</SPAN>
<a name="skip_Module_Navigation_Links_H"></a>
</DIV>
<TABLE  CLASS="plaintable" SUMMARY="This table displays Menu Items and Banner Search textbox."
         WIDTH="100%">
<TR>
<TD CLASS="pldefault">
<DIV class="headerlinksdiv2">
<FORM ACTION="/rss/twbksrch.P_ShowResults" METHOD="POST">
Search
<SPAN class="fieldlabeltextinvisible"><LABEL for=keyword_in_id><SPAN class="fieldlabeltext">Search</SPAN></LABEL></SPAN>
<INPUT TYPE="text" NAME="KEYWRD_IN" SIZE="20" MAXLENGTH="65" ID="keyword_in_id">
<INPUT TYPE="submit" VALUE="Go">
</FORM>
</div>
</TD>
<TD CLASS="pldefault"><p class="rightaligntext"></p>
<SPAN class="pageheaderlinks">
<A HREF="/rss/twbkwbis.P_GenMenu?name=bmenu.P_RegMnu"  class="submenulinktext2" id="ssbbackurl">RETURN TO MENU</A>
|
<A HREF="/rss/twbksite.P_DispSiteMap?menu_name_in=bmenu.P_MainMnu&amp;depth_in=2&amp;columns_in=3" accesskey="2" class="submenulinktext2">SITE MAP</A>
|
<A HREF="/rss/twbkfrmt.P_DispHelp?pagename_in=bwskfcls.P_GetCrse" accesskey="H" onClick="popup = window.open('/rss/twbkfrmt.P_DispHelp?pagename_in=bwskfcls.P_GetCrse', 'PopupPage','height=500,width=450,scrollbars=yes,resizable=yes'); return false" target="_blank" onMouseOver="window.status='';  return true" onMouseOut="window.status=''; return true"onFocus="window.status='';  return true" onBlur="window.status=''; return true"  class="submenulinktext2">HELP</A>
|
<A HREF="twbkwbis.P_Logout" accesskey="3" class="submenulinktext2">EXIT</A>
</span>
</TD>
</TR>
</TABLE>
</DIV>
<DIV class="pagetitlediv">
<TABLE  CLASS="plaintable" SUMMARY="This table displays title and static header displays."
   WIDTH="100%">
<TR>
<TD CLASS="pldefault">
<H2>Search Results</H2>
</TD>
<TD CLASS="pldefault">
&nbsp;
</TD>
<TD CLASS="pldefault"><p class="rightaligntext"></p>
<DIV class="staticheaders">
661409866 Taoran Li<br>
Spring 2015<br>
Dec 28, 2014 02:24 pm<br>
</div>
</TD>
</TR>
<TR>
<TD class="bg3" width="100%" colSpan=3><IMG SRC="/wtlgifs/web_transparent.gif" ALT="Transparent Image" CLASS="headerImg" TITLE="Transparent Image"  NAME="web_transparent" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=3 WIDTH=10></TD>
</TR>
</TABLE>
<a name="main_content"></a>
</DIV>
<DIV class="pagebodydiv">
<!--  ** END OF twbkwbis.P_OpenDoc **  -->
<FORM ACTION="/rss/bwskfreg.P_AltPin1" METHOD="POST" onSubmit="return checkSubmit()">
<DIV class="infotextdiv"><TABLE  CLASS="infotexttable" SUMMARY="This layout table contains information that may be helpful in understanding the content and functionality of this page.  It could be a brief set of instructions, a description of error messages, or other special information."><TR><TD CLASS="indefault"><IMG SRC="/gengifs/hwgginfo.gif" ALT="Information" CLASS="headerImg" TITLE="Information"  NAME="Info" HSPACE=0 VSPACE=0 BORDER=0></TD><TD CLASS="indefault"><SPAN class="infotext"> To register for classes, check the box in front of the CRN (C identifies a closed class) and click Register or Add to Worksheet.<b> Please note that you must click on the CRN link in order to view all of the course information, including important notes.</b></SPAN></TD></TR></TABLE><P></DIV>
<INPUT TYPE="hidden" NAME="crn" VALUE="dummy">
<INPUT TYPE="hidden" NAME="rsts" VALUE="dummy">
<INPUT TYPE="hidden" NAME="TERM_IN" VALUE="201501">
<INPUT TYPE="hidden" NAME="sel_crn" VALUE="dummy">
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="dummy">
<INPUT TYPE="hidden" NAME="ADD_BTN" VALUE="dummy">
<TABLE  CLASS="datadisplaytable" SUMMARY="This layout table is used to present the sections found" width="100%"><CAPTION class="captiontext">Sections Found</CAPTION>
<TR>
<TH COLSPAN="26" CLASS="ddtitle" scope="colgroup" >Administrative Courses</TH>
</TR>
<TR>
<TH CLASS="ddheader" scope="col" >Select</TH>
<TH CLASS="ddheader" scope="col" ><ACRONYM title = "Course Reference Number">CRN</ACRONYM></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Subject>Subj</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Course>Crse</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Section>Sec</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Campus>Cmp</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Credit Hours">Cred</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Title</TH>
<TH CLASS="ddheader" scope="col" >Days</TH>
<TH CLASS="ddheader" scope="col" >Time</TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Capacity">Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Actual">Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Remaining">Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Capacity">WL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Actual">WL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Remaining">WL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Capacity">XL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Actual">XL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Remaining">XL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Instructor</TH>
<TH CLASS="ddheader" scope="col" >Date (<ABBR title = "month month">MM</ABBR>/<ABBR title = "day day">DD</ABBR>)</TH>
<TH CLASS="ddheader" scope="col" >Location</TH>
<TH CLASS="ddheader" scope="col" >Attribute</TH>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=1010&amp;crn_in=76906" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76906</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">1010</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">ORAL COMM FOR TA'S</TD>
<TD CLASS="dddefault">WF</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Barbara A  Barthel (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4203</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78017 201501" ID="action_id2">
<LABEL for=action_id2><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=1961&amp;crn_in=78017" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78017</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">1961</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">FIRST YEAR SEMINAR</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jeannie   Steigler (<ABBR title= "Primary">P</ABBR>), Janelle P.  Fayette , Jennifer E  Reittinger </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 232</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78018 201501" ID="action_id4">
<LABEL for=action_id4><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=1961&amp;crn_in=78018" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78018</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">1961</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">FIRST YEAR SEMINAR</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jeannie   Steigler (<ABBR title= "Primary">P</ABBR>), Janelle P.  Fayette , Jennifer E  Reittinger </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 236</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78019 201501" ID="action_id6">
<LABEL for=action_id6><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=1961&amp;crn_in=78019" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78019</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">1961</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">FIRST YEAR SEMINAR</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jeannie   Steigler (<ABBR title= "Primary">P</ABBR>), Janelle P.  Fayette , Jennifer E  Reittinger </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 235</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78052 201501" ID="action_id8">
<LABEL for=action_id8><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=1961&amp;crn_in=78052" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78052</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">1961</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">FIRST YEAR SEMINAR</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">04:00 pm-04:50 pm</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jeannie   Steigler (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75523 201501" ID="action_id10">
<LABEL for=action_id10><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=4400&amp;crn_in=75523" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75523</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">4400</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">UG FINAL ADMN. REGISTRATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Sharon L  Kunkel (<ABBR title= "Primary">P</ABBR>), Michael Joseph  Bayer , Maria Bedinotti  Zanotta </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=6400&amp;crn_in=75608" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75608</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">6400</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">GRAD FINAL ADMINISTRATIVE REG</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Maria Bedinotti  Zanotta (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77520 201501" ID="action_id13">
<LABEL for=action_id13><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=6700&amp;crn_in=77520" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77520</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">6700</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">ACADEMIC ORIENTATION SEMINAR FOR GRADUATE STUDENTS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">200</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">185</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Constance M  Grega (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ADMN&amp;crse_in=6800&amp;crn_in=77521" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77521</A></TD>
<TD CLASS="dddefault">ADMN</TD>
<TD CLASS="dddefault">6800</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">TA TRAINING SEMINAR</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">200</TD>
<TD CLASS="dddefault">23</TD>
<TD CLASS="dddefault">177</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Dennis E.  Gornic (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TH COLSPAN="26" CLASS="ddtitle" scope="colgroup" >Aerospace Studies</TH>
</TR>
<TR>
<TH CLASS="ddheader" scope="col" >Select</TH>
<TH CLASS="ddheader" scope="col" ><ACRONYM title = "Course Reference Number">CRN</ACRONYM></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Subject>Subj</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Course>Crse</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Section>Sec</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Campus>Cmp</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Credit Hours">Cred</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Title</TH>
<TH CLASS="ddheader" scope="col" >Days</TH>
<TH CLASS="ddheader" scope="col" >Time</TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Capacity">Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Actual">Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Remaining">Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Capacity">WL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Actual">WL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Remaining">WL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Capacity">XL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Actual">XL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Remaining">XL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Instructor</TH>
<TH CLASS="ddheader" scope="col" >Date (<ABBR title = "month month">MM</ABBR>/<ABBR title = "day day">DD</ABBR>)</TH>
<TH CLASS="ddheader" scope="col" >Location</TH>
<TH CLASS="ddheader" scope="col" >Attribute</TH>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75093 201501" ID="action_id16">
<LABEL for=action_id16><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=0020&amp;crn_in=75093" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75093</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">0020</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">LEADERSHIP LAB</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">46</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Cory J  Ostrowski (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Robert R  Robb </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 324</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75011 201501" ID="action_id18">
<LABEL for=action_id18><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=0040&amp;crn_in=75011" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75011</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">0040</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">LEADERSHIP LAB</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">48</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Cory J  Ostrowski (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Robert R  Robb </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 324</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75012 201501" ID="action_id20">
<LABEL for=action_id20><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=0060&amp;crn_in=75012" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75012</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">0060</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">LEADERSHIP LAB</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">45</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Cory J  Ostrowski (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Robert R  Robb </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 324</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75013 201501" ID="action_id22">
<LABEL for=action_id22><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=0080&amp;crn_in=75013" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75013</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">0080</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">LEADERSHIP LAB</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">47</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Cory J  Ostrowski (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Robert R  Robb </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 324</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75398 201501" ID="action_id24">
<LABEL for=action_id24><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=0080&amp;crn_in=75398" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75398</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">0080</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000</TD>
<TD CLASS="dddefault">CONFLICT LEADERSHIP LAB</TD>
<TD CLASS="dddefault">F</TD>
<TD CLASS="dddefault">06:00 am-07:50 am</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Cory J  Ostrowski (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Robert R  Robb </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 330</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75124 201501" ID="action_id26">
<LABEL for=action_id26><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=1020&amp;crn_in=75124" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75124</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">1020</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">AIR AND SPACE STUDIES 100B</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">07:00 am-07:50 am</TD>
<TD CLASS="dddefault">30</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">27</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Cory J  Ostrowski (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Robert R  Robb </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">LOW 4034</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75002 201501" ID="action_id28">
<LABEL for=action_id28><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=2040&amp;crn_in=75002" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75002</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">2040</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">AIR AND SPACE STUDIES 200B</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">07:00 am-07:50 am</TD>
<TD CLASS="dddefault">30</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">23</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Robert R  Robb (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Cory J  Ostrowski </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">LOW 4040</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75003 201501" ID="action_id30">
<LABEL for=action_id30><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=2060&amp;crn_in=75003" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75003</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">2060</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">AIR AND SPACE STUDIES 300B</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">07:00 am-09:50 am</TD>
<TD CLASS="dddefault">30</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">25</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Cory J  Ostrowski (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Robert R  Robb </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">LOW 3116</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75004 201501" ID="action_id32">
<LABEL for=action_id32><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=2080&amp;crn_in=75004" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75004</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">2080</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">AIR AND SPACE STUDIES 400B</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">07:00 am-09:50 am</TD>
<TD CLASS="dddefault">30</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">26</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Robert R  Robb (<ABBR title= "Primary">P</ABBR>), Jennifer Lynn  Fredericks , Cory J  Ostrowski </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">LOW 3130</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=USAF&amp;crse_in=2940&amp;crn_in=75638" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75638</A></TD>
<TD CLASS="dddefault">USAF</TD>
<TD CLASS="dddefault">2940</TD>
<TD CLASS="dddefault">00</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-6.000</TD>
<TD CLASS="dddefault">READINGS IN USAF</TD>
<TD COLSPAN="2" CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TH COLSPAN="26" CLASS="ddtitle" scope="colgroup" >Architecture</TH>
</TR>
<TR>
<TH CLASS="ddheader" scope="col" >Select</TH>
<TH CLASS="ddheader" scope="col" ><ACRONYM title = "Course Reference Number">CRN</ACRONYM></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Subject>Subj</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Course>Crse</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Section>Sec</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Campus>Cmp</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Credit Hours">Cred</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Title</TH>
<TH CLASS="ddheader" scope="col" >Days</TH>
<TH CLASS="ddheader" scope="col" >Time</TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Capacity">Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Actual">Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Remaining">Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Capacity">WL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Actual">WL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Remaining">WL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Capacity">XL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Actual">XL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Remaining">XL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Instructor</TH>
<TH CLASS="ddheader" scope="col" >Date (<ABBR title = "month month">MM</ABBR>/<ABBR title = "day day">DD</ABBR>)</TH>
<TH CLASS="ddheader" scope="col" >Location</TH>
<TH CLASS="ddheader" scope="col" >Attribute</TH>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75559 201501" ID="action_id35">
<LABEL for=action_id35><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2140&amp;crn_in=75559" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75559</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2140</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">BLDG & THINKING ARCH 3</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">54</TD>
<TD CLASS="dddefault">16</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Brendan Daniel  Moran (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-03/21</TD>
<TD CLASS="dddefault">EATON 214</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75561 201501" ID="action_id37">
<LABEL for=action_id37><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2230&amp;crn_in=75561" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75561</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2230</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 3</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">60</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2230&amp;crn_in=76894" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76894</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2230</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 3</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Edwin Jhinang  Liu (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2230&amp;crn_in=76895" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76895</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2230</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 3</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">James Fleet  Hower (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2230&amp;crn_in=77934" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77934</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2230</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL DESIGN 3</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Elena   Perez Guembe (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Elena   Perez Guembe (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2230&amp;crn_in=77708" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77708</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2230</TD>
<TD CLASS="dddefault">05</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 3</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Francis Anthony  Bitonti (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Francis Anthony  Bitonti (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2230&amp;crn_in=77935" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77935</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2230</TD>
<TD CLASS="dddefault">06</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL DESIGN 3</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">James Fleet  Hower (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75452 201501" ID="action_id44">
<LABEL for=action_id44><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2360&amp;crn_in=75452" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75452</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2360</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ENVIRONMENTAL AND ECOL SYSTEM</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">51</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ariel Alexandra Rosemary  Rempel (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">F</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Ariel Alexandra Rosemary  Rempel (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78502 201501" ID="action_id46">
<LABEL for=action_id46><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2370&amp;crn_in=78502" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78502</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2370</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">ENERGY, COMFORT & ECOLOGY</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">72</TD>
<TD CLASS="dddefault">67</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ariel Alexandra Rosemary  Rempel (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 3303</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78508 201501" ID="action_id48">
<LABEL for=action_id48><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2530&amp;crn_in=78508" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78508</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2530</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DIGITAL CONSTRUCTS 2</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">36</TD>
<TD CLASS="dddefault">35</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Adam Hassan  Dayem (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">RCKTTS 212</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78509 201501" ID="action_id50">
<LABEL for=action_id50><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2530&amp;crn_in=78509" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78509</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2530</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DIGITAL CONSTRUCTS 2</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">36</TD>
<TD CLASS="dddefault">29</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Adam Hassan  Dayem (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">CARNEG 208</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2630&amp;crn_in=77253" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77253</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2630</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">GRAD ARCH DESIGN 3</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ted   Krueger (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Ted   Krueger (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 3101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77581 201501" ID="action_id53">
<LABEL for=action_id53><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2630&amp;crn_in=77581" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77581</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2630</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">GRAD ARCH DESIGN 3</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Edwin Jhinang  Liu (<ABBR title= "Primary">P</ABBR>), Ted   Krueger </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Edwin Jhinang  Liu (<ABBR title= "Primary">P</ABBR>), Ted   Krueger </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 3101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78222 201501" ID="action_id55">
<LABEL for=action_id55><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2630&amp;crn_in=78222" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78222</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2630</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">GRAD ARCH DESIGN 3</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Adam Hassan  Dayem (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 4101</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78503 201501" ID="action_id57">
<LABEL for=action_id57><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2810&amp;crn_in=78503" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78503</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2810</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">5.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL DESIGN STUDIO 2</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">72</TD>
<TD CLASS="dddefault">65</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2810&amp;crn_in=78504" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78504</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2810</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">5.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL DESIGN STUDIO 2</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2810&amp;crn_in=78505" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78505</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2810</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">5.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL DESIGN STUDIO 2</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2810&amp;crn_in=78506" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78506</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2810</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">5.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL DESIGN STUDIO 2</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2810&amp;crn_in=78507" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78507</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2810</TD>
<TD CLASS="dddefault">05</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">5.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL DESIGN STUDIO 2</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=2940&amp;crn_in=75623" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75623</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">2940</TD>
<TD CLASS="dddefault">00</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-6.000</TD>
<TD CLASS="dddefault">PROJECTS IN ARCH & ENV DESIGN</TD>
<TD COLSPAN="2" CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4020&amp;crn_in=78275" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78275</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4020</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">BEDFORD SEMINAR</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">06:00 pm-08:50 pm</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">24</TD>
<TD CLASS="dddefault">22</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">Wilfried   Laufs (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78678 201501" ID="action_id65">
<LABEL for=action_id65><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4050&amp;crn_in=78678" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78678</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4050</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">CITIES AND THEIR TERRITORIES</TD>
<TD CLASS="dddefault">M</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">64</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Brendan Daniel  Moran (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WALKER 5113</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4070&amp;crn_in=78662" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78662</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4070</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">TWISTED SIBLINGS:RELATIONSHIPS BETWEEN CONTEMPORARY PAINTING AND DIGITAL ARCHITECTURE</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">-3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Anthony   Titus (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 235</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4090&amp;crn_in=78661" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78661</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4090</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL CASE STUDIES</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">72</TD>
<TD CLASS="dddefault">72</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Gustavo Enrique Alberto  Crembil (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-03/21</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78663 201501" ID="action_id69">
<LABEL for=action_id69><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4120&amp;crn_in=78663" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78663</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4120</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">MODERNITY IN CULTURE, CIVILIZATION AND ARCHITECTURE 1</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">77</TD>
<TD CLASS="dddefault">71</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Brendan Daniel  Moran (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">03/23-05/22</TD>
<TD CLASS="dddefault">EATON 214</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78518 201501" ID="action_id71">
<LABEL for=action_id71><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4170&amp;crn_in=78518" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78518</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4170</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">ENVIRONMENTAL PARAMETRICS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Demetrios Andreas  Comodromos (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77335 201501" ID="action_id73">
<LABEL for=action_id73><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4250&amp;crn_in=77335" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77335</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4250</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 5</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4250&amp;crn_in=76382" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76382</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4250</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 5</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4250&amp;crn_in=77804" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77804</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4250</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 5</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78510 201501" ID="action_id77">
<LABEL for=action_id77><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4250&amp;crn_in=78510" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78510</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4250</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 5</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">David H  Bell (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77484 201501" ID="action_id79">
<LABEL for=action_id79><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4250&amp;crn_in=77484" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77484</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4250</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 5</TD>
<TD CLASS="dddefault">MWF</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Demetrios Andreas  Comodromos (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76591 201501" ID="action_id81">
<LABEL for=action_id81><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4260&amp;crn_in=76591" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76591</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4260</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 6</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">18</TD>
<TD CLASS="dddefault">32</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4260&amp;crn_in=76383" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76383</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4260</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 6</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4260&amp;crn_in=77805" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77805</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4260</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 6</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4260&amp;crn_in=77807" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77807</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4260</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 6</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78511 201501" ID="action_id86">
<LABEL for=action_id86><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4260&amp;crn_in=78511" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78511</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4260</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 6</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">David H  Bell (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77485 201501" ID="action_id88">
<LABEL for=action_id88><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4260&amp;crn_in=77485" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77485</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4260</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DESIGN 6</TD>
<TD CLASS="dddefault">MWF</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Demetrios Andreas  Comodromos (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75072 201501" ID="action_id90">
<LABEL for=action_id90><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4300&amp;crn_in=75072" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75072</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4300</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">DESIGN DEVELOPMENT</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">30</TD>
<TD CLASS="dddefault">25</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4300&amp;crn_in=78664" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78664</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4300</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">DESIGN DEVELOPMENT</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Lauren Elizabeth  Thomsen (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78512 201501" ID="action_id93">
<LABEL for=action_id93><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4340&amp;crn_in=78512" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78512</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4340</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">STRUCTURAL MORPHOLOGY</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ivan   Markov (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2701</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75141 201501" ID="action_id95">
<LABEL for=action_id95><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4540&amp;crn_in=75141" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75141</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4540</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">PROFESSIONAL PRACTICE 1</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">06:00 pm-07:50 pm</TD>
<TD CLASS="dddefault">27</TD>
<TD CLASS="dddefault">25</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Stephen F  Reilly (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">F</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Stephen F  Reilly (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78513 201501" ID="action_id97">
<LABEL for=action_id97><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4550&amp;crn_in=78513" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78513</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4550</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">PROFESSIONAL PRACTICE 2</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">06:00 pm-07:50 pm</TD>
<TD CLASS="dddefault">65</TD>
<TD CLASS="dddefault">32</TD>
<TD CLASS="dddefault">33</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75454 201501" ID="action_id99">
<LABEL for=action_id99><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4560&amp;crn_in=75454" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75454</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4560</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">MATERIALS AND ENCLOSURES</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">65</TD>
<TD CLASS="dddefault">64</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 120</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78665 201501" ID="action_id101">
<LABEL for=action_id101><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4580&amp;crn_in=78665" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78665</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4580</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">MATERIALS SYSTEMS & PRODUCTION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4730&amp;crn_in=78501" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78501</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4730</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">SUSTAINABLE BUILDING DESIGN STRATEGIES</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Oliver S  Holmes (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">CARNEG 106</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4740&amp;crn_in=75455" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75455</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4740</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">BLDG SYSTEMS AND ENVIRONMENT</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">65</TD>
<TD CLASS="dddefault">65</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Oliver S  Holmes (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">TROY 2012</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76757 201501" ID="action_id105">
<LABEL for=action_id105><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4850&amp;crn_in=76757" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76757</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4850</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ARCHITECTURAL ACOUSTICS 2</TD>
<TD CLASS="dddefault">F</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Todd L.  Brooks (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 204</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">F</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Todd L.  Brooks (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 204</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4931&amp;crn_in=77936" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77936</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4931</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">THE MAN NEXT DOOR: HITCHCOCK</TD>
<TD CLASS="dddefault">M</TD>
<TD CLASS="dddefault">07:00 pm-09:30 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Michael James  Oatman (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST AUD</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77539 201501" ID="action_id108">
<LABEL for=action_id108><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4936&amp;crn_in=77539" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77539</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4936</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">RES INVESTIGATIONS: PROJBUILT</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4940&amp;crn_in=75138" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75138</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4940</TD>
<TD CLASS="dddefault">00</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">0.000-6.000</TD>
<TD CLASS="dddefault">INDEPENDENT STUDY IN ARCH</TD>
<TD COLSPAN="2" CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78672 201501" ID="action_id111">
<LABEL for=action_id111><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4960&amp;crn_in=78672" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78672</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4960</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">SELF-ORGANIZING SPACES</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Zbigniew   Oksiuta (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 236</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78677 201501" ID="action_id113">
<LABEL for=action_id113><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4961&amp;crn_in=78677" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78677</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4961</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">RES SEMINAR IN UNIVERSAL DESIG</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ted   Krueger (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">J-ROWL 1W01</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4962&amp;crn_in=77334" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77334</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4962</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">SCULPTING THE INTANGIBLE</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Elena   Perez Guembe (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">CARNEG 102</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78679 201501" ID="action_id116">
<LABEL for=action_id116><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4963&amp;crn_in=78679" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78679</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4963</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">COMPREHENSIVE DESIGN STUDIO</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">30</TD>
<TD CLASS="dddefault">29</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78680 201501" ID="action_id118">
<LABEL for=action_id118><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4963&amp;crn_in=78680" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78680</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4963</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">COMPREHENSIVE DESIGN STUDIO</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">30</TD>
<TD CLASS="dddefault">16</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE STU</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4963&amp;crn_in=78881" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78881</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4963</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">COMPREHENSIVE DESIGN STUDIO 6</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4963&amp;crn_in=78882" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78882</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4963</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">COMPREHENSIVE DESIGN STUDIO 6</TD>
<TD CLASS="dddefault">MWR</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77736 201501" ID="action_id122">
<LABEL for=action_id122><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4965&amp;crn_in=77736" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77736</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4965</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">LATIN AMERICAN ARCHITECTURE</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Gustavo Enrique Alberto  Crembil (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 3705</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78701 201501" ID="action_id124">
<LABEL for=action_id124><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4965&amp;crn_in=78701" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78701</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4965</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INDIA DISCOVERY</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">David H  Bell (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78699 201501" ID="action_id126">
<LABEL for=action_id126><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4970&amp;crn_in=78699" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78699</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4970</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">ARCH & THE URBAN COND OF INDIA</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">David H  Bell (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78515 201501" ID="action_id128">
<LABEL for=action_id128><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4974&amp;crn_in=78515" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78515</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4974</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">THE CULTURE & CIVIL. OF INDIA</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">David H  Bell (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78700 201501" ID="action_id130">
<LABEL for=action_id130><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4976&amp;crn_in=78700" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78700</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4976</TD>
<TD CLASS="dddefault">70</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">TOPICS IN ARCHITECTURE</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">David H  Bell (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76338 201501" ID="action_id132">
<LABEL for=action_id132><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4990&amp;crn_in=76338" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76338</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4990</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">B ARCH FINAL PROJECT 2</TD>
<TD CLASS="dddefault">WF</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ted T.C.  Ngai (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">Communication Intensive</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76339 201501" ID="action_id134">
<LABEL for=action_id134><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4990&amp;crn_in=76339" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76339</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4990</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">B ARCH FINAL PROJECT 2</TD>
<TD CLASS="dddefault">WF</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Gustavo Enrique Alberto  Crembil (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">Communication Intensive</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76340 201501" ID="action_id136">
<LABEL for=action_id136><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4990&amp;crn_in=76340" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76340</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4990</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">B ARCH FINAL PROJECT 2</TD>
<TD CLASS="dddefault">WF</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Christopher S  Perry (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">Communication Intensive</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76341 201501" ID="action_id138">
<LABEL for=action_id138><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=4990&amp;crn_in=76341" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76341</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">4990</TD>
<TD CLASS="dddefault">05</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">6.000</TD>
<TD CLASS="dddefault">B ARCH FINAL PROJECT 2</TD>
<TD CLASS="dddefault">WF</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Carla   Leitao (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">Communication Intensive</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77252 201501" ID="action_id140">
<LABEL for=action_id140><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6110&amp;crn_in=77252" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77252</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6110</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">DESIGN EXPLORATIONS 1</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Lonn Richardson  Combs (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 236</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78223 201501" ID="action_id142">
<LABEL for=action_id142><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6330&amp;crn_in=78223" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78223</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6330</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">BUILT ECOLOGIES 2</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Anna   Dyson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78342 201501" ID="action_id144">
<LABEL for=action_id144><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6340&amp;crn_in=78342" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78342</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6340</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">MATERIAL SYSTEMS & PRODUCTIONS</TD>
<TD CLASS="dddefault">M</TD>
<TD CLASS="dddefault">09:30 am-12:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 239</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78629 201501" ID="action_id146">
<LABEL for=action_id146><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6350&amp;crn_in=78629" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78629</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6350</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">DESIGN RESEARCH STUDIO</TD>
<TD CLASS="dddefault">WF</TD>
<TD CLASS="dddefault">09:00 am-12:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ted T.C.  Ngai (<ABBR title= "Primary">P</ABBR>), Christopher S  Perry </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">RCKTTS 208</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77256 201501" ID="action_id148">
<LABEL for=action_id148><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6830&amp;crn_in=77256" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77256</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6830</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">GRADUATE THESIS SEMINAR:ACOUSTICS</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">12:00 pm-12:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ning   Xiang (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 204</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75535 201501" ID="action_id150">
<LABEL for=action_id150><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6880&amp;crn_in=75535" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75535</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6880</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">SONICS RESEARCH LAB 2</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">09:00 am-10:50 am</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ning   Xiang (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 204</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77255 201501" ID="action_id152">
<LABEL for=action_id152><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6890&amp;crn_in=77255" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77255</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6890</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">AURAL ARCHITECTURE</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">01:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jonas   Braasch (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 204</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76628 201501" ID="action_id154">
<LABEL for=action_id154><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6900&amp;crn_in=76628" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76628</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6900</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">GRADUATE THESIS SEMINAR</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Daniel C.  Frering (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6900&amp;crn_in=77927" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77927</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6900</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">GRADUATE THESIS SEMINAR</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 204</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78634 201501" ID="action_id157">
<LABEL for=action_id157><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6910&amp;crn_in=78634" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78634</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6910</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DOCTORAL SEMINAR 1</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jonas   Braasch (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78635 201501" ID="action_id159">
<LABEL for=action_id159><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6910&amp;crn_in=78635" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78635</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6910</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DOCTORAL SEMINAR 1</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nadarajah   Narendran (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78636 201501" ID="action_id161">
<LABEL for=action_id161><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6910&amp;crn_in=78636" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78636</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6910</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DOCTORAL SEMINAR 1</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Anna   Dyson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78640 201501" ID="action_id163">
<LABEL for=action_id163><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6920&amp;crn_in=78640" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78640</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6920</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DOCTORAL SEMINAR 2</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jonas   Braasch (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78641 201501" ID="action_id165">
<LABEL for=action_id165><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6920&amp;crn_in=78641" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78641</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6920</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DOCTORAL SEMINAR 2</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nadarajah   Narendran (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78642 201501" ID="action_id167">
<LABEL for=action_id167><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6920&amp;crn_in=78642" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78642</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6920</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">DOCTORAL SEMINAR 2</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Anna   Dyson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6940&amp;crn_in=75625" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75625</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6940</TD>
<TD CLASS="dddefault">00</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-6.000</TD>
<TD CLASS="dddefault">ADV IND PROJ IN ARCH/ENV DESGN</TD>
<TD COLSPAN="2" CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77930 201501" ID="action_id170">
<LABEL for=action_id170><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6960&amp;crn_in=77930" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77930</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6960</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">SOFTWARE & FABRICATION 2</TD>
<TD CLASS="dddefault">M</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">James Fleet  Hower (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">CARNEG 102</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77929 201501" ID="action_id172">
<LABEL for=action_id172><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6962&amp;crn_in=77929" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77929</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6962</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">URBAN CASE STUDIES</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2707</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6963&amp;crn_in=78352" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78352</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6963</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ADV INTEGRATED SYSTEMS DEV</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6965&amp;crn_in=77964" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77964</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6965</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">ENERGY & SYSTEMS SIMULATION</TD>
<TD CLASS="dddefault">M</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">CARNEG 205</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78041 201501" ID="action_id176">
<LABEL for=action_id176><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6966&amp;crn_in=78041" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78041</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6966</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">SYSTEMS & SIM VISUALIZATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77926 201501" ID="action_id178">
<LABEL for=action_id178><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6980&amp;crn_in=77926" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77926</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6980</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S PROJECT</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">GREENE 208</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78733 201501" ID="action_id180">
<LABEL for=action_id180><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6980&amp;crn_in=78733" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78733</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6980</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S PROJECT</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Christopher S  Perry (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78734 201501" ID="action_id182">
<LABEL for=action_id182><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6980&amp;crn_in=78734" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78734</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6980</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S PROJECT</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Gustavo Enrique Alberto  Crembil (<ABBR title= "Primary">P</ABBR>), Christopher S  Perry </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78735 201501" ID="action_id184">
<LABEL for=action_id184><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6980&amp;crn_in=78735" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78735</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6980</TD>
<TD CLASS="dddefault">05</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S PROJECT</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ted T.C.  Ngai (<ABBR title= "Primary">P</ABBR>), Christopher S  Perry </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78736 201501" ID="action_id186">
<LABEL for=action_id186><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6980&amp;crn_in=78736" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78736</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6980</TD>
<TD CLASS="dddefault">06</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S PROJECT</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Carla   Leitao (<ABBR title= "Primary">P</ABBR>), Christopher S  Perry </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77995 201501" ID="action_id188">
<LABEL for=action_id188><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6980&amp;crn_in=77995" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77995</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6980</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S PROJECT</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">10:00 am-12:50 pm</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75626 201501" ID="action_id190">
<LABEL for=action_id190><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6990&amp;crn_in=75626" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75626</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">16</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ning   Xiang (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75627 201501" ID="action_id192">
<LABEL for=action_id192><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6990&amp;crn_in=75627" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75627</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">17</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jonas   Braasch (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77006 201501" ID="action_id194">
<LABEL for=action_id194><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=6990&amp;crn_in=77006" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77006</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Anna   Dyson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76581 201501" ID="action_id196">
<LABEL for=action_id196><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=9990&amp;crn_in=76581" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76581</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-15.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ning   Xiang (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76351 201501" ID="action_id198">
<LABEL for=action_id198><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=9990&amp;crn_in=76351" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76351</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-15.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Jonas   Braasch (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76811 201501" ID="action_id200">
<LABEL for=action_id200><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=9990&amp;crn_in=76811" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76811</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">06</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-15.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Russell P  Leslie (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76812 201501" ID="action_id202">
<LABEL for=action_id202><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=9990&amp;crn_in=76812" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76812</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">08</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-15.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Mariana G.  Figueiro (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75706 201501" ID="action_id204">
<LABEL for=action_id204><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=9990&amp;crn_in=75706" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75706</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-15.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Ted   Krueger (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76329 201501" ID="action_id206">
<LABEL for=action_id206><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=9990&amp;crn_in=76329" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76329</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-15.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nadarajah   Narendran (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76810 201501" ID="action_id208">
<LABEL for=action_id208><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARCH&amp;crse_in=9990&amp;crn_in=76810" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76810</A></TD>
<TD CLASS="dddefault">ARCH</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">80</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-15.000</TD>
<TD CLASS="dddefault">ARCHITECTURE DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Anna   Dyson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TH COLSPAN="26" CLASS="ddtitle" scope="colgroup" >Arts</TH>
</TR>
<TR>
<TH CLASS="ddheader" scope="col" >Select</TH>
<TH CLASS="ddheader" scope="col" ><ACRONYM title = "Course Reference Number">CRN</ACRONYM></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Subject>Subj</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Course>Crse</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Section>Sec</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = Campus>Cmp</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Credit Hours">Cred</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Title</TH>
<TH CLASS="ddheader" scope="col" >Days</TH>
<TH CLASS="ddheader" scope="col" >Time</TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Capacity">Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Actual">Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Section Remaining">Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Capacity">WL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Actual">WL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Waitlist Remaining">WL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Capacity">XL Cap</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Actual">XL Act</ABBR></TH>
<TH CLASS="ddheader" scope="col" ><ABBR title = "Crosslist Remaining">XL Rem</ABBR></TH>
<TH CLASS="ddheader" scope="col" >Instructor</TH>
<TH CLASS="ddheader" scope="col" >Date (<ABBR title = "month month">MM</ABBR>/<ABBR title = "day day">DD</ABBR>)</TH>
<TH CLASS="ddheader" scope="col" >Location</TH>
<TH CLASS="ddheader" scope="col" >Attribute</TH>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75323 201501" ID="action_id210">
<LABEL for=action_id210><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=1020&amp;crn_in=75323" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75323</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">1020</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">MEDIA STUDIO:IMAGING</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">17</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nathan Scott  Meltz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST AUD</TD>
<TD CLASS="dddefault">Introductory Level Course</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Nathan Scott  Meltz </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 214</TD>
<TD CLASS="dddefault">Introductory Level Course</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75324 201501" ID="action_id212">
<LABEL for=action_id212><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=1020&amp;crn_in=75324" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75324</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">1020</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">MEDIA STUDIO:IMAGING</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nathan Scott  Meltz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST AUD</TD>
<TD CLASS="dddefault">Introductory Level Course</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Nathan Scott  Meltz </TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">Introductory Level Course</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77904 201501" ID="action_id214">
<LABEL for=action_id214><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=1030&amp;crn_in=77904" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77904</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">1030</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">DIGITAL FILMMAKING</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">35</TD>
<TD CLASS="dddefault">32</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kathryn   High (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=1040&amp;crn_in=78684" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78684</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">1040</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ART FOR INTERACTIVE MEDIA</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">24</TD>
<TD CLASS="dddefault">-5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 214</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=1200&amp;crn_in=75332" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75332</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">1200</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">BASIC DRAWING</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kenneth A.  Ragsdale (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=1200&amp;crn_in=78143" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78143</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">1200</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">BASIC DRAWING</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kenneth A.  Ragsdale (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=1200&amp;crn_in=77962" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77962</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">1200</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">BASIC DRAWING</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kenneth A.  Ragsdale (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75462 201501" ID="action_id220">
<LABEL for=action_id220><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2010&amp;crn_in=75462" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75462</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2010</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INTERMEDIATE VIDEO</TD>
<TD CLASS="dddefault">MW</TD>
<TD CLASS="dddefault">06:00 pm-07:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Igor   Vamos (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2020&amp;crn_in=75383" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75383</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2020</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">COMPUTER MUSIC</TD>
<TD CLASS="dddefault">MW</TD>
<TD CLASS="dddefault">06:00 pm-07:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">22</TD>
<TD CLASS="dddefault">-3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Michael Campion  Leczinsky (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 110</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2040&amp;crn_in=75321" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75321</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2040</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INTERMEDIATE DIGITAL IMAGING</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nathan Scott  Meltz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 214</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77947 201501" ID="action_id224">
<LABEL for=action_id224><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2070&amp;crn_in=77947" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77947</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2070</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">GRAPHIC STORYTELLING</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">17</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nathan Scott  Meltz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 214</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2210&amp;crn_in=75333" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75333</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2210</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">SCULPTURE I</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Milo   Lazarevic (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 1211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2210&amp;crn_in=78144" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78144</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2210</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">SCULPTURE I</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Larry   Kagan (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 1211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75566 201501" ID="action_id228">
<LABEL for=action_id228><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2300&amp;crn_in=75566" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75566</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2300</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">RENSSELAER ORCHESTRA</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">06:00 pm-07:50 pm</TD>
<TD CLASS="dddefault">55</TD>
<TD CLASS="dddefault">40</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nicholas Jon  De Maison (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75565 201501" ID="action_id230">
<LABEL for=action_id230><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2310&amp;crn_in=75565" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75565</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2310</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">RENSSELAER CONCERT CHOIR</TD>
<TD CLASS="dddefault">TW</TD>
<TD CLASS="dddefault">07:00 pm-08:30 pm</TD>
<TD CLASS="dddefault">40</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">21</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nicholas Jon  De Maison (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST AUD</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2340&amp;crn_in=77888" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77888</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2340</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INTRO TO AFRO-CUBAN PERCUSSION</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">-4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST AUD</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2340&amp;crn_in=78147" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78147</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2340</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INTRO TO AFRO-CUBAN PERCUSSION</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">-4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST AUD</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2340&amp;crn_in=78815" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78815</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2340</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INTRO TO AFRO-CUBAN PERCUSSION</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">-4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2340&amp;crn_in=78816" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78816</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2340</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INTRO TO AFRO-CUBAN PERCUSSION</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">07:00 pm-08:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">-6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">07:00 pm-08:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2340&amp;crn_in=78817" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78817</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2340</TD>
<TD CLASS="dddefault">05</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INTRO TO AFRO-CUBAN PERCUSSION</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">07:00 pm-08:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">-6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">R</TD>
<TD CLASS="dddefault">07:00 pm-08:50 pm</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78145 201501" ID="action_id237">
<LABEL for=action_id237><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2350&amp;crn_in=78145" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78145</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2350</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">2.000</TD>
<TD CLASS="dddefault">CHAMBER MUSIC ENSEMBLE</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">08:00 pm-09:30 pm</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">31</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nicholas Jon  De Maison (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2360&amp;crn_in=78155" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78155</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2360</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000</TD>
<TD CLASS="dddefault">ROOTS OF AFRICA MUSIC ENSEMBLE</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">07:00 pm-08:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">-2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Eddie   Knowles (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78149 201501" ID="action_id240">
<LABEL for=action_id240><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2500&amp;crn_in=78149" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78149</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2500</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">HISTORY OF WESTERN MUSIC</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">50</TD>
<TD CLASS="dddefault">48</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Michael L.  Century (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 323</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2530&amp;crn_in=75738" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75738</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2530</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ART HISTORY I:FROM PALEOLITHIC TO RENAISSANCE</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">140</TD>
<TD CLASS="dddefault">142</TD>
<TD CLASS="dddefault">-2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Milo   Lazarevic (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 330</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2540&amp;crn_in=77522" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77522</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2540</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">THE MULTIMEDIA CENTURY</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Maryanne   Staniszewski (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 214</TD>
<TD CLASS="dddefault">Communication Intensive</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2560&amp;crn_in=78685" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78685</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2560</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ARTS HISTORY II</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">90</TD>
<TD CLASS="dddefault">90</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Milo   Lazarevic (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">DARRIN 330</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=2940&amp;crn_in=75639" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75639</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">2940</TD>
<TD CLASS="dddefault">00</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-6.000</TD>
<TD CLASS="dddefault">STUDIES IN THE ARTS</TD>
<TD COLSPAN="2" CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77508 201501" ID="action_id246">
<LABEL for=action_id246><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4020&amp;crn_in=77508" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77508</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4020</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ADV DIGITAL 3D PROJECTS</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Shawn A.  Lawson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4060&amp;crn_in=75322" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75322</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4060</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ANIMATION I</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Shawn A.  Lawson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4080&amp;crn_in=78266" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78266</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4080</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ART, COMMUNITY AND TECHNOLOGY</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">18</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Branda   Miller (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4130&amp;crn_in=77222" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77222</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4130</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">NEW MEDIA THEORY</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">18</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">Michael L.  Century (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 323</TD>
<TD CLASS="dddefault">Communication Intensive</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78150 201501" ID="action_id251">
<LABEL for=action_id251><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4200&amp;crn_in=78150" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78150</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4200</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ADVANCED DRAWING</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">17</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">17</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">Kenneth A.  Ragsdale (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78686 201501" ID="action_id253">
<LABEL for=action_id253><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4210&amp;crn_in=78686" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78686</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4210</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">SCULPTURE II</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Larry   Kagan (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 1211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78151 201501" ID="action_id255">
<LABEL for=action_id255><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4220&amp;crn_in=78151" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78151</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4220</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">PAINTING</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">Caren   Canier (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78687 201501" ID="action_id257">
<LABEL for=action_id257><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4260&amp;crn_in=78687" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78687</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4260</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">LILFE DRAWING AND ANATOMY FOR ARTISTS</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">Caren   Canier (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78152 201501" ID="action_id259">
<LABEL for=action_id259><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4400&amp;crn_in=78152" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78152</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4400</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">MUSIC THEORY II</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Nicholas Jon  De Maison (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75624 201501" ID="action_id261">
<LABEL for=action_id261><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4510&amp;crn_in=75624" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75624</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4510</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">EXPERIMENTAL GAME DESIGN</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kathleen   Ruiz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77511 201501" ID="action_id263">
<LABEL for=action_id263><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4510&amp;crn_in=77511" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77511</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4510</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">EXPERIMENTAL GAME DESIGN</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kathleen   Ruiz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78284 201501" ID="action_id265">
<LABEL for=action_id265><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4540&amp;crn_in=78284" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78284</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4540</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">GAME DEVELOPMENT II</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">17</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">58</TD>
<TD CLASS="dddefault">42</TD>
<TD CLASS="dddefault">16</TD>
<TD CLASS="dddefault">Benjamin Chia-Ming  Chang (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">TROY 2012</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78688 201501" ID="action_id267">
<LABEL for=action_id267><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4640&amp;crn_in=78688" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78688</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4640</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">SCIENCE FICTIONS</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">Kathryn   High (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78153 201501" ID="action_id269">
<LABEL for=action_id269><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4850&amp;crn_in=78153" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78153</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4850</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">CREATIVE SEMINAR II</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Branda   Miller (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4860&amp;crn_in=78691" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78691</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4860</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">ADVANCED DIGITAL IMAGING</TD>
<TD CLASS="dddefault">TR</TD>
<TD CLASS="dddefault">06:00 pm-07:50 pm</TD>
<TD CLASS="dddefault">16</TD>
<TD CLASS="dddefault">18</TD>
<TD CLASS="dddefault">-2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">-1</TD>
<TD CLASS="dddefault">Kathleen   Ruiz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4940&amp;crn_in=75640" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75640</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4940</TD>
<TD CLASS="dddefault">00</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-6.000</TD>
<TD CLASS="dddefault">STUDIES IN THE ARTS</TD>
<TD COLSPAN="2" CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4960&amp;crn_in=78693" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78693</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4960</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">INFLATABLES</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">06:00 pm-09:50 pm</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Igor   Vamos (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 214</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4961&amp;crn_in=78694" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78694</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4961</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">DEEP LISTENING & CREATIVITY</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">-15</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">18</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">Tomie   Hahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=4962&amp;crn_in=78811" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78811</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">4962</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">PERFORMANCE TECHNOLOGIES</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">12:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">-2</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">-3</TD>
<TD CLASS="dddefault">Curtis   Bahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77223 201501" ID="action_id276">
<LABEL for=action_id276><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6130&amp;crn_in=77223" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77223</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6130</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">NEW MEDIA THEORY</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">12:00 pm-01:50 pm</TD>
<TD CLASS="dddefault">6</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">18</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">Michael L.  Century (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 323</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78776 201501" ID="action_id278">
<LABEL for=action_id278><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6200&amp;crn_in=78776" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78776</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6200</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">ADVANCED DRAWING</TD>
<TD CLASS="dddefault">TF</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">17</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">Kenneth A.  Ragsdale (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78696 201501" ID="action_id280">
<LABEL for=action_id280><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6220&amp;crn_in=78696" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78696</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6220</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">PAINTING</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">Caren   Canier (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78690 201501" ID="action_id282">
<LABEL for=action_id282><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6260&amp;crn_in=78690" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78690</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6260</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">LIFE DRAWING AND ANATOMY FOR ARTISTS</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">08:00 am-09:50 am</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">14</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">Caren   Canier (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78279 201501" ID="action_id284">
<LABEL for=action_id284><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6400&amp;crn_in=78279" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78279</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6400</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">EXPERIMENTAL GAME DESIGN</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">02:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kathleen   Ruiz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6640&amp;crn_in=78689" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78689</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6640</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">SCIENCE FICTIONS</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">04:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">7</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">Kathryn   High (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6860&amp;crn_in=78692" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78692</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6860</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">ADVANCED DIGITAL IMAGING</TD>
<TD CLASS="dddefault">TR</TD>
<TD CLASS="dddefault">06:00 pm-07:50 pm</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">20</TD>
<TD CLASS="dddefault">-1</TD>
<TD CLASS="dddefault">Kathleen   Ruiz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">SAGE 2411</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77757 201501" ID="action_id288">
<LABEL for=action_id288><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6900&amp;crn_in=77757" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77757</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6900</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">ARTS PHD COLLOQUIUM</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">03:00 pm-05:50 pm</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Maryanne   Staniszewski (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 413</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6940&amp;crn_in=75641" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75641</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6940</TD>
<TD CLASS="dddefault">00</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-6.000</TD>
<TD CLASS="dddefault">STUDIES IN ELECTRONIC ARTS</TD>
<TD COLSPAN="2" CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6961&amp;crn_in=78695" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78695</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6961</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">4.000</TD>
<TD CLASS="dddefault">DEEP LISTENING & CREATIVITY</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">02:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">-3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">18</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">Tomie   Hahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 326</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78697 201501" ID="action_id292">
<LABEL for=action_id292><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6962&amp;crn_in=78697" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78697</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6962</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">GRADUATE STUDIO CRITIQUE</TD>
<TD CLASS="dddefault">W</TD>
<TD CLASS="dddefault">12:00 pm-02:50 pm</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Robert F.  Nideffer (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 413</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6963&amp;crn_in=78698" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78698</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6963</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">ART, COMMUNITY & TECH</TD>
<TD CLASS="dddefault">MR</TD>
<TD CLASS="dddefault">10:00 am-11:50 am</TD>
<TD CLASS="dddefault">4</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">3</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">19</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Branda   Miller (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 211</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault"><ABBR title = Closed>C</ABBR></TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6966&amp;crn_in=78260" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78260</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6966</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">3.000</TD>
<TD CLASS="dddefault">PERFORMANCE TECHNOLOGIES</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">12:00 pm-03:50 pm</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">13</TD>
<TD CLASS="dddefault">-1</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">12</TD>
<TD CLASS="dddefault">15</TD>
<TD CLASS="dddefault">-3</TD>
<TD CLASS="dddefault">Curtis   Bahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault">WEST 118</TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76597 201501" ID="action_id296">
<LABEL for=action_id296><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=76597" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76597</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kathryn   High (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76662 201501" ID="action_id298">
<LABEL for=action_id298><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=76662" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76662</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Neil B  Rolnick (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76843 201501" ID="action_id300">
<LABEL for=action_id300><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=76843" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76843</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Igor   Vamos (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="75351 201501" ID="action_id302">
<LABEL for=action_id302><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=75351" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">75351</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Tomie   Hahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76931 201501" ID="action_id304">
<LABEL for=action_id304><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=76931" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76931</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">05</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Curtis   Bahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77583 201501" ID="action_id306">
<LABEL for=action_id306><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=77583" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77583</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">06</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Michael L.  Century (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78006 201501" ID="action_id308">
<LABEL for=action_id308><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=78006" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78006</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">07</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Benjamin Chia-Ming  Chang (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76425 201501" ID="action_id310">
<LABEL for=action_id310><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=76425" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76425</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">08</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Shawn A.  Lawson (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="76853 201501" ID="action_id312">
<LABEL for=action_id312><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=76853" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">76853</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">09</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Branda   Miller (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78827 201501" ID="action_id314">
<LABEL for=action_id314><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=78827" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78827</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kathleen   Ruiz (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78844 201501" ID="action_id316">
<LABEL for=action_id316><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=6990&amp;crn_in=78844" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78844</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">6990</TD>
<TD CLASS="dddefault">11</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-9.000</TD>
<TD CLASS="dddefault">MASTER'S THESIS</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">1</TD>
<TD CLASS="dddefault">9</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Pauline   Oliveros (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77005 201501" ID="action_id318">
<LABEL for=action_id318><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=9990&amp;crn_in=77005" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77005</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">01</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Maryanne   Staniszewski (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77082 201501" ID="action_id320">
<LABEL for=action_id320><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=9990&amp;crn_in=77082" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77082</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">02</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Curtis   Bahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="77843 201501" ID="action_id322">
<LABEL for=action_id322><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=9990&amp;crn_in=77843" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">77843</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">03</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Tomie   Hahn (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78379 201501" ID="action_id324">
<LABEL for=action_id324><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=9990&amp;crn_in=78379" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78379</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">04</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">2</TD>
<TD CLASS="dddefault">8</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Michael L.  Century (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78394 201501" ID="action_id326">
<LABEL for=action_id326><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=9990&amp;crn_in=78394" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78394</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">05</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">10</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Robert F.  Nideffer (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
<TR>
<TD CLASS="dddefault">
<INPUT TYPE="checkbox" NAME="sel_crn" VALUE="78482 201501" ID="action_id328">
<LABEL for=action_id328><SPAN class="fieldlabeltextinvisible">add to worksheet</SPAN></LABEL>
<INPUT TYPE="hidden" NAME="assoc_term_in" VALUE="201501">
</TD>
<TD CLASS="dddefault"><A HREF="/rss/bwckschd.p_disp_listcrse?term_in=201501&amp;subj_in=ARTS&amp;crse_in=9990&amp;crn_in=78482" onMouseOver="window.status='Detail';  return true" onFocus="window.status='Detail';  return true" onMouseOut="window.status='';  return true"onBlur="window.status='';  return true">78482</A></TD>
<TD CLASS="dddefault">ARTS</TD>
<TD CLASS="dddefault">9990</TD>
<TD CLASS="dddefault">08</TD>
<TD CLASS="dddefault">T</TD>
<TD CLASS="dddefault">1.000-12.000</TD>
<TD CLASS="dddefault">DISSERTATION</TD>
<TD CLASS="dddefault">&nbsp;</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">5</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">0</TD>
<TD CLASS="dddefault">Kathryn   High (<ABBR title= "Primary">P</ABBR>)</TD>
<TD CLASS="dddefault">01/26-05/22</TD>
<TD CLASS="dddefault"><ABBR title = "To Be Announced">TBA</ABBR></TD>
<TD CLASS="dddefault">&nbsp;</TD>
</TR>
</TABLE>
<BR>
<INPUT TYPE="submit" NAME="ADD_BTN" VALUE="Register">
<INPUT TYPE="submit" NAME="ADD_BTN" VALUE="Add to WorkSheet">
<INPUT TYPE="submit" NAME="ADD_BTN" VALUE="New Search">
</FORM>

<!--  ** START OF twbkwbis.P_CloseDoc **  -->
<TABLE  CLASS="plaintable" SUMMARY="This is table displays line separator at end of the page."
                                             WIDTH="100%" cellSpacing=0 cellPadding=0 border=0><TR><TD class="bgtabon" width="100%" colSpan=2><IMG SRC="/wtlgifs/web_transparent.gif" ALT="Transparent Image" CLASS="headerImg" TITLE="Transparent Image"  NAME="web_transparent" HSPACE=0 VSPACE=0 BORDER=0 HEIGHT=3 WIDTH=10></TD></TR></TABLE>
<A HREF="#top" onMouseover="window.status='Skip to top of page'; return true" onMouseout="window.status=''; return true" OnFocus="window.status='Skip to top of page'; return true" onBlur="window.status=''; return true" class="skiplinks">Skip to top of page</A>
</DIV>
<DIV class="footerbeforediv">

</DIV>
<DIV class="footerlinksdiv">
<SPAN class="pagefooterlinks">
<MAP NAME="Search_Results_Links_F" title="Search Results Links">
<p>
<A HREF="#skip_Search_Results_Links_F" onMouseover="window.status='Skip Search Results Links'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Skip Search Results Links'; return true" onBlur="window.status=''; return true"  class="skiplinks">Skip Search Results Links</A>
<P>[ <A HREF="/rss/bwskfshd.P_CrseSchd" onMouseover="window.status='Student Schedule by Day & Time'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Student Schedule by Day & Time'; return true" onBlur="window.status=''; return true" >Student Schedule by Day & Time</A>
 | <A HREF="/rss/bwskfshd.P_CrseSchdDetl" onMouseover="window.status='Student Detail Schedule'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Student Detail Schedule'; return true" onBlur="window.status=''; return true" >Student Detail Schedule</A>
 ]
</MAP>
</SPAN>
<a name="skip_Search_Results_Links_F"></a>
</DIV>
<DIV class="footerlinksdiv">
<SPAN class="pagefooterlinks">
<MAP NAME="Registration_Links_F" title="Registration Links">
<p>
<A HREF="#skip_Registration_Links_F" onMouseover="window.status='Skip Registration Links'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Skip Registration Links'; return true" onBlur="window.status=''; return true"  class="skiplinks">Skip Registration Links</A>
<P>[ <A HREF="http://srfs.rpi.edu/setup.do" onMouseover="window.status='Office of the Registrar'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Office of the Registrar'; return true" onBlur="window.status=''; return true" >Office of the Registrar</A>
 | <A HREF="http://www.rpi.edu/academics/catalog/" onMouseover="window.status='Catalog'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Catalog'; return true" onBlur="window.status=''; return true" >Catalog</A>
 | <A HREF="http://alac.rpi.edu" onMouseover="window.status='Advising & Learning Assistance Center'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Advising & Learning Assistance Center'; return true" onBlur="window.status=''; return true" >Advising & Learning Assistance Center</A>
 | <A HREF="http://sis.rpi.edu/update.htm" onMouseover="window.status='System Availability'; return true" onMouseout="window.status=''; return true" onFocus="window.status='System Availability'; return true" onBlur="window.status=''; return true" >System Availability</A>
 | <A HREF="/reg/z_reg_info_main.htm" onMouseover="window.status='Trouble Shooting'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Trouble Shooting'; return true" onBlur="window.status=''; return true" >Trouble Shooting</A>
 | <A HREF="mailto:financial_aid@rpi.edu" onMouseover="window.status='Email Financial Aid'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Email Financial Aid'; return true" onBlur="window.status=''; return true" >Email Financial Aid</A>
 | <A HREF="mailto:bursar@rpi.edu" onMouseover="window.status='Email Bursar'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Email Bursar'; return true" onBlur="window.status=''; return true" >Email Bursar</A>
 | <A HREF="mailto:registrar@rpi.edu" onMouseover="window.status='Email Registrar'; return true" onMouseout="window.status=''; return true" onFocus="window.status='Email Registrar'; return true" onBlur="window.status=''; return true" >Email Registrar</A>
 ]
</MAP>
</SPAN>
<a name="skip_Registration_Links_F"></a>
</DIV>
<DIV class="footerafterdiv">

</DIV>
<DIV class="globalafterdiv">

</DIV>
<DIV class="globalfooterdiv">

</DIV>
<DIV class="pagefooterdiv">
<SPAN class="releasetext">Release: 8.5.2.1</SPAN>
</DIV>
<DIV class="poweredbydiv">
</DIV>
<DIV class="div1"></DIV>
<DIV class="div2"></DIV>
<DIV class="div3"></DIV>
<DIV class="div4"></DIV>
<DIV class="div5"></DIV>
<DIV class="div6"></DIV>
<div class="banner_copyright"> <br><h5>© 2014 Ellucian Company L.P. and its affiliates.<br></h5></div>
</BODY>
</HTML>
