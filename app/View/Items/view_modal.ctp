<h3><?php echo __('Want to Approved'); ?>&nbsp;<b style="color: #00cc66; "><?php echo $item['Item']['description']; ?></b> (# <?php echo $item['Item']['id']; ?>) ?</h3>

        <div style="margin: auto; text-align: center; padding: 10px;">
            <p>To change Status click the button below.</p>
            <br/>
            <br/>
            <span style="padding: 20px;" class="label label-success"><a style="color: #FFF;" href="javascript:void(0)" class="change_status <?php echo $item['Item']['status'] == 1 ? 'approved' : 'pending'; ?>" opt="<?php echo $item['Item']['id']; ?>" rel="<?php echo $item['Item']['status']; ?>"><?php echo $item['Item']['status'] == 1 ? 'Approved' : 'Pending'; ?></a>&nbsp;</span>
            <br/>
            <br/>
        </div>
<script>
var xhr = '';
$(document).ready(function() {
	$('.change_status').on('click', function(){
		
		$('.cur_status_field').removeClass('cur_status_field');
		$(this).addClass('cur_status_field');
		$(this).html('Processing...');
		var status = $(this).attr('rel');
		var item_id = $(this).attr('opt');
		var url = '<?=SITE_URL?>/items/toggle_status';
		var data = 'status='+status+'&item_id='+item_id;
		console.log("d")
		
		if(xhr){
			xhr.abort();
		}
                console.log("dsd")
		xhr = $.ajax({
			url: url,
			data: data,
			type: 'post',
			success: function(response){
				var json = $.parseJSON(response);
				if(json.flag){
					if($('.cur_status_field').attr('rel') == 1){
						$('.cur_status_field').attr('rel', 0);
						$('.cur_status_field').html('Pending');
						$('.cur_status_field').removeClass('approved').addClass('pending');
					}else{
						$('.cur_status_field').attr('rel', 1);
						$('.cur_status_field').html('Approved');
						$('.cur_status_field').removeClass('pending').addClass('approved');
					}
					
					if(json.requestFlag){
						var id = '#chst'+json.item_id;
						$(id).attr('rel', 1);
						$(id).html('Approved');
						$(id).removeClass('pending').addClass('approved');
					}else{
						var id = '#chst'+json.item_id;
						$(id).attr('rel', 0);
						$(id).html('Pending');
						$(id).removeClass('approved').addClass('pending');
					}
					
					
				}else{
					alert('Status not changed');
				}
			},
			error: function(){
				console.log('Some Error occurred');
			}
		});
	});
});
</script>