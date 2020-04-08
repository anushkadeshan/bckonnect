@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-group">
  
        <table class="table table-borderless" id="dynamic_field">
        <thead>
          <tr>
            <th scope="col">Product</th>
            <th scope="col">No of Items</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <form action="" id="myForm">
          <tr>
            <th>
                <select class="form-control" name="product_id[]" id="">
                    @foreach($products as $product)
                        <option value="{{$product->id}}">{{$product->product_name}}</option>
                    @endforeach
                </select>
            </th>
            <td><input type="number" name="items[]" class="form-control "></td>

            <td><button type="button" class="btn btn-success btn-flat" id="add"><i class="fas fa-plus"></i></button></td>
          </tr>
          {{csrf_field()}}
          
        </form>
            
          </div>
        </tbody>
      </table>
      <button type="button" id="add-invoice"  class="btn btn-primary">Create Invoice</button>
    </div>
    
</div>

@endsection
@section('scripts')
<script>
      
$(document).ready(function() {
    $('#example1').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});

$(document).ready(function() {
    var SITE_URL = "{{URL::to('/')}}";
//Product add Ajax
$(document).on('click' , '#add-invoice' ,function (){
    
    var form = $("#myForm");
    $.ajax({
        type: 'POST',
        url: SITE_URL + '/add-invoice',        
        data: form.serialize(),
                  
        success: function(data) {  
            if($.isEmptyObject(data.error)){
                toastr.success('Invoice Successfully Added to the database ! ', 'Congratulations', {timeOut: 5000});
                $("#myForm")[0].reset();
            }
            else{
                printValidationErrors(data.error);
            }
        },

        error: function (jqXHR, exception) {    
            console.log(jqXHR);
            toastr.error('Something Error !', 'Try Again Later!')
        },
    });
});

    function printValidationErrors(msg){
        $.each(msg, function(key,value){
            toastr.error('Validation Error !', ""+value+"");
        });
    }

});

$(document).ready(function(){  
    var i=1;  
    $('#add').click(function(){  
         i++;  
         $('#dynamic_field').append('<tr id="row'+i+'"><td><select class="form-control" name="product_id[]" >@foreach($products as $product)<option value="{{$product->id}}">{{$product->product_name}}</option>@endforeach</select></td><td><input type="number" name="items[]" class="form-control position-list"></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn-flat btn_remove">X</button></td></tr>');  
    });  
    $(document).on('click', '.btn_remove', function(){  
         var button_id = $(this).attr("id");   
         $('#row'+button_id+'').remove();  
    });   
});
</script>   
@endsection