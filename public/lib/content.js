

var status = 1;
var valueOld = '';
var inp = null;
var token = $('#token').val();
function updateSetting(btn,id) {
    var tr = btn.parent('td').parent('tr');
    var input = tr.find('.value-setting');
    var input_val = input.val();
    if(status == 1)
    {
        $('.btn-update').css('display','none');
        tr.find('.btn-cancel').css('display','inline');
        btn.css('display','inline');
        $('.value-setting').attr('disabled','disabled');
        input.removeAttr('disabled');
        input.focus();
        btn.removeClass('btn-default').addClass('btn-success');
        btn.find('i').removeClass('fa-pencil').addClass('fa-floppy-o');
        status=0;
    }
    else{
        $('.btn-update').css('display','inline');
        $('.btn-cancel').css('display','none');
        $('.value-setting').attr('disabled','disabled');
        btn.removeClass('btn-success').addClass('btn-default');
        btn.find('i').removeClass('fa-floppy-o').addClass('fa-refresh fa-spin');

        var data = {
            '_token':token,
            'id': id,
            'value':input_val
        };
        send(data,btn,1);
    }
}

function reset(btn,id) {
    btn.find('i').removeClass('fa-minus-circle').addClass('fa-refresh fa-spin');
    var data = {'_token':token,'id':id,'type':'reset'};
    send(data,btn,0);
}

function cancelSetting() {
    inp.val(valueOld);
    $('.btn-update').css('display','inline');
    $('.btn-cancel').css('display','none');
    $('.value-setting').attr('disabled','disabled');
    $('.btn-update').removeClass('btn-success').addClass('btn-default');
    $('.ii').removeClass('fa-floppy-o').addClass('fa-pencil');
    status = 1;
}
function send(data,btn,type) {
    $.ajax({
        url: 'admin/content/update',
        type: 'POST',
        dataType: 'text',
        data: JSON.stringify(data),
        contentType: "application/json",
        success: function (response) {
            var re =JSON.parse(response);
            if(re.status == 'success')
            {
                status=1;
                btn.find('i').removeClass('fa-refresh fa-spin').addClass('fa-pencil');
                alert('Cập nhật thành công');
            }
            else
            {
                alert('Có lỗi xảy ra trong quá trình cập nhật');
                window.location.reload();
            }
        },
        error:function (response) {
            alert('Có lỗi xảy ra trong quá trình cập nhật');
        }
    });
}
