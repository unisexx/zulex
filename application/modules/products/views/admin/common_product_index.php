<h1>สินค้า</h1>
<table class="list">
	<tr>
		<td><b><a href="products/admin/categories/index">สินค้า</a> » <a href="products/admin/categories/sub_categories/<?php echo $parent->id?>"><?php echo lang_decode($parent->name)?></a> » <?php echo lang_decode($category->name)?></b></td>
	</tr>
</table>
<form id="order" action="products/admin/products/save_orderlist" method="post">
<table class="list">
	<tr>
    	<th>สำดับ</th>
		<!--<th>ไฮไลท์ 1</th>
		<th>ไฮไลท์ 2</th>-->
		<th>สินค้า</th>
		<th width="100"><?php echo anchor('products/admin/products/common_form/'.$parent->id.'/'.$category->id,lang('btn_add'),'class="btn"')?></th>
	</tr>
	<?php foreach($products as $product):?>
		<tr <?php echo cycle()?>>
       		 <td><input type="text" name="orderlist[]" size="3" value="<?php echo $product->orderlist?>"><input type="hidden" name="orderid[]" value="<?php echo $product->id ?>"></td>
            <!-- <td><input type="checkbox" name="highlight1" value="<?php echo $product->id ?>" <?php echo ($product->highlight1=="approve")?'checked="checked"':'' ?>/>
                    </td>
			<td>
				<input type="checkbox" name="status" value="<?php echo $product->id ?>" <?php echo ($product->status=="approve")?'checked="checked"':'' ?>/>
			</td>-->
			<td>
				<?php echo lang_decode($product->title)?>
			</td>
			<td>
				<a class="btn" href="products/admin/products/common_form/<?php echo $parent->id?>/<?php echo $category->id?>/<?php echo $product->id?>" >แก้ไข</a> 
				<a class="btn" href="products/admin/products/delete/<?php echo $product->id?>" onclick="return confirm('<?php echo lang('confirm_delete');?>')">ลบ</a>
			</td>
		</tr>
	<?php endforeach;?>
</table>
<input type="submit" value="บันทึก">
</form>
<?php echo $products->pagination()?>