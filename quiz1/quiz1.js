var userdata = [], usernames = [];

$(document).ready(function(){
	$("#searchBtn").on("click", search);
	$("#username").on("keydown", function(evt){
		if(evt.keyCode == 13) {
			search(evt);
		}
    });
	loadData();
});

function loadData(evt){
	$.ajax({
		type: "GET",
		url : "Quiz1.json",
		dataType : "json"
	}).done(function (data, textStatus, jqXHR){
		storeData(data);
		showSearchField();
	}).fail(function () {
		showError("Failed to load User Data");
	});
}

function showSearchField(){
	$("#loadingScreen").hide();
	$("#searchForm").show();
}

function showError(msg){
	$("#searchTable").hide();
	$("#errorMessage").html('<div class="alert alert-danger"> <strong>Error:</strong> ' + msg + '</div>');
	$("#errorMessage").show();
}

function hideError(msg){
	$("#errorMessage").html('');
	$("#errorMessage").hide();
}

function storeData(data){
	for(var i in data){
		//console.log(data[i]);
		usernames.push(data[i].username);
		userdata[data[i].username] = data[i];
	}
	//console.log(usernames);
	//console.log(userdata);
	$("#username").autocomplete({
		source: usernames
	});
}

function search(evt){
	hideError();
	var username = $("#username").val();
	if(usernames.indexOf(username) != -1){
		//console.log("have data");
		displayData(username);
	}else{
		//console.log("do not");
		showError("Invalid Username");
	}
}

function displayData(username){
	//console.log("displayData: ", username);
	var data = userdata[username];
	$("#resultID").html(data.id);
	$("#resultFirstName").html(data.first_name);
	$("#resultLastName").html(data.last_name);
	$("#resultUsername").html(data.username);
	$("#resultEmail").html("<a href='mailto:"+data.email+"'>"+data.email+"</a>");
	$("#resultCity").html(data.city);
	$("#resultCountry").html(data.country);
	$("#resultFavoriteColor").html(data.fav_color).css("background-color", data.fav_color);
	if(data.blog.length > 32){
		blogAnchor = data.blog.substring(0, 32) + "...";
	}else{
		blogAnchor = data.blog;
	}
	$("#resultBlog").html("<a href='"+data.blog+"' target='_blank' title='"+data.blog+"'>"+blogAnchor+"</a>");
	$("#resultTitle").html(data.title);		
	
	$("#searchTable").show();
}