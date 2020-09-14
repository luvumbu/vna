var section = new Vue({
	el: '#section',
	data: {

	},
	methods: {
		click_plus:function(){
			this.ajax("selector0","class/php/add_data.php"); 
		} , 
		click_folder:function(){
			this.ajax("selector0","class/php/select_list.php"); 
		} , 
		click_search:function(){
			this.ajax("selector0","class/php/select_search.php"); 
		},
		ajax: function(id,source) {
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById(id).innerHTML =
					this.responseText;
				}
			};
			xhttp.open("GET", source, true);
			xhttp.send();
		} , 
 
	}
})


function ajax(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200) {
			document.getElementById(id).innerHTML =
			this.responseText;
		}
	};
	xhttp.open("GET", source, true);
	xhttp.send();
}

function click_affiche_datas(_this){


 
if(_this.value.length>3){
	var ok = new Information("class/php/select_affiche_datas.php"); // création de la classe 
	ok.add("affiche_datas",_this.value); // ajout de l'information pour lenvoi 
  
	console.log(ok.info()); // demande l'information dans le tableau
	ok.push(); // envoie l'information au code pkp 


	setTimeout(function(){ 
		ajax("affiche_datas","class/php/affiche_datas.php");
	
	}, 300);

}




}




