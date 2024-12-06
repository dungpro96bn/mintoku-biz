jQuery(function ($) {
  $("#radio-box .mwform-radio-field:nth-child(2)").click(function () {
    window.location.href = "/service/cloud/camcat/apply/";
  });

  //   $('.application-zip-button1').click(function(){
  //     AjaxZip3.zip2addr('application-postal-code1', '', 'application-pref1', 'application-municipality1');
  //   });

  //disabled link
  $(".disabled-link").on("click", function () {
    return false;
  });

  $(".single-download .mw_wp_form_confirm button").click(function () {
    var status = $(".single-download .status").html();
    var h1 = $(".single-download .heading-detail").html();
    var download_box = $(".single-download .download_box").html();
    sessionStorage.setItem("sendmail", "success");
    sessionStorage.setItem("h1", h1);
    sessionStorage.setItem("download_box", download_box);
    sessionStorage.setItem("status", status);
  });

  $("#price-plan-item .mwform-radio-field input.radio").change(function () {
    var inputChecked = $(this).val();
    if (inputChecked == "派遣先・派遣元　双方支払い") {
      $(this).parents("#price-plan-item").addClass("is-active");
    } else {
      $("#price-plan-item").removeClass("is-active");
    }
  });

  var inputPrice = $("#price-plan-item input:nth-child(1)").val();
  if (inputPrice == "派遣先・派遣元　双方支払い") {
    $("#price-plan-item").addClass("is-active");
  } else {
    $("#price-plan-item").removeClass("is-active");
  }

  var boxInputs = $(".application-form-box");
  if (boxInputs.length > 0) {
    var addToVal, addToCnt;
    $("#ip-address .add-to-btn").click(function () {
      var currentInput = boxInputs.find(".add-to-form.open").last();
      var nextInput = currentInput.next();
      nextInput.addClass("open");
      nextInput.removeClass("close");
	 var nunmber = $("#ip-address .form-input-5");
		if ( nunmber.hasClass("open")) {
			$(this).addClass("close-b");
		}


    });
    $("#ip-address .form-delete-box").click(function () {
      var currentInput = $(this).parent().parent().parent();
      currentInput.removeClass("open");
      currentInput.addClass("close");
      currentInput.find("input").first().val("");
	  $("#ip-address .add-to-btn").removeClass("close-b");
	
    });
  }
	

	
  var blockInputs = $(".application-form-box-list");
  if ($(".application-form-box-list").length > 0) {
    $(".application-form-box-list .confirm-hide").click(function () {
		 $(".add-to-btn-box-block-inputs").removeClass("close-b");
      var currentInput = $(this).parent().parent();
      currentInput.removeClass("open");
      currentInput.addClass("close");
      currentInput.find("input").each(function () {
        $(this).val("");
      });
    });
    $(".add-to-btn-box-block-inputs").click(
      function () {
        var currentInput = blockInputs.find(".application-form-box.open").last();
        var nextInput = currentInput.next();
        nextInput.addClass("open");
        nextInput.removeClass("close");
		  	 var nunmber = $(".application-form-box-5");
		if ( nunmber.hasClass("open")) {
			$(this).addClass("close-b");
		}
      }
    );
  }

  
});
