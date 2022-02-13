<?php include ("header.php");
include ("navbar.php"); ?>
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">
                            <h1 class="text-center">Edit Product</h1>
                        </div>
                        <div class="card-body">
                            <form action="action.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" class="form-control" name="trim_data" value="<?php echo isset($trimData)? $trimData:''?>"/>
                                <input type="hidden" class="form-control" name="given_image" value="<?php echo isset($data['image'])? $data['image']:''?>"/>
                                <input type="hidden" class="form-control" name="id" value="<?php echo isset($data['id'])? $data['id']:''?>"/>
                                <input type="hidden" class="form-control" name="added_by" value="<?php echo isset($data['addedBy'])? $data['addedBy']:''?>"/>
                                <input type="hidden" class="form-control" name="modified_by" value="<?php echo isset($data['modifiedBy'])? $data['modifiedBy']:''?>"/>
                                <input type="hidden" class="form-control" name="added_at" value="<?php echo isset($data['addedAt'])? $data['addedAt']:''?>"/>
                                <input type="hidden" class="form-control" name="modified_at" value="<?php echo isset($data['modifiedAt'])? $data['modifiedAt']:''?>"/>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Code</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="code" value="<?php echo isset($data['code'])? $data['code']:''?>"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name" value="<?php echo isset($data['name'])? $data['name']:''?>"/>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price" value="<?php echo isset($data['price'])? $data['price']:''?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Category</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="category" value="<?php echo isset($data['category'])? $data['category']:''?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Product Brand</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="brand" value="<?php echo isset($data['brand'])? $data['brand']:''?>"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Description</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description"><?php echo isset($data['description'])? $data['description']:''?></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Image</label>
                                    <div class="col-md-9">
                                        <img id="catch" src="<?php echo isset($data['image'])? $data['image']:''?>" alt="Image" height="80" width="100"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label" >Upload Image </label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control-file" name="image" onchange="readURL(this);"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-outline-dark btn-block" value="save" name="update_btn">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <a href="action.php?pages=all-data" class="btn btn-block btn-dark">Cancel</a>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#catch')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
<?php include ("footer.php")?>