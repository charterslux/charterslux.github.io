<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>@yield('title')</title>
	<style type="text/css">
		@import url(https://fonts.googleapis.com/css?family=Roboto+Condensed:300&subset=latin,cyrillic);
		@import url(https://fonts.googleapis.com/css?family=Open+Sans:300&subset=latin,cyrillic);
		body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none;}
		body {margin:0; padding:0;}
		body, #body_style {background:#fff;min-height:100px;color: #373737;font-family:"Open Sans", Arial, Helvetica, sans-serif;font-size:16px; text-align: justify; max-width: 700px; margin: 10px auto;font-weight: 300}
		table td {border-collapse:collapse;}
		p {margin:0; padding:0; margin-bottom:0;}
		h1, h2, h3, h4, h5, h6 {color: #333;line-height: 100%;font-family:"Roboto Condensed", Arial, Helvetica, sans-serif;font-weight: 300}
		h3 {margin-bottom: 10px; margin-top: 0}
		a, a:link {color:#2A5DB0;text-decoration: underline;}
		a:visited { color: #3c96e2; text-decoration: none}
		a:focus   { color: #3c96e2; text-decoration: underline}
		a:hover   { color: #3c96e2; text-decoration: underline}
		#header {border-bottom: 1px solid #d6b68f; display: inline-block; width: 100%; margin-bottom: 10px;}
		#header h3 {float: left; width: 90%}
		#header img {float: right; position: relative;}
		#sign {margin-top: 20px;}
		#footer {border-top: 1px solid #d6b68f; display: inline-block; width: 100%; margin-top: 10px; padding-top: 10px; color: #666; text-align: center; font-size: 12px;}
	</style>
</head>
<body style="background:#fff;min-height:100px;color: #373737;font-family:'Open Sans', Arial, Helvetica, sans-serif;font-size:16px;text-align: justify;max-width: 700px;font-weight: 300" alink="#FF0000" link="#FF0000" bgcolor="#FFFFFF" text="#000000" yahoo="fix">
	<div id="body_style" style="max-width: 700px; margin: 10px auto; padding:10px">
		<div id="header">
			<h3>@yield('title')</h3>
			<img width="25" height="25" src="{{ url('/images/cl-logo-min.png') }}" alt="Charters Luxury">
		</div>
		<div id="content">@yield('content')</div>
		<div id="sign">
			{{ trans('emails.kind_regards') }},<br/>
			{{ trans('emails.cl_team') }}
		</div>
		<div id="footer">
			<p>{{ trans('emails.footer.common_info') }}</p>
		</div>
	</div>
</body>
</html>