/*ORIGINAL CREATOR: Gagan (KIA)
AUTHOR: Gagan (KIA)
Copyright (C) 2023 KIA <rtg.gagan@gmail.com>
*/


function download(){
    var text = document.getElementById("Download");
    text.innerHTML="DOWNLOAD WILL START IN 0 SECONDS";
    var clickerLink = document.getElementById("clicker");
    clickerLink.click();
}
function Count(){
    var text = document.getElementById("Download");
    text.innerHTML="DOWNLOAD WILL START IN 5 SECONDS";
    const myTimeout = setTimeout(download, 5000);
}