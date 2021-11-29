 var allowedImageExtensions = new Array('png', 'jpeg', 'jpg', 'gif', 'pdf'),
     member_count = 1;
$(document).ready(function(){

  function logoUpload() {
  $("#logoExt").hide();
    $("#imageSizeLimit").hide();
  $("#logo2").change(function(){
      var allowedImageExtensions = new Array('png', 'jpeg', 'jpg', 'gif', 'pdf'),
          fileName  = this.files[0].name,
          fileExt = fileName.substr(fileName.lastIndexOf('.')+1),
          fileSize = this.files[0].size;

      if(allowedImageExtensions.includes(fileExt)){
              if(fileSize/1024 > 5120){
                $("#logoImageSizeLimit").html('').html('<p>Logo max size: 5MB</p>');
                $("#logoImageSizeLimit").show();
                $('#createNewEntry').prop('disabled', true);
              }else{
                $("#logoExt").html('');
                $("#logoSelected").html('<p>Logo Image: '+fileName+'</p>');
                $('#createNewEntry').prop('disabled', false);
              }
          }else{
            $("#logoExt").html('').html('Logo should be an image or pdf document');
            $("#logoExt").show();
            $('#createNewEntry').prop('disabled', true);
          }
        
     });
  }
  logoUpload();

 function identificationUpload() {
  $("#idErrors").hide();
  $("#idSelected").hide();
  $("#id-doc").change(function(){
     
          var fileName  = this.files[0].name,
          fileExt = fileName.substr(fileName.lastIndexOf('.')+1),
          fileSize = this.files[0].size;

      if(allowedImageExtensions.includes(fileExt)){
              if(fileSize/1024 > 5120){
                $("#idErrors").html('').html('<p>ID document max size: 5MB</p>');
                $("#idErrors").show();
                $('#createNewEntry').prop('disabled', true);
              }else{
                $("#idErrors").html('');
                $("#idSelected").html('').html('<p>ID Selected: '+fileName+'</p>');
                $("#idSelected").show();
                $('#createNewEntry').prop('disabled', false);
              }
          }else{
           $("#idErrors").html('').html('<p>ID uploaded should be an image or pdf document</p>');
           $("#idErrors").show();
           $("#idSelected").html('');
           $('#createNewEntry').prop('disabled', true);
          }
        
     });
  }
  identificationUpload();



  function portfolioUpload() {

     $("#portfolioExt").hide();
    $("#portfolioImageSizeLimit").hide();
    var allowedImageExtensions = new Array('png', 'jpeg', 'jpg', 'gif', 'pdf');
  $("#portfolio").change(function(){
    var totalSize=0;
    if(this.files.length>5){

      $("#portfolioImageSizeLimit").html('<p>Upload 5 or less portfolio images</p>');
      $("#portfolioImageSizeLimit").show();
      $("#portfolioExt").hide();
      $("#portfolioSelected").html('');
      $('#createNewEntry').prop('disabled', true);

    }else{
      for(var i = 0; i<this.files.length; i++){
       var fileName  = this.files[i].name,
            fileExt = fileName.substr(fileName.lastIndexOf('.')+1),
            fileSize = this.files[i].size;
            totalSize+=fileSize;
       if(allowedImageExtensions.includes(fileExt)==false){
              $("#portfolioExt").append().append('<p>'+fileName+' is not an image or pdf file');
              $("#portfolioExt").show();
              $("#portfolioImageSizeLimit").html('').hide();
              $("#portfolioSelected").html('');
                $('#createNewEntry').prop('disabled', true);
            }else if(totalSize/1024 > 30720){

              $("#portfolioImageSizeLimit").html('<p>Total Size exceeds 30 MB</p>');
              $("#portfolioImageSizeLimit").show();
              $("#portfolioExt").html('').hide();
              $("#portfolioSelected").html('');
              $('#createNewEntry').prop('disabled', true);

            }else if(allowedImageExtensions.includes(fileExt)==true && totalSize/1024 < 30720){
              $("#portfolioImageSizeLimit").html('').hide();
              $("#portfolioExt").html('').hide();
              $("#portfolioSelected").html('<p>Portfolio Images selected successfully</p>')
               $('#createNewEntry').prop('disabled', false);
              }

      }
    }

     });
  }
  portfolioUpload();


  function addTeamMember(){
    

    $("#addNewMember").click(function(){
      var dynamic_fields = dynamicFields (member_count);
      if(member_count<4){
        $("#team-entry").append(dynamic_fields);
      }
      
      member_count++;
    })
  }

  //validate birthdate and ID doc fields after dynamic loading
  $(document).on('focus', '.dynamic-birthdate', function(){
    $(this).datepicker({
      dateFormat: 'yy-mm-dd',
      yearRange: '-25:-21',
      changeMonth: true,
      changeYear: true,
      defaultDate: "-25Y",
    });
  });

  $(document).on('change', '.dynamic-id-upload', function(){
   var errorSpan = $(this).parent().parent().find('span.error'),
      successSpan = $(this).parent().parent().find('span.success'),
      fileName  = this.files[0].name,
      fileExt = fileName.substr(fileName.lastIndexOf('.')+1),
      fileSize = this.files[0].size,
      submitTeamEntry = $("#submitTeamEntry");

         if(allowedImageExtensions.includes(fileExt)){
              if(fileSize/1024 > 5120){
                errorSpan.html('').html('<p>ID document max size: 5MB</p>');
                $("#idErrors").show();
                submitTeamEntry.prop('disabled', true);
              }else{
                errorSpan.html('');
                successSpan.html('').html('<p>ID Selected: '+fileName+'</p>');
                successSpan.show();
               submitTeamEntry.prop('disabled', false);
              }
          }else{
           errorSpan.html('').html('<p>ID uploaded should be an image or pdf document</p>');
           errorSpan.show();
           successSpan.html('');
           submitTeamEntry.prop('disabled', true);
          }
  });

  function dynamicFields(count){
    var html = '';
        html+= '<div class="col-md-6" data-count='+count+'>'
        html+= ' <div class="form-group"><span class="remove-member"><a data-member='+count+' href="#">Remove Member</a></span></div>';
        html+= '  <div class="form-group"><input type="text" required="required" class="form-control" placeholder="Full Name (required)" name="full_name[]" value=""/></div>';
        html+= '  <div class="form-group"><input readonly="readonly" required="required" type="text"  class="form-control dynamic-birthdate" placeholder="Birthday (required)" name="birthday[]" value=""/></div>';
        html+= '  <div class="form-group"><input type="email" required="required"  class="form-control" placeholder="Email Address (required)" name="email[]" value=""/></div>';
        html+= '  <div class="form-group"><input type="text" class="form-control" placeholder="Phone" name="phone[]" value=""/></div>';
        html+= '  <div class="form-group"><input type="text"  class="form-control" placeholder="City" name="city[]" value=""/></div>';
        html+= '  <div class="form-group">'; //start country select field
        html+= '     <select id="" name="country[]" class="form-control" required>';
        html+= '         <option selected value="">Choose a country (required)</option>'
        html+= '         <option value="Kenya">Kenya</option>'
        html+= '         <option value="Tanzania">Tanzania</option>'
        html+= '         <option value="Uganda">Uganda</option>'
        html+= '        </select>'
        html+= '  </div>'; //end country select field
        html+= '  <div class="form-group">';
        html+= '      <div class="upload-content">';
        html+= '            <label class="custom-file-upload">Upload ID Document';
        html+= '                <input id="" type="file" name="iddoc[]" class="form-control-file dynamic-id-upload" required />';
        html+= '            </label>';
        html+= '            <p>(Upload Copy of ID/Passport (required)</p>';
        html+= '              <span id="" class="error"></span>';
        html+= '            <span id="" class="success"></span>';
        html+= '       </div>'
        html+= '</div>';
        html+= '</div>'
        return html;
  }
  addTeamMember();

  function submitTeamEntry(){
    $("#submitTeamEntry").on('click', function(){
      $("#saveTeamEntry").trigger('click');
    })
  }
  submitTeamEntry();

 $(document).on('click', '.remove-member a', function(event){
  event.preventDefault();
  var parent = $(this).data('member');
   $(document).find('div [data-count="'+parent+'"]').remove();
   if(member_count>=1){
    member_count--;
   }
   
 })

  
 });
