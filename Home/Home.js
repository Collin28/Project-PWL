function updateDateTime() {
    const now = new Date();
    const options = { weekday:'long', year:'numeric', month:'long', day:'numeric' };
    const date = now.toLocaleDateString('id-ID', options);
    const time = now.toLocaleTimeString('id-ID');

    document.getElementById('date').innerText = date;
    document.getElementById('time').innerText = time;
  }
  setInterval(updateDateTime, 1000);
  updateDateTime();



function loadAttendanceData() {
  const statusHariIni = localStorage.getItem("statusHariIni") || "-";
  const jamMasuk = localStorage.getItem("jamMasuk") || "-";

  const jamPulang = "14:35";  

  const hadir = localStorage.getItem("hadir") || "0";
  const izin = localStorage.getItem("izin") || "0";
  const terlambat = localStorage.getItem("terlambat") || "0";

  document.getElementById("statusHariIni").innerText = statusHariIni;
  document.getElementById("jamMasuk").innerText = jamMasuk;
  document.getElementById("jamPulang").innerText = jamPulang;

  document.getElementById("hadir").innerText = hadir + " Hari";
  document.getElementById("izin").innerText = izin + " Hari";
  document.getElementById("terlambat").innerText = terlambat + " Hari";
}

loadAttendanceData();

