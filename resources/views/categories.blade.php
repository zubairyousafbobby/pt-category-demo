<!DOCTYPE html>
<html>

<head>
    <title>Category Task</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product Categories Dashboard - Demo </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Category A:</label>
                            <select name="category" id="category" class="form-control">
                                <option value="0">-- Select Cateory --</option>
                                @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Category B:</label>
                            <select name="sub_category" id="subCategory" class="form-control">
                                <option value="0">-- Select Sub Category --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Category B1</label>
                            <select name="sub_category2" id="subCategory2" class="form-control">
                                <option value="0">-- Select Sub Category --</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Sub Category B2</label>
                            <select name="sub_category3" id="subCategory3" class="form-control">
                                <option value="0">-- Select Sub Category --</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {

            $('#category').change(function() {
                var id = $(this).val();
                $('#subCategory').find('option').not(':first').remove();
                $.ajax({
                    url: 'category/' + id
                    , type: 'get'
                    , dataType: 'json'
                    , success: function(response) {
                        console.log(JSON.stringify(response))
                        var len = 0;
                        if (response.data != null) {
                            len = response.data.length;
                        }

                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                var id = response.data[i].id;
                                var name = response.data[i].name;
                                var option = "<option value='" + id + "'>" + name + "</option>";
                                $("#subCategory").append(option);
                            }
                        }
                    }
                })
            });


            $('#subCategory').change(function() {
                var id = $(this).val();
                $('#subCategory2').find('option').not(':first').remove();
                $.ajax({
                    url: 'category/' + id
                    , type: 'get'
                    , dataType: 'json'
                    , success: function(response) {
                        var len = 0;
                        if (response.data != null) {
                            len = response.data.length;
                        }

                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                var id = response.data[i].id;
                                var name = response.data[i].name;
                                var option = "<option value='" + id + "'>" + name + "</option>";
                                $("#subCategory2").append(option);
                            }
                        }
                    }
                })

            });

            $('#subCategory2').change(function() {
                var id = $(this).val();
                $('#subCategory3').find('option').not(':first').remove();
                $.ajax({
                    url: 'category/' + id
                    , type: 'get'
                    , dataType: 'json'
                    , success: function(response) {
                        var len = 0;
                        if (response.data != null) {
                            len = response.data.length;
                        }

                        if (len > 0) {
                            for (var i = 0; i < len; i++) {
                                var id = response.data[i].id;
                                var name = response.data[i].name;

                                var option = "<option value='" + id + "'>" + name + "</option>";

                                $("#subCategory3").append(option);
                            }
                        }
                    }
                })

            });
        });

    </script>
</body>

</html>
