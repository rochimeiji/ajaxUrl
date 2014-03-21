$(function(){
	$("form[rol='ajax']").submit(function(e){
		$.ajax({url:location.pathname+'?rel=tab',type:'post',data:$(this).serialize(),success: function(data){
			$('#content').html(data);
		}});
		$pageurl = "?search="+$(this).find("[name='nama']").val();
		window.history.pushState({path:$pageurl},'',$pageurl);
		return false;
	});
});
$(function(){
	$('[we]').click(function(){
		return false;
	});
});