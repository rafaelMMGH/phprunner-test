<?php
$tdataactivities = array();
$tdataactivities[".searchableFields"] = array();
$tdataactivities[".ShortName"] = "activities";
$tdataactivities[".OwnerID"] = "";
$tdataactivities[".OriginalTable"] = "activities";


$tdataactivities[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataactivities[".originalPagesByType"] = $tdataactivities[".pagesByType"];
$tdataactivities[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataactivities[".originalPages"] = $tdataactivities[".pages"];
$tdataactivities[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataactivities[".originalDefaultPages"] = $tdataactivities[".defaultPages"];

//	field labels
$fieldLabelsactivities = array();
$fieldToolTipsactivities = array();
$pageTitlesactivities = array();
$placeHoldersactivities = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsactivities["English"] = array();
	$fieldToolTipsactivities["English"] = array();
	$placeHoldersactivities["English"] = array();
	$pageTitlesactivities["English"] = array();
	$fieldLabelsactivities["English"]["id"] = "Id";
	$fieldToolTipsactivities["English"]["id"] = "";
	$placeHoldersactivities["English"]["id"] = "";
	$fieldLabelsactivities["English"]["title"] = "Title";
	$fieldToolTipsactivities["English"]["title"] = "";
	$placeHoldersactivities["English"]["title"] = "";
	$fieldLabelsactivities["English"]["status"] = "Status";
	$fieldToolTipsactivities["English"]["status"] = "";
	$placeHoldersactivities["English"]["status"] = "";
	$fieldLabelsactivities["English"]["priority"] = "Priority";
	$fieldToolTipsactivities["English"]["priority"] = "";
	$placeHoldersactivities["English"]["priority"] = "";
	$fieldLabelsactivities["English"]["created_at"] = "Created At";
	$fieldToolTipsactivities["English"]["created_at"] = "";
	$placeHoldersactivities["English"]["created_at"] = "";
	if (count($fieldToolTipsactivities["English"]))
		$tdataactivities[".isUseToolTips"] = true;
}


	$tdataactivities[".NCSearch"] = true;



$tdataactivities[".shortTableName"] = "activities";
$tdataactivities[".nSecOptions"] = 0;

$tdataactivities[".mainTableOwnerID"] = "";
$tdataactivities[".entityType"] = 0;
$tdataactivities[".connId"] = "todo_at_localhost";


$tdataactivities[".strOriginalTableName"] = "activities";

	



$tdataactivities[".showAddInPopup"] = false;

$tdataactivities[".showEditInPopup"] = false;

$tdataactivities[".showViewInPopup"] = false;

$tdataactivities[".listAjax"] = false;
//	temporary
//$tdataactivities[".listAjax"] = false;

	$tdataactivities[".audit"] = false;

	$tdataactivities[".locking"] = false;


$pages = $tdataactivities[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataactivities[".edit"] = true;
	$tdataactivities[".afterEditAction"] = 1;
	$tdataactivities[".closePopupAfterEdit"] = 1;
	$tdataactivities[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataactivities[".add"] = true;
$tdataactivities[".afterAddAction"] = 1;
$tdataactivities[".closePopupAfterAdd"] = 1;
$tdataactivities[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataactivities[".list"] = true;
}



$tdataactivities[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataactivities[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataactivities[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataactivities[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataactivities[".printFriendly"] = true;
}



$tdataactivities[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataactivities[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataactivities[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataactivities[".isUseAjaxSuggest"] = true;

$tdataactivities[".rowHighlite"] = true;





$tdataactivities[".ajaxCodeSnippetAdded"] = false;

$tdataactivities[".buttonsAdded"] = false;

$tdataactivities[".addPageEvents"] = true;

// use timepicker for search panel
$tdataactivities[".isUseTimeForSearch"] = false;


$tdataactivities[".badgeColor"] = "778899";


$tdataactivities[".allSearchFields"] = array();
$tdataactivities[".filterFields"] = array();
$tdataactivities[".requiredSearchFields"] = array();

$tdataactivities[".googleLikeFields"] = array();
$tdataactivities[".googleLikeFields"][] = "id";
$tdataactivities[".googleLikeFields"][] = "title";
$tdataactivities[".googleLikeFields"][] = "status";
$tdataactivities[".googleLikeFields"][] = "priority";
$tdataactivities[".googleLikeFields"][] = "created_at";



$tdataactivities[".tableType"] = "list";

$tdataactivities[".printerPageOrientation"] = 0;
$tdataactivities[".nPrinterPageScale"] = 100;

$tdataactivities[".nPrinterSplitRecords"] = 40;

$tdataactivities[".geocodingEnabled"] = false;










$tdataactivities[".pageSize"] = 20;

$tdataactivities[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataactivities[".strOrderBy"] = $tstrOrderBy;

$tdataactivities[".orderindexes"] = array();


$tdataactivities[".sqlHead"] = "SELECT id,  	title,  	status,  	priority,  	created_at";
$tdataactivities[".sqlFrom"] = "FROM activities";
$tdataactivities[".sqlWhereExpr"] = "";
$tdataactivities[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataactivities[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataactivities[".arrGroupsPerPage"] = $arrGPP;

$tdataactivities[".highlightSearchResults"] = true;

$tableKeysactivities = array();
$tableKeysactivities[] = "id";
$tdataactivities[".Keys"] = $tableKeysactivities;


$tdataactivities[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "activities";
	$fdata["Label"] = GetFieldLabel("activities","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataactivities["id"] = $fdata;
		$tdataactivities[".searchableFields"][] = "id";
//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "activities";
	$fdata["Label"] = GetFieldLabel("activities","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataactivities["title"] = $fdata;
		$tdataactivities[".searchableFields"][] = "title";
//	status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "status";
	$fdata["GoodName"] = "status";
	$fdata["ownerTable"] = "activities";
	$fdata["Label"] = GetFieldLabel("activities","status");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "status";

		$fdata["sourceSingle"] = "status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "status";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataactivities["status"] = $fdata;
		$tdataactivities[".searchableFields"][] = "status";
//	priority
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "priority";
	$fdata["GoodName"] = "priority";
	$fdata["ownerTable"] = "activities";
	$fdata["Label"] = GetFieldLabel("activities","priority");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "priority";

		$fdata["sourceSingle"] = "priority";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "priority";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataactivities["priority"] = $fdata;
		$tdataactivities[".searchableFields"][] = "priority";
//	created_at
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "created_at";
	$fdata["GoodName"] = "created_at";
	$fdata["ownerTable"] = "activities";
	$fdata["Label"] = GetFieldLabel("activities","created_at");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "created_at";

		$fdata["sourceSingle"] = "created_at";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "created_at";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
		
		
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdataactivities["created_at"] = $fdata;
		$tdataactivities[".searchableFields"][] = "created_at";


$tables_data["activities"]=&$tdataactivities;
$field_labels["activities"] = &$fieldLabelsactivities;
$fieldToolTips["activities"] = &$fieldToolTipsactivities;
$placeHolders["activities"] = &$placeHoldersactivities;
$page_titles["activities"] = &$pageTitlesactivities;


changeTextControlsToDate( "activities" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["activities"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["activities"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_activities()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	title,  	status,  	priority,  	created_at";
$proto0["m_strFrom"] = "FROM activities";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "activities",
	"m_srcTableName" => "activities"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "activities";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "activities",
	"m_srcTableName" => "activities"
));

$proto8["m_sql"] = "title";
$proto8["m_srcTableName"] = "activities";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "status",
	"m_strTable" => "activities",
	"m_srcTableName" => "activities"
));

$proto10["m_sql"] = "status";
$proto10["m_srcTableName"] = "activities";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "priority",
	"m_strTable" => "activities",
	"m_srcTableName" => "activities"
));

$proto12["m_sql"] = "priority";
$proto12["m_srcTableName"] = "activities";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "created_at",
	"m_strTable" => "activities",
	"m_srcTableName" => "activities"
));

$proto14["m_sql"] = "created_at";
$proto14["m_srcTableName"] = "activities";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "activities";
$proto17["m_srcTableName"] = "activities";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "title";
$proto17["m_columns"][] = "status";
$proto17["m_columns"][] = "priority";
$proto17["m_columns"][] = "created_at";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "activities";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "activities";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="activities";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_activities = createSqlQuery_activities();


	
		;

					

$tdataactivities[".sqlquery"] = $queryData_activities;



include_once(getabspath("include/activities_events.php"));
$tdataactivities[".hasEvents"] = true;

?>