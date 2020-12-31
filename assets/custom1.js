$(document).ready(function(){
  if($('.datatable-ku').length>0){
    var func = $('.datatable-ku').attr('data-func');
    var meth = $('.datatable-ku').attr('data-meth');
    var dataTbl = $('.datatable-ku').dataTable({
      "language": 
      {
        "sEmptyTable":	 "Tidak Ada Data",
        "sProcessing":   "Sedang memproses...",
        "sLengthMenu":   "tampilkan _MENU_  data",
        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
        "sInfo":         "_END_ data dari total _TOTAL_ data",
        "sInfoEmpty":    "0 data",
        "sInfoFiltered": "(disaring dari _MAX_ data)",
        "sInfoPostFix":  "",
        "sSearch":       "Cari:",
        "sUrl":          "",
        "oPaginate": {
          "sFirst":    "Pertama",
          "sPrevious": "kembali",
          "sNext":     "lanjut",
          "sLast":     "Terakhir"
        }
      },
      "autoWidth": false,
      "aLengthMenu": [[5, 10, 15, 20, 25], [5, 10, 15, 20, 25]],
      "pageLength": 5,
      "processing" : true,
      'serverSide' : true,
      'aaSorting'  :[],
      'ajax' : {
        'url' : BASE_URL+func+"/"+meth,
        'type': 'POST'
      }
    });
  }
});

$(document).ready(function(){
  if($('.datatable-ko').length>0){
    var func = $('.datatable-ko').attr('data-func');
    var meth = $('.datatable-ko').attr('data-meth');
    var dataTbl = $('.datatable-ko').dataTable({
      "language": 
      {
        "sEmptyTable":	 "Tidak Ada Data",
        "sProcessing":   "Sedang memproses...",
        "sLengthMenu":   "tampilkan _MENU_  data",
        "sZeroRecords":  "Tidak ditemukan data yang sesuai",
        "sInfo":         "_END_ data dari total _TOTAL_ data",
        "sInfoEmpty":    "0 data",
        "sInfoFiltered": "(disaring dari _END_ data)",
        "sInfoPostFix":  "",
        "sSearch":       "Cari:",
        "sUrl":          "",
        "oPaginate": {
          "sFirst":    "Pertama",
          "sPrevious": "kembali",
          "sNext":     "lanjut",
          "sLast":     "Terakhir"
        }
      },
      "autoWidth": false,
      "aLengthMenu": [[5, 10, 15, 20, 25], [5, 10, 15, 20, 25]],
      "pageLength": 5,
      "processing" : true,
      'serverSide' : true,
      'aaSorting'  :[],
      'ajax' : {
        'url' : BASE_URL+func+"/"+meth,
        'type': 'POST'
      }
    });
  }
});