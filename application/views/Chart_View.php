<!-- HEADER TITLE -->
<?php
$id = 1;
if (isset($_POST['cmbSup']))
        {
        $id = implode(",", $_POST['cmbSup']);
        }
$dateFrom = $this->input->post('dateFrom');
$dateTo = $this->input->post('dateTo');
$gitar =  $this->db->query("SELECT area_name, store_area.area_id, sum(report_product.compliance) as testi, concat(round((sum(report_product.compliance)/count(report_product.compliance) * 100 ),2)) AS percentage from report_product join store on store.store_id = report_product.store_id join store_area on store_area.area_id = store.area_id where store_area.area_id IN ($id) AND report_product.tanggal BETWEEN '$dateFrom' AND '$dateTo' group BY area_id")->result();
        foreach ($gitar as $key) {
        $sil[]=['label'=>$key->area_name,'y'=>$key->percentage];
            # code...
        }
        //print_r(json_encode($gitar, JSON_NUMERIC_CHECK));die();
?>
<div class="main-content">
    <div class="main-content-inner">

        <div class="breadcrumbs ace-save-state" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="fa fa-desktop"></i>
                    <a href="#">Master Web</a>
                </li>
                <li class="active">Grafik</li>
            </ul><!-- /.breadcrumb -->
            <div class="nav-search" id="nav-search">
            </div><!-- /.nav-search -->
        </div>
        <div class="page-content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="clearfix">
                        <h4 class="pink">
                            <i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
                          Laporan Grafik
                            <div class="pull-right tableTools-container"></div>
                        </h4>
                    </div>
                    <div class="table-header">
                            Hasil untuk "Grafik berdasarkan Wilayah, Tanggal Mulai dan Tanggal Berakhir"
                    </div>
                    <!-- BATAS HEADER TITLE -->
                    <div class="ln_solid"></div>

                    <!-- PAGE CONTENT BEGINS -->
                    <div class="modal-body">
                        <form class="form-horizontal" role="form" name="f_modal" id="f_modal" action="<?php echo base_url('ChartController'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-sm-1 control-label no-padding-right"> Wilayah </label>    
                                <div class="col-sm-3">
                                	<select name="cmbSup[]" id="multiple-checkboxes" class="form-control" required data-parsley-error-message="Field ini harus diisi" multiple="multiple">
										<?php
										foreach ($read1 as $row) { 
											echo "<option value='$row->area_id' $cek>$row->area_name</option>";
										}
										?>
									</select>

                                </div>
                                <div class="col-sm-1">
                                    Date From
                                </div>
                                <div class="col-sm-3">
                                  <input type="date" name="dateFrom">
                                </div>
                                <div class="col-sm-1">
                                    Date To 
                                </div>
                                <div class="col-sm-3">
                                  <input type="date" name="dateTo">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-7 control-label no-padding-right">
                                    <button class="btn btn-white btn-info btn-bold" id="btnSimpan" name="btnSimpan" type="submit"><i class="ace-icon fa fa-floppy-o bigger-120 blue"></i> Proses</button>
                                    <a href="<?php echo base_url('ChartController'); ?>" target="_self" class="btn btn-white btn-default btn-round" data-dismiss="modal" aria-hidden="true"><i class="fa fa-minus-circle"></i> Tutup</a>
                                    </label>
                            </div>
                            
                        </form>

<script>

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    theme: "light2", // "light1", "light2", "dark1", "dark2"
    title:{
        text: " Data Compliance Dari Tanggal = " + "<?=$dateFrom?> ke Tanggal = "+"<?=$dateTo?>"  
    },
    axisY: {
        title: "Percentage",
        valueFormatString:"##,##%"
    },
    data: [{        
        type: "column",  
        //showInLegend: true, 
        //legendMarkerColor: "white",
        //legendText: "Transaksi yang sudah terekam",
       // dataPoints: [      
            //{ y: 300878, label: "Venezuela" },
            //{ y: 266455,  label: "Saudi" },
            //{ y: 169709,  label: "Canada" },
            //{ y: 158400,  label: "Iran" },
            //{ y: 142503,  label: "Iraq" },
            //{ y: 101500, label: "Kuwait" },
            //{ y: 97800,  label: "UAE" },
            //{ y: 80000,  label: "Russia" }
            //type: "column",  
        showInLegend: true, 
        indexLabel: "",
        legendMarkerColor: "white",
        legendText: "Nilai",
        dataPoints: 
        <?=json_encode($sil, JSON_NUMERIC_CHECK)?>
    }]
});
chart.render();

}
</script>

                    </div>
                    <div id="chartContainer" style="height: 300px; width: 100%;"></div>
                    <div class="page-content">
			<div class="row">
				<div class="col-xs-12">
					<div class="clearfix">
						<h4 class="pink">
							<i class="ace-icon fa fa-hand-o-right icon-animated-hand-pointer blue"></i>
						Group Produk
							<div class="pull-right tableTools-container"></div>
						</h4>
					</div>
					<div class="table-header">
							Tampilan dari "Group Produk"
					</div>
					<!-- BATAS HEADER TITLE -->
					<div class="ln_solid"></div>
		
					<!--DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
					<table id="datatable" class="table table-striped table-bordered">
						<thead>
							<tr>    
								<th class="center" width="30%">No</th>
								<th class="center" width="20%">DKIJakarta</th>
								<th class="center" width="20%">JawaBarat</th>
								<th class="center" width="20%">Kalimantan</th>
								<th class="center" width="20%">JawaTengah</th>
								<th class="center" width="40%">Bali</th>
							</tr>
						</thead>					
							<tr>
								<td align="center"></td>
								<td></td>
								<td align="center"></td>
							</tr>
					</table>
					<!-- BATAS DATAGRID BERDASARKAN DATA YANG AKAN KITA TAMPILKAN -->
				</div>
			</div>
		</div>
		<script>
$(document).ready(function() {
	var myTable =$('#datatable').DataTable({
      "ajax": {
        type   : "POST",
        url    : "<?php echo base_url(); ?>ChartController/daftar_data/",
        data   : function(d) {
            
        }},
      "columnDefs": [
            { "orderable": false, "targets": 2 },
            { "visible": true, "targets": [5], "searchable": false }
        ],
        select: {
            style: 'multi'
        }
    });

});
    </script>

                </div>
            </div>
        </div>
    </div> 
</div>
