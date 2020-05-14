$().ready(function(){
    
    $("form[name='register']").validate({
      
      rules: {
  
        casename: "required",
        casetype: "required",
        casedetails: "required",
        advocate: "required", 
      },
    
      messages: {
        casename: "Please enter your casename",
        casetype: "Please enter your casetype",
        casedetails: "Please enter case details",
        advocate: "Please enter the name of the advocate you wish to hire",
      },
     
      submitHandler: function(form) {
      form.submit();
      alert("Case registered successfully");
      }
    });
  });