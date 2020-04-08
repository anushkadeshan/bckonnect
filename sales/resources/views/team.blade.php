@extends('layouts.app')

@section('content')
<div class="container">
    <span class="text-right"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add New
      </button></span>
    <br/>
    <table id="example1" class="table row-border table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Net Price</th>
                <th>Selling Price</th>
                <th>Selling Commission</th>
                <th>Weight</th>
                <th>Available Units</th>
                <th>Reorder Status</th>
                <th></th>
            </tr>
        </thead> 
        <tbody>
            <?php $count=1 ?>
            @foreach($products as $product)
                <tr align="center">
                    <td>{{$count++}}</td>
                    <td>{{$product->product_name}}</td>
                    <td>{{$product->net_price}}</td>
                    <td>{{$product->selling_price}}</td>
                    <td>{{$product->selling_commison}}</td>
                    <td>{{$product->weight}}</td>
                    <td>{{$product->inventories->sum('available_stock')}}</td>
                    <td>
                        @switch(true)
                            @case($product->inventories->sum('available_stock')==0)
                                <span class="badge badge-pill badge-danger">Out of Stock</span>    
                            @break
                            @case($product->inventories->sum('available_stock')<50)
                                <span class="badge badge-pill badge-warning">Reorder</span>    
                            @break
                            @default
                            <span class="badge badge-pill badge-success">In Stock</span>    
                        @endswitch
                        </td>
                    <td>
                        <div class="btn-group">
                            {{ csrf_field() }}
                                <button type="button" id="edit-product" data-id="{{$product->id}}" data-product_name="{{$product->product_name}}" data-net_price="{{$product->net_price}}" data-selling_price="{{$product->selling_price}}" data-selling_commison="{{$product->selling_commison}}" data-weight="{{$product->weight}}" class="btn btn-success btn-flat btn-sm"><i class="fas fa-edit"></i></button>
                                <button type="button" id="delete-task" data-id="{{$product->id}}" class="btn btn-danger btn-flat btn-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            @endforeach
        <tbody>        
    </table>  
</div>

<!-- Add Product Model -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action=""  method="post" id="myForm">
            <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="product_name" class="form-control">
            </div>
            <div class="form-group">
                <label>Net Price</label>
                <input type="number" name="net_price" class="form-control">
            </div>
            
            <div class="form-group">
                <label>Selling Price</label>
                <input type="number" name="selling_price" class="form-control">
            </div>
            <div class="form-group">
                <label>Selling Commission</label>
                <input type="number" name="selling_commison" class="form-control">
            </div>
            <div class="form-group">
                <label>Waight</label>
                <input type="text" name="weight" class="form-control">
            </div>
            {{csrf_field()}}
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" id="add-product" class="btn btn-primary btn-flat">Add Product</button>
      </div>
    </div>
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
$(document).on('click' , '#add-product' ,function (){
    
    var form = $("#myForm");
    $.ajax({
        type: 'POST',
        url: SITE_URL + '/add-product',        
        data: form.serialize(),
                  
        success: function(data) {  
            if($.isEmptyObject(data.error)){
                toastr.success('Product Successfully Added to the database ! ', 'Congratulations', {timeOut: 5000});
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
</script>   
@endsection