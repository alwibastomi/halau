$(document).ready(function(){
  if($('.datatable-ku').length>0){
    var func = $('.datatable-ku').attr('data-func');
    var meth = $('.datatable-ku').attr('data-meth');
    var dataTbl = $('.datatable-ku').dataTable({
      "autoWidth": false,
      "aLengthMenu": [[5, 10, 15, 20, 25], [5, 10, 15, 20, 25]],
      "pageLength": 10,
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