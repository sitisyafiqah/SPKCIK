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

<?php

if(isset($_GET['k_ic']))
{
    $k_ic = $_GET['k_ic'];
}

    $query = query("SELECT * FROM kigsb_peserta WHERE k_ic = '{$k_ic}'");
    confirm($query);

while ($row = mysqli_fetch_assoc($query))
{
    $k_nama = $row['k_nama'];
    $k_ic = $row['k_ic'];
    $k_phone = $row['k_phone'];
	$k_parlimen = $row['k_parlimen'];
    $k_dun = $row['k_dun'];

}

?>

<h2 style="font-family: Berlin Sans FB; font-color: black; text-align: center;  font-size: 30px">Mengemaskini Maklumat Peserta</h2>
<div class="col-lg-6">
    <form role="form" action="" method="post" enctype="multipart/form-data">
        <?php edit_peserta(); ?>
		
	
        <div class="form-group">
            <label>Nama :</label>
            <input type="text" class="form-control" name="k_nama" value="<?php echo $k_nama ?>" readonly>
        </div>
        
        <div class="form-group">
            <label>Kad Pengenalan :</label>
            <input type="text" class="form-control" name="k_ic" value="<?php echo $k_ic ?>" readonly>
        </div>
        
        <div class="form-group">
            <label>Nombor Telefon :</label>
            <input type="text" class="form-control" name="k_phone" value="<?php echo $k_phone ?>" >
        </div>
		
		
			<div class="form-group">
            <label>Parlimen :</label>
            <select class="form-control" name="k_parlimen" id="parlimen" required>
				<option value="<?php echo $k_parlimen ?>"><?php echo $k_parlimen ?></option>                
            </select>  
			
        </div>
		
		<div class="form-group">
            <label>Dun:</label>
            <select class="form-control" name="k_dun" id="dun" required>
			<option value="<?php echo $k_dun ?>"><?php echo $k_dun ?></option> 
            </select>
        </div>
        
        <button type="submit" name="edit" class="btn btn-default">Hantar</button>
        <button type="reset" class="btn btn-default">Reset</button>
    </form>
</div>