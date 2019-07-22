var map;
var geocoder;

function loadMap() {
	var Gikomba = {lat: 1.2856, lng: 36.8405};
    map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center:Gikomba 
    });

    var marker = new google.maps.Marker({
      position: Gikomba,
      map: map
    });

    var cdata = JSON.parse(document.getElementById('data').innerHTML);//this gets the data from the website
    geocoder = new google.maps.Geocoder();  
    codeAddress(cdata);

    var allData = JSON.parse(document.getElementById('allData').innerHTML);
    showAllColleges(allData)
}
//this displays all the dara on the map
function showAllColleges(allData) {
	var infoWind = new google.maps.InfoWindow;
	Array.prototype.forEach.call(allData, function(data){
		var content = document.createElement('div');//creates dynamic div
		var strong = document.createElement('strong');
		
		strong.textContent = data.name;//whatever data we want to apear in the box name is the name of the column to appear
		content.appendChild(strong);

		//var img = document.createElement('img');//this is what you want to display in the content popup
		//img.src = 'img/Leopard.jpg';
		//img.style.width = '100px';
		//content.appendChild(img);

		var marker = new google.maps.Marker({//displays the marker only
	      position: new google.maps.LatLng(data.lat, data.lng),//displays the marker only
	      map: map
	    });

	    marker.addListener('mouseover', function(){//this is an event listener  whenever one either  one clicks or moves mouseover
	    	infoWind.setContent(content);//this is calling the content that is to be displayed in the info window
	    	infoWind.open(map, marker);
	    })
	})
}
//this function gets the adress and pases it to google maps
function codeAddress(cdata) {
   Array.prototype.forEach.call(cdata, function(data){
    	var address = data.name + ' ' + data.address;//gets adress
	    geocoder.geocode( { 'address': address}, function(results, status) {
	      if (status == 'OK') {
	        map.setCenter(results[0].geometry.location);
	        var points = {};
	        points.id = data.id;
	        points.lat = map.getCenter().lat();
	        points.lng = map.getCenter().lng();
	        updateCollegeWithLatLng(points);
	      } else {
	        alert('Geocode was not successful for the following reason: ' + status);
	      }
	    });
	});
}

function updateCollegeWithLatLng(points) {
	$.ajax({
		url:"action.php",
		method:"post",
		data: points,
		success: function(res) {
			console.log(res)
		}
	})
	
}