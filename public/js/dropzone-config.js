var total_photos_counter = 0;
Dropzone.options.myDropzone = {
    headers: {
        'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    },
    uploadMultiple: true,
    parallelUploads: 2,
    maxFilesize: 16,
    previewTemplate: document.querySelector('#preview').innerHTML,
    addRemoveLinks: true,
    dictRemoveFile: 'Remove file',
    dictFileTooBig: 'Image is larger than 16MB',
    timeout: 10000,
 
    init: function () {
        this.on("removedfile", function (file) {
            $.post({
                url: '/file-delete',
                data: {id: file.name, _token: $('[name="_token"]').val()},
                dataType: 'json',
                success: function (data) {
                    total_photos_counter--;
                    $("#counter").text("# " + total_photos_counter);
                    fetchUploads();
                    
                }
            });
        });
        this.on("queuecomplete", function (file) {
            total_photos_counter++;
            //$("#counter").text("# " + total_photos_counter);
        });
    },
    success: function (file, done) {
        total_photos_counter++;
        fetchUploads();
        console.log("uploaded");
       
    }
};

fetchUploads();
function fetchUploads(){
    $.ajax({
        url: '/fetchuploads',
        type: 'GET', 
        success: function (data) {
            console.log(data);
            $("#uploadlistz").html("");
            for(var x=0;x<data['uploads'].length;x++){
                if(data["uploads"][x]["filetype"]=="mp4"){
                    var src="images/video.png";
                }
                else{
                    var src="uploads/"+data["uploads"][x]["filename"];
                }
                $("#uploadlistz").append("<tr><td><img src='"+src+"' width='100px' /></td><td>"+data["uploads"][x]["filename"]+"</td><td><a href='uploads/"+data["uploads"][x]["filename"]+"' data-fancybox='gallery'>View</a></td><td><a href='#'  onclick='deleteFile("+data["uploads"][x]["id"]+")'>delete</a></td></tr>");
               
            }       
            $('#uploadlist').destroy();
            var table = $('#uploadlist').DataTable({
                "order": [[ 1, "desc" ]],
            responsive: true,
            dom: 'lr<"table-filter-container">tip',
            initComplete: function(settings){
                var api = new $.fn.dataTable.Api( settings );
                $('.table-filter-container', api.table().container()).append(
                    $('#table-filter').detach().show()
                );
                
                $('#filterby').on('change', function(){
                    table.search(this.value).draw();   
                });       
            }
            });    
            return false;
        }
    });
}

function deleteFile(id){
    var prompt = window.confirm("Are you sure you want to remove this file?");
        if(prompt){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('input[name=_token]').val()
                }
            });
            $.ajax({
                url: '/deletefile',
                type: 'POST', 
                data:{file_id:id},
                success: function (data) {
                    console.log(data);
                    location.reload();
                    return false;
                }
            });
        }
    
}
