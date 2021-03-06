@extends('layouts.wg')

@section('content')
		<h2>最新动态</h2>
<br>
@foreach ($info as $data)

<div class="panel panel-default">
  <div class="panel-heading">{{$data->subject}} </div>
  <div class="panel-body {{$data->playtype}}">
<!-- 	    <div class="alert {{$data->playtype}} " role="alert"> -->
	    	{{$data->msg}}
	    <br /><span class="help-block text-right">
						
	        更新时间：{{$data->updated_at}}
					</span>
	    </div>
<!--   </div> -->
</div>
@endforeach

<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="network/news" data-title="GDMU网络最新动态" data-url="https://wg.gdmu.orgtree.cn/network/news"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"gdmuwg"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

@endsection