function searchbtn() {
  const search_result = document.getElementById("noteSearch");
  var form = new FormData();
  form.append("rs", search_result.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if ((request.status == 200) & (request.readyState == 4)) {
      var response = request.responseText;
      document.getElementById("basicSearchResult").innerHTML = response;
    }
  };
  request.open("POST", "basicSearchProcess.php", true);
  request.send(form);
}
function adminSignUp() {
  const admin_id = document.getElementById("admin-id");
  const password = document.getElementById("admin-pw");

  var f = new FormData();
  f.append("e", admin_id.value);
  f.append("p", password.value);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "Login Success") {
        window.location = "adminOverview.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", " signupprocess.php", true);
  r.send(f);
}


function uploadpractical(){
    
    var title = document.getElementById("enterpracticaltitle");
    var link = document.getElementById("enterlink");

    var f = new FormData();
    f.append("ti", title.value);
    f.append("l", link.value);
    // alert(title);

    var r = new XMLHttpRequest();
  
    r.onreadystatechange = function () {
      if (r.readyState == 4) {
        var t = r.responseText;
        if (t == "success") {
            alert("Practicle Upload Successfully");
          window.location = "uploadpracticals.php";
        } else {
          alert(t);
        }
      }
    };
  
    r.open("POST","uploadpracticalsprocess.php", true);
    r.send(f);
}

function changeProductImage() {
    var image = document.getElementById("imageuploader");

    image.onchange = function() {

        var file_count = image.files.length;

        if (file_count <= 6) {

            for (var x = 0; x < file_count; x++) {
                var file = this.files[x];
                var url = window.URL.createObjectURL(file);

                document.getElementById("i" + x).src = url;
            }

        } else {
            alert("Please select 6 or less than 6 images.");
        }

    }
}

function noteupload(){
    var notetitle = document.getElementById("noteTitle");
    var Description = document.getElementById("noteDescription");
    var image = document.getElementById("imageuploader");

    
    // alert(Description);
    var f = new FormData();

    f.append("nt", notetitle.value);
    f.append("nd", Description.value);
    
    var file_count = image.files.length;
  
    for (var x = 0; x < file_count; x++) {

        f.append("image" + x, image.files[x]);

    }
   
    var r = new XMLHttpRequest();
   
    r.onreadystatechange = function() {
        if (r.readyState == 4) {
            var t = r.responseText;
            if (t == "prouduct save successfull") {
                Window.location = "uploadnotes.php";
            } else {
                alert(t);
            }
        }
    };

    r.open("POST", "uploadnoteProcess.php", true);
    r.send(f);
}

function uploadeditnote(){

  var notetitle = document.getElementById("noteTitle");
  var Description = document.getElementById("noteDescription");
  

  
  // alert(Description);
  var f = new FormData();

  f.append("nt", notetitle.value);
  f.append("nd", Description.value);
  
  
 
  var r = new XMLHttpRequest();
 
  r.onreadystatechange = function() {
      if (r.readyState == 4) {
          var t = r.responseText;
          if (t == "update Success") {
            alert(t);
              Window.location = "adminuploadednotes.php";
          } else {
              alert(t);
           }
      }
  };

  r.open("POST", "uploadeditnotesprocess.php", true);
  r.send(f);
}


function uploadeditnote(){

  var notetitle = document.getElementById("noteTitle");
  var Description = document.getElementById("noteDescription");
  

  
  // alert(Description);
  var f = new FormData();

  f.append("nt", notetitle.value);
  f.append("nd", Description.value);
  
  
 
  var r = new XMLHttpRequest();
 
  r.onreadystatechange = function() {
      if (r.readyState == 4) {
          var t = r.responseText;
          if (t == "update Success") {
            alert(t);
              Window.location = "adminuploadednotes.php";
          } else {
              alert(t);
           }
      }
  };

  r.open("POST", "uploadeditnotesprocess.php", true);
  r.send(f);

}
function uploadeditpractical(){
alert("dkkk");
  var title = document.getElementById("enterpracticaltitle");
  var link = document.getElementById("enterlink");

  var f = new FormData();
  f.append("ti", title.value);
  f.append("l", link.value);
  // alert(title);

  var r = new XMLHttpRequest();

  r.onreadystatechange = function () {
    if (r.readyState == 4) {
      var t = r.responseText;
      if (t == "success") {
          alert("Practicle Upload Successfully");
        window.location = "adminOverview.php";
      } else {
        alert(t);
      }
    }
  };

  r.open("POST","uploadeditprcticalprocess.php", true);
  r.send(f);
}