<?php
/**
 * Kunena Component
 * @package        Kunena.Framework
 *
 * @copyright      Copyright (C) 2008 - 2021 Kunena Team. All rights reserved.
 * @copyright      Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved.
 * @license        https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @license        https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link           https://www.kunena.org
 *
 * Based on FireBoard Component
 * @link           http://www.bestofjoomla.com
 **/
defined('_JEXEC') or die();

use Joomla\CMS\Factory;
use Joomla\CMS\Object\CMSObject;

/**
 * Class KunenaConfig
 * @since Kunena
 */
class KunenaConfig extends CMSObject
{
	/**
	 * @var    integer  ID; input, hidden
	 * @since  1.5.2
	 */
	public $id = 0;

	/**
	 * @var    string  Board Title; input, text
	 * @since  1.0.0
	 */
	public $board_title = 'Kunena';

	/**
	 * @var    string  Email; input, email
	 * @since  1.0.0
	 */
	public $email = '';

	/**
	 * @var    integer  Board offline; select, boolean
	 * @since  1.0.0
	 */
	public $board_offline = 0;

	/**
	 * @var    string  Offline message; input, text
	 * @since  1.0.0
	 */
	public $offline_message = "<h2>The Forum is currently offline for maintenance.</h2>\n<div>Check back soon!</div>";

	/**
	 * @var    integer Enable RSS; select, boolean
	 * @since  1.0.0
	 */
	public $enablerss = 1;

	/**
	 * @var    integer    Threads per page; input, number
	 * @since  1.0.0
	 */
	public $threads_per_page = 20;

	/**
	 * @var    integer  Messages per page; input, number
	 * @since  1.0.0
	 */
	public $messages_per_page = 6;

	/**
	 * @var    integer  Messages per page search; input, number
	 * @since  1.0.0
	 */
	public $messages_per_page_search = 15;

	/**
	 * @var    integer  Show history; select, boolean
	 * @since  1.0.0
	 */
	public $showhistory = 1;

	/**
	 * @var    integer  History limit; input, number
	 * @since  1.0.0
	 */
	public $historylimit = 6;

	/**
	 * @var    integer  Show new; select, boolean
	 * @since  1.0.0
	 */
	public $shownew = 1;

	/**
	 * @var    integer  Disable emoticons; select, boolean
	 * @since  1.0.0
	 */
	public $disemoticons = 0;

	/**
	 * @var    string  Template; input, hidden
	 * @since  1.0.0
	 */
	public $template = 'crypsis';

	/**
	 * @var    integer  Show announcement; select, boolean
	 * @since  1.0.0
	 */
	public $showannouncement = 1;

	/**
	 * @var    integer  Avatar on category; select, boolean
	 * @since  1.0.0
	 */
	public $avataroncat = 0;

	/**
	 * @var    string  Category image path; input, text
	 * @since      1.0.0
	 * @deprecated 4.0
	 */
	public $catimagepath = 'category_images';

	/**
	 * @var    integer  Show child category icon; select, boolean
	 * @since  1.0.0
	 */
	public $showchildcaticon = 1;

	/**
	 * @var    integer  Text area width; input, number
	 * @since  1.0.0
	 */
	public $rtewidth = 450;

	/**
	 * @var    integer  Text area height; input, number
	 * @since  1.0.0
	 */
	public $rteheight = 300;

	/**
	 * @var    integer  Enable forum jump; select, boolean
	 * @since  1.0.0
	 */
	public $enableforumjump = 1;

	/**
	 * @var    integer  Report message; select, boolean
	 * @since  1.0.0
	 */
	public $reportmsg = 1;

	/**
	 * @var    integer  Username; select, boolean
	 * @since  1.0.0
	 */
	public $username = 1;

	/**
	 * @var    integer  Ask email; select, boolean
	 * @since  1.0.0
	 */
	public $askemail = 0;

	/**
	 * @var    integer  Show email; select, boolean
	 * @since  1.0.0
	 */
	public $showemail = 0;

	/**
	 * @var    integer  Show user statistics; select, boolean
	 * @since  1.0.0
	 */
	public $showuserstats = 1;

	/**
	 * @var    integer  Show karma; select, boolean
	 * @since  1.0.0
	 */
	public $showkarma = 1;

