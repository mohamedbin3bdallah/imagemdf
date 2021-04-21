	$(document).ready(function(){
	var _URL = window.URL;
      $("#file").change(function(){
		var image, file;
		if ((file = this.files[0])) {
			image = new Image();
			image.onload = function() {
				$("#width").val(this.width);
				$("#height").val(this.height);
				var filesize = Math.round((101-((this.width)*(this.height)*3)/($('#file')[0].files[0].size)))
				if(filesize > 0)	$("#quality").val(filesize);
			};
			image.src = _URL.createObjectURL(file);
		}
	  });
	});

	$(document).ready(function(){
      $("#width").keyup(function(){
      var val = $(this).val();
	  $("#width-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'width-validation.php',
         data: {
            'width':val
         },
         success: function (response) {
            //document.getElementById("width-validation").innerHTML = response;
			if(response == '1')
			{
				$("#width").css("background-color", "#81F781");
				$("#width-hidden").val('1');
				if($("#height-hidden").val() == '1' && $("#quality-hidden").val() == '1') $("#save").removeAttr("disabled");
			}
			else if(response == '2')
			{
				$("#width").css("background-color", "#F5A9A9");
				$("#width-validation").css("color", "red");
				$("#width-validation").html('Width must be number');
				$("#width-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#width").css("background-color", "#F5A9A9");
				$("#width-validation").css("color", "red");
				$("#width-validation").html('Width must be more than 5 px');
				$("#width-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '4')
			{
				$("#width").css("background-color", "#F5A9A9");
				$("#width-validation").css("color", "red");
				$("#width-validation").html('Width must be less than 10001 px');
				$("#width-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#width").css("background-color", "#81F781");
				$("#width-validation").css("color", "green");
				$("#width-validation").html('Width is available');
				$("#width-hidden").val('1');
				if($("#height-hidden").val() == '1' && $("#quality-hidden").val() == '1') $("#save").removeAttr("disabled");
			}
         }
      });
      });
	});
	
	$(document).ready(function(){
      $("#height").keyup(function(){
      var val = $(this).val();
	  $("#height-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'height-validation.php',
         data: {
            'height':val
         },
         success: function (response) {
            //document.getElementById("height-validation").innerHTML = response;
			if(response == '1')
			{				
				$("#height").css("background-color", "#81F781");
				$("#height-hidden").val('1');
				if($("#width-hidden").val() == '1' && $("#quality-hidden").val() == '1') $("#save").removeAttr("disabled");
			}
			else if(response == '2')
			{
				$("#height").css("background-color", "#F5A9A9");
				$("#height-validation").css("color", "red");
				$("#height-validation").html('Height must be number');
				$("#height-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#height").css("background-color", "#F5A9A9");
				$("#height-validation").css("color", "red");
				$("#height-validation").html('Height must be more than 5 px');
				$("#height-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '4')
			{
				$("#height").css("background-color", "#F5A9A9");
				$("#height-validation").css("color", "red");
				$("#height-validation").html('Height must be less than 10001 px');
				$("#height-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#height").css("background-color", "#81F781");
				$("#height-validation").css("color", "green");
				$("#height-validation").html('Height is available');
				$("#height-hidden").val('1');
				if($("#width-hidden").val() == '1' && $("#quality-hidden").val() == '1') $("#save").removeAttr("disabled");
			}
         }
      });
      });
	});
	
		$(document).ready(function(){
      $("#quality").keyup(function(){
      var val = $(this).val();
	  $("#quality-validation").html('');
      $.ajax({
         type: 'POST',
         url: 'quality-validation.php',
         data: {
            'quality':val
         },
         success: function (response) {
            //document.getElementById("quality-validation").innerHTML = response;
			if(response == '1')
			{
				$("#quality").css("background-color", "#81F781");
				$("#quality-hidden").val('1');
				if($("#width-hidden").val() == '1' && $("#height-hidden").val() == '1') $("#save").removeAttr("disabled");
			}
			else if(response == '2')
			{
				$("#quality").css("background-color", "#F5A9A9");
				$("#quality-validation").css("color", "red");
				$("#quality-validation").html('Quality must be number');
				$("#quality-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '3')
			{
				$("#quality").css("background-color", "#F5A9A9");
				$("#quality-validation").css("color", "red");
				$("#quality-validation").html('Quality must be more than 4 %');
				$("#quality-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '4')
			{
				$("#quality").css("background-color", "#F5A9A9");
				$("#quality-validation").css("color", "red");
				$("#quality-validation").html('Quality must be less than 101 %');
				$("#quality-hidden").val('0');
				$("#save").attr('disabled', 'true');
			}
			else if(response == '5')
			{
				$("#quality").css("background-color", "#81F781");
				$("#quality-validation").css("color", "green");
				$("#quality-validation").html('Quality is available');
				$("#quality-hidden").val('1');
				if($("#width-hidden").val() == '1' && $("#height-hidden").val() == '1') $("#save").removeAttr("disabled");
			}
         }
      });
      });
	});