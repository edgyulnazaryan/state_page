@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-2">
            <div class="card  mt-3">
                <h5>SEARCH BY AGE</h5>
                <div class="form-group">
                    <label for="age"> 18-</label>
                    <input type="radio" name="age_filter" value='1'>
                </div>

                <div class="form-group">
                    <label for="age">18-65</label>
                    <input type="radio" name="age_filter" value="2">
                </div>

                <div class="form-group">
                    <label for="age">65+ </label>
                    <input type="radio" name="age_filter" value="3">
                </div>
            </div>
            <div class="card  mt-3">
                    <h5>SEARCH BY GENDER</h5>
                    <div class="form-group">
                        <label for="gender"> Male</label>
                        <input type="radio" name="gender_filter" value="Male">
                    </div>

                    <div class="form-group">
                        <label for="gender">Female</label>
                        <input type="radio" name="gender_filter" value="Female">
                    </div>
            </div>   
            
            <button class="btn btn-warning col-12 mt-3 search_btn">Search</button>

                
            
             
        </div>
        <div class="col-8" >
        <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Category</th>
                <th>Age</th>
                <th>Price</th>
                <th>Gender</th>
                <th>Dead line</th>
            </tr>
        </thead>
        <tbody id="result">
        
                
            
        </tbody>
        </table>
        </div>
        <div class="col-2" >

        </div>
    </div>
</div>



@endsection

@section('script_jquery')

<script type="text/javascript">
$(document).ready(function($)
{
    

    $(".search_btn").click(function()
    {
        var txt = $("#myInput").val()
        var gender = $("input[name='gender_filter']:checked").val();
        var age = $("input[name='age_filter']:checked").val();
        
            $.ajax(
            {
                url:"{{route('search_res')}}",
                method:'get',
                data: {search:txt, gender:gender, age:age},
                dataType: "text",
                success: function(data)
                {
                    $("#result").html('')
                    data = JSON.parse(data)

                    for(i=0; i<data.length; i++)
                    {
                        $("#result").append('<tr><td>'+data[i]['id']+'</td><td>'+data[i]['title']+'</td><td>'+data[i]['content']+'</td><td>'+data[i]['category']+'</td><td>'+data[i]['age']+'</td><td>'+data[i]['price']+'</td><td>'+data[i]['gender']+'</td><td>'+data[i]['dead_line']+'</td></tr>');
                    }
                }
            })
        
    })
})
    

</script>

@endsection