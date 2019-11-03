$(document).ready(function() {
    const body = $("body");

    body.removeClass("navigating");

    body.on("click", "a", function (e) {
        e.preventDefault();
        if ($(this).attr("href") !== "#" && $(this).attr("target") !== "_blank") {
            switch ($(this).attr("role")) {
                // initiate tabs
                case "tab":
                    $(this).tab('show');
                    break;
                // all other links
                default:
                    let redirect = $(this).attr("href");
                    $("body").addClass("navigating");

                    setTimeout(function () {
                        location.href = redirect;
                    }, 110);
                    break;
            }
        } else if($(this).attr("target") === "_blank") {
            window.open($(this).attr("href"), '_blank');
        }
    });





    function convertTemplates(template, type) {
        for (let i = 0; i < template.length; i++) {
            if(type === "encode") {
                template += String.fromCharCode(template[i].charCodeAt() + 1);
            } else {
                template += String.fromCharCode(template[i].charCodeAt() - 1);
            }
        }
    }


    var template_join2 = "";
    var template_join =
        `
        <form action="/account/join.html" method="post" id="mybeautyfill-form-join">
  <div class="form-group">
    <label for="join-field-email">Email address</label>
    <input type="email" class="form-control" id="join-field-email" name="join-field-email" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="join-field-password">Password</label>
    <input type="password" class="form-control" id="join-field-password" name="join-field-password" placeholder="" required>
  </div>
  <div class="d-none">
    <label for="join-field-password">Name</label>
    <input type="text" class="form-control" id="join-field-name" name="join-field-name" placeholder="">
  </div>
  <div class="d-none"><input type="hidden" name="g-recaptcha-response" value=""></div>

  <div class="form-group custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="join-field-remember" name="join-field-remember">
    <label class="custom-control-label" for="join-field-remember">Remember me</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        `;






    var template_beautify2 = "";
    var template_beautify =
        `
        <form action="/account/beautify.html" method="post" id="mybeautyfill-form-login">
  <div class="form-group">
    <label for="join-field-email">Email address</label>
    <input type="email" class="form-control" id="join-field-email" name="join-field-email" placeholder="" required>
  </div>
  <div class="form-group">
    <label for="join-field-password">Password</label>
    <input type="password" class="form-control" id="join-field-password" name="join-field-password" placeholder="" required>
  </div>
  <div class="d-none">
    <label for="join-field-password">Name</label>
    <input type="text" class="form-control" id="join-field-name" name="join-field-name" placeholder="">
  </div>
  <div class="d-none"><input type="hidden" name="g-recaptcha-response" value=""></div>

  <div class="form-group custom-control custom-checkbox">
    <input type="checkbox" class="custom-control-input" id="join-field-remember" name="join-field-remember">
    <label class="custom-control-label" for="join-field-remember">Remember me</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        `;








    setTimeout(function() {
        $(".join-loader").slideUp(200);
        var loadType = $(".join-loader").attr("data-load");

        setTimeout(function() {
            switch (loadType) {
                case "join":
                    $(".join-loader").delay(200).html(template_join);
                    break;
                case "beautify":
                    $(".join-loader").delay(200).html(template_beautify);
                    break;
            }
        },200);

        $(".join-loader").delay(200).slideDown();
    }, 2000);











    // when form is submit
    body.on("submit", "#mybeautyfill-form-join", function(e) {
        e.preventDefault();
        let form = document.getElementById("mybeautyfill-form-join");

        // needs for recaptacha ready
        grecaptcha.ready(function() {
            // response is promise with passed token
            grecaptcha.execute('6LezDpgUAAAAAFHyjGS9Y5YnMw8LNG05x618108V', {action: 'create_account'}).then(function(token) {
                // add token to form
                form.querySelector("input[name='g-recaptcha-response']").setAttribute("value", token);
                form.submit();

                $(".join-loader").slideUp(200);
                $(".join-loader").delay(210).html("<img src='https://res.cloudinary.com/dgbhin72l/image/upload/v1552615608/my-beauty-fill/placeholders/loading-gif.gif' alt='' class='img-fluid'>");
                $(".join-loader").delay(220).slideDown();
            });
        });
    });

    // when form is submit
    body.on("submit", "#mybeautyfill-form-login", function(e) {
        e.preventDefault();
        let form = document.getElementById("mybeautyfill-form-login");

        // needs for recaptacha ready
        grecaptcha.ready(function() {
            // response is promise with passed token
            grecaptcha.execute('6LezDpgUAAAAAFHyjGS9Y5YnMw8LNG05x618108V', {action: 'log_in'}).then(function(token) {
                // add token to form
                form.querySelector("input[name='g-recaptcha-response']").setAttribute("value", token);
                form.submit();
            });
        });
    });







    // Account tab tracking
    function accountTabSwitch(tab) {
        let selectedTab = $("a.nav-link[href='" + tab + "']");
        selectedTab.attr("aria-selected", "true");
        selectedTab.addClass("active");
        $(tab).addClass("show active");
    }

    $(".account-sticky-pills-nav a").click(function() {
        let accountTab = $(this).attr("href");
        localStorage.setItem("account-tab", accountTab);
    });

    if(localStorage.getItem("account-tab") !== null) {
        let accountTab = localStorage.getItem("account-tab");
        accountTabSwitch(accountTab);
    } else {
        localStorage.setItem("account-tab", "#v-pills-edit-profile");
        accountTabSwitch("#v-pills-edit-profile");
    }

    $(".nav-account-link").click(function() {
        if($(this).hasClass("nav-account-link-appt")) {
            localStorage.setItem("account-tab", "#v-pills-appointments");
        } else if($(this).hasClass("nav-account-link-edit")) {
            localStorage.setItem("account-tab", "#v-pills-edit-profile");
        }

        location.href = "/account.html";
    });









    if(location.pathname === "/business/view.html") {
        let weatherAPI = "https://api.openweathermap.org/data/2.5/forecast?zip=" + weatherZIP + ",us&APPID=9ad35921d0b6e93612c32b4732f38c07";

        // this is working but not sure how to read API yet. Uncomment to get started
        /*$.get(weatherAPI, function(data, status) {
            console.log(data);
            console.log(status);
        });*/
    }






    // Initialize all tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });


    $(".business-employees-action-edit-schedule").click(function () {
        let businessEmployeeSchedule = $('#business-edit-employee-schedule');
        $(this).tooltip('hide');
        let dataID = $(this).attr("data-id");
        let dataUID = $(this).attr("data-uid");
        let name = "";

        if ($(this).attr("data-name").length > 0) {
            name = $(this).attr("data-name");
        } else {
            name = "Missing name";
        }

        businessEmployeeSchedule.find(".modal-title span").text(name);

        $.ajax({
            //beforeSend: spinningIcon(thisBtn),
            url: "/business/employees.html",
            data: {
                generateEmployeeSchedule: "generateEmployeeSchedule",
                dataID: dataID,
                dataUID: dataUID
            },
            type: "POST",
            dataType: "html",
        }).done(function () {
            console.log("AJAX success!");
        }).fail(function (xhr, status, errorThrown) {
            console.log(errorThrown);
            console.log(status);
            console.log(xhr);
        }).always(function (xhr, status) {
            businessEmployeeSchedule.find("input[name='business-edit-employee-schedule-id']").val(dataID);
            businessEmployeeSchedule.find("input[name='business-edit-employee-schedule-uid']").val(dataUID);
            businessEmployeeSchedule.find(".modal-body").html(xhr);
            businessEmployeeSchedule.modal('show');
        });
    });






    $(".business-employees-action-edit-breaks").click(function () {
        let businessEmployeeSchedule = $('#business-edit-employee-breaks');
        $(this).tooltip('hide');
        let dataID = $(this).attr("data-id");
        let dataUID = $(this).attr("data-uid");
        let name = "";

        if ($(this).attr("data-name").length > 0) {
            name = $(this).attr("data-name");
        } else {
            name = "Missing name";
        }

        businessEmployeeSchedule.find(".modal-title span").text(name);

        $.ajax({
            //beforeSend: spinningIcon(thisBtn),
            url: "/business/employees.html",
            data: {
                generateEmployeeBreaks: "generateEmployeeBreaks",
                dataID: dataID,
                dataUID: dataUID
            },
            type: "POST",
            dataType: "html",
        }).done(function () {
            console.log("AJAX success!");
        }).fail(function (xhr, status, errorThrown) {
            console.log(errorThrown);
            console.log(status);
            console.log(xhr);
        }).always(function (xhr, status) {
            businessEmployeeSchedule.find("input[name='business-edit-employee-breaks-id']").val(dataID);
            businessEmployeeSchedule.find("input[name='business-edit-employee-breaks-uid']").val(dataUID);
            businessEmployeeSchedule.find(".modal-body").html(xhr);
            businessEmployeeSchedule.modal('show');
        });
    });










    $(".business-employees-action-edit-daysoff").click(function () {
        let businessEmployeeSchedule = $('#business-edit-employee-daysoff');
        $(this).tooltip('hide');
        let dataID = $(this).attr("data-id");
        let dataUID = $(this).attr("data-uid");
        let name = "";

        if ($(this).attr("data-name").length > 0) {
            name = $(this).attr("data-name");
        } else {
            name = "Missing name";
        }

        businessEmployeeSchedule.find(".modal-title span").text(name);

        $.ajax({
            //beforeSend: spinningIcon(thisBtn),
            url: "/business/employees.html",
            data: {
                generateEmployeeDaysOff: "generateEmployeeDaysOff",
                dataID: dataID,
                dataUID: dataUID
            },
            type: "POST",
            dataType: "html",
        }).done(function () {
            console.log("AJAX success!");
        }).fail(function (xhr, status, errorThrown) {
            console.log(errorThrown);
            console.log(status);
            console.log(xhr);
        }).always(function (xhr, status) {
            businessEmployeeSchedule.find("input[name='business-edit-employee-daysoff-id']").val(dataID);
            businessEmployeeSchedule.find("input[name='business-edit-employee-daysoff-uid']").val(dataUID);
            businessEmployeeSchedule.find(".modal-body").html(xhr);
            businessEmployeeSchedule.modal('show');
            $('#business-edit-employee-daysoff [data-toggle="tooltip"]').tooltip();
        });
    });


    body.on("click", ".business-employee-remove-vacation-time", function() {
        let dataID = $(this).attr("data-time");
        let confirmDelete2 = confirm("Are you sure you want to cancel this day off?");

        if(confirmDelete2) {
            $(this).parent().slideUp();
            $.ajax({
                url: "/business/employees.html",
                data: {
                    deleteDayoff: "deleteDayoff",
                    dataID: dataID
                },
                type: "POST",
                dataType : "html",
            }).done(function() {
                console.log("AJAX success!");
            }).fail(function( xhr, status, errorThrown ) {
                console.log(errorThrown);
                console.log(status);
                console.log(xhr);
            });
        }
    });




    function spinningIcon(el) {
        el.html("<i class='fas fa-spinner fa-spin'></i>")
    }

    $(".resend-confirm-email").click(function() {
        let thisBtn = $(this);
        $.ajax({
            beforeSend: spinningIcon(thisBtn),
            url: "/account.html",
            data: {
                resendConfirmEmail: "resendConfirmEmail",
            },
            type: "POST",
            dataType : "html",
        }).done(function() {
            console.log("AJAX success!");
        }).fail(function( xhr, status, errorThrown ) {
            console.log(errorThrown);
            console.log(status);
            console.log(xhr);
        }).always(function( xhr, status ) {
            $(thisBtn).html("<i class='fas fa-check'></i>");
            setTimeout(function() {
                $(thisBtn).html("Resend Confirmation Email");
            }, 10000)
        });
    });




    $(".business-employees-action-del-user").click(function() {
        let row = $(this).parent().parent();
        let thisBtn = $(this);
        let dataID = $(this).attr("data-id");
        let dataUID = $(this).attr("data-uid");

        let name = "";

        if ($(this).attr("data-name").length > 0) {
            name = $(this).attr("data-name");
        } else {
            name = "Missing name";
        }

        let confirmDelete = confirm("Are you sure you want to delete " + name + "?");
        if(confirmDelete) {
        $.ajax({
            beforeSend: spinningIcon(thisBtn),
            url: "/business/employees.html",
            data: {
                dataDeleteAction: "dataDeleteAction",
                dataID: dataID,
                dataUID: dataUID
            },
            type: "POST",
            dataType : "html",
        }).done(function() {
            console.log("AJAX success!");
        }).fail(function( xhr, status, errorThrown ) {
            console.log(errorThrown);
            console.log(status);
            console.log(xhr);
        }).always(function( xhr, status ) {
            //console.log(xhr);
            row.css("opacity", "0");

            setTimeout(function() {
                row.css("display", "block").css("width", "100%");
            }, 305);

            setTimeout(function() {
                row.slideUp();
            }, 610);
        });
        }
    });

    const homepageServiceSearch = $("#homepage-intro-user-discover");
    $(".homepage-autocomplete-box").css("width", homepageServiceSearch.outerWidth());

    homepageServiceSearch.on("keyup", function() {
        $(".homepage-autocomplete-box > div").html("");
        let searchText = $(this).val().toLowerCase();
        let searchResults = "";
        let searchCounter = 0;

        for (let i = 0; i < servicesList.length; i++) {
            let servicesListItem = servicesList[i][1].toLowerCase();
            if(servicesListItem.includes(searchText)) {
                if(searchCounter < 120) {
                    searchResults += "<button type='button' class='list-group-item list-group-item-action' data-id='" + servicesList[i][0] + "'>" + servicesList[i][1] + "</button>\n";
                    searchCounter++;
                    
                }
            }
        }
        $(".homepage-autocomplete-box > div").append(searchResults);
    });

    body.on("click", ".homepage-autocomplete-box > div > button", function() {
        let thisSearchResult = $(this).text();
        let thisSearchResultID = $(this).attr("data-id");
        $("#homepage-book input[name='serviceID']").val(thisSearchResultID);
        homepageServiceSearch.val(thisSearchResult);
        $(".homepage-autocomplete-box > div").html("");
    });

    $("#homepage-book").on("submit", function(e) {
        e.preventDefault();
        let thisForm = $(this);

        if($("#homepage-book input[name='serviceID']").val().length > 0) {
            thisForm[0].submit();
        } else {
            $(".homepage-booking-selection").slideDown();
            setTimeout(function() {
                $(".homepage-booking-selection").slideUp();
            }, 10000);
        }
    });






    $(".change-booking-date").on("change", function() {
        let dateChange = $(this).val();
        let url = $(this).attr("data-action");

        dateChange = dateChange.replace("-", "").replace("-", "");
        url = url + "&date=" + dateChange;

        window.location = url;
    });

    $(".schedules-container-block-row button").click(function() {
        let bookTime = $(this).attr("data-time");
        let bookDate = $(this).attr("data-date");
        let bookEmpl = $(this).attr("data-empl");
        let bookService = $(this).attr("data-service");
        let bookID = $(this).attr("data-id");

        let url = "/business/complete-booking.html?id=" + bookID + "&book=" + bookService + "&empl=" + bookEmpl + "&date=" + bookDate + "&time=" + bookTime;
        window.location = url;
    });






    function initAutocomplete(autocompleteField) {
        let inputField = document.getElementById(autocompleteField);
        new google.maps.places.Autocomplete(inputField);
    }

    //google.maps.event.addDomListener(window, 'load', initAutocomplete("brand-search-box-input"));

    if($("#homepage-intro-user-where").length > 0) {
        google.maps.event.addDomListener(window, 'load', initAutocomplete("homepage-intro-user-where"));
    }


    $(".edit-your-services-item .custom-control-input").each(function() {
        let thisActive = $(this).is(':checked');
        let priceBox = $(this).parent().parent().find("input[type='number']");
        if(thisActive) {
            priceBox.show();
        }
    });

    $(".edit-your-services-item .custom-control-input").click(function() {
        if($(this).is(':checked')) {
            $(this).parent().parent().find("input[type='number']").show();
        } else {
            $(this).parent().parent().find("input[type='number']").hide();
        }
    });









    $("[data-target='#subscriptionModal']").click(function() {
        let modalTitle = $(this).attr("data-title");
        let modalPrice = $(this).attr("data-price");
        $("#subscriptionModalTitle span").text(modalTitle);
        $("#subscriptionModal .numbered-card-price").text(modalPrice);
        $("#subscriptionModal input[name='type']").val(modalTitle);
    });

    $("#subscriptionModal [type='submit']").on("click", function() {
        var btnWidth = $(this).width();
        $(this).css("width", btnWidth);
        $(this).html("<i class='fal fa-spinner fa-spin'></i>")
    });

    //  end doc ready
});