	/**
	 * @var    integer  User edit; select, boolean
	 * @since  1.0.0
	 */
	public $useredit = 1;

	/**
	 * @var    integer  User edit time; input, number
	 * @since  1.0.0
	 */
	public $useredittime = 0;

	/**
	 * @var    integer  User edit time Grace; input, number
	 * @since  1.0.0
	 */
	public $useredittimegrace = 600;

	/**
	 * @var    integer  Edit markup; select, boolean
	 * @since  1.0.0
	 */
	public $editmarkup = 1;

	/**
	 * @var    integer  Allow subscriptions; select, boolean
	 * @since  1.0.0
	 */
	public $allowsubscriptions = 1;

	/**
	 * @var    integer  Subscriptions Checked; select, boolean
	 * @since  1.0.0
	 */
	public $subscriptionschecked = 1;

	/**
	 * @var    integer  Allow favorites; select, boolean
	 * @since  1.0.0
	 */
	public $allowfavorites = 1;

	/**
	 * @var    integer  Max subject; input, number
	 * @since      1.0.0
	 * @depricated K5.0
	 */
	public $maxsubject = 50;

	/**
	 * @var    integer  Max signature length; input, number
	 * @since  1.0.0
	 */
	public $maxsig = 300;

	/**
	 * @var    integer  Registered users only
	 * @since  1.0.0
	 */
	public $regonly = 0;

	/**
	 * @var    integer  Public write; select, boolean
	 * @since  1.0.0
	 */
	public $pubwrite = 0;

	/**
	 * @var    integer  Flood projection; select, boolean
	 * @since  1.0.0
	 */
	public $floodprotection = 0;

	/**
	 * @var    integer  Mail moderators
	 * @since  1.0.0
	 */
	public $mailmod = 0;

	/**
	 * @var    integer  Mail admin
	 * @since  1.0.0
	 */
	public $mailadmin = 0;

	/**
	 * @var    integer  CAPTCHA
	 * @since  1.0.0
	 */
	public $captcha = 0;

	/**
	 * @var    integer  Mail full; select, selection
	 * @since  1.0.0
	 */
	public $mailfull = 1;

	/**
	 * @var    integer  Allow avatar upload; select, boolean
	 * @since  1.0.0
	 */
	public $allowavatarupload = 1;

	/**
	 * @var    integer  Allow avatar gallery; select, boolean
	 * @since  1.0.0
	 */
	public $allowavatargallery = 1;

	/**
	 * @var    integer  Avatar quality; input, number
	 * @since  1.0.0
	 */
	public $avatarquality = 75;

	/**
	 * @var    integer  Avatar size; input, number
	 * @since  1.0.0
	 */
	public $avatarsize = 2048;

	/**
	 * @var    integer  Image height; input, number
	 * @since  1.0.0
	 */
	public $imageheight = 800;

	/**
	 * @var    integer  Image width; input, number
	 * @since  1.0.0
	 */
	public $imagewidth = 800;

	/**
	 * @var    integer  Image size
	 * @since  1.0.0
	 */
	public $imagesize = 150;

	/**
	 * @var    string  File types; input, text
	 * @since  1.0.0
	 */
	public $filetypes = 'txt,rtf,pdf,zip,tar.gz,tgz,tar.bz2';

	/**
	 * @var    integer  File size; input, number
	 * @since  1.0.0
	 */
	public $filesize = 120;

	/**
	 * @var    integer  Show ranking; select, boolean
	 * @since  1.0.0
	 */
	public $showranking = 1;

	/**
	 * @var    integer  Rank images; select, boolean
	 * @since  1.0.0
	 */
	public $rankimages = 1;

	/**
	 * @var    integer  User list rows
	 * @since  1.0.0
	 */
	public $userlist_rows = 30;

	/**
	 * @var    integer  User list online
	 * @since  1.0.0
	 */
	public $userlist_online = 1;

	/**
	 * @var    integer  user list avatar; select, boolean
	 * @since  1.0.0
	 */
	public $userlist_avatar = 1;

	/**
	 * @var    integer  User list posts; select, boolean
	 * @since  1.0.0
	 */
	public $userlist_posts = 1;

	/**
	 * @var    integer  User list karma; select, boolean
	 * @since  1.0.0
	 */
	public $userlist_karma = 1;

