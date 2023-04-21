//  Web
$g_reauthentication_expiry = 10*600;
$g_show_realname = ON;

//new access categories

	//config-constant.inc.php
	define( 'ANYBODY', 0 );
	define( 'VIEWER', 10 );
	define( 'REPORTER', 25 );
	define( 'UPDATER', 40 );
	define( 'DEVELOPER', 55 );
	define( 'KIEROWNIK I-E', 74 );
	define( 'DYREKTOR I-E', 75 );
	define( 'KSIEGOWOSC', 80 );
	define( 'DYREKTOR', 84 );
	define( 'MANAGER', 85 );
	define( 'ADMINISTRATOR', 90 );
	define( 'NOBODY', 100 );

	//config_defaults_inc.php
	$g_access_levels_enum_string = 
	'25:Reporter,55:Developer,74:Kierownik_i-e,75:Dyrektor_i-e,80:Ksiegowosc,84:Dyrektor,90:Administrator';

	//lang-string_polish.txt
	$s_access_levels_enum_string = '25:Zgłaszający,55:Wykonawca,74:Kierownik_i-e,75:Dyrektor_i-e,80:Księgowość,84:Dyrektor,90:Administrator';

// email notifications

	$g_email_receive_own = OFF; 
	$g_default_notify_flags = array( 
		'reporter' => ON, 
		'handler' => ON, 
		'monitor' => ON, 
		'bugnotes' => ON, 
		'category' => ON, 
		'threshold_min' => NOBODY, 
		'threshold_max' => NOBODY 
	); 
	$g_notify_flags['new'] = array( 
		'threshold_min' => DEVELOPER,
		'threshold_max' => DYREKTOR,  
	);
	/*
	$g_notify_flags['owner'] = array(
		'threshold_min' => DEVELOPER,
		'threshold_max' => DYREKTOR_I-E,
	);
	*/


//new statuses

	//config-constant.inc.php
	define( 'FEEDBACK', 20 );
	define( 'ACKNOWLEDGED', 30 );
	define( 'CONFIRMED', 40 );
	define( 'ASSIGNED', 50 );
	define( 'ZAMOWIONE', 51 );
	define( 'ZLECONE', 52 );
	define( 'PROFORMA', 53 );
	define( 'OPLACONE', 54 );
	define( 'TRANSPORT', 55 );
	define( 'ZREALIZOWANE', 56 );
	define( 'RESOLVED', 80 );
	define( 'CLOSED', 90 );

	//config_defaults_inc.php
	$g_status_enum_string = 
	'10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,51:zamowione,52:zlecone,53:proforma,54:oplacone,55:transport,56:zrealizowane,80:resolved,90:closed';
	$g_status_colors = array(
	'new'          => '#ff0000', # red    (red		   #ff0000)
	'feedback'     => '#e3b7eb', # purple (plum        #75507b)
	'acknowledged' => '#ffcd85', # orange (orango      #f57900)
	'confirmed'    => '#22913a', # green  (butter      #22913a)
	'assigned'     => '#d2f5b0', # green  (chameleon   #8ae234)
	'zamowione'    => '#f5ed02', # yelow  (yelow       #f5ed02)
	'zlecone'      => '#c2dfff', # blue   (sky blue    #729fcf)
	'proforma'     => '#ffcd85', # orange (orango      #f57900)
	'oplacone'     => '#e3b7eb', # purple (plum        #75507b)
	'transport'    => '#3c7fd3', # blue   (sky blue    #3c7fd3)
	'zrealizowane' => '#06f502', # grey   (aluminum    #06f502)
	'resolved'     => '#d2f5b0', # green  (chameleon   #8ae234)
	'closed'       => '#c9ccc4', # grey   (aluminum    #babdb6)
	);

// preview

	//config_defaults_inc.php
	$g_bug_view_page_fields = array(
	'attachments',
	'category_id',
	'date_submitted',
	'due_date',
	'handler',
	'id',
	'project',
	'reporter',
	'status',
	'summary',
	'target_version',
	'view_state',
	'description',
	);


// report

	$g_bug_report_page_fields = array(
	'id',
	'summary',
	'attachments',
	'category_id',
	'date_submitted',
	'due_date',
	'handler',
	'project',
	'reporter',
	'status',
	'target_version',
	'view_state',
	);

// edit

	$g_bug_update_page_fields = array(
	'attachments',
	'category_id',
	'date_submitted',
	'due_date',
	'handler',
	'id',
	'project',
	'reporter',
	'status',
	'summary',
	'target_version',
	'view_state',
	'description',
	);

// print

	$g_print_issues_page_columns = array(
	'attachments',
	'category_id',
	'date_submitted',
	'due_date',
	'handler',
	'id',
	'project',
	'reporter',
	'status',
	'summary',
	'target_version',
	'view_state',
	'description',
	);

// csv

	$g_csv_columns = array(
	'attachments',
	'category_id',
	'date_submitted',
	'due_date',
	'handler',
	'id',
	'project',
	'reporter',
	'status',
	'summary',
	'target_version',
	'view_state',
	'description',
	);

// excel

	$g_excel_columns = array(
	'id',
	'attachments',
	'category_id',
	'date_submitted',
	'due_date',
	'handler',
	'id',
	'project',
	'reporter',
	'status',
	'summary',
	'target_version',
	'view_state',
	'description',
	);

// home page

$g_default_home_page = 'view_all_bug_page.php';


// "my view" page elements

$g_my_view_boxes = array(
	'assigned'      => '0',
	'unassigned'    => '0',
	'reported'      => '1',
	'resolved'      => '0',
	'recent_mod'    => '0',
	'monitored'     => '2',
	'feedback'      => '0',
	'verify'        => '0',
	'my_comments'   => '0'
	);

// menu

$g_show_project_menu_bar = ON;
