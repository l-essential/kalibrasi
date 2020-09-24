   function LiveDate() {
     var D = new Date();
     var day = D.getDay();
     var tgl = D.getDate();
     var bln = D.getMonth();
     var thn = D.getFullYear();
     var jam = D.getHours();
     var mnt = D.getMinutes();
     var dtk = D.getSeconds();
     var suf;
     if (jam < 10) {
         jam = "0" + jam;
     }
     if (mnt < 10) {
         mnt = "0" + mnt;
     }
     if (dtk < 10) {
         dtk = "0" + dtk;
     }
     if (tgl == "1" || tgl == "21" || tgl == "31") {
         suf = "st";
     } else if (tgl == "2" || tgl == "22") {
         suf = "nd";
     } else if (tgl == "3" || tgl == "23") {
         suf = "rd";
     } else {
         suf = "th";
     }

     var dayarray = new Array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
     var montharray = new Array("01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12");

     var livedate = "&nbsp;" + dayarray[day] + ", " +tgl + "-" +  montharray[bln] + "-" + thn + "&nbsp;";
     var livetime = "&nbsp;" + jam + ":" + mnt + ":" + dtk + "&nbsp;";
     $("#LiveDate").html(livedate);
     $("#LiveTime").html(livetime);
     setTimeout("LiveDate()", 1000);
 }

 LiveDate();