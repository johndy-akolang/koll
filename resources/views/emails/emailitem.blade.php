<!-- wrapper -->
<div class="" style="margin: 0 auto;width: 755px;padding: 15px;background: #f3f1f3;" >
	
	<!-- logo -->
	<div class="" style="height: 70px;width: 100%;">
		<img src="http://koll.com.ph/images/logo-koll.png" alt="Koll.com.ph" title="Koll.com.ph" />
	</div>

	<!-- user greeting and name -->
	<span style="color: #555;font-size: 16px;">Hello, {{ $user }}</span>

	<!-- guest and subject -->
	<p style="font-size: 16px;margin: 40px 0;color: #555;"><b>Guest</b> send you private message on <a href="{{ $url }}" style="color: #15c;">{{ $subject }}</a></p>

	<!-- guest private message -->
	<p style="margin: 20px 0 0 30px;font-size: 18px;color: #b6b6b6;">
		" <i>{{ $sndmsgtxt }}</i> "
	</p>

	<!-- add for spacing -->
	<p style="font-size: 16px;margin: 35px 0;color: #555;"></p>

	<!-- footer letter -->
	<p style="margin: 40px 0;color: #555;">
		TEAM KOLL.com.ph 
	</p>

</div>