	/**
	 * @var    integer  User list email; select, boolean
	 * @since  1.0.0
	 */
	public $userlist_email = 0;

	/**
	 * @var    integer  User list join date; select, boolean
	 * @since  1.0.0
	 */
	public $userlist_joindate = 1;

	/**
	 * @var    integer  User list lst visit date; select, boolean
	 * @since  1.0.0
	 */
	public $userlist_lastvisitdate = 1;

	/**
	 * @var    integer  User list user hits; select, boolean
	 * @since  1.0.0
	 */
	public $userlist_userhits = 1;

	/**
	 * @var    integer  Latest category; select, integer multiple
	 * @since  1.0.0
	 */
	public $latestcategory = 0;

	/**
	 * @var    integer  Show stats; select, boolean
	 * @since  1.0.0
	 */
	public $showstats = 1;

	/**
	 * @var    integer  Show who is online; select, boolean
	 * @since  1.0.0
	 */
	public $showwhoisonline = 1;

	/**
	 * @var    integer  Show general statistics; select, boolean
	 * @since  1.0.0
	 */
	public $showgenstats = 1;

	/**
	 * @var    integer  Show population user statistics; select, boolean
	 * @since  1.0.0
	 */
	public $showpopuserstats = 1;

	/**
	 * @var    integer  Population user count; input, number
	 * @since  1.0.0
	 */
	public $popusercount = 5;

	/**
	 * @var    integer  Show population subject statistics; select, boolean
	 * @since  1.0.0
	 */
	public $showpopsubjectstats = 1;

	/**
	 * @var    integer  Population subject count; input, number
	 * @since  1.0.0
	 */
	public $popsubjectcount = 5;

	/**
	 * @var    integer  Show spoiler tag; select, boolean
	 * @since  1.0.5
	 */
	public $showspoilertag = 1;

	/**
	 * @var    integer  Show video tag; select, boolean
	 * @since  1.0.5
	 */
	public $showvideotag = 1;

	/**
	 * @var    integer  Show ebay tag; select, boolean
	 * @since  1.0.5
	 */
	public $showebaytag = 1;

	/**
	 * @var    integer  Trim long URLs; select, boolean
	 * @since  1.0.5
	 */
	public $trimlongurls = 1;

	/**
	 * @var    integer  Trim long URLs in front; input, number
	 * @since  1.0.5
	 */
	public $trimlongurlsfront = 40;

	/**
	 * @var    integer  Trim long URLs in back, input, number
	 * @since  1.0.5
	 */
	public $trimlongurlsback = 20;

	/**
	 * @var    integer  Auto embed youtube; select, boolean
	 * @since  1.0.5
	 */
	public $autoembedyoutube = 1;

	/**
	 * @var    integer  Auto embed ebay; select, boolean
	 * @since  1.0.5
	 */
	public $autoembedebay = 1;

	/**
	 * @var    string  Ebay language code; input, text
	 * @since  1.0.5
	 */
	public $ebaylanguagecode = 'en-us';

	/**
	 * @var    integer  Session time out. In seconds; input, number
	 * @since  1.0.5
	 */
	public $sessiontimeout = 1800;

	/**
	 * @var    integer  Highlight code; select, boolean
	 * @since  1.0.5RC2
	 */
	public $highlightcode = 0;

	/**
	 * @var    string  RSS type; select, selection
	 * @since  1.0.6
	 */
	public $rss_type = 'topic';

	/**
	 * @var    string  RSS time limit; select, selection
	 * @since  1.0.6
	 */
	public $rss_timelimit = 'month';

	/**
	 * @var    integer  RSS limit; input, number
	 * @since  1.0.6
	 */
	public $rss_limit = 100;

	/**
	 * @var    string  RSS included categories; select, selection
	 * @since  1.0.6
	 */
	public $rss_included_categories = '';

	/**
	 * @var    string  RSS excluded categories; select, selection
	 * @since  1.0.6
	 */
	public $rss_excluded_categories = '';

	/**
	 * @var    string  RSS specification; select, selection
	 * @since  1.0.6
	 */
	public $rss_specification = 'rss2.0';

	/**
	 * @var    integer  RSS allow HTML; select, boolean
	 * @since  1.0.6
	 */
	public $rss_allow_html = 1;

