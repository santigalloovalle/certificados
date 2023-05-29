$(document).ready(function () {
    var oTable = $('#example').dataTable();
        $('select#age').change( function () {  oTable.fnFilter( this.value, 2 );  } );
        $('select#position').change( function () {  oTable.fnFilter( this.value, 1 ); });
   
   });