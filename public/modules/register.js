$('select').multipleSelect({
    placeholder: 'Select Company',
})

$('#companyGroupId').on('change', (e)=>
{
    e.preventDefault();

    $('#companyId').empty();

    let companyGroupId = $("#companyGroupId").val();

    $.ajax({
        
        type:'POST',

        url:'get-companies',

        dataType: "json",

        data:{companyGroupId:companyGroupId},

        headers: {'X-CSRF-TOKEN': $('input[name="_token"]').val()},

        success: function (response){

            response.map((item)=>{               

                $('#companyId').append(

                    '<option value='+item.id+'>'+item.company_name+'</option>'
                )

            });

            $('#companyId').multipleSelect('refreshOptions', {});
        }

    })
})