	/**
	 * @var    string  RSS author format; select, selection
	 * @since  1.0.6
	 */
	public $rss_author_format = 'name';

	/**
	 * @var    integer  RSS author in title; select, boolean
	 * @since  1.0.6
	 */
	public $rss_author_in_title = 1;

	/**
	 * @var    string  RSS word count; select, selection
	 * @since  1.0.6
	 */
	public $rss_word_count = '0';

	/**
	 * @var    integer  RSS old titles; select, boolean
	 * @since  1.0.6
	 */
	public $rss_old_titles = 1;

	/**
	 * @var    integer  RSS cache; input, selection
	 * @since  1.0.6
	 */
	public $rss_cache = 900;

	/**
	 * @var    string  Default page; select, selection
	 * @since  1.0.6
	 */
	public $defaultpage = 'recent';

	/**
	 * @var    string  Default sort.  Description for the latest post first; select, selection
	 * @since  1.0.8
	 */
	public $default_sort = 'asc';

	/**
	 * @var    integer  Search engine friendly URLs
	 * @since  1.5.8
	 */
	public $sef = 1;

	/**
	 * @var    integer  Showing For Guest
	 * @since  1.6.0
	 */
	public $showimgforguest = 1;

	/**
	 * @var    integer  Show file for guest
	 * @since  1.6.0
	 */
	public $showfileforguest = 1;

	/**
	 * @var    integer  Major version number
	 * @since  1.6.0
	 */
	public $pollnboptions = 4;

	/**
	 * @var    integer  Pool allow one ore more time; select, boolean
	 * @since  1.6.0
	 */
	public $pollallowvoteone = 1;

	/**
	 * @var    integer  Poll enabled.  For poll integration; select, boolean
	 * @since  1.6.0
	 */
	public $pollenabled = 1;

	/**
	 * @var    integer  Population poll count; input, number
	 * @since  1.6.0
	 */
	public $poppollscount = 5;

	/**
	 * @var    integer  Show population poll statistics; select, boolean
	 * @since  1.6.0
	 */
	public $showpoppollstats = 1;

	/**
	 * @var    integer  Poll time by votes; input, time
	 * @since  1.6.0
	 */
	public $polltimebtvotes = '00:15:00';

	/**
	 * @var    integer  Poll and votes by user; input, number
	 * @since  1.6.0
	 */
	public $pollnbvotesbyuser = 100;

	/**
	 * @var    integer  Poll result user list; select, boolean
	 * @since  1.6.0
	 */
	public $pollresultsuserslist = 1;

	/**
	 * @var    integer  Poll result user list; select, boolean
	 * @since  1.6.0
	 */
	public $allow_user_edit_poll = 0;

	/**
	 * @var    integer  Max person text; input, number
	 * @since  1.6.0
	 */
	public $maxpersotext = 50;

	/**
	 * @var    string  Ordering system; select, selection
	 * @since  1.6.0
	 */
	public $ordering_system = 'mesid';

	/**
	 * @var    string  Post date format; select, selection
	 * @since  1.6.0
	 */
	public $post_dateformat = 'ago';

	/**
	 * @var    string  Post date format hover; select, selection
	 * @since  1.6.0
	 */
	public $post_dateformat_hover = 'datetime';

	/**
	 * @var    integer  Hide IP; select, boolean
	 * @since  1.6.0
	 */
	public $hide_ip = 1;

	/**
	 * @var    string  Image types; textbox, string
	 * @since  1.6.0
	 */
	public $imagetypes = 'jpg,jpeg,gif,png';

	/**
	 * @var    integer  Check MIM types; select, boolean
	 * @since  1.6.0
	 */
	public $checkmimetypes = 1;

	/**
	 * @var    string  Image MIME types; textbox, string
	 * @since  1.6.0
	 */
	public $imagemimetypes = 'image/jpeg,image/jpg,image/gif,image/png';

	/**
	 * @var    integer  Image quality; input, number
	 * @since  1.6.0
	 */
	public $imagequality = 50;

	/**
	 * @var    integer  Thumbnail height; input, number
	 * @since  1.6.0
	 */
	public $thumbheight = 32;

	/**
	 * @var    integer  Thumbnail width; input, number
	 * @since  1.6.0
	 */
	public $thumbwidth = 32;

