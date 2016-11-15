<?php 
/*
*combined management menu block, only on pages: islandora/object/*
this is php code taken from a block that Tom created
*
*/
//functions

function admin_manage_coll() {
	$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$endofurl = basename($actual_link);
	$start_of_link = "/islandora/object/";
	
	$end_of_link = "/manage/overview/ingest";
        $full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Add file or collection</a></p>";  //add file/collection
	
	$end_of_link = "/datastream/MODS/edit";
	$full_link = $start_of_link . $endofurl . $end_of_link;
        print "<p><a href='$full_link'>* Edit collection information</a></p>"; //edit
	
	$end_of_link = "/manage/collection";
	$full_link = $start_of_link . $endofurl . $end_of_link;
        print "<p><a href='$full_link'>* Batch import to this collection</a></p>";  //batch upload
	
	$end_of_link = "/manage/collection";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Share / Migrate / Delete files</a></p>";  //share or migrate or delete collection members

    $end_of_link = "/manage/properties";
    $full_link = $start_of_link . $endofurl . $end_of_link ;
    print "<p><a href='$full_link'>* Delete collection</a></p>";  // delete  collection

        $end_of_link = "/manage/datastreams";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Manage datastreams</a></p>";  //manage datastreams
	
	$end_of_link = "/manage/xacml";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Set access policy</a></p>";  //set policy
}

function admin_manage_file() {
	$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$endofurl = basename($actual_link);
	$start_of_link = "/islandora/object/";
	
	$end_of_link = "/datastream/MODS/edit";
    $full_link = $start_of_link . $endofurl . $end_of_link;
    print "<p><a href='$full_link'>* Edit file information</a></p>"; //edit
	
	$end_of_link = "/manage/object/migrate";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Move file to a collection</a></p>";  //move

    $end_of_link = "/manage/object/share";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Share with another collection</a></p>";  //share
        
    $end_of_link = "/manage/properties";
    $full_link = $start_of_link . $endofurl . $end_of_link ;
    print "<p><a href='$full_link'>* Delete / Regenerate file</a></p>";  //delete regenerate file 

    $end_of_link = "/manage/compound";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Add to Compound Object</a></p>";  //manage compound

        $end_of_link = "/manage/datastreams";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Manage datastreams</a></p>";  //manage datastream

	$end_of_link = "/manage/xacml";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Set access policy</a></p>";  //set policy
}

function manage_citation() {
        $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$endofurl = basename($actual_link);
	$start_of_link = "/islandora/object/";
         
        $end_of_link = '/manage/embargo';
        $full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Embargo Citation</a></p>";  //embargo file

        $end_of_link = '/islandora_scholar_upload';
        $full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Upload Citation PDF</a></p>";  //upload pdf

        $end_of_link = '/islandora_scholar_romeo';
        $full_link = $start_of_link . $endofurl . $end_of_link;
}

function user_manage_coll() {
	$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$endofurl = basename($actual_link);
	$start_of_link = "/islandora/object/";
	$end_of_link = "/manage/overview/ingest";
	
    $full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Add file or collection</a></p>";  //add file/collection
	
	$end_of_link = "/datastream/MODS/edit";
    $full_link = $start_of_link . $endofurl . $end_of_link;
    print "<p><a href='$full_link'>* Edit collection information</a></p>"; //edit
	
	$end_of_link = "/manage/collection";
    $full_link = $start_of_link . $endofurl . $end_of_link;
    print "<p><a href='$full_link'>* Batch import to this collection</a></p>";  //batch upload
	
	$end_of_link = "/manage/collection";
	$full_link = $start_of_link . $endofurl . $end_of_link;
	//print "<p><a href='$full_link'>* Share / Migrate collection files</a></p>";  //share or migrate collection members

    $end_of_link = "/manage/properties";
    $full_link = $start_of_link . $endofurl . $end_of_link ;
    print "<p><a href='$full_link'>* Delete collection</a></p>";  //delete collection
}

