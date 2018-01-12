@extends('customer.layouts.master')
@section('content')
<section id="chitietmonan" class="chitietmonan" style="margin-top:3em;">
	<div class="container">
		<div id='tongquan' class="row">
			<div class="tongquan-left col-md-9">
				<div id="anh" class="col-md-5">
					<img src="uploads/monan/{{$monan->anh_monan}}" class="img-responsive img-rounded" alt="Pho tuoi xao thit bo">
					<br>
					<b><u>Ngày Đăng :</u>&nbsp;</b><i style="color: green;">{{$monan->created_at }}</i>
					<br>
					<div class="star-rating" id="old-star">
							<span  class="fa fa-star-o" data-rating="1" id="o1" ></span>
							<span  class="fa fa-star-o" data-rating="2" id="o2" ></span>
							<span  class="fa fa-star-o" data-rating="3" id="o3" ></span>
							<span  class="fa fa-star-o" data-rating="4" id="o4" ></span>
							<span  class="fa fa-star-o" data-rating="5" id="o5" ></span>
							<span  class="fa fa-star-o" data-rating="6" id="o6" ></span>
							<span  class="fa fa-star-o" data-rating="7" id="o7" ></span>
							<input type="hidden" name="whatever1" class="rating-value" value="{{$trungbinh}}">
							<span style="font-size: 14px;" id="lx">Trung Bình :<b style="color:red;">{{$trungbinh}}</b></span>
					</div>
					<br>
					<a style="background-color: #90b3ed;" class="user-post-button-share btn" href="https://www.facebook.com/sharer/sharer.php?u=http://bkcook.ddns.net/bkcook.vn/public/chitietmonan/{{$monan->id}}&amp;src=sdkpreparse" target="_blank">
                        <span style="font-size: 15px">
                            <i class="fa fa-share-square-o" aria-hidden="true"></i>Chia Sẻ Facebook
                        </span>
                    </a>
				</div>
				<div id="gioithieu" class="col-md-7">
						<div id="tag">
		              		<span class="tagmucdich">Mục đích: <a href="">{{$monan->mucdich->ten}}</a></span>
		              		<span class="tagmucdich">Vùng miền: <a href="">{{$monan->vungmien->ten}}</a></span>
						</div>

						<div id="tenmon"><h3>{{$monan->ten_monan}}</h3></div>
							<div id="vote" class="container">
							     <div class="star-rating"
								     @if(!Auth::user())
								     	 onclick="return confirm('Bạn phải đăng nhập để đánh giá...');"
								     @endif
							     >
							        <span  class="fa fa-star-o" data-rating="1" id="1" ></span>
							        <span  class="fa fa-star-o" data-rating="2" id="2" ></span>
							        <span  class="fa fa-star-o" data-rating="3" id="3" ></span>
							        <span  class="fa fa-star-o" data-rating="4" id="4" ></span>
							        <span  class="fa fa-star-o" data-rating="5" id="5" ></span>
							        <span  class="fa fa-star-o" data-rating="6" id="6" ></span>
							        <span  class="fa fa-star-o" data-rating="7" id="7" ></span>
							        <input type="hidden" name="whatever1" class="rating-value" value="4.1">
							        <span style="font-size: 14px;" id="lx"></span>
							       @if(Auth::user() && $monan->danhgiamonan )
							       		@foreach ($monan->danhgiamonan as $dg)
											@if(($dg->id_monan == $monan->id) && ($dg->id_user == Auth::user()->id))
												<script>
													for( i = 1 ;i <= {{$dg->danhgia}}; i++){
														document.getElementById(i).classList.remove('fa-star-o');
														document.getElementById(i).classList.add('fa-star');
													}
												</script>
												@break
											@endif
										@endforeach
							       @endif
							       @if(Auth::user())
							       &nbsp;&nbsp;<b style="color: gray;">(đánh giá của bạn)</b>
							       @endif
							</div>
				</div>
				<div id="mota">
					<p>{{$monan->gioithieu}}</p>
				</div>
				<div id="tacgia">
						<img id="anhtacgia" src="vendor_customer/assets/images/thuyduyen.jpg" alt="Nguyen Thuy Duyen" class="img-circle">
						<div id='thongtintacgia'>
							<p id='tentacgia'><a href="">Admin</a></p>
							<p>
								<b><u>Lượt Xem :</u>&nbsp;</b><b style="color: red;">{{$monan->so_luot_xem }}</b>
								<b></b>
							</p>
						</div>
				</div>
				<div id="thongso">
						<div id="songuyenlieu">
							<p>Số Bước</p>
							<b> {{$monan->so_buoc}}</b>
						</div>
						<div id="thoigian">
							<p>Thực hiện</p>
							<b> {{$monan->thoigian}} phút</b>
						</div>
						<div id="dokho">
							<p>Độ khó</p>
							<b> {{$monan->do_kho}}</b>
						</div>
				</div>
			</div>
				@if($monan->video)
					<div class="modal fade" id="yourModal{{$monan->video->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
						<div class="modal-dialog" role="document">
							<div class="modal-content" style="width: 720px;">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4 class="modal-title" id="myModalLabel">{{$monan->ten_monan}}</h4>
									</div>
									<div class="modal-body">
											<video id="video" width="700" controls>
											  <source id="svideo" src="uploads\video\{{$monan->video->ten}}" type="video/mp4">
											</video>
									</div>
									<div class="modal-footer">

									</div>
							</div>
						</div>
					</div>
				@endif
			</div>
			{{-- Món ăn liên quan --}}
			<div id="monanlienquan" class="col-md-3">
				<marquee behavior="alternate"><h5>Món ăn liên quan</h5></marquee>
				@foreach($monan_lienquan as $md)
				<div id="baiviet">
					<img src="uploads/monan/{{$md->anh_monan}}">
					<p><a href="chitietmonan/{{$md->id}}">{{$md->ten_monan}}</a></p>
				</div>
				@endforeach
			</div>
		</div>
 		<!-- id="nguyenlieu-monanlienquan"  -->
		<div  class="row" >
			<div id="nguyenlieu" class="col-md-8"  style="background-color: white; font-family: 'segoe ui light'; padding-left: 40px;" >
				<div class="col-md-4">
					<div id="tieude" >
						<h5 style="border-bottom: solid 1px #eee;">Nguyên liệu chính</h5>
					</div>
					<div id="nguyenlieuchinh">
					</div>
				</div>
				<div class="col-md-4">
					<div id="tieude">
						<h5 style="border-bottom: solid 1px #eee;">Nguyên liệu phụ</h5>
					</div>
					<div id="nguyenlieuphu">
					</div>
				</div>
				<div class="col-md-4">
					<div id="tieude">
						<h5 style="border-bottom: solid 1px #eee;">Gia vị</h5>
					</div>
					<div id="giavi">
					</div>
				</div>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-9" id="tab">
				<div class="row">
	                <div class="col-md-12">
	            		<div class="card">
				            <ul class="nav nav-tabs" role="tablist">
				                <li role="presentation" class="active">
				                	<a href="#congthuc" aria-controls="congthuc" role="tab" data-toggle="tab">Công Thức</a>
				                </li>
				                <li role="presentation">
				                	<a href="#hinhanh" aria-controls="hinhanh" role="tab" data-toggle="tab">Hình Ảnh</a>
				                </li>
				                @if($monan->video)
					                <li role="presentation">
					                	<a {{-- href="#video" --}} aria-controls="video" role="tab" {{-- data-toggle="tab" --}} data-toggle="modal" data-target="#yourModal{{$monan->video->id}}">Video</a>
					                </li>
				                @endif
				                @if(!$monan->video)
				                	<li role="presentation">
					                	<a href="#video" aria-controls="video" role="tab" {{-- data-toggle="tab" --}} data-toggle="modal" data-target="">Chưa Có Video</a>
					                </li>
				                @endif
				            </ul>
		                    <!-- Tab panes -->
	                    <div class="tab-content">
	                        <div role="tabpanel" class="tab-pane active" id="congthuc">
	                        	<?php $i = 1?>
	                        	@foreach($cacbuocnau as $cb)
									<h5><strong>Bước <?php echo $i++; ?>:</strong></h5>
									<p>{{$cb->noidung}}</p>
									<div class="row text-center">
										<img id="buoc1-1" src="uploads/monan/{{$cb->image}}" width="650px" height="350px">
									</div>
									<hr>
								@endforeach
	                        </div>
	                        <div role="tabpanel" class="tab-pane" id="hinhanh">
	                        	<h4>Hình ảnh món ăn</h4><hr>
								<img src="vendor_customer/assets/images/ha1.jpg">
								<img src="vendor_customer/assets/images/ha2.jpg">
								<img src="vendor_customer/assets/images/ha3.jpg">
								<img src="vendor_customer/assets/images/ha4.jpg">
								<img src="vendor_customer/assets/images/ha5.jpg">
								<img src="vendor_customer/assets/images/ha6.jpg">
								<img src="vendor_customer/assets/images/ha7.jpg">
								<img src="vendor_customer/assets/images/ha8.jpg">
								<img src="vendor_customer/assets/images/ha9.jpg">
								<img src="vendor_customer/assets/images/ha10.jpg">
								<img src="vendor_customer/assets/images/ha11.jpg">
								<img src="vendor_customer/assets/images/ha12.jpg">
								<img src="vendor_customer/assets/images/ha13.jpg">
								<img src="vendor_customer/assets/images/ha14.jpg">
	                        </div>
	                        <div role="tabpanel" class="tab-pane" id="video">
	                        	<h4>Video món ăn</h4><hr>
	                        	{{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/O9hTxcTbKOo" frameborder="0" allowfullscreen></iframe> --}}
	                        	@if($monan->video)
		                        <video width="775" controls>
								  <source src="uploads\video\{{$monan->video->ten}}" type="video/mp4">
								</video>
								@endif
								@if(!$monan->video)
									<div class="alert-warning">
										<h3 style="text-align: center;">Món Ăn Chưa Có Video,rất xin lỗi... </h3>
									</div>
								@endif
	                        </div>
	                    </div>	<!--End tab panel -->
						</div>
	                </div>
				</div>
			</div>
			<div class="col-md-3 khoibaiviet">
				{{-- Phần đổ bài viết liên quan --}}
				<div id="baivietlienquan" class="col-md-12">
					<marquee behavior="alternate"><h5>Bài Viết Liên Quan</h5></marquee>
					@if(count($baiviet_lienquans) > 0)
						@foreach($baiviet_lienquans as $baiviet_lienquan)
							<div id="baiviet">
								@if(count($baiviet_lienquan->postimage) > 0)
									<img src="{{$baiviet_lienquan->postimage[0]->image}}" alt="Mất kết nối..anh bai post">
								@else
									<img src="{{$baiviet_lienquan->user->anhdaidien}}" alt="Mất kết nối..anh user">
								@endif
								<p><a href="baidangchitiet/{{$baiviet_lienquan->id}}" target="_blank">
								&nbsp;&nbsp;Tác Giả:<b style="color: orange;">{{$baiviet_lienquan->user->hovaten}}</b>
								</a>
								</p>
							</div>
						@endforeach
					@else
						<p style="color:green; text-align: center;">Không có bài viết nào !!</p>
					@endif
				</div>

				<!-- Comment món ăn của người dùng có tài khoản-->
				<div class="detailBox container col-md-12">
				    <div class="titleBox">
				  	<label>Bình luận</label>
				        <button type="button" class="close" aria-hidden="true">&times;</button>
				    </div>
				    <div class="actionBox" style="overflow: auto; height:25em ">
				        <ul class="commentList">
				            @foreach($comments as $comment)
                                <li>
					                <div class="commenterImage">
					                  <img src="{{$comment->user->anhdaidien}}" />
					                </div>
					                <div class="commentText">
					                	<p>{{$comment->user->tentaikhoan}}</p>
					                    <p class="">{{$comment->noi_dung}}</p> <span class="date sub-text">{{$comment->created_at}}</span>

					                </div>
					            </li>
				            @endforeach
				        </ul>
				    </div>
				   {{--  <form class="form" role="form"> --}}
			           @if(Auth::user())
			            <div class="form-group">
			            	<input type="hidden" name="_token" value="{{csrf_token()}}" />
			                <input id="input-comment" class="form-control" type="text" placeholder="Bình luận của bạn.." />
			                <button class="btn btn-sm disabled btn-primary" id="btn-comment" onclick="sendComment('{{Auth::user()->id}}','{{$monan->id}}' )">Thêm</button>
			            </div>
			           @endif
			           @if(!Auth::user())
				           <br>
				           <div class="form-group" style="align-content: center;">
				                <a href="javascript:void(0);" class="form-control signin" style="text-align: center;color: green;">Bình Luận</a>
						   </div>
			           @endif
			      {{--   </form> --}}
				</div>	<!-- End comment -->
				{{-- hết comment món ăn --}}
			</div>
		</div>
	</div>
	<!-- </div> -->
</section>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.4/socket.io.js"></script> --}}
<script src="vendor_customer/vendor/js/socket.io.js"></script>
{{-- Sử lý tắt video khi tắt Modal  --}}
@if($monan->video)
	<script>
		console.log('modal turn off');
		$('#yourModal{{$monan->video->id}}').on('hidden.bs.modal', function (e) {
			// $('#yourModal{{$monan->video->id}}')[0].pause();
			$('#yourModal{{$monan->video->id}} svideo').attr("src", $("#yourModal{{$monan->video->id}}  svideo").attr("src"));
			console.log('ID video :'+ {{$monan->video->id}});
			e.preventDefault();
		    $('.videoplayer').children('iframe').attr('src', '');
		    $('.modal-background').fadeOut();
		});
	</script>
@endif
{{--  --}}
<script type="text/javascript">
	function split(data,id){
		var nguyenlieu=data;
		if(nguyenlieu!=" "){
			var arr=[];
			arr= nguyenlieu.split(".");
			var str="<ul class='list-nguyenlieu'>";
			for (var i = 0;i< arr.length-1; i++) {
				arrLuong = arr[i].split(",");

				str+="<li>"+ arrLuong[0].trim() + " <span class='luong'> " + arrLuong[1].trim() + "</span></li>";
			}
			str+="</ul>";
			document.getElementById(id).innerHTML= str;
		}else{

		}
	}
	var data=[
		{
			'data': "{{$monan->nguyen_lieu_chinh}}",
			'str': 'nguyenlieuchinh'
		},
		{
			'data': "{{$monan->nguyen_lieu_phu}}",
			'str': 'nguyenlieuphu'
		},
		{
			'data': "{{$monan->giavi}}",
			'str': 'giavi'
		}];

	split(data[0].data,data[0].str);
	split(data[1].data,data[1].str);
	split(data[2].data,data[2].str);

	$(document).ready(function(){
        $("#input-comment").keyup(function() {
	    	var text = $("#input-comment").val().trim();
	        if(text.length>0) {
	        	$("#btn-comment").removeClass("disabled");
	        } else {
	        	$("#btn-comment").addClass("disabled");
	        }
	    })
    });

    var socket = io.connect('http://58.187.15.251:1108');

	function sendComment(id_user,id_monan) {
		var text = $("#input-comment").val();
		console.log(text);
        socket.emit('comment monan',{'id_user':id_user,'noi_dung':text,'id_monan':id_monan });
        $("#input-comment").val("");
        $("#btn-comment").addClass("disabled");
        return false;
	};

    socket.on('comment monan',function(data){
    	var element = `<li>
			                <div class="commenterImage">
			                  <img src="`+data.anh_dai_dien+`" />
			                </div>
			                <div class="commentText">
			                	<p>`+data.ten_tai_khoan+`</p>
			                    <p class="">`+data.noi_dung+`</p> <span class="date sub-text">`+data.created_at+`</span>
			                </div>
			            </li>`;
    	$(".commentList").append(element);
    });
</script>
{{-- Phần Ajã sử lý đánh giá --}}
@if(Auth::user())
	<script type="text/javascript">
	    $(document).ready(function() {
	        $.ajaxSetup({
	            headers: {
	                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	            }
	        });
	        $("span").click(function() {
	            var sao = $(this).attr("id");
	            var moni = `{{$monan->id}}`;
	            var useri = `{{Auth::user()->id}}`;
	            if((sao=="1")||(sao=="2")||(sao=="3")||(sao=="4")||(sao=="5")||(sao=="6")||(sao == "7")){
	            var saoi = parseInt(sao);
				console.log(useri + ' :da danh gia mon:' + moni);
				var url = "{{route('danhgia_monan')}}";
	            var op='';
	            $.ajax({
	                type:'POST',
	                url: url,
	                data:{'moni':moni,
	            	      'useri':useri,
	            	  	  'saoi':saoi},
	                success:function(response){
	                    console.log(response);
	                    for( i = 1 ;i <= saoi ; i++){
							document.getElementById(i).classList.remove('fa-star-o');
							document.getElementById(i).classList.add('fa-star');
						}
						alert('Bạn đã đánh giá '+ saoi +' sao cho món ' +'{{$monan->ten_monan}}');
	                },
	                error:function() {
	                    console.log('error');
	                }
	            });
	            }else{
	            	console.log("đay không phải là sao..ahihi");
	            }
	        });
	    });
	</script>
@endif
@endsection