	/**
	 * @var    string  Hide user profile info
	 * @since  1.6.0
	 */
	public $hideuserprofileinfo = 'put_empty';

	/**
	 * @var    integer  Box ghost message; select, selection
	 * @since  1.6.0
	 */
	public $boxghostmessage = 0;

	/**
	 * @var    integer  User delete message; select, selection
	 * @since  1.6.0
	 */
	public $userdeletetmessage = 0;

	/**
	 * @var    integer  Latest category in; select, boolean
	 * @since  1.6.0
	 */
	public $latestcategory_in = 1;

	/**
	 * @var    integer  Topic icons; select, boolean
	 * @since  1.6.0
	 */
	public $topicicons = 1;

	/**
	 * @var    integer  Debug; select, boolean
	 * @since  1.6.0
	 */
	public $debug = 0;

	/**
	 * @var    integer  Category auto subscribe; select, boolean
	 * @since  1.6.0
	 */
	public $catsautosubscribed = 0;

	/**
	 * @var    integer  SHow ban reason; select, boolean
	 * @since  1.6.0
	 */
	public $showbannedreason = 0;

	/**
	 * @var    integer  Show thank you; select, boolean
	 * @since  1.6.0
	 */
	public $showthankyou = 1;

	/**
	 * @var    integer  Show population thank you statistics; select, boolean
	 * @since  1.6.0
	 */
	public $showpopthankyoustats = 1;

	/**
	 * @var    integer  Population thank you count; input, number
	 * @since  1.6.0
	 */
	public $popthankscount = 5;

	/**
	 * @var    integer  Moderators see deleted topics; select, boolean
	 * @since  1.6.0
	 */
	public $mod_see_deleted = 0;

	/**
	 * @var    string  BBCode image secure.  Allow only secure image extensions (jpg/gif/png); select, selection
	 * @since  1.6.0
	 */
	public $bbcode_img_secure = 'text';

	/**
	 * @var    integer  List category show moderators; select, boolean
	 * @since  1.6.0
	 */
	public $listcat_show_moderators = 1;

	/**
	 * @var    integer  Major version number; select, boolean
	 * @since  1.6.1
	 */
	public $lightbox = 1;

	/**
	 * @var    integer  Show list time; select, selection
	 * @since  1.6.1
	 */
	public $show_list_time = 720;

	/**
	 * @var    integer  Show session type; select, selection
	 * @since  1.6.1
	 */
	public $show_session_type = 2;

	/**
	 * @var    integer  Show session start time; select, selection
	 * @since  1.6.1
	 */
	public $show_session_starttime = 1800;

	/**
	 * @var    integer  User list allowed; select, boolean
	 * @since  1.6.2
	 */
	public $userlist_allowed = 1;

	/**
	 * @var    integer  User list count users; select, selection
	 * @since  1.6.4
	 */
	public $userlist_count_users = 1;

	/**
	 * @var    integer  Enable threaded layouts; select, boolean
	 * @since  1.6.4
	 */
	public $enable_threaded_layouts = 0;

	/**
	 * @var    string  Category subscriptions; select, selection
	 * @since  1.6.4
	 */
	public $category_subscriptions = 'post';

	/**
	 * @var    string  Topic subscriptions; select, selection
	 * @since  1.6.4
	 */
	public $topic_subscriptions = 'every';

	/**
	 * @var    integer  Public profile; select, boolean
	 * @since  1.6.4
	 */
	public $pubprofile = 1;

	/**
	 * @var    integer  Thank you max; input, number
	 * @since  1.6.5
	 */
	public $thankyou_max = 10;

	/**
	 * @var    integer  Email recipient count; select, integer
	 * @since  1.6.6
	 */
	public $email_recipient_count = 0;

	/**
	 * @var    string  Email recipient pricing; select, selection
	 * @since  1.6.6
	 */
	public $email_recipient_privacy = 'bcc';

	/**
	 * @var    string  Email visible address; input, text
	 * @since  1.6.6
	 */
	public $email_visible_address = '';

	/**
	 * @var    integer  CAPTCHA post limit; input, number
	 * @since  1.6.6
	 */
	public $captcha_post_limit = 0;

	/**
	 * @var    string  Image upload; select, selection
	 * @since  2.0.0
	 */
	public $image_upload = 'registered';

