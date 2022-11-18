<?php $this->layout("layouts/home/home_layout", ["title" => APPNAME]) ?>


<?php 
	$this->start("page");
?>


<div class="">
    <h1>Đây là chỗ hiển thị sách khi tìm kiếm!</h1>


    <div class='books-well'>
  		 <!-- Loader -->
  		 <div class='loader'>
	  			<center><img src="/img/user.png">
                <h4>Loading</h4></center>
          </div>
         <div class='well'><button id="sort" class="btn btn-danger" >Sort By New Books</button></div>
		    <div id="books-well">

		</div>
		<div class="row">
			<div class="col-4"></div>
			<div class="col-4 center">
			<div class="pagination pagination-centered">
					<ul class="paginate">
						<li class="active" id="1" ><a href="#">1</a></li>
						<li id="2"><a href="#">2</a></li>
						<li id="3"><a href="#">3</a></li>
						<li id="4"><a href="#">4</a></li>
						<li id="5"><a href="#">5</a></li>
						<li id="6"><a href="#">6</a></li>
						<li id="7"><a href="#">7</a></li>
						<li id="8"><a href="#">8</a></li>
						<li id="9"><a href="#">9</a></li>
					</ul>
				</div>
			</div>
			<div class="col-4"></div>
		</div>
		    
    	</div>
    </div>
  </div>
</div>

<div id="previewModal" class="modal hide fade">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="booktitle">Book Preview</h3>
  </div>
  <div class="modal-body">
  		<div id="previewBody" frameborder='0' ></div>
  </div>
</div>

<script src="/JS/bootstrap.min.js" type="text/javascript"></script>
<script src="/JS/app.js" type="text/javascript"></script>

<div>
<?php if (!isset($_SESSION['user'])){ ?>
              <div>Chưa đăng nhập</div>
              <!-- End section -->
              <?php }else { ?>
                <div>Đã đăng nhập</div>
                <div><a href="/user/logout">Sign out</a></div>
              <?php } ?>
</div>
<?php $this->stop()?>