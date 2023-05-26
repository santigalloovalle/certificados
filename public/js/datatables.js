$(document).ready(function () {
    var oTable = $('#tabla').dataTable();
        $('select#rol').change( function () {  oTable.fnFilter( this.value, 2 );  } );
   
   });