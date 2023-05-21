<!DOCTYPE html>
<html lang="en">

    <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form id="frm" >
        <table>
            <tr>
                <td> Name</td>
                <td> <input name="t1"  class="border-2"  type="text" /></td>
            </tr>
            <tr>
                <td> text</td>
                <td> <input name="t2" class="border-2"  type="text" /></td>
            </tr>
            <tr>
                <td></td>
                <td> <button name="submit" id="frmSumit" type="submit" class="border-2"  >Log In </button>  </td>
            </tr>
        </table>
    </form>
</body>

<script> 
    jQuery('#frm').submit(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log('hehehe');
        $.ajax({
            url:"{{url('form_submit')}}",
            data:{data1 :jQuery('#frm').serialize(), _token:'{{csrf_token()}}' } , 
            type:'post',
            success:function(result){
                console.log('result = ',result) ;
            },
            error: function(data, textStatus, errorThrown) {
                console.log('resp error = ',data,'\n text status', textStatus , '\n eror throwan', errorThrown);
            },
        });
    }) ;
</script>

</html>