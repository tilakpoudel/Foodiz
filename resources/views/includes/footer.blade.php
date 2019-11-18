<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Bootwal R&D 2019</span>
            <span style="float:right">Designed by <a href="http://tilakpoudel.com.np">Tilak Poudel</a> </span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

{{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous">
    $.fn.selectpicker.Constructor.BootstrapVersion = '4';

</script> --}}

{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/esm/popper-utils.min.js"> --}}
{{-- <script src="{{asset('bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script> --}}

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"> --}}

<script>
    $(document).ready(function(){
    var quantitiy=0;
    var quantity=0;
    var momo_rate =140;
    var choumin_rate = 120;
    var fries_rate = 100;
    var frooti = 30;
    var water = 30;
    var coke = 45;

    // var item_id = $('#item_id').val();
    // console.log(item_id);
    var total = parseInt($('#total_price').text());
    console.log(total);
   $('#quantity-right-plus1').click(function(e){

        // e.preventDefault();
        // Get the field name
        var quantity1 = parseInt($('#quantity1').val());
        // If is not undefined
            // Increment
        var subtotal= calculate_subtotal(momo_rate,quantity1+1);
        $('#item_price1').val(subtotal);
        $('#quantity1').val(quantity1 + 1);

    });

     $('#quantity-left-minus1').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity1 = parseInt($('#quantity1').val());
        // If is not undefined
            // Increment
            if(quantity1>1){
            $('#quantity1').val(quantity1 - 1);
            var subtotal= calculate_subtotal(momo_rate,quantity1-1);
            console.log(subtotal);
            $('#item_price1').val(subtotal);            }
    });

// for second item

   $('.quantity-right-plus2').click(function(e){

        // e.preventDefault();
        // Get the field name
        var quantity2 = parseInt($('#quantity2').val());
        // If is not undefined
            // console.log(quantity2);
            // Increment
        var subtotal= calculate_subtotal(choumin_rate,quantity2+1);
        // console.log(subtotal);
        $('#item_price2').val(subtotal);
        $('#quantity2').val(quantity2 + 1);

        });

        $('.quantity-left-minus2').click(function(e){
        // Stop acting like a button
        e.preventDefault();
        // Get the field name
        var quantity2 = parseInt($('#quantity2').val());
        // If is not undefined
            // Increment
            if(quantity2>1){
            $('#quantity2').val(quantity2 - 1);
            var subtotal= calculate_subtotal(choumin_rate,quantity2-1);
            console.log(subtotal);
            $('#item_price2').val(subtotal);            }
    });


    $('#add_to_bag1').click(function (e){

        var item_name1 = document.getElementById('item_name1').textContent;
        // console.log(item_name);
        var quantity1 = $('#momo_qty').val();

        // var quantity1  = document.getElementById("quantity1").value;
        var subtotal =calculate_subtotal(momo_rate,quantity1);
        console.log(item_name1, quantity1,subtotal);

        var table = document.getElementById("my_order_table").getElementsByTagName('tbody')[0];
        var row = table.insertRow(0);
        // Insert a cell in the row at index 0

        // var cell1 = row.insertCell(0);
        var cell3 = row.insertCell(0);
        var cell2 = row.insertCell(0);
        var cell1  = row.insertCell(0);


        // Append a text node to the cell
        var newText  = document.createTextNode(item_name1);
        cell3.appendChild(document.createTextNode(subtotal));
        cell1.appendChild(newText);
        cell2.appendChild(document.createTextNode(quantity1));

        var total = parseInt($('#total_price').text());
        total = total+subtotal;
        console.log(total);
        $('#total_price').text(total);
        });

    // add ittem 2 to bag
    $('#add_to_bag2').click(function (e){

        var item_name2 = document.getElementById('item_name2').textContent;
        // console.log(item_name);
        var quantity2 = parseInt($('#quantity2').val());
        var subtotal =calculate_subtotal(choumin_rate,quantity2);
        console.log(item_name2, quantity2,subtotal);

        var table = document.getElementById("my_order_table").getElementsByTagName('tbody')[0];
        var row = table.insertRow(0);
        // Insert a cell in the row at index 0

        // var cell1 = row.insertCell(0);
        var cell3 = row.insertCell(0);
        var cell2 = row.insertCell(0);
        var cell1  = row.insertCell(0);


        // Append a text node to the cell
        var newText  = document.createTextNode(item_name2);
        cell3.appendChild(document.createTextNode(subtotal));
        cell1.appendChild(newText);
        cell2.appendChild(document.createTextNode(quantity2));

        var total = parseInt($('#total_price').text());
        total = total+subtotal;
        console.log(total);
        $('#total_price').text(total);
    });

    // for fries
    $('#add_to_bag3').click(function (e){

        var item_name3 = document.getElementById('item_name3').textContent;
        // console.log(item_name);
        var quantity3 = parseInt($('#quantity3').val());
        var subtotal =calculate_subtotal(fries_rate,quantity3);
        console.log(item_name3, quantity3,subtotal);

        var table = document.getElementById("my_order_table").getElementsByTagName('tbody')[0];
        var row = table.insertRow(0);
        // Insert a cell in the row at index 0

        // var cell1 = row.insertCell(0);
        var cell3 = row.insertCell(0);
        var cell2 = row.insertCell(0);
        var cell1  = row.insertCell(0);


        // Append a text node to the cell
        var newText  = document.createTextNode(item_name3);
        cell3.appendChild(document.createTextNode(subtotal));
        cell1.appendChild(newText);
        cell2.appendChild(document.createTextNode(quantity3));

        var total = parseInt($('#total_price').text());
        total = total+subtotal;
        console.log(total);
        $('#total_price').text(total);

    });
        // for frooti
    $('#add_to_bag4').click(function (e){

        var item_name4 = document.getElementById('item_name4').textContent;
        // console.log(item_name);
        var quantity4 = parseInt($('#quantity4').val());
        var subtotal =calculate_subtotal(frooti,quantity4);
        console.log(item_name4, quantity4,subtotal);

        var table = document.getElementById("my_order_table").getElementsByTagName('tbody')[0];
        var row = table.insertRow(0);
        // Insert a cell in the row at index 0

        // var cell1 = row.insertCell(0);
        var cell3 = row.insertCell(0);
        var cell2 = row.insertCell(0);
        var cell1  = row.insertCell(0);

        // Append a text node to the cell
        var newText  = document.createTextNode(item_name4);
        cell3.appendChild(document.createTextNode(subtotal));
        cell1.appendChild(newText);
        cell2.appendChild(document.createTextNode(quantity4));

        var total = parseInt($('#total_price').text());
        total = total+subtotal;
        $('#total_price').text(total);

    });
    // for frooti
    $('#add_to_bag5').click(function (e){

        var item_name5 = document.getElementById('item_name5').textContent;
        // console.log(item_name);
        var quantity5 = parseInt($('#quantity5').val());
        var subtotal =calculate_subtotal(water,quantity5);
        console.log(item_name5, quantity5,subtotal);

        var table = document.getElementById("my_order_table").getElementsByTagName('tbody')[0];
        var row = table.insertRow(0);
        // Insert a cell in the row at index 0

        // var cell1 = row.insertCell(0);
        var cell3 = row.insertCell(0);
        var cell2 = row.insertCell(0);
        var cell1  = row.insertCell(0);


        // Append a text node to the cell
        var newText  = document.createTextNode(item_name5);
        cell3.appendChild(document.createTextNode(subtotal));
        cell1.appendChild(newText);
        cell2.appendChild(document.createTextNode(quantity5));

        var total = parseInt($('#total_price').text());
        total = total+subtotal;
        console.log(total);
        $('#total_price').text(total);

    });

        // for frooti
    $('#add_to_bag6').click(function (e){

        var item_name6 = document.getElementById('item_name6').textContent;
        // console.log(item_name);
        var quantity6 = parseInt($('#quantity6').val());
        var subtotal =calculate_subtotal(coke,quantity6);
        console.log(item_name6, quantity6,subtotal);

        var table = document.getElementById("my_order_table").getElementsByTagName('tbody')[0];
        var row = table.insertRow(0);
        // Insert a cell in the row at index 0

        // var cell1 = row.insertCell(0);
        var cell3 = row.insertCell(0);
        var cell2 = row.insertCell(0);
        var cell1  = row.insertCell(0);


        // Append a text node to the cell
        var newText  = document.createTextNode(item_name6);
        cell3.appendChild(document.createTextNode(subtotal));
        cell1.appendChild(newText);
        cell2.appendChild(document.createTextNode(quantity6));

        var total = parseInt($('#total_price').text());
        total = total+subtotal;
        console.log(total);
        $('#total_price').text(total);

    });

});

function calculate_subtotal(rate , quantity){
    return rate * quantity;
}

</script>


</html>