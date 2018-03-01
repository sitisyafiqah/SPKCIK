<script>
var kursus = {
	
    "Kota Bharu": {
        "Bunut Payong": [],
        "Kota Lama": [],
		"Tanjung Mas": []
    },
    "Pengkala Chepa": {
        "Kijang": [],
        "Panchor": [],
		"Chempaka": []
    },
	
	"Pasir Puteh": {
        "Gaal": [],
        "Limbongan": [],
		"Selising": [],
		"Semerak": []
    },
	
	"Pasir MAs": {
        "Chetok": [],
        "Pengkalan Pasir": [],
		"Tendong": []
		
    },
	
	"Rantau Panjang": {
        "Bukit Tuku": [],
        "Gua Periuk": [],
		"Meranti": []
    },
	
	"Gua Musang": {
        "Galas": [],
        "Nenggiri": [],
		"Paloh": []
    },
	
	"Tumpat": {
        "Pengkalan Kubur": [],
        "Kelaboran": [],
		"Pasir Pekan": [],
		"Wakaf Bharu": []
    },
	
	"Bachok": {
        "Tawang": [],
        "Perupuk": [],
		"Jelawat": []
    },
	
	"Ketereh": {
        "Kadok": [],
        "Kok Lanas": [],
		"Melor": []
    },
	
	"Machang": {
        "Pulai Chondong": [],
        "Temangan": [],
		"Kemuning": []
    },
	
	"Kuala Krai": {
        "Dabong": [],
        "Mengkebang": [],
		"Manek Urai": [],
		"Guchil": []
		
    },
	
	"Jeli": {
        "Bukit Bunga": [],
        "Air Lanas": [],
		"Kuala Balah": []
		
		
    },
	
	"Tanah Merah": {
        "Bukit Panau": [],
        "Gual Ipoh": [],
		"Kemahang": []
		
		
    },
	
	"Kubang Kerian": {
        "Demit": [],
        "Pasir Tumboh": [],
		"Salor": []
		
		
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


<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">Peserta Baru</h2>
<div class="col-lg-6">
    <form role="form" action="" method="post" enctype="multipart/form-data">
        <?php add_peserta();?>
		
        <div class="form-group">
            <label>Nama :</label>
            <input type="text" class="form-control" name="k_nama">
        </div>
        
        <div class="form-group">
            <label>Kad Pengenalan :</label>
            <input type="text" class="form-control" name="k_ic" min="12" maxlength="12">
        </div>
        
        <div class="form-group">
            <label>Nombor Telefon :</label>
            <input type="text" class="form-control" name="k_phone" maxlength="11">
        </div>
		
		<div class="form-group">
            <label>Parlimen :</label>
            <select class="form-control" name="k_parlimen" id="parlimen" required>
				<option value="">Pilih Parlimen</option>                
            </select>  
			
        </div>
		
		<div class="form-group">
            <label>Dun:</label>
            <select class="form-control" name="k_dun" id="dun" required>
			<option value=""></option> 
            </select>
        </div>
        
        
        <button type="submit" name="tambah" class="btn btn-default">Tambah Peserta</button>
        <button type="reset" class="btn btn-default">Reset Button</button>
    </form>
</div>