	/**
	 * @var    string  File upload; select, selection
	 * @since  2.0.0
	 */
	public $file_upload = 'registered';

	/**
	 * @var    string  Topic layout; select, selection
	 * @since  2.0.0
	 */
	public $topic_layout = 'flat';

	/**
	 * @var    integer  Time to create page; select, boolean
	 * @since  2.0.0
	 */
	public $time_to_create_page = 1;

	/**
	 * @var    integer  Show image files in mange profile; select, boolean
	 * @since  2.0.0
	 */
	public $show_imgfiles_manage_profile = 1;

	/**
	 * @var    integer  Hold new users posts; select, boolean
	 * @since  2.0.0
	 */
	public $hold_newusers_posts = 0;

	/**
	 * @var    integer  Hold guest posts; select, boolean
	 * @since  2.0.0
	 */
	public $hold_guest_posts = 0;

	/**
	 * @var    integer  Attachment limit; input, number
	 * @since  2.0.0
	 */
	public $attachment_limit = 8;

	/**
	 * @var    integer  Pickup category; select, boolean
	 * @since  2.0.0
	 */
	public $pickup_category = 0;

	/**
	 * @var    string  Article display; select selection
	 * @since  2.0.0
	 */
	public $article_display = 'intro';

	/**
	 * @var    integer  Send emails; select, boolean
	 * @since  2.0.0
	 */
	public $send_emails = 1;

	/**
	 * @var    integer  Fallback english; select, boolean
	 * @since  2.0.0
	 */
	public $fallback_english = 1;

	/**
	 * @var    integer  Cache; select, boolean
	 * @since  2.0.0
	 */
	public $cache = 1;

	/**
	 * @var    integer  Cache time; input, number
	 * @since  2.0.0
	 */
	public $cache_time = 60;

	/**
	 * @var    integer  Ebay affiliate ID; input, text
	 * @since  2.0.0
	 */
	public $ebay_affiliate_id = 5337089937;

	/**
	 * @var    integer  IP tracking; select, boolean
	 * @since  2.0.0
	 */
	public $iptracking = 1;

	/**
	 * @var    string  RSS feebburner URL; input, text
	 * @since  2.0.3
	 */
	public $rss_feedburner_url = '';

	/**
	 * @var    integer  Auto link; select, boolean
	 * @since  3.0.0
	 */
	public $autolink = 1;

	/**
	 * @var    integer  Access component; select, boolean
	 * @since  3.0.0
	 */
	public $access_component = 1;

	/**
	 * @var    integer  Statistic link allowed; select, boolean
	 * @since  3.0.4
	 */
	public $statslink_allowed = 1;

	/**
	 * @var    integer  Super admin user list; select, boolean
	 * @since  3.0.6
	 */
	public $superadmin_userlist = 0;

	/**
	 * @var    integer  Legacy URLs; select, boolean
	 * @deprecated Kunena 5.2.0
	 * @since  K4.0.0
	 */
	public $legacy_urls = 0;

	/**
	 * @var    integer  Attachment protection; select, boolean
	 * @since  K4.0.0
	 */
	public $attachment_protection = 0;

	/**
	 * @var    integer  Category icons; select, boolean
	 * @since  K4.0.0
	 */
	public $categoryicons = 1;

	/**
	 * @var    integer  Avatar resize method; select, selection
	 * @since  K4.0.0
	 */
	public $avatarresizemethod = 1;

	/**
	 * @var    integer  Avatar crop; select, boolean
	 * @since  K4.0.0
	 */
	public $avatarcrop = 0;

	/**
	 * @var    integer  User can report himself; select, boolean
	 * @since  K4.0.0
	 */
	public $user_report = 1;

	/**
	 * @var    integer  Search time; select, boolean
	 * @since  K4.0.0
	 */
	public $searchtime = 365;

	/**
	 * @var    integer  Teaser; select, boolean
	 * @since  K4.0.0
	 */
	public $teaser = 0;

	/**
	 * @var    integer  Define ebay widget language; select, boolean
	 * @since  3.0.7
	 */
	public $ebay_language = 0;

	/**
	 * @var    string  Define ebay Api key to be allowed to display ebay widget; select, boolean
	 * @since  3.0.7
	 */
	public $ebay_api_key = '';

	/**
	 * @var    string  Define ebay cert Id key to be allowed to display ebay widget; select, boolean
	 * @since  5.2.0
	 */
	public $ebay_cert_id = '';

	/**
	 * @var    string  Define twitter API consumer key; select, boolean
	 * @since  K4.0.0
	 */
	public $twitter_consumer_key = '';

	/**
	 * @var    string  Define twitter API consumer secret; select, boolean
	 * @since  K4.0.0
	 */
	public $twitter_consumer_secret = '';

	/**
	 * @var    string  Allow to define if the user can change the subject of topic on replies; select, boolean
	 * @since  K4.0.0
	 */
	public $allow_change_subject = 1;

	/**
	 * @var    integer  Max Links limit; input, number
	 * @since  K4.0.0
	 */
	public $max_links = 6;

	/**
	 * @var    integer  Read Only State; select, boolean
	 * @since  K5.0.0
	 */
	public $read_only = 0;

	/**
	 * @var    integer  Rating integration; select, boolean
	 * @since  K5.0.0
	 */
	public $ratingenabled = 0;

	/**
	 * @var    integer  Allow to prevent posting if the subject of topic contains URL; select, boolean
	 * @since  K5.0.0
	 */
	public $url_subject_topic = 0;

	/**
	 * @var integer Allow to enable log to save moderation actions
	 * @since  K5.0.0
	 */
	public $log_moderation = 0;

	/**
	 * @var integer Define the number of caracters from start when shorthen attachments filemane
	 * @since  K5.0.0
	 */
	public $attach_start = 0;

	/**
	 * @var integer Define the number of caracters from end when shorthen attachments filemane
	 * @since  K5.0.0
	 */
	public $attach_end = 14;

	/**
	 * @var string Define the google maps API key
	 * @since  K5.0.0
	 */
	public $google_map_api_key = '';

	/**
	 * @var integer Allow to remove utf8 characters from filename of attachments
	 * @since  K5.0.0
	 */
	public $attachment_utf8 = 1;

	/**
	 * @var integer Allow to auto-embded soundcloud item when you put just the URL in a message
	 * @since  K5.0.0
	 */
	public $autoembedsoundcloud = 1;

	/**
	 * @var string to define the image location
	 * @since  K5.0.2
	 */
	public $emailheader = 'media/kunena/email/hero-wide.png';

	/**
	 * @var integer
	 * @since  K5.0.3
	 */
	public $user_status = 1;

	/**
	 * @var integer Allow user signatures
	 * @since  K5.1.0
	 */
	public $signature = 1;

	/**
	 * @var integer Allow user personal
	 * @since  K5.1.0
	 */
	public $personal = 1;

	/**
	 * @var integer Allow user social
	 * @since  K5.1.0
	 */
	public $social = 1;

	/**
	 * @var integer
	 * @since  K5.0.4
	 */
	public $plain_email = 0;

	/**
	 * @var integer
	 * @since  K5.0.13
	 */
	public $moderator_permdelete = 0;

	/**
	 * @var string
	 * @since  K5.0.4
	 */
	public $avatartypes = 'gif, jpeg, jpg, png';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $smartlinking = 0;

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $defaultavatar = 'nophoto.png';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $defaultavatarsmall = 's_nophoto.png';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $stopforumspam_key = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $quickreply = 1;

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $avataredit = 0;

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $activemenuitem = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $mainmenu_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $home_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $index_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $moderators_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $topiclist_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $misc_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $profile_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $search_id = '';

	/**
	 * @var string
	 * @since  K5.1.0
	 */
	public $avatar_type = 1;

	/**
	 * @var string
	 * @since  K5.1.1
	 */
	public $sef_redirect = 1;

	/**
	 * @var integer
	 * @since  K5.1.1
	 */
	public $allow_edit_poll = 1;

	/**
	 * @var integer
	 * @since  K5.1.2
	 */
	public $use_system_emails = 0;

	/**
	 * @var    integer  Auto embed instagram; select, boolean
	 * @since  1.0.5
	 */
	public $autoembedinstagram = 1;

	/**
	 * @var integer
	 * @since  K5.1.14
	 */
	public $disable_re = 0;

	/**
	 * @var string
	 * @since  K5.1.18
	 */
	public $email_sender_name = '';

