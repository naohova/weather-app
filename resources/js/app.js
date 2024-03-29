import "./bootstrap";
import "../sass/app.scss";
import ApexCharts from "apexcharts";

document.getElementById("Simple").click();
document.getElementById("Simple").click();
document.getElementById("Simple").click();

function openView(evt, vievName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(
            " drac-tab-active",
            ""
        );
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(vievName).style.display = "block";
    evt.currentTarget.className += " drac-tab-active";
}
