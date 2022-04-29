
$(function() {
   $('#select-speciality').on('change', onSelectProjectChange);
});

function onSelectProjectChange(){
    var speciality_id = $(this).val();
    //  alert(speciality_id);
    // if (! speciality_id) {
    //     $('#select-doctor').html('<option value="">Seleccione un Doctor</option>');
    //     return;
    // }
    
    // $.get('/clinica/public/doctor/'+speciality_id, function(data){  
    // $.get(' http://193.123.99.38/v1/doctor/'+speciality_id, function(data){
    $.get('/api/doctor/'+speciality_id, function(data){
        // console.log(data);  
        var xd = '<option value="">Seleccione un Doctor</option>';
        for (var i = 0; i < data.length; i++) {
            xd += '<option value="' +data[i].doctor_id+ '">' + data[i].doctor_nombre+ '</option>'
        }
        //  console.log(xd);
        $('#select-doctor').html(xd);
    });
}