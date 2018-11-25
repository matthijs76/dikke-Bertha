<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sint ToDo List</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>
<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h3 class="panel-title">Verlanglijstje<a href="#" id="addNew" class="pull-right" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
                    </div>
                    <div class="panel-body">
                            <ul class="list-group" id="items" >
                                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item ourItem"data-toggle="modal" data-target="#myModal"><?php echo e($item->item); ?>

                                      <input type="hidden" id="itemId" value="<?php echo e($item->id); ?>">
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  </ul>
                    </div>
                  </div>    
            </div>
            <!-- Button trigger modal -->

            <div class="modal fade" id="myModal"tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title" id="title">Voeg hier je kadotip toe</h4>
                        </div>
                        <div class="modal-body">
                          <input type="hidden" id="id">
                          <p><input type="text" placeholder="Vul hier uw kadotip in" id="addItem" class="form-control"></p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-warning" id="delete" data-dismiss="modal" "style=display: none">Delete</button>
                          <button type="button" class="btn btn-primary" id="saveChanges" data-dismiss="modal" style="display: none">Save changes</button>
                          <button type="button" class="btn btn-primary" id="AddButton" data-dismiss="modal">Plaats in lijst</button>
                        </div>
                      </div> <!-- /.modal-content -->
                    </div> <!-- /.modal-dialog -->
                  </div> <!-- /.modal -->
        </div>
    </div>  
<?php echo e(csrf_field()); ?>




<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" 
  crossorigin="anonymous"></script>
  <script>
      $(document).ready(function(){
          $(document).on('click', '.ourItem', function(event){
                var text = $(this).text();
                var id = $(this).find('#itemId').val();
                $('#title').text('Edit item');
                var text = $.trim(text);
                $('#addItem').val(text);
                $('#delete').show('400');
                $('#saveChanges').show('400');
                $('#AddButton').hide('400');
                $('#id').val(id);
                console.log(text);
            
        });
        $(document).on('click', '#addNew', function(event) {
              $('#title').text('Add new item');
              $('#addItem').val("");
              $('#delete').hide('400');
              $('#saveChanges').hide('400');
              $('#AddButton').show('400');

              
          });
          $('#AddButton').click(function(event) {
              var text = $('#addItem').val();
              if (text =="") {
                alert('Please type something....anything');
              }else{
              $.post('list', {'text': text,'_token':$('input[name=_token]').val()}, function(data) {
              $('#items').load(location.href + ' #items');
                console.log(data);
              }); 
            }          
          });
          $('#delete').click(function(event){
              var id = $("#id").val();
            $.post('delete', {'id': id,'_token':$('input[name=_token]').val()}, function(data){
                $('#items').load(location.href + ' #items');
              console.log(data);
            });            
          });
          $('#saveChanges').click(function(event){
            var id = $("#id").val();
            var value = $.trim($("#addItem").val());
          $.post('update', {'id': id, 'value':value,'_token':$('input[name=_token]').val()}, function(data){
              $('#items').load(location.href + ' #items');
            console.log(data);
          });            
        });
      });
      
  </script>
</body>
</html>