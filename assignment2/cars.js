var carlists = [];

function load_car(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200){
				display_cars(this);
		}
	}
	xhttp.open("GET","cars.xml",true);
	xhttp.send();
}

function display_cars(xml){
	var i;
	var j;
	var xmlDoc = xml.responseXML;
	var x = xmlDoc.getElementsByTagName("car");
	for (i = 0; i < x.length; i++){	
		let indi_car = {};
		for (j = 0; j < x[i].children.length; j++){
			indi_car[x[i].children[j].nodeName] = x[i].children[j].innerHTML;
		}
		carlists.push(indi_car);
	}

	console.log(carlists);
	

	for (i=0;i<carlists.length;i++){
		const div = document.createElement('div');
		div.className = 'col-4 border';
		div.innerHTML = `
			<br><img src="./images/${carlists[i].model}.jpg" height='150' width='230'><br>
			<h3>${carlists[i].brand}-${carlists[i].model}-${carlists[i].modelYear}</h3>
			<span><strong>mileage: </strong>${carlists[i].mileage}</span><br>
			<span><strong>fuel_type: </strong>${carlists[i].fuelType}</span><br>
			<span><strong>seats: </strong>${carlists[i].seats}</span><br>
			<span><strong>price_per_day: $</strong>${carlists[i].pricePerDay}</span><br>
			<span><strong>availability: </strong>${carlists[i].availability}</span><br><br>
			<span><strong>description: </strong>${carlists[i].description}</span><br><br>
			<button class='btn btn-primary' onclick='check_availability(${carlists[i].carID})' >Add to cart</button><br><br>
		 `;		
		document.getElementById("carlist").appendChild(div); 

	}
}

function check_availability(id){
	if(carlists[id].availability == "Y"){ 
		$.ajax({
			type: "POST",
			url: "addCart.php",
			data: carlists[id],
			success: function(data){
				alert("Your car is successfully added to cart!");
				$('#test').html(data);
			}
		})
	} 
	else{
		alert("Sorry, the car is not available now. Please try other cars.");
	}
}

function carRes(){
	location.href = "showCart.php";	
	return true;
}

$(document).ready(function(){
	load_car();
})