	/**
	 * @var integer
	 * @since  K5.1.19
	 */
	public $display_filename_attachment = 0;

	/**
	 * @var integer
	 * @since  K5.2.0
	 */
	public $new_users_prevent_post_url_images = 0;

	/**
	 * @var integer
	 * @since  K5.2.0
	 */
	public $minimal_user_posts_add_url_image = 10;

	/**
	 * @since Kunena
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * @return KunenaConfig|mixed
	 * @since Kunena
	 * @throws Exception
	 */
	public static function getInstance()
	{
		static $instance = null;

		if (!$instance)
		{
			$cache    = Factory::getCache('com_kunena', 'output');
			$instance = $cache->get('configuration', 'com_kunena');

			if (!$instance)
			{
				$instance = new KunenaConfig;
				$instance->load();
			}

			$cache->store($instance, 'configuration', 'com_kunena');
		}

		return $instance;
	}

	/**
	 * Load config settings from database table.
	 *
	 * @return void
	 * @since Kunena
	 * @throws Exception
	 */
	public function load()
	{
		$db    = Factory::getDBO();
		$query = $db->getQuery(true);
		$query->select('*');
		$query->from($db->quoteName('#__kunena_configuration'));
		$query->where($db->quoteName('id') . '=1');
		$db->setQuery($query);

		try
		{
			$config = $db->loadAssoc();
		}
		catch (JDatabaseExceptionExecuting $e)
		{
			KunenaError::displayDatabaseError($e);
		}

		if ($config)
		{
			$params = json_decode($config['params']);
			$this->bind($params);
		}

		// Perform custom validation of config data before we let anybody access it.
		$this->check();

		\Joomla\CMS\Plugin\PluginHelper::importPlugin('kunena');
		$plugins = array();
		Factory::getApplication()->triggerEvent('onKunenaGetConfiguration', array('kunena.configuration', &$plugins));
		$this->plugins = array();

		foreach ($plugins as $name => $registry)
		{
			if ($name == '38432UR24T5bBO6')
			{
				$this->bind($registry->toArray());
			}
			elseif ($name && $registry instanceof \Joomla\Registry\Registry)
			{
				$this->plugins[$name] = $registry;
			}
		}
	}

	/**
	 * @param   mixed $properties properties
	 *
	 * @return void
	 * @since Kunena
	 */
	public function bind($properties)
	{
		$this->setProperties($properties);
	}

	/**
	 * Messages per page
	 * @return void
	 * @since Kunena
	 */
	public function check()
	{
		// Add anything that requires validation

		// Need to have at least one per page of these
		$this->messages_per_page        = max($this->messages_per_page, 1);
		$this->messages_per_page_search = max($this->messages_per_page_search, 1);
		$this->threads_per_page         = max($this->threads_per_page, 1);
	}

	/**
	 * @return void
	 * @since Kunena
	 * @throws Exception
	 */
	public function save()
	{
		$db = Factory::getDBO();

		// Perform custom validation of config data before we write it.
		$this->check();

		// Get current configuration
		$params = $this->getProperties();
		unset($params['id']);

		$db->setQuery("REPLACE INTO #__kunena_configuration SET id=1, params={$db->quote(json_encode($params))}");

		try
		{
			$db->execute();
		}
		catch (JDatabaseExceptionExecuting $e)
		{
			KunenaError::displayDatabaseError($e);
		}

		// Clear cache.
		KunenaCacheHelper::clear();
	}

	/**
	 * @return void
	 * @since Kunena
	 */
	public function reset()
	{
		$instance = new KunenaConfig;
		$this->bind($instance->getProperties());
	}

	/**
	 * @internal
	 *
	 * @param   string $name Name of the plugin
	 *
	 * @return \Joomla\Registry\Registry
	 *
	 * @since Kunena
	 */
	public function getPlugin($name)
	{
		return isset($this->plugins[$name]) ? $this->plugins[$name] : new \Joomla\Registry\Registry;
	}

	/**
	 * Email set for the configuration
	 *
	 * @return string
	 * @since Kunena
	 * @throws Exception
	 */
	public function getEmail()
	{
		$email = $this->get('email');

		return !empty($email) ? $email : Factory::getApplication()->get('mailfrom', '');
	}
}
