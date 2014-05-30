<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// ------------------------------------------------------------------------

/**
 * CodeIgniter Media Helpers
 *
 * Manage media file for codeigiter template.
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Sikarin Engkased
 */

// --------------------------------------------------------------------

/**
 * js_datepicker
 *
 * return media file for datepicker
 *
 * @access	public
 * @param	string
 * @return	str
 */	
if ( ! function_exists('js_datepicker'))
{	
	function js_datepicker($selector=".datepicker")
	{		
		$js = '<link rel="stylesheet" href="media/js/date_input/date_input.css" type="text/css" media="screen" />';
		$js .= '<script type="text/javascript" src="media/js/date_input/jquery.date_input.js"></script>';
		$js .= '<script type="text/javascript">
					$(function(){
		    		jQuery.extend(DateInput.DEFAULT_OPTS, {
	  					month_names: ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"],
	  					short_month_names: ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค."],
	 					short_day_names: ["อ.","จ.", "อ.", "พ.", "พฤ.", "ศ.", "ส."],
	  						stringToDate: function(string) {
	   							var matches;
	    						if (matches = string.match(/^(\d{4,4})-(\d{2,2})-(\d{2,2})$/)) 
								{
	      							return new Date(matches[1], matches[2] - 1, matches[3]);
	    						} 
								else 
								{
	      							return null;
	    						};
	 						},
							dateToString: function(date) {
	    						var month = (date.getMonth() + 1).toString();
	    						var dom = date.getDate().toString();
	    						if (month.length == 1) month = "0" + month;
	    						if (dom.length == 1) dom = "0" + dom;
	    						return date.getFullYear() + "-" + month + "-" + dom;
	  						}
	
						});
						$("input.datepicker").date_input(); 
					});
				</script>';
		return $js; 
	}
}

// --------------------------------------------------------------------

/**
 * set_notify
 *
 * set notify Bar
 *
 * @access	public
 * @param	string
 * @param	string
 * @return	str
 */	
if(!function_exists('set_notify'))
{
	function set_notify($type,$msg)
	{
		$config = array(
			'notify' => TRUE,
			'type' => $type,
			'msg' => $msg
		);
		$CI =& get_instance();
		$CI->session->set_flashdata($config);
	}
}

// --------------------------------------------------------------------

/**
 * js_notify
 *
 * Display notify Bar
 *
 * @access	public
 * @return	str
 */	
if(!function_exists('notify'))
{
	function js_notify()
	{
		$CI =& get_instance();
		if($CI->session->flashdata('notify'))
		{
			$js = '<link rel="stylesheet" href="media/js/notifyBar/jquery.notifyBar.css" type="text/css" media="screen" />';
		    $js .= '<script type="text/javascript" src="media/js/notifyBar/jquery.notifyBar.js"></script>';
		    $js .= '<script type="text/javascript">
		    				$(function () {
						  		$.notifyBar({
						  			cls:"'.$CI->session->flashdata('type').'",
						    		html: "'.$CI->session->flashdata('msg').'",
						    		delay: 2000,
						    		animationSpeed: "normal"
						  		});  
							});
						</script>';
			return $js; 
		}
	}
}

// --------------------------------------------------------------------

/**
 * js_lightbox
 *
 * Display Lightbox
 *
 * @access	public
 * @return	str
 */	
if(!function_exists('js_lightbox'))
{
	function js_lightbox()
	{
		$js = '<link rel="stylesheet" href="media/js/prettyPhoto/prettyPhoto.css" type="text/css" media="screen" />';
		$js .= '<script type="text/javascript" src="media/js/prettyPhoto/jquery.prettyPhoto.js"></script>';
		    $js .= '<script type="text/javascript">
		    				$(function () {
						  		$("a[rel^=lightbox]").prettyPhoto({theme:\'facebook\'});
							});
						</script>';
			return $js; 
		
	}
}

// --------------------------------------------------------------------
if(!function_exists('js_checkbox'))
{
	function js_checkbox($mode=FALSE)
	{
		$js="";
		if($mode=="approve")
		{
			$CI =& get_instance();
			$js = '$("input:checkbox").click(function(){
					var value = this.checked ? "draft" : "approve";
					var name = $(this).attr("name");
					var jsonOptions= {};
					jsonOptions[name]= value;
					if(value=="draft")
					{
						$(this).parent().parent().find(".success").addClass("error").removeClass("success");
					}
					else
					{
						$(this).parent().parent().find(".error").addClass("success").removeClass("error");
					}

	
					$.post("'.$CI->router->fetch_module().'/admin/'.$CI->router->fetch_class().'/approve/" + this.value,jsonOptions); 

					});';
		}
		return '<link rel="stylesheet" href="media/js/checkbox/jquery.checkbox.css" />
			<script type="text/javascript" src="media/js/checkbox/jquery.checkbox.min.js"></script>
			<script>
				$(function(){
					$("input:checkbox,input:radio").checkbox({empty:"media/js/checkbox/empty.png"});
					'.$js.'
				});
			</script>';
	}
}


// --------------------------------------------------------------------

/**
 * js_form_helper
 *
 * Display Javascript from FormHelper
 *
 * @access	public
 * @return	str
 */	
if(!function_exists('js_form_helper'))
{
	function js_form_helper()
	{
		$CI =& get_instance();
		if($CI->session->flashdata('tinymce'))
		{
			$CI->template->append_metadata('<script type="text/javascript" src="media/tiny_mce/tiny_mce.js"></script>');
			$CI->template->append_metadata('<script type="text/javascript" src="media/js/tinymce.js"></script>');
		}
		if($CI->session->flashdata('datepicker'))
		{
			$CI->template->append_metadata(js_datepicker());
		}
	}
}

// --------------------------------------------------------------------
/**
 * uppic_mce
 *
 * Upload images from uppic.me to TinyMCE
 *
 * @access	public
 * @return	str
 */	
if(!function_exists('uppic_mce'))
{
	function uppic_mce()
	{
		$js = '<style type="text/css">
#upic_uploader{}
#upic_uploadprogress{}
.progressWrapper{margin-top:5px;}
.progressContainer{border-bottom:1px dotted #ddd;padding:2px;}
.progressName{text-align:left;color:black;margin-left:2px;float:left;}
.progressBarStatus{color:#666;text-align:right;margin:1px 1px 0 0;font-size:9px;}
.red{border:solid 1px #B50000;background-color:#FFEBEB;}
.green{border:solid 1px #DDF0DD;background-color:#EBFFEB;}
.blue{border:solid 1px #CEE2F2;background-color:#F0F5FF;}
.progressBarInProgress,.progressBarComplete,.progressBarError{clear:both;font-size:0;width:0%;height:2px;background-color:blue;margin-top:4px;}
.progressBarComplete{width:100%;background-color:green;visibility:hidden;}
.progressBarError{width:100%;background-color:red;visibility:hidden;}
</style>';

		$js .= '<script type="text/javascript" src="http://upic.me/js/embedupload.js"></script>
								<script type="text/javascript">
								upic_type = "htmlfull";
								upic_buttoncss += "color:#000000;";
								function upic_custom(urlshow, urlfull, urlthumb) {
								tinyMCE.get(\'detail\').execCommand("mceInsertContent",false,\'<img src="\' +urlfull+ \'" />\');
								}
								</script>';
		return $js; 
	}
}

// --------------------------------------------------------------------

/* End of file media_helper.php */
/* Location: ./application/helpers/media_helper.php */