<html>
	<?php include('head.php');?>
	<?php include('sidebar.php');?>
		<div id="page-wrapper">
			<div class="graphs">
				<h3>Models</h3>
				<div class="modelModules">
					<div class="modelModule">
						<div class="modelImg">
							<button id="model1" type="button" data-toggle="modal" data-target="#modelModal" class="modelImgBtn"><img src="models/model1.png"/></button>
						</div>
						<div class="modelName">
							<input type="text" placeholder="Jenelle"></input>
						</div>
						<div class="modelDescription">
							<textarea></textarea>
						</div>
						<div class="modelAvailability">
						</div>
						<div class="modelUpdate">	
							<button class="removeButton">Remove</button>
							<button class="updateButton">Update</button>
							<div class="clearfix">
							</div>
						</div>
					</div>
					<div class="modelModule">
						<div class="modelImg">
							<button id="model2" type="button" data-toggle="modal" data-target="#modelModal" class="modelImgBtn"><img src="models/model2.png"/></button>
						</div>
						<div class="modelName">
							<input type="text" placeholder="Garnet"></input>
						</div>
						<div class="modelDescription">
							<textarea></textarea>
						</div>
						<div class="modelAvailability">
						</div>
						<div class="modelUpdate">	
							<button class="removeButton">Remove</button>
							<button class="updateButton">Update</button>
							<div class="clearfix">
							</div>
						</div>
					</div>
					<div class="modelModule">
						<div class="modelImg">
							<button id="model3" type="button" data-toggle="modal" data-target="#modelModal" class="modelImgBtn"><img src="models/model3.png"/></button>
						</div>
						<div class="modelName">
							<input type="text" placeholder="Jean"></input>
						</div>
						<div class="modelDescription">
							<textarea></textarea>
						</div>
						<div class="modelAvailability">
						</div>
						<div class="modelUpdate">	
							<button class="removeButton">Remove</button>
							<button class="updateButton">Update</button>
							<div class="clearfix">
							</div>
						</div>
					</div>
					<div class="modelModule">
						<div class="modelImg">
							<button id="model4" type="button" data-toggle="modal" data-target="#modelModal" class="modelImgBtn"><img src="models/model4.png"/></button>
						</div>
						<div class="modelName">
							<input type="text" placeholder="Aveline"></input>
						</div>
						<div class="modelDescription">
							<textarea></textarea>
						</div>
						<div class="modelAvailability">
						</div>
						<div class="modelUpdate">	
							<button class="removeButton">Remove</button>
							<button class="updateButton">Update</button>
							<div class="clearfix">
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
									<div class="clearfix"></div>

				<div class="empty">
				</div>
				<div class="addModelDiv">
					<div class="imgUploadDiv">
						<h3>Add a New Model</h3>
						<input type="file" onchange="addModelImg();" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
						<label id="modelImgUpload" for="file">Choose Model's Image</label>
					</div>
					<div id="newModelImg" class="imgUploadDiv">
						<div class="oneEighty">
							<img id="newModelImgImg" src="https://placehold.it/180" id="previewImg"/>
							<div><input type="text" placeholder="Model Name">
							</div>
							<div><textarea placeholder="Model Description"></textarea>
							</div>
							<div class="uploadBtnDiv">
								<button>Upload</button>
							</div>
						</div>
					</div>
				</div>
				<div class="addModelDiv">
					<div class="imgUploadDiv">
						<h3>Model Availability</h3>
						<div class="modelSelectDiv btn-group">
							<buton id="modelSelect" type="button" class="btn dropdown-toggle btn2" data-toggle="dropdown" >Select a Model
							<span class="caret"></span></buton>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#" id="option1" onclick="modelSelect(this);">Model 1:  Jenelle</a></li>
								<li><a href="#" id="option2" onclick="modelSelect(this);">Model 2:  Garnet</a></li>
								<li><a href="#" id="option3" onclick="modelSelect(this);">Model 3:  Jean</a></li>
								<li><a href="#" id="option4" onclick="modelSelect(this);">Model 4:  Aveline</a></li>
							</ul>
						</div>
						<div class="modelCal">
							<?php include('calendar.php');?>
						</div>
					</div>
				</div>
			<div class="clearfix"></div>
			</div>
		</div>
		<!-- Modal -->
<div id="modelModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
	</body>
</html>