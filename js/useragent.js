<script type="text/javascript">
	var ua = navigator.userAgent;
	if (ua.indexOf('iPhone') > 0
			|| (ua.indexOf('Android') > 0) && (ua.indexOf('Mobile') > 0)
			|| ua.indexOf('Windows Phone') > 0) {
		if (confirm('スマートフォンサイトに移動しますか？')) {
			location.href = './sp/';
		}
	}
</script>