const date = new Date()
const copyright = document.getElementById('copyright')

function displayCopyright() {

    copyright.innerHTML = "&copy; " + date.getFullYear() + " Careful Accounting, LLC, LLC - All Rights Reserved"
}

displayCopyright()