function user_manage_file() {
	$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$endofurl = basename($actual_link);
	$start_of_link = "/islandora/object/";
	
	$end_of_link = "/datastream/MODS/edit";
    $full_link = $start_of_link . $endofurl . $end_of_link;
    print "<p><a href='$full_link'>* Edit file information</a></p>"; //edit
	
    $end_of_link = "/manage/properties";
    $full_link = $start_of_link . $endofurl . $end_of_link ;
    print "<p><a href='$full_link'>* Delete file </a></p>";  //delete file
}

function user_add_batch_to_coll() {
    $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	$endofurl = basename($actual_link);
	$start_of_link = "/islandora/object/";
    $end_of_link = "/manage/overview/ingest";
    $full_link = $start_of_link . $endofurl . $end_of_link;
	print "<p><a href='$full_link'>* Add file or collection</a></p>";  //add file/collection
    $end_of_link = "/manage/collection";
    $full_link = $start_of_link . $endofurl . $end_of_link;
    print "<p><a href='$full_link'>* Batch import to this collection</a></p>";  //batch upload
}
       
//variables
$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$endofurl = basename($actual_link);
$namePart = FALSE;
$allowed_pid = TRUE;
$admin_role = FALSE;
$is_collection = FALSE;
$is_citation = FALSE;
$write_admin_menu = FALSE;
$sub_theme_member = FALSE;
$user = $GLOBALS['user'];
$uid = $user->uid;
$realname = '';
$username = '';
$uploader = '';
$subtheme = '';
$subtheme_num ='';
$userAccess = '';
//procedure
if ($uid >0) {
	$account = user_load($uid);
	$username = $account->name;
        $realname = $account->realname;
        //print 'Username = ' . $username . '<br />';  ///////////////
	//if administrator login
	if($username == 'admin') {
		$admin_role = TRUE;
		//print '<br /> admin logged in';  ////////
      }
/////////////////////
// Annabel and Ryan Drew temporary special access - does not grant more that XACML will allow
/*  ///removed because does not allow edit of non-created files or collections
if($username == 'Ryan Drew' || $username == 'Annabel J. Cohen') {
		$namePart = TRUE;
                //print '<br />Ryan Drew';
	}
*/
///////////////////////////

//restricted URLS for members to ingest or edit
$endofpid = array(substr($endofurl, 7));

// array of restricted endofpids  /////////////////////////////////////////////////////////////////////////////////////////////////////
$non_allowed_endofpid = array('1982', '2545', '2231', '2232', '2533', '2241', '2462', '2467', '2472', '2493', '2494', '2495', '2507', '2508', '2509');
if(count(array_intersect($endofpid, $non_allowed_endofpid)) > 0) {
    $allowed_pid = FALSE;

}
	
         $num = substr($endofurl, 7);
         $pid = 'airs' .'%3A' .$num;     
	$object = islandora_object_load($pid);
	
	//check for authenticated user and islandora pages not allowed to add to or edit
	$allowed_roles = array('authenticated user');
	if(count(array_intersect($user->roles, $allowed_roles)) > 0){
	   if($endofurl != 'airs%3Adl' && $endofurl != 'xacml' && $endofurl != 'ingest' && $endofurl != 'batch_import' && $endofurl != 'properties' && $endofurl != 'migrate' && $endofurl != 'manage'  && $endofurl != 'version' && $endofurl != 'datastreams'){ 
	   
			if($object){
				if (strcmp($object->models[0], 'islandora:collectionCModel') == 0) {
					$is_collection = TRUE;  //object is collection
				}
                                if (strcmp($object->models[0], 'ir:citationCModel') == 0) {   //is citation
	                                $is_citation = TRUE; 
                                        //print '<br />object is citation'; 
				}
                                if (strcmp($object->models[0], 'islandora:citationCModel') == 0) {
					$is_citation = TRUE;  //object is citaion
                                }
                                			
 				$uploader = $object->owner;
			        
				$modsDatastream = $object['MODS'];
                                
				$modsString = $modsDatastream->getContent('');
                                				
				//mods field-values for namePart and restriction on access into arrays
				preg_match_all ("/<namePart>(.*)<\/namePart>/U", $modsString, $matches);
				preg_match_all ("/<accessCondition type=\"restriction on access\">(.*)<\/accessCondition>/U", $modsString, $accessMatches);
          
                //mods field-values for object sub-theme
                preg_match_all ("/<genre type=\"themes\">(.*)<\/genre>/U", $modsString, $subthemeMatches);
                
				$count = count($subthemeMatches[1]); //= 2
                                //print '<br /> count subtheme matches = ' .$count;  //// 
				if($count > 0){
					for($i = 0; $i < $count; $i++){
                                           if(substr($subthemeMatches[1][$i], 0, 8) == 'Subtheme') {
                                               $subtheme = 'st'.substr($subthemeMatches[1][$i], 9, 3);
                                               $subtheme_num = substr($subtheme, 2);
                                               if(in_array($subtheme, $account->roles)) {
		                                  $sub_theme_member = TRUE;
		                                 
                               }
                               else{  
                               }
						
                        } //if(substr
    
					} //for($i = 0...)
				} //if($count > 0)

				//determine level of object access from the access array
				$userAccess =  trim($accessMatches[1][0]);  //ok
				flush();   //clear write buffers
                                If($is_citation == TRUE) {  }
                                else {          ///////// top of menu readout
                                   print '<b><span style="font-family:arial; font-size:12px; color:#3D5C99;">';
                                 //print 'Access:&nbsp;&nbsp;' .$userAccess . '</span></b>'; 
                                   print $userAccess . '</span></b>';
                                   if($subtheme_num){
                                         print  '<b><span style="font-family:arial; font-size:12px; color:#3D5C99;">';
                                         print ',&nbsp;' .$subtheme_num . '</span></b>';
                                   }
                                }

                //check if $username = namePart value in mods
				$count = count($matches[1]); //= 3
				if($count > 0){
					for($i = 0; $i < $count; $i++){
						if($username == $matches[1][$i]) { 
							//print '<br />namePart match';    ///////
							$namePart = TRUE;
						}
						else{  
                                                    //print '<br />namePart no match';
						}
					} //for($i = 0...)
				} //if($count > 0)
				
				//display menus for appropriate user  
				if ($is_collection == TRUE) {            //coll exits, check $username role
					if($endofurl == 'airs%3Atheme1' || $endofurl == 'airs%3Atheme2' || $endofurl ==  'airs%3Atheme3') {											   
						if($admin_role == TRUE) {
                                                      admin_manage_coll();
                                       }
                                         
				}
					else {   //not a theme collection
						if($admin_role == TRUE) {
							admin_manage_coll();
                                                }
						else if($namePart == TRUE || $uploader == $username) {   //not admin 
							user_manage_coll();	         				
						}                                            
                                                else if($sub_theme_member == TRUE && $userAccess == 'My sub-theme') {      //member of subtheme
                                                         user_manage_coll();
                                               }
                                               else {   //not admin,  uploader, owner, subtheme member
                                                     $allowed_roles2 = array('Member');
	                                             if(count(array_intersect($user->roles, $allowed_roles2)) > 0 && $allowed_pid == TRUE)	
                                                          user_add_batch_to_coll(); 
                                              }							
					} //else
				}  //if is_collection
					else {            //is existing file
					if ($admin_role == TRUE) {
						admin_manage_file();
					    if($is_citation == TRUE)
							manage_citation();
					}
					else if ($namePart == TRUE || $uploader == $username) {        //namePart or uploader
						user_manage_file();
                                                if($is_citation == TRUE)
							manage_citation();					
					}
                                        else if ($sub_theme_member == TRUE && $userAccess == 'My sub-theme') {      //member of subtheme
                                                   user_manage_file();
                                                   if($is_citation == TRUE)
							manage_citation();
                    }

				} //is file
				
			}  //if(object)
			else{
				//print '<br />object not loaded';
			}
		

		}  //if($endofurl != 'airs%3Adl'  &&
	
	}  //if(count(array_intersect($user->roles
}  //usid > 0


?>