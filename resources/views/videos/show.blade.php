@extends('app')

@section('content')
<?php
	$userRole = AuthHelper::authenticate();
	$user = Cas::user();
?>


    <div class="row" style="padding:10px; padding-top:70px;">
        <div calss="col-xs-12" style="margin:auto;" >
            <div class="panel panel-default" style="max-width:100%;padding-left:10px; margin:auto; width:750px;">
        <center><div id="videoplayer" style="max-width:100%; height:auto; padding:10px;">
	<video width="720px" height="auto" controls>
									<source src="{{video_base_path}}/{{$video['vid_url']}}" type="video/mp4">
									Your browser does not support the video tag.
							</video>
	</div>
    </div>
</div>



<div class="container-fluid" style="padding-top:10px;">
	<center><div style="display:block; padding-bottom:10px; width:750px; max-width:100%;">
			@if($userRole == 'admin' || $user == $video['created_by'])
				{!! link_to_route('videos.edit', 'Edit Video Information', array($video->slug), array('class' => 'btn btn-default btn-block', 'style'=>'outline:none; font-weight:bold; color:#2196F3')) !!}
			@endif
		</div></center>

		<center><div style="display:block; padding-bottom:10px; width:750px; max-width:100%;">
				@if($userRole == 'admin')
					{!! Form::model($video, ['method'=>'DELETE', 'action'=>['VideosController@destroy', $video->slug]]) !!}
						{!! Form::hidden('route', 'delete') !!}
						<input class="btn btn-default btn-block" type="submit" name="submit" style="outline:none; font-weight:bold; color:#990033" value="DELETE" onclick="return confirm('Do you wish to delete this video?');return false;" />
					{!! Form::close() !!}
				@endif
			</div></center>

<div class="panel panel-default" style="max-width:100%; padding-left:30px; padding:0px; margin:auto; width:750px;">

	<div class="panel-heading" style="position:relative;">

                            <h3>{{$video['title']}}</h3>

	</div>
	<div class="panel-body">
	<ul class="nav nav-tabs">
  <li class="active"><a href="#about" data-toggle="tab" aria-expanded="true" style="outline:none;">About</a></li>
  <!-- <li class=""><a href="#comments" data-toggle="tab" aria-expanded="false"  style="outline:none;">Comments</a></li> -->
</ul>

        <div id="myTabContent" class="tab-content" >
  <div class="tab-pane fade active in" id="about">
    <p>{{$video['description']}}.</p>
  </div>
  <div class="tab-pane fade" id="comments">
    <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit.</p>
  </div>

	</div>


</div>
</div>
</div>
</div>
</div>
@endsection
