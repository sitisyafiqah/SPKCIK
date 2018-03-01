<script>
var kursus = {
	
    "Kota Bharu": {
        "Bunut Payong": ["Salinas", "Gonzales"],
        "Kota Lama": ["Oakland", "Berkeley","Berkeley"],
		"Tanjung Mas": ["Oakland", "Berkeley","Berkeley"]
    },
    "Pengkala Chepa": {
        "Kijang": ["Roseburg", "Winston"],
        "Panchor": ["Medford", "Jacksonville"],
		"Chempaka": ["Medford", "Jacksonville"]
    },
	
	"Pasir Puteh": {
        "Gaal": ["Roseburg", "Winston"],
        "Limbongan": ["Medford", "Jacksonville"],
		"Selising": ["Medford", "Jacksonville"],
		"Semerak": ["Medford", "Jacksonville"]
    },
	
	"Pasir MAs": {
        "Chetok": ["Roseburg", "Winston"],
        "Pengkalan Pasir": ["Medford", "Jacksonville"],
		"Tendong": ["Medford", "Jacksonville"]
		
    },
	
	"Rantau Panjang": {
        "Bukit Tuku": ["Roseburg", "Winston"],
        "Gua Periuk": ["Medford", "Jacksonville"],
		"Meranti": ["Medford", "Jacksonville"]
    },
	
	"Gua Musang": {
        "Galas": ["Roseburg", "Winston"],
        "Nenggiri": ["Medford", "Jacksonville"],
		"Paloh": ["Medford", "Jacksonville"]
    },
	
	"Tumpat": {
        "Pengkalan Kubur": ["Roseburg", "Winston"],
        "Kelaboran": ["Medford", "Jacksonville"],
		"Pasir Pekan": ["Medford", "Jacksonville"],
		"Wakaf Bharu": ["Medford", "Jacksonville"]
    },
	
	"Bachok": {
        "Tawang": ["Roseburg", "Winston"],
        "Perupuk": ["Medford", "Jacksonville"],
		"Jelawat": ["Medford", "Jacksonville"]
    },
	
	"Ketereh": {
        "Kadok": ["Roseburg", "Winston"],
        "Kok Lanas": ["Medford", "Jacksonville"],
		"Melor": ["Medford", "Jacksonville"]
    },
	
	"Machang": {
        "Pulai Chondong": ["Roseburg", "Winston"],
        "Temangan": ["Medford", "Jacksonville"],
		"Kemuning": ["Medford", "Jacksonville"]
    },
	
	"Kuala Krai": {
        "Dabong": ["Roseburg", "Winston"],
        "Mengkebang": ["Medford", "Jacksonville"],
		"Manek Urai": ["Medford", "Jacksonville"],
		"Guchil": ["Medford", "Jacksonville"]
		
    },
	
	"Jeli": {
        "Bukit Bunga": ["Roseburg", "Winston"],
        "Air Lanas": ["Medford", "Jacksonville"],
		"Kuala Balah": ["Medford", "Jacksonville"]
		
		
    },
	
	"Tanah Merah": {
        "Bukit Panau": ["Roseburg", "Winston"],
        "Gual Ipoh": ["Medford", "Jacksonville"],
		"Kemahang": ["Medford", "Jacksonville"]
		
		
    },
	
	"Kubang Kerian": {
        "Demit": ["Roseburg", "Winston"],
        "Pasir Tumboh": ["Medford", "Jacksonville"],
		"Salor": ["Medford", "Jacksonville"]
		
		
    },
}
window.onload = function () {
    var parlimen = document.getElementById("parlimen"),
        dun = document.getElementById("dun");
		for (var state in kursus) {
        parlimen.options[parlimen.options.length] = new Option(state, state);
    }
    parlimen.onchange = function () {
        dun.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done   
        for (var county in kursus[this.value]) {
            dun.options[dun.options.length] = new Option(county, county);
        }
    }
}

</script>
<form name="myform" id="myForm">
    <select name="optone" id="parlimen" size="1">
        <option value="" selected="selected">Select state</option>
    </select>
    <br>
    <br>
    <select name="opttwo" id="dun" size="1">
        <option value="" selected="selected">Please select state first</option>
    </select>
    <br>
    <br>
</form>
<hr/>