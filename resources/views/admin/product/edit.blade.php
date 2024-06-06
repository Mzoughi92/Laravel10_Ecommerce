<!DOCTYPE html>
<html lang="en">
          <!-- Main head -->
          
          @include('admin.layouts.head')
          <!-- End head -->
      <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed onload='loaded();'">
        <div class="wrapper">

                        <!-- Main navbar -->
                    @include('admin.layouts.navbar')
                        <!-- End navbar -->

                        <!-- Main sidebar -->
                    @include('admin.layouts.sidebar')
                        <!-- End sidebar -->

                        <!-- Main content -->
                        <div class="content-wrapper">
                        <section class="content-header">
                            <div class="container-fluid">
                        
                            <!-- /.row -->
                            <div class="row">
                                <div class="col-12">
                                     <div class="card">
                                        <div class="card-header">
                                        <h3 class="card-title">Produkt aktualisieren</h3>
                                        </div>


                                    <div class="card card-primary">
                                        @include('admin.layouts._message')
                                         
                                        <form action="{{  url('admin/product/update/'.$product->id) }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                        <div class="card-body">

                                                <div class="row">
                                                        <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Title<span style="color: red">*</span></label>
                                                        <input type="text" class="form-control" value="{{ old('title', $product->title)  }}" name="title" placeholder="Name" required/>
                                                      </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>SKU<span style="color: red">*</span></label>
                                                            <input type="text" class="form-control" value="{{ old('sku', $product->sku)  }}" name="sku" placeholder="SKU" required/>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Kategorie<span style="color: red">*</span></label>
                                                            <select class="form-control" id="ChangeCategory" name="category_id">
                                                                <option value="">Select</option>
                                                                @foreach ($getCategory as $category)
                                                                <option {{ ($product->category_id == $category->id ? 'selected' : '')}} value="{{ $category->id }}">{{ $category->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>



                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Unterkategorie<span style="color: red">*</span></label>
                                                            <select class="form-control" required id="getSubCategory" name="sub_category_id">
                                                                <option value="">Select</option>
                                                                @foreach ($getSubCategory as $SubCategory)
                                                                <option {{ ($product->sub_category_id == $SubCategory->id ? 'selected' : '')}} value="{{ $SubCategory->id }}">{{ $SubCategory->name }}</option>
                                                                @endforeach
                                                                
                                                            </select>
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Brand<span style="color: red">*</span></label>
                                                            <select class="form-control" name="brand_id">
                                                                <option value="">Select</option>
                                                                @foreach ($getBrand as $brand)
                                                                <option  {{ ($product->brand_id == $brand->id ? 'selected' : '')}}  value="{{ $brand->id }}">{{ $brand->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>

                                                </div>

                                            
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Bilder:<span style="color:red"></span></label>
                                                            <input type="file" name="image[]" class="form-control" style="padding: 5px;" multiple accept="image/*">
                                                        </div>
                                                    </div>
                                                </div>
                                                            @if(!empty($product->getImage->count()))
                                                                <div class="row"  id="sortable" >
                                                                    @foreach ($product->getImage as $image)
                                                                        @if(!empty($image->getLogo()))
                                                                                <div class="col-md-1 sortable_image" id="{{ $image->id }}" style="text-align: center;">
                                                                                    <img style="width: 100%; height: 100px;"  src=" {{ $image->getLogo() }}" > 
                                                                                    <a onclick="return confirm(' do u want to delete?');" href="{{ url('admin/product/image_delete/'.$image->id)}}" style="margin-top: 10px;" class="btn btn-danger btn-sm ">Löschen</a>
                                                                                </div>
                                                                                
                                                            @endif
                                                        @endforeach
                                                            </div>
                                                            @endif
                                                <hr />

  

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label>Preis(€)<span style="color: red">*</span></label>
                                                            <input type="text" class="form-control"  value="{{ !empty($product->price) ? $product->price : '' }}"  name="price" placeholder="Price" required/>
                                                          </div>
                                                        </div>
    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label>Alter Preis (€)<span style="color: red">*</span></label>
                                                                <input type="text" class="form-control" value="{{ !empty($product->old_price) ? $product->old_price : '' }}"  name="old_price" placeholder="Old Price" required/>
                                                              </div>
                                                            </div>
                                                </div>
                                                

                                    
                                           

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>kurze Beschreibung<span style="color: red">*</span></label>
                                                           <textarea name="short_description"   class="form-control" placeholder="kurze Beschreibung">{{ $product->short_description }}</textarea>
                                                          </div>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Beschreibung<span style="color: red">*</span></label>
                                                           <textarea name="description" class="form-control editor" placeholder="Beschreibung">{{ $product->description }}</textarea>
                                                          </div>
                                                        </div>
                                                </div>

                                           
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Weitere Informationen<span style="color: red">*</span></label>
                                                           <textarea name="additional_information" class="form-control" placeholder="Weitere Informationen">{{ $product->additional_information}}</textarea>
                                                          </div>
                                                        </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Versand rücksendungen<span style="color: red">*</span></label>
                                                           <textarea name="shipping_returns" class="form-control editor" placeholder="Versand rücksendungen">{{ $product->shipping_returns}}</textarea>
                                                          </div>
                                                        </div>
                                                </div>


                                                <hr>
                                         
                                                <div class="row">
                                                    <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Status  <span style="color: red">*</span></label>
                                                    <select class="form-control" name="status">
                                                        <option {{ ($product->status == 0) ? 'selected' : '' }} value="0">Aktiv</option>
                                                        <option {{ ($product->status == 1) ? 'selected' : '' }} value="1">InAktiv</option>
                                                    </select>
                                                    </div>
                                                </div>
                                            </div>
                                          
                                           
                        
                                                <div class="card-footer">
                                                    <button type="submit" class="btn btn-primary">Bestätig</button>
                                                </div>
                                        </form>

                                        </div>
                                    </div>

                                </div>
                             </div>                        
                            </div><!-- /.container-fluid -->
                        </section>
                        <!-- /.content -->

                        <!-- Main Footer -->
                    @include('admin.layouts.footer')
                        <!-- End Footer -->

        </div>
    
       
        <script src="{{asset('assets/admin/sortable/jquery-3.6.0.js')}}"></script>
        <script src="{{asset('assets/admin/sortable/jquery-ui.js')}}"></script>
        <script src="{{asset('assets/admin/plugins/jquery/tinymce-jquery.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>
        <script src="{{asset('assets/admin/tinymce/js/tinymce/tinymce.min.js')}}"></script>
        
        
       <script type="text/javascript">



$('#sortable').sortable({
    update : function(event, ui){
        var photo_id = new Array();
        $('.sortable_image').each(function(){
            var id = $(this).attr('id');
            photo_id.push(id);
        });
        $.ajax({
       url : "{{ url('/admin/product_image_sortable') }}",
       type : "POST",
       data : {
           "photo_id" : photo_id,
           "_token": "{{ csrf_token() }}"

       },
       dataType : "json",
       success: function(data) {
        alert("correct");
       },
       error: function (data) {
        alert("error");
       }
   });  
    }
});


   
   






        var i = 101;

        $('body').delegate('.DeleteSize','click',function(){
                var id = $(this).attr('id');
             });



        $('body').delegate('.AddSize', 'click', function ( ) {
            var html = '<tr id="DeleteSize'+i+'">\n\
    <td>\n\
        <input type="text" name="size['+i+'][name]" placeholder="Name" class="form-control">\n\
    </td>\n\
    <td>\n\
        <input type="text" name="size['+i+'][price]" placeholder="Price" class="form-control">\n\
    </td>\n\
    <td>\n\
        <button type="button" id="'+i+'" class="btn btn-danger DeleteSize">Delete</button>\n\
    </td>\n\
</tr>';
i++;
$('#AppendSize').append(html);
             });

           
        $('body').delegate('.DeleteSize','click',function(){
                var id = $(this).attr('id');
                $('#DeleteSize'+id).remove();
             });


        $('body').delegate('#ChangeCategory', 'change', function ( e ) {
    var id = $(this).val();
   $.ajax({
       type : "POST",
       url : "{{ url('admin/get_sub_category') }}",
       data : {
           "id" : id,
           "_token": "{{ csrf_token() }}"

       },
       dataType : "json",
       success: function(data) {
        $('#getSubCategory').html(data.html);
       },
       error: function (data) {
           
       }
   });     
});   





       </script>

     
            <!-- Main scripts -->
          @include('admin.layouts.scripts')
            <!-- End scripts -->
  <!-- Include jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <!-- Include Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Include Summernote JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.editor').summernote({
        height: 300
      });
    });
  </script>
      </body>

      
</html>






