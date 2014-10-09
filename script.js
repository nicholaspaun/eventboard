$(document).ready(function ()
	{
	 setInterval(function ()
		{
		 jQuery.ajax({
            type: "GET",
            url: "tabledat.php",
            success:function(response){
		$('table').html(response);
(function (el) {
    setTimeout(function () {
        el.removeClass('yes-update');
    }, 29000);
}($('.no-update').addClass('yes-update')));
            }

        });
    }, 30000);
});
