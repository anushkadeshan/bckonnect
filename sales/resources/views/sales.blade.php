@extends('layouts.app')

@section('content')
<div class="container">

    <table id="example1" class="table row-border table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Product Name</th>
                <th>Staff Name</th>
                <th>Sales</th>
                <th>Selling Commission</th>
            </tr>
        </thead> 
        <tbody>
            <?php $count=1 ?>
            @foreach($staffs as $staff)
                <tr align="left">
                    <td>{{$count++}}</td>
                    <td>{{$staff->product_name}}</td>
                    <td>{{$staff->name}}</td>
                    <td>{{$staff->selling_price*$staff->items}}</td>
                    <td>{{$staff->sales_commission}}</td>
                </tr>
            @endforeach
        <tbody>        
    </table>  
        
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
 
@endsection