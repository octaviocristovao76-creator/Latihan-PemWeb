<!DOCTYPE html>
<html>
<body>
	<h2>My First Web Page</h2>
	<p>My First Paragraph.</p>
	<p id="demo"></p>
	<script>
		document.getElementById("demo").innerHTML = 5 + 6;
	</script>
	
	<script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
        function myFunction() {
            const months = ["Januari", "Februari", "Maret", "April", "Mei",
                "Juni", "Juli", "Agustus", "September", "Oktober",
                "November", "Desember"];
            const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
                "Jumat", "Sabtu"];
            let date = new Date();
            jam = date.getHours();
            tanggal = date.getDate();
            hari = days[date.getDay()];
            bulan = months[date.getMonth()];
            tahun = date.getFullYear();

            let m = date.getMinutes();
            let s = date.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById("date").innerHTML = ` 
${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
            requestAnimationFrame(myFunction);
        }
        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
        window.onload = function () {
            let nama = prompt("Masukkan Nama Anda : ", "Admin");
            let jam = new Date().getHours();
            if (nama != null) {
                if (jam >= 4 && jam <= 10) {
                    document.getElementById("text").innerHTML = `Selamat Pagi ${nama}`;
                } else if (jam >= 11 && jam <= 14) {
                    document.getElementById("text").innerHTML = `Selamat Siang ${nama}`;
                } else if (jam >= 15 && jam <= 18) {
                    document.getElementById("text").innerHTML = `Selamat Sore ${nama}`;
                } else {
                    document.getElementById("text").innerHTML = `Selamat Malam ${nama}`;
                }
            }
            myFunction();
        };
    </script>


</body>
</html>

