function _(element) {

    return document.getElementById(element);
}

function get_data(find, type) {

    var xml = new XMLHttpRequest();

    //var loader_holder = _("loader_holder");
    // loader_holder.className = "loader_on";

    xml.onload = function() {

        if (xml.readyState == 4 || xml.status == 200) {

            //loader_holder.className = "loader_off";
            handle_result(xml.responseText, type);
        }

    }

    var data = {};
    data.find = find;
    data.data_type = type;
    data = JSON.stringify(data);

    xml.open("POST", "api.php", true);
    xml.send(data);
}

function handle_result(result, type) {

    if (result.trim() != "") {

        var obj = JSON.parse(result);
        if (typeof(obj.logged_in) != "undefined" && !obj.logged_in) {

            window.location = "index_patient.html";
        } else {
            switch (obj.data_type) {

                case "user_info":
                    var username = _("username");
                    var email = _("email");

                    username.innerHTML = obj.username;
                    email.innerHTML = obj.email;
                    break;
            }

        }
    }
}

get_data({}, "user_info");