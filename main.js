function feedbackpro() {
  var name = document.getElementById("Name");
  var date = document.getElementById("date");
  var feed = document.getElementById("feedback");

  var form = new FormData();

  form.append("Name", name.value);
  form.append("date", date.value);
  form.append("feedback", feed.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4 && request.status == 200) {
      var text9 = request.responseText;

      if (text9 == "Submitted Successfully") {
        window.location.reload();
        document.getElementById("addmsg").innerHTML = text9;
        document.getElementById("addmsg").className =
          "bi bi-check2-circle fs-5";
        document.getElementById("addalertdiv").className =
          "alert alert-success";
        document.getElementById("addmsgdiv").className = "d-block";
      } else {
        document.getElementById("addmsg").innerHTML = text9;
        document.getElementById("addmsg").className =
          "bi bi-x-octagon-fill fs-5";
        document.getElementById("addalertdiv").className = "alert alert-danger";
        document.getElementById("addmsgdiv").className = "d-block";
      }
    } else {
    }
  };

  request.open("POST", "feedbackProcess.php", true);
  request.send(form);
}


function adminsignin() {
  var email = document.getElementById("email2");
  var password = document.getElementById("password2");

  var form = new FormData();
  form.append("email2", email.value);
  form.append("pass2", password.value);

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text2 = request.responseText;
      if (text2 == "success") {
        window.location = "adminPanel.php";
      } else {
        alert(text2);
      }
    }
  };

  request.open("POST", "AdsignInProcess.php", true);
  request.send(form);
}

function verify() {
  var VeriFication = document.getElementById("vCode");

  var req = new XMLHttpRequest();

  req.onreadystatechange = function () {
    if (req.readyState == 4) {
      var t = req.responseText;
      if (t == "success") {
        av.hide();
        window.location = "adminPanel.php";
      } else {
        alert("Something Went Wrong");
      }
    }
  };
  req.open("GET", "veriFicationProcess.php?v=" + VeriFication.value, true);
  req.send();
}


function ADsignout() {
  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text5 = request.responseText;
      if (text5 == "success") {
        window.location = "adminSignin.php";

      } else {
        alert(text5);
      }
    }
  };

  request.open("GET", "ADSignoutProcess.php", true);
  request.send();
}


function changeProductimg() {
  var image = document.getElementById("imageuploder");

  image.onchange = function () {
    var file_count = image.files.length;

    if (file_count <= 1) {
      for (var x = 0; x < file_count; x++) {
        var file = this.files[x];
        var url = window.URL.createObjectURL(file);

        document.getElementById("i" + x).src = url;
      }
    } else {
      alert("Please Select a image ");
    }
  };
}

function addphoto() {
  var image = document.getElementById("imageuploder");
  var heading = document.getElementById("heading");
  var subheading = document.getElementById("subheading");
  var proj = document.getElementById("proj_title");

  var form = new FormData();
  form.append("heading", heading.value);
  form.append("subheading", subheading.value);
  form.append("proj_title", proj.value);

  var file_count = image.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, image.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text20 = request.responseText;

      if (text20 == "Image Saved Successfully") {
        window.location.reload();
      } else {
        alert(text20);
      }
    }
  };
  request.open("POST", "addProtfolio.php", true);
  request.send(form);
}

function addpackage() {
  var imagex = document.getElementById("imageuploder");
  var name = document.getElementById("name");
  var distance = document.getElementById("distance");
  var description = document.getElementById("description");


  var form = new FormData();
  form.append("name", name.value);
  form.append("distance", distance.value);
  form.append("description", description.value);


  var file_count = imagex.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, imagex.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text24 = request.responseText;

      if (text24 == "Image Saved Successfully") {
        window.location.reload();
      } else {
        alert(text24);
      }
    }
  };
  request.open("POST", "addTourPackageProcess.php", true);
  request.send(form);
}

function addroompackage() {
  var imagrx = document.getElementById("imageuploder");
  var name = document.getElementById("name");
  var description = document.getElementById("description");


  var form = new FormData();
  form.append("name", name.value);
  form.append("description", description.value);


  var file_count = imagrx.files.length;

  for (var x = 0; x < file_count; x++) {
    form.append("img" + x, imagrx.files[x]);
  }

  var request = new XMLHttpRequest();

  request.onreadystatechange = function () {
    if (request.readyState == 4) {
      var text24 = request.responseText;

      if (text24 == "Image Saved Successfully") {
        window.location.reload();
      } else {
        alert(text24);
      }
    }
  };
  request.open("POST", "addRoomPackageProcess.php", true);
  request.send(form);
}

