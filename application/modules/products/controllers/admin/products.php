<?php
Class Products extends Admin_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	//----------- all in one 3 stack categories -----------------
	function index($sub_categories_1,$current_id,$id=FALSE){
		$data['category'] = new Category($id);
		$data['sub_categories_1'] = new Category($sub_categories_1);
		$data['parent_category'] = new Category($current_id);
		$products = new Product();
		$data['products'] = $products->where('category_id',$id)->order_by('id','desc')->get_page();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/product_index',$data);
	}
	
	function form($sub_categories_1,$current_id,$category_id,$id=FALSE){
		$data['sub_categories_1'] = new Category($sub_categories_1);
		$data['parent_category'] = new Category($current_id);
		$data['category'] = new Category($category_id);
		$data['product'] = new Product($id);
		
		$category = new Category();
		$data['categories'] = $category->where("module = 'products' and id in (select distinct category_id from products)")->order_by('id','asc')->get();
		
		$icon = new Zicon();
		$data['icons'] = $icon->order_by('orderlist','asc')->get();
		
		$software_category = new Category();
		$data['software_categories'] = $software_category->where("module = 'softwares' and id in (select distinct category_id from softwares)")->order_by('id','asc')->get();
		
		$brochure_category = new Category();
		$data['brochure_categories'] = $brochure_category->where("module = 'brochures' and id in (select distinct category_id from brochures)")->order_by('id','asc')->get();
		
		$wallpaper_category = new Category();
		$data['wallpaper_categories'] = $wallpaper_category->where("module = 'wallpapers' and id in (select distinct category_id from wallpapers)")->order_by('id','asc')->get();
		
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/product_form',$data);
	}
	
	function save($sub_categories_1,$parent_id,$id=FALSE)
	{
		if($_POST){
			$product = new Product($id);
			if($_FILES['image']['name'])
			{
				if($product->id){
					$product->delete_file($product->id,'uploads/products/','image');
				}
				$_POST['image'] = $product->upload($_FILES['image'],'uploads/products/');
			}
			if($_FILES['before']['name'])
			{
				if($product->id){
					$product->delete_file($product->id,'uploads/products/','before');
				}
				$_POST['before'] = $product->upload($_FILES['before'],'uploads/products/',185,95);
			}
			if($_FILES['after']['name'])
			{
				if($product->id){
					$product->delete_file($product->id,'uploads/products/','after');
				}
				$_POST['after'] = $product->upload($_FILES['after'],'uploads/products/',185,95);
			}
			//$_POST['category_id'] = $category_id;
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['detail1'] = lang_encode($_POST['detail1']);
			$_POST['detail2'] = lang_encode($_POST['detail2']);
			$_POST['detail3'] = lang_encode($_POST['detail3']);
			//$_POST['highlight2_detail'] = lang_encode($_POST['highlight2_detail']);
			$_POST['user_id'] = $this->session->userdata('id');
			$product->from_array($_POST);
			if(isset($_POST['accessories'])){
				$product->accessories = implode(',',$_POST['accessories']);
			}else{
				$product->accessories = "";
			}
			if(isset($_POST['softwares'])){
				$product->softwares = implode(',',$_POST['softwares']);
			}else{
				$product->softwares = "";
			}
			if(isset($_POST['brochures'])){
				$product->brochures = implode(',',$_POST['brochures']);
			}else{
				$product->brochures = "";
			}
			if(isset($_POST['wallpapers'])){
				$product->wallpapers = implode(',',$_POST['wallpapers']);
			}else{
				$product->wallpapers = "";
			}
			if(isset($_POST['icons'])){
				$product->icons = implode(',',$_POST['icons']);
			}else{
				$product->icons = "";
			}
			$product->save();
			
			fix_file($_FILES['file']);
			foreach($_FILES['file'] as $key => $item)
			{
				if($item)
				{
					$product_image = new Product_image(@$_POST['image_id'][$key]);
					if($_FILES['file'][$key]['name'])
					{
						if(@$_POST['image_id'][$key])$product_image->delete_file('uploads/products/product_mornitor','file');
						$product_image->file = $product_image->upload($_FILES['file'][$key],'uploads/products/product_mornitor');
						
						$product_image->product_id = $product->id;
						$product_image->save();
					}		
				}
			}
			
			set_notify('success', lang('save_data_complete'));
		}
		
		redirect($_POST['referer']);
		//redirect('products/admin/products/index/'.$sub_categories_1.'/'.$parent_id.'/'.$category_id);
	}
	
	function delete($id=FALSE){
		if($id)
		{
			$product = new Product($id);
			$product->delete();
			set_notify('success', lang('delete_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function image_delete($id){
		$image = new Product_image($id);
		$image->delete();
		set_notify('success', lang('delete_data_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function remove_image($id)
	{
		$product = new Product($id);
		$product->delete_file($product->id,'uploads/products/','image');
		$product->image = NULL;
		$product->save();
		set_notify('success', lang('remove_image_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function remove_before($id)
	{
		$product = new Product($id);
		$product->delete_file($product->id,'uploads/products/','before');
		$product->before = NULL;
		$product->save();
		set_notify('success', lang('remove_image_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function remove_after($id)
	{
		$product = new Product($id);
		$product->delete_file($product->id,'uploads/products/','after');
		$product->after = NULL;
		$product->save();
		set_notify('success', lang('remove_image_complete'));
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	function approve($id)
	{
		if($_POST)
		{
			$product = new Product($id);
			$product->approve_date = date("Y-m-d H:i:s");
			$product->from_array($_POST);
			$product->save();
		}
		echo $_POST['status'];
	}
	
	function save_orderlist($id=FALSE){
		if($_POST)
		{
				foreach($_POST['orderlist'] as $key => $item)
				{
					if($item)
					{
						$product = new Product(@$_POST['orderid'][$key]);
						$product->from_array(array('orderlist' => $item));
						$product->save();
					}
				}
			set_notify('success', lang('save_data_complete'));
		}
		redirect($_SERVER['HTTP_REFERER']);
	}
	
	//----------- common product 2 stack categories -----------------
	function common($parent_id,$id){
		$data['parent'] = new Category($parent_id);
		$data['category'] = new Category($id);
		
		$products = new Product();
		$data['products'] = $products->where('category_id',$id)->order_by('orderlist','asc')->get_page();
		$this->template->append_metadata(js_checkbox('approve'));
		$this->template->build('admin/common_product_index',$data);
	}
	
	function common_form($parent_id,$category_id,$id=FALSE){
		$data['parent'] = new Category($parent_id);
		$data['category'] = new Category($category_id);
		$data['product'] = new Product($id);
		
		$category = new Category();
		$data['categories'] = $category->where("module = 'products' and id in (select distinct category_id from products)")->order_by('id','asc')->get();
		
		$software_category = new Category();
		$data['software_categories'] = $software_category->where("module = 'softwares' and id in (select distinct category_id from softwares)")->order_by('id','asc')->get();
		
		$brochure_category = new Category();
		$data['brochure_categories'] = $brochure_category->where("module = 'brochures' and id in (select distinct category_id from brochures)")->order_by('id','asc')->get();
		
		$wallpaper_category = new Category();
		$data['wallpaper_categories'] = $wallpaper_category->where("module = 'wallpapers' and id in (select distinct category_id from wallpapers)")->order_by('id','asc')->get();
		
		$this->template->append_metadata(js_lightbox());
		$this->template->build('admin/common_product_form',$data);
	}
	
	function common_save($parent_id,$id=FALSE)
	{
		if($_POST){
			$product = new Product($id);
			
			if($_FILES['image']['name'])
			{
				if($product->id){
					$product->delete_file($product->id,'uploads/products/','image');
				}
				$_POST['image'] = $product->upload($_FILES['image'],'uploads/products/',440,245);
			}
			if(@$_FILES['before']['name'])
			{
				if($product->id){
					$product->delete_file($product->id,'uploads/products/','before');
				}
				$_POST['before'] = $product->upload($_FILES['before'],'uploads/products/',185,95);
			}
			if(@$_FILES['after']['name'])
			{
				if($product->id){
					$product->delete_file($product->id,'uploads/products/','after');
				}
				$_POST['after'] = $product->upload($_FILES['after'],'uploads/products/',185,95);
			}
			//$_POST['category_id'] = $category_id;
			$_POST['title'] = lang_encode($_POST['title']);
			$_POST['detail1'] = lang_encode($_POST['detail1']);
			$_POST['detail2'] = lang_encode($_POST['detail2']);
			$_POST['detail3'] = lang_encode($_POST['detail3']);
			//$_POST['highlight2_detail'] = lang_encode($_POST['highlight2_detail']);
			$_POST['user_id'] = $this->session->userdata('id');
			$product->from_array($_POST);
			if(isset($_POST['accessories'])){
				$product->accessories = implode(',',$_POST['accessories']);
			}else{
				$product->accessories = "";
			}
			if(isset($_POST['softwares'])){
				$product->softwares = implode(',',$_POST['softwares']);
			}else{
				$product->softwares = "";
			}
			if(isset($_POST['brochures'])){
				$product->brochures = implode(',',$_POST['brochures']);
			}else{
				$product->brochures = "";
			}
			if(isset($_POST['wallpapers'])){
				$product->wallpapers = implode(',',$_POST['wallpapers']);
			}else{
				$product->wallpapers = "";
			}
			$product->save();
			
			fix_file($_FILES['file']);
			foreach($_FILES['file'] as $key => $item)
			{
				if($item)
				{
					$product_image = new Product_image(@$_POST['image_id'][$key]);
					if($_FILES['file'][$key]['name'])
					{
						if(@$_POST['image_id'][$key])$product_image->delete_file('uploads/products/product_mornitor','file');
						$product_image->file = $product_image->upload($_FILES['file'][$key],'uploads/products/product_mornitor');
						
						$product_image->product_id = $product->id;
						$product_image->save();
					}		
				}
			}
			
			set_notify('success', lang('save_data_complete'));
		}
			
		redirect($_POST['referer']);
	}
	
